<?php

namespace App\Http\Controllers\Admin;
use Carbon\Carbon;
use App\User;
use App\Shop;
use App\Dashboard;
use App\Owner;
use App\Http\Controllers\Controller;
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
        $userDetail = Shop::where('owner_id','=',$id);
        $userCount = Shop::where('owner_id','=',$id)->count();
        $shopCount = Shop::where('owner_id','=',$id)->count();;
        $shopAllocated = Shop::where('owner_id','=',$id )->where('shop_allocated', '=', '1')->count();
        $totalRent = Shop::where('owner_id','=',$id )->where('shop_allocated', '=', '1')->sum('shop_rent');
        $ownerCount = Owner::count();
        $ownerRegisteredToday = Owner::whereDate('created_at', Carbon::today())->count();
        $userRegisteredToday = User::whereDate('created_at', Carbon::today())->count();
        $shopRegisteredToday = Shop::whereDate('created_at', Carbon::today())->count();

        return view('owner.dashboard', compact('owner_id','userDetail','userCount', 'shopCount', 'shopAllocated', 'totalRent', 'ownerCount', 'ownerRegisteredToday', 'userRegisteredToday', 'shopRegisteredToday'));
   
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
