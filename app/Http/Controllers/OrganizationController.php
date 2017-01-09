<?php
namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    public function getIndex()
    {
        return view('organization.index');
    }

    public function getList()
    {
        Session::put('organization_search', Input::has('ok') ? Input::get('search') : (Session::has('organization_search') ? Session::get('organization_search') : ''));
        Session::put('organization_field', Input::has('field') ? Input::get('field') : (Session::has('organization_field') ? Session::get('organization_field') : 'name'));
        Session::put('organization_sort', Input::has('sort') ? Input::get('sort') : (Session::has('organization_sort') ? Session::get('organization_sort') : 'asc'));
        $organizations = Organization::where('name', 'like', '%' . Session::get('organization_search') . '%')
            ->orderBy(Session::get('organization_field'), Session::get('organization_sort'))->paginate(8);
        return view('organization.list', ['organizations' => $organizations]);
    }

    public function getUpdate($id)
    {
        return view('organization.update', ['organization' => Organization::find($id)]);
    }

    public function postUpdate($id)
    {
        $organization = Organization::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($organization->name != Input::get('name'))
            $rules += ['name' => 'required|unique:organizations'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $organization->name = Input::get('name');
        $organization->OrganizationCode = Input::get('OrganizationCode');
        $organization->unitprice = Input::get('unitprice');
        $organization->save();
        return ['url' => 'organization/list'];
    }

    public function getCreate()
    {
        return view('organization.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:organizations",
            "OrganizationCode" => "required|unique:organizations",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $organization = new Organization();
        $organization->name = Input::get('name');
        $organization->OrganizationCode = Input::get('OrganizationCode');
        $organization->unitprice = Input::get('unitprice');
        $organization->save();
        return ['url' => 'organization/list'];
    }

    public function getDelete($id)
    {
        Organization::destroy($id);
        return Redirect('organization/list');
    }

}