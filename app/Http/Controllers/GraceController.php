<?php
namespace App\Http\Controllers;

use App\Grace;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class GraceController extends Controller
{
    public function getIndex()
    {
        return view('grace.index');
    }

    public function getList()
    {
        Session::put('grace_search', Input::has('ok') ? Input::get('search') : (Session::has('grace_search') ? Session::get('grace_search') : ''));
        Session::put('grace_field', Input::has('field') ? Input::get('field') : (Session::has('grace_field') ? Session::get('grace_field') : 'name'));
        Session::put('grace_sort', Input::has('sort') ? Input::get('sort') : (Session::has('grace_sort') ? Session::get('grace_sort') : 'asc'));
        $graces = Grace::where('name', 'like', '%' . Session::get('grace_search') . '%')
            ->orderBy(Session::get('grace_field'), Session::get('grace_sort'))->paginate(8);
        return view('grace.list', ['graces' => $graces]);
    }

    public function getUpdate($id)
    {
        return view('grace.update', ['grace' => Grace::find($id)]);
    }

    public function postUpdate($id)
    {
        $grace = Grace::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($grace->name != Input::get('name'))
            $rules += ['name' => 'required|unique:graces'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $grace->name = Input::get('name');
        $grace->GraceCode = Input::get('GraceCode');
        $grace->unitprice = Input::get('unitprice');
        $grace->save();
        return ['url' => 'grace/list'];
    }

    public function getCreate()
    {
        return view('grace.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:graces",
            "GraceCode" => "required|unique:graces",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $grace = new Grace();
        $grace->name = Input::get('name');
        $grace->GraceCode = Input::get('GraceCode');
        $grace->unitprice = Input::get('unitprice');
        $grace->save();
        return ['url' => 'grace/list'];
    }

    public function getDelete($id)
    {
        Grace::destroy($id);
        return Redirect('grace/list');
    }

}