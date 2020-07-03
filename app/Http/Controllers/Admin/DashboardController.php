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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $owner_id=$id;
        $owner_detail=Owner::where('owner_id','=',$id)->get();
        if($owner_detail->isEmpty()){
            print_r('Invalid Credintial');
       }
        else{
            
            $toatl_property_registered=Shop::where('owner_id','=',$id)->get();
            $toatl_property_allocated=Shop::where('owner_id','=',$id)->where('shop_allocated','=','1')->get();
            $toatl_property_notallocated=Shop::where('owner_id','=',$id)->where('shop_allocated','=','0')->get();
            $total_rent=Shop::where('owner_id','=',$id)->where('shop_allocated','=','1')->sum('shop_rent');
            $property_request=Shoprequest::where('owner_id','=',$id)->where('shop_allocated','=','pending')->get();

            $user_detail=Shoprent::where('owner_id','=',$id)->get();
            
            return view('owner.dashboard', compact('user_detail','property_request','total_rent','toatl_property_notallocated','toatl_property_allocated','owner_id','owner_detail','toatl_property_registered'));
            
        }
        
   
    }

    public function rentrequest($id){

        $owner_id=$id;
        $user_detail=Shoprequest::where('owner_id','=',$id)->where('shop_allocated','=','pending')->get();
        foreach ($user_detail as $user_details) {
            echo $user_details->shop->shop_rent;
        }
        return view('owner.rentrequest',compact('user_detail','owner_id'));
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
