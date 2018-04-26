<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Detail;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
  

    public function createDetail(Request $request){
        $this->validate($request,[
            
            'phonenumber'=>'required|numeric|max:9',
            'datedeposited'=>'required',
            'receipt'=>'required|string|max:255',
            'depositamount'=>'required|numeric|max:255',
        ]);
      $detail=new Detail();
    
      $detail->phonenumber=$request->phonenumber;
      $detail->datedeposited=$request->datedeposited;
      $detail->receipt=$request->receipt;
      $detail->depositamount=$request->depositamount;
      $detail->save();
       return redirect()->back()->with('success','Success');
    
 } 

public function index(){
  
  $details=Detail::all();
   $details = Detail::paginate(10);
  //$amount=$details->pluck('depositamount')->sum();
  return view('home')->with(['details'=>$details]);

      
      //dd($posts);
      //return view('home',['posts'=>$posts,'amount'=>$amount]);
}
}
