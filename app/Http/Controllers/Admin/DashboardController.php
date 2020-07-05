<?php

namespace App\Http\Controllers\Admin;
use Carbon\Carbon;
use App\User;
use App\Shop;
use App\Dashboard;
use App\Owner;
use App\Http\Controllers\Controller;
use App\Shoprent;
use App\Shoprequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index2(Request $request,$id)
    {
        $owner_id=$id;
        $owner_detail=Owner::where('id','=',$id)->get();
        if($owner_detail->isEmpty()){
            print_r('Invalid Credintial');
       }
        else{
            
            $toatl_property_registered=Shop::where('owner_id','=',$id)->get();
            $toatl_property_allocated=Shop::where('owner_id','=',$id)->where('shop_allocated','=','1')->get();
            $toatl_property_notallocated=Shop::where('owner_id','=',$id)->where('shop_allocated','=','0')->get();
            $total_rent=Shop::where('owner_id','=',$id)->where('shop_allocated','=','1')->sum('shop_rent');
            $property_request=Shoprequest::where('owner_id','=',$id)->where('shop_allocated','=','pending')->get();

            $user_detail=Shoprent::where('id','=',$id)->get();
            
            return view('owner.dashboard', compact('user_detail','property_request','total_rent','toatl_property_notallocated','toatl_property_allocated','owner_id','owner_detail','toatl_property_registered'));
            
        }
        
   
    }

    public function rentrequest($id){

        $owner_id=$id;
        $user_detail=Shoprequest::where('owner_id','=',$id)->where('shop_allocated','=','pending')->get();
        return view('owner.rentrequest',compact('user_detail','owner_id'));
    }


    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:owner');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}