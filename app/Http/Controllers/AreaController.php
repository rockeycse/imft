<?php
namespace App\Http\Controllers;

use App\Area;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AreaController extends Controller
{
    public function getIndex()
    {
        return view('area.index');
    }

    public function getList()
    {
        Session::put('area_search', Input::has('ok') ? Input::get('search') : (Session::has('area_search') ? Session::get('area_search') : ''));
        Session::put('area_field', Input::has('field') ? Input::get('field') : (Session::has('area_field') ? Session::get('area_field') : 'name'));
        Session::put('area_sort', Input::has('sort') ? Input::get('sort') : (Session::has('area_sort') ? Session::get('area_sort') : 'asc'));
        $areas = Area::where('name', 'like', '%' . Session::get('area_search') . '%')
            ->orderBy(Session::get('area_field'), Session::get('area_sort'))->paginate(8);
        return view('area.list', ['areas' => $areas]);
    }

    public function getUpdate($id)
    {
        return view('area.update', ['area' => Area::find($id)]);
    }

    public function postUpdate($id)
    {
        $area = Area::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($area->name != Input::get('name'))
            $rules += ['name' => 'required|unique:areas'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $area->name = Input::get('name');
        $area->AreaCode = Input::get('AreaCode');
        $area->testfield = Input::get('testfield');
        $area->unitprice = Input::get('unitprice');
        $area->save();
        return ['url' => 'area/list'];
    }

    public function getCreate()
    {
        return view('area.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:areas",
            "AreaCode" => "required|unique:areas",
            "testfield" => "required|unique:areas",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $area = new Area();
        $area->name = Input::get('name');
        $area->AreaCode = Input::get('AreaCode');
        $area->testfield = Input::get('testfield');
        $area->unitprice = Input::get('unitprice');
        $area->save();
        return ['url' => 'area/list'];
    }

    public function getDelete($id)
    {
        Area::destroy($id);
        return Redirect('area/list');
    }

}