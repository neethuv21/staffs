<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\staffController;
use App\Models\staffone;
use App\Models\stafftwo;
use App\Models\adminlogin;
use App\Models\adddetail;
use App\Models\detailtable;


class staffController extends Controller
{
    public function index(){
       return view('index');
      }
      public function staff1(){
       return view('staff1');
      }

      public function loginactions1(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');
        $data=staffone::where('email',$email)->where('password',$password)->first();
        if(isset($data)){
            $req->session()->put(array('sess'=>$data->id));
            $id=session('sess');
            
            
            return redirect('/adddetails');

        }else{
            return redirect('/staff1')->with('error','invalid details');
        }
    }
      public function staff2(){
       return view('staff2');
      }

      public function loginactions2(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');
        $data=stafftwo::where('email',$email)->where('password',$password)->first();
        if(isset($data)){
            $req->session()->put(array('sess'=>$data->id));
            $id=session('sess');
            
            
            return redirect('/dtlstable');

        }else{
            return redirect('/staff2')->with('error','invalid details');
        }
    }
      public function adminlogin(){
       return view('adminlogin');
      }

      public function adminloginaction(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');
        $data=adminlogin::where('email',$email)->where('password',$password)->first();
        if(isset($data)){
            $req->session()->put(array('sess'=>$data->id));
            $id=session('sess');
            
            
            return redirect('/adminview');

        }else{
            return redirect('/adminlogin')->with('error','invalid details');
        }
    }


public function adddetails(){
        return view('adddetails');
    }
    public function register(Request $req){
    	 $uid=session('sess');
        $itemname=$req->input('name');
        $code=$req->input('code');

        $unit=$req->input('unit');
        $tax=$req->input('tax');
          $hsncode=$req->input('hsncode');
            $date=$req->input('date');
        $data=['uid'=>$uid,'name'=>$itemname,'code'=>$code,'unit'=>$unit,'tax'=>$tax,'hsncode'=>$hsncode,'date'=>$date,];
        adddetail::insert($data);
        return redirect('/readdetails');

    }

    public function dtlstable(){
        return view('dtlstable');
    }
    public function registertable(Request $req){
       $uid=session('sess');
        $itemname=$req->input('iname');
        $code=$req->input('icode');

        $unit=$req->input('sunit');
        $tax=$req->input('stax');
          $hsncode=$req->input('shsncode');
            $date=$req->input('sdate');
        $data=['uid'=>$uid,'iname'=>$itemname,'icode'=>$code,'sunit'=>$unit,'stax'=>$tax,'shsncode'=>$hsncode,'sdate'=>$date,];
        detailtable::insert($data);
        return redirect('/readtable');

    }

    

public function logout(Request $req){
        $req->session()->forget('ses');
        return redirect('/index');
     }


     public function readdetails(){
      
        $data['result']=adddetail::get();

        return view('readdetails',$data);
    }

    public function readtable(){
      $uid=session('sess');
        $data['result']=detailtable::get();

        return view('readtable',$data);
    }

     public function adminview(){
       
        $data['result']=adddetail::get();
        $data['result1']=detailtable::get();



        return view('adminview',$data);
    }
    

}
