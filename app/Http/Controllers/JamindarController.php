<?php
namespace App\Http\Controllers;

use App\Jamindar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class JamindarController extends Controller
{
    public function getIndex()
    {
        return view('jamindar.index');
    }

    public function getList()
    {
        Session::put('jamindar_search', Input::has('ok') ? Input::get('search') : (Session::has('jamindar_search') ? Session::get('jamindar_search') : ''));
        Session::put('jamindar_field', Input::has('field') ? Input::get('field') : (Session::has('jamindar_field') ? Session::get('jamindar_field') : 'name'));
        Session::put('jamindar_sort', Input::has('sort') ? Input::get('sort') : (Session::has('jamindar_sort') ? Session::get('jamindar_sort') : 'asc'));
        $jamindars = Jamindar::where('name', 'like', '%' . Session::get('jamindar_search') . '%')
            ->orderBy(Session::get('jamindar_field'), Session::get('jamindar_sort'))->paginate(8);
        return view('jamindar.list', ['jamindars' => $jamindars]);
    }

    public function getUpdate($id)
    {
        return view('jamindar.update', ['jamindar' => Jamindar::find($id)]);
    }

    public function postUpdate($id)
    {
        $jamindar = Jamindar::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($jamindar->name != Input::get('name'))
            $rules += ['name' => 'required|unique:jamindars'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $jamindar->name = Input::get('name');
        $jamindar->JamindarCode = Input::get('JamindarCode');
        $jamindar->unitprice = Input::get('unitprice');
        $jamindar->save();
        return ['url' => 'jamindar/list'];
    }

    public function getCreate()
    {
        return view('jamindar.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:jamindars",
            "JamindarCode" => "required|unique:jamindars",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $jamindar = new Jamindar();
        $jamindar->name = Input::get('name');
        $jamindar->JamindarCode = Input::get('JamindarCode');
        $jamindar->unitprice = Input::get('unitprice');
        $jamindar->save();
        return ['url' => 'jamindar/list'];
    }

    public function getDelete($id)
    {
        Jamindar::destroy($id);
        return Redirect('jamindar/list');
    }

}