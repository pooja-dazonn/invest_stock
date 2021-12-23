<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\totalpay;
use App\Models\leade;
use App\Models\loguser;
use Illuminate\Support\Facades\Hash;


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
    $add-> name= $request->input('name');
    $add->email = $request->input('email');
    $add->mobile = $request->input('mobile');
    $add->city = $request->input('city');
    $add->category = $request->input('category');
    $add->save();
    return redirect()->back()->with('status','Student Image Added Successfully');
 } 
    function marketleadspayment()
    {
        $data = array(
            'list'=>DB::table('totalpays')
             ->whereIn('id',[3])
             ->get()
        );
        return view('user/marketleadspayment',$data);
    }
    function stockmove()
    {
        $data = array(
            'list' => DB::table('stocks')->get()
        );
        return view('user/stockmove',$data);
    }
    public function stocks(Request $request)
 {
    $add = new leade;
    $add-> name= $request->input('name');
    $add->email = $request->input('email');
    $add->mobile = $request->input('mobile');
    $add->city = $request->input('city');
    $add->category = $request->input('category');
   
    $add->save();
    return redirect()->back()->with('status','Student Image Added Successfully');
 } 
    function stockmovepayment()
    {
        $data = array(
            'list'=>DB::table('totalpays')
             ->whereIn('id',[1])
             ->get()
        );
        return view('user/stockmovepayment',$data);
    }
    function portfolio()
    {
        $data = array(
            'list' => DB::table('stocks')->get()
        );
        return view('user/portfolio',$data);
    }
        public function portfolios(Request $request)
 {
    $add = new leade;
    $add-> name= $request->input('name');
    $add->email = $request->input('email');
    $add->mobile = $request->input('mobile');
    $add->city = $request->input('city');
    $add->category = $request->input('category');
  
    $add->save();
    return redirect()->back()->with('status','Student Image Added Successfully');
 }
    function portfoliopayment()
    {
     
    $data = array(
        'list'=>DB::table('totalpays')
         ->whereIn('id',[2])
         ->get()
    );
     return view('user/portfoliopayment',$data);
 }
 function performance()
    {
        $data = array(
            'list' => DB::table('stocks')->get()
        );
    
        return view('user/performance',$data);
    }
    function equity()
    {
        $data = array(
            'list'=>DB::table('totalpays')
             ->whereIn('id',[2])
             ->get()
        );
        return view('user/equity',$data);
    }
    
    
    /**loginuserpage */
    function loginuser()
    {
        return view('user/loginuser');
    }
   
    public function userlog(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:12'
        ]);
        $user =loguser::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password,$user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('portfoliopayment');
            } else {
                return back()->with('fail', 'Password not matches.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }
    /*-------loginuser page end---*/

    /*-------registeruser page-----*/
    function registeruser()
    {
        return view('user/registeruser');
    }
    public function userreg(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:logusers',
            'password' => 'required|min:8|max:12'
        ]);
        $user = new loguser();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'you have registered seccessfuly');
        } else {
            return back()->with('fail', 'something wrong');
        }
    }
    /**registeruserpage end */

}
