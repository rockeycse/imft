<?php
namespace App\Http\Controllers;

use App\Brn;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BrnController extends Controller
{
    public function getIndex()
    {
        return view('brn.index');
    }

    public function getList()
    {
        Session::put('brn_search', Input::has('ok') ? Input::get('search') : (Session::has('brn_search') ? Session::get('brn_search') : ''));
        Session::put('brn_field', Input::has('field') ? Input::get('field') : (Session::has('brn_field') ? Session::get('brn_field') : 'name'));
        Session::put('brn_sort', Input::has('sort') ? Input::get('sort') : (Session::has('brn_sort') ? Session::get('brn_sort') : 'asc'));
        $brns = Brn::where('name', 'like', '%' . Session::get('brn_search') . '%')
            ->orderBy(Session::get('brn_field'), Session::get('brn_sort'))->paginate(8);
        return view('brn.list', ['brns' => $brns]);
    }

    public function getUpdate($id)
    {
        return view('brn.update', ['brn' => Brn::find($id)]);
    }

    public function postUpdate($id)
    {
        $brn = Brn::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($brn->name != Input::get('name'))
            $rules += ['name' => 'required|unique:brns'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $brn->name = Input::get('name');
        $brn->BrnCode = Input::get('BrnCode');
        $brn->testfield = Input::get('testfield');
        $brn->unitprice = Input::get('unitprice');
        $brn->save();
        return ['url' => 'brn/list'];
    }

    public function getCreate()
    {
        return view('brn.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:brns",
            "BrnCode" => "required|unique:brns",
            "testfield" => "required|unique:brns",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $brn = new Brn();
        $brn->name = Input::get('name');
        $brn->BrnCode = Input::get('BrnCode');
        $brn->testfield = Input::get('testfield');
        $brn->unitprice = Input::get('unitprice');
        $brn->save();
        return ['url' => 'brn/list'];
    }

    public function getDelete($id)
    {
        Brn::destroy($id);
        return Redirect('brn/list');
    }

}