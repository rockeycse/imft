<?php
namespace App\Http\Controllers;

use App\Union;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UnionController extends Controller
{
    public function getIndex()
    {
        return view('union.index');
    }

    public function getList()
    {
        Session::put('union_search', Input::has('ok') ? Input::get('search') : (Session::has('union_search') ? Session::get('union_search') : ''));
        Session::put('union_field', Input::has('field') ? Input::get('field') : (Session::has('union_field') ? Session::get('union_field') : 'name'));
        Session::put('union_sort', Input::has('sort') ? Input::get('sort') : (Session::has('union_sort') ? Session::get('union_sort') : 'asc'));
        $unions = Union::where('name', 'like', '%' . Session::get('union_search') . '%')
            ->orderBy(Session::get('union_field'), Session::get('union_sort'))->paginate(8);
        return view('union.list', ['unions' => $unions]);
    }

    public function getUpdate($id)
    {
        return view('union.update', ['union' => Union::find($id)]);
    }

    public function postUpdate($id)
    {
        $union = Union::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($union->name != Input::get('name'))
            $rules += ['name' => 'required|unique:unions'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $union->name = Input::get('name');
        $union->UnionCode = Input::get('UnionCode');
        $union->testfield = Input::get('testfield');
        $union->unitprice = Input::get('unitprice');
        $union->save();
        return ['url' => 'union/list'];
    }

    public function getCreate()
    {
        return view('union.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:unions",
            "UnionCode" => "required|unique:unions",
            "testfield" => "required|unique:unions",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $union = new Union();
        $union->name = Input::get('name');
        $union->UnionCode = Input::get('UnionCode');
        $union->testfield = Input::get('testfield');
        $union->unitprice = Input::get('unitprice');
        $union->save();
        return ['url' => 'union/list'];
    }

    public function getDelete($id)
    {
        Union::destroy($id);
        return Redirect('union/list');
    }

}