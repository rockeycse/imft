<?php
namespace App\Http\Controllers;

use App\Investor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class InvestorController extends Controller
{
    public function getIndex()
    {
        return view('investor.index');
    }

    public function getList()
    {
        Session::put('investor_search', Input::has('ok') ? Input::get('search') : (Session::has('investor_search') ? Session::get('investor_search') : ''));
        Session::put('investor_field', Input::has('field') ? Input::get('field') : (Session::has('investor_field') ? Session::get('investor_field') : 'name'));
        Session::put('investor_sort', Input::has('sort') ? Input::get('sort') : (Session::has('investor_sort') ? Session::get('investor_sort') : 'asc'));
        $investors = Investor::where('name', 'like', '%' . Session::get('investor_search') . '%')
            ->orderBy(Session::get('investor_field'), Session::get('investor_sort'))->paginate(8);
        return view('investor.list', ['investors' => $investors]);
    }

    public function getUpdate($id)
    {
        return view('investor.update', ['investor' => Investor::find($id)]);
    }

    public function postUpdate($id)
    {
        $investor = Investor::find($id);
        $rules = ["unitprice" => "required|numeric"];
        if ($investor->name != Input::get('name'))
            $rules += ['name' => 'required|unique:investors'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $investor->name = Input::get('name');
        $investor->InvestorCode = Input::get('InvestorCode');
        $investor->unitprice = Input::get('unitprice');
        $investor->save();
        return ['url' => 'investor/list'];
    }

    public function getCreate()
    {
        return view('investor.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "name" => "required|unique:investors",
            "InvestorCode" => "required|unique:investors",
            "unitprice" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $investor = new Investor();
        $investor->name = Input::get('name');
        $investor->InvestorCode = Input::get('InvestorCode');
        $investor->unitprice = Input::get('unitprice');
        $investor->save();
        return ['url' => 'investor/list'];
    }

    public function getDelete($id)
    {
        Investor::destroy($id);
        return Redirect('investor/list');
    }

}