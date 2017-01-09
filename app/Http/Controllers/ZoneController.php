<?php
namespace App\Http\Controllers;

use App\Zone;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ZoneController extends Controller
{
    public function getIndex()
    {
        return view('zone.index');
    }

    public function getList()
    {
        Session::put('zone_search', Input::has('ok') ? Input::get('search') : (Session::has('zone_search') ? Session::get('zone_search') : ''));
        Session::put('zone_field', Input::has('field') ? Input::get('field') : (Session::has('zone_field') ? Session::get('zone_field') : 'name'));
        Session::put('zone_sort', Input::has('sort') ? Input::get('sort') : (Session::has('zone_sort') ? Session::get('zone_sort') : 'asc'));
        $zones = Zone::where('name', 'like', '%' . Session::get('zone_search') . '%')
            ->orderBy(Session::get('zone_field'), Session::get('zone_sort'))->paginate(8);
        return view('zone.list', ['zones' => $zones]);
    }

    public function getUpdate($id)
    {
        return view('zone.update', ['zone' => Zone::find($id)]);
    }

    public function postUpdate($id)
    {
        $zone = Zone::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($zone->name != Input::get('name'))
            $rules += ['name' => 'required|unique:zones'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $zone->name = Input::get('name');
        $zone->ZoneCode = Input::get('ZoneCode');
        $zone->testfield = Input::get('testfield');
        $zone->unitprice = Input::get('unitprice');
        $zone->save();
        return ['url' => 'zone/list'];
    }

    public function getCreate()
    {
        return view('zone.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:zones",
            "ZoneCode" => "required|unique:zones",
            "testfield" => "required|unique:zones",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $zone = new Zone();
        $zone->name = Input::get('name');
        $zone->ZoneCode = Input::get('ZoneCode');
        $zone->testfield = Input::get('testfield');
        $zone->unitprice = Input::get('unitprice');
        $zone->save();
        return ['url' => 'zone/list'];
    }

    public function getDelete($id)
    {
        Zone::destroy($id);
        return Redirect('zone/list');
    }

}