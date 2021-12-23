<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leade;
use App\Models\stock;
use App\Models\userlogin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use PDF;
class AdminController extends Controller
{
    function adminindex()
    {
        $stock = DB::table('stocks')->count();
        $lead =  DB::table('leades')->count();
        return view('admin/adminindex',compact('stock','lead'));
    }
    function sidebar()
    {
        return view('admin/sidebar');
    }
    /* -------Leads Page------*/
    function leads()
    {
        $data = DB::table('leades')->get();
        return view('admin/leads',compact('data'));
    }
     function download_file (Request $request){
    $customer_data = leade::all();
    $pdf = PDF::loadView('admin/pdf', compact('customer_data'));
   return $pdf->download('stock_records.pdf');
}

function actions (Request $request)
{
    if($request->ajax())
    {
        if($request->actions == 'edit')
        {
            $data = array(
            'name' => $request-> name,
            'email' => $request-> email,
            'mobile' => $request-> mobile,
            'city' => $request-> city,
            'category' => $request-> category,
            );
            DB::table('leades')
            ->where('id',$request->id)
            ->update($data);
        }
        if($request->actions == 'delete')
        {
            DB::table('leades')
            ->where('id', $request->id)
            ->delete();
        }
        return request()->json($request);
    }
}
   
/*------Lead page end -----*/
/*-------Add Stocks-------*/ 
function adminstock()
{
    return view('admin/adminstock');
}
public function addstock(Request $request)
{
    $add = new stock;
      $add->y_price = $request->input('y_price');
    $add->t_price = $request->input('t_price');
    $add->date = $request->input('date');
    $add->duration = $request->input('duration');
   
    if($request->hasfile('image'))
    {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/images/', $filename);
        $add->image = $filename;
    }
    $add->save();
    return redirect()->back()->with('status','Student Image Added Successfully');
}
/*-------add stock end---*/
/*------- stock table---*/

function stockdata()
{
    $data = array(
        'list' => DB::table('stocks')->get()
    );
    return view('admin/stockdata', $data);
}
public function searchBydate(Request $req)
{
    $list=stock::where('date','>=',$req->from)->where('date','<=',$req->to)->get();
    return view('admin/stockdata',compact('list'));
}
function action (Request $request)
{
    if($request->ajax())
    {
        if($request->action == 'edit')
        {
            $data = array(
            'y_price' => $request-> y_price,
            't_price' => $request-> t_price,
            'date' => $request-> date,
            'duration' => $request-> duration
            );
            DB::table('stocks')
            ->where('id',$request->id)
            ->update($data);
        }
        if($request->action == 'delete')
        {
            DB::table('stocks')
            ->where('id', $request->id)
            ->delete();
        }
        return request()->json($request);
    }
}
/*------- stock table end---*/

 /*--------login-----*/ 
 function adminlogin()
    {
        return view('login/adminlogin');
    }
    public function loginuser(Request $request)
    {
        $request->validate([
            'Email' => 'required|Email',
            'password' => 'required|min:8|max:12'
        ]);
        $user = userlogin::where('Email', '=', $request->Email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('adminindex');
            } else {
                return back()->with('fail', 'Password not matches.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }
    /*-------login end---*/
    /*-------register-----*/
    function adminregister()
    {
        return view('login/adminregister');
    }
    public function registeruser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobileNo' => 'required',
            'Email' => 'required|Email|unique:userlogins',
            'password' => 'required|min:8|max:12'
        ]);
        $user = new userlogin();
        $user->name = $request->name;
        $user->mobileNo = $request->mobileNo;
        $user->Email = $request->Email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'you have registered seccessfuly');
        } else {
            return back()->with('fail', 'something wrong');
        }
    }
      function user()
    {
        return view('admin/user');
    }
}
