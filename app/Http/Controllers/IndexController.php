<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\leade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    function header()
    {
        return view('user/header');
    }
    function footer()
    {
        return view('user/footer');
    }
    function home()
    {
        return view('user/home');
    }
    function marketlead()
    {
        $data = array(
            'list' => DB::table('stocks')->get()
        );
        return view('user/marketlead', $data);
    }
    public function leads(Request $request)
    {
        $add = new leade;
        $add->name = $request->input('name');
        $add->email = $request->input('email');
        $add->mobile = $request->input('mobile');
        $add->city = $request->input('city');
        $add->category = $request->input('category');
        $add->save();
        return redirect()->back()->with('status', 'Leads Added Successfully');
    }
    function stockmove()
    {
        $data = array(
            'list' => DB::table('stocks')->get()
        );
        return view('user/stockmove', $data);
    }
    public function stocks(Request $request)
    {
        $add = new leade;
        $add->name = $request->input('name');
        $add->email = $request->input('email');
        $add->mobile = $request->input('mobile');
        $add->city = $request->input('city');
        $add->category = $request->input('category');

        $add->save();
        return redirect()->back()->with('status', 'Student Image Added Successfully');
    }
    function portfolio()
    {
        $data = array(
            'list' => DB::table('stocks')->get()
        );
        return view('user/portfolio', $data);
    }

    public function portfolios(Request $request)
    {
        $add = new leade;
        $add->name = $request->input('name');
        $add->email = $request->input('email');
        $add->mobile = $request->input('mobile');
        $add->city = $request->input('city');
        $add->category = $request->input('category');

        $add->save();
        return redirect()->back()->with('status', 'Student Image Added Successfully');
    }
    function portfoliopayment()
    {

        $data = array(
            'list' => DB::table('totalpays')
                ->whereIn('id', [2])
                ->get()
        );
        return view('user/portfoliopayment', $data);
    }
    function performance()
    {
        $data = array(
            'list' => DB::table('stocks')->get()
        );

        return view('user/performance', $data);
    }
    function equity()
    {
        if(Auth::check()){
          $data = array(
            'list' => DB::table('totalpays')
                ->whereIn('id', [2])
                ->get()
        );
        return view('user/equity', $data);
    }
    return Redirect::to("login")->withSuccess('Please Login First');
}
}