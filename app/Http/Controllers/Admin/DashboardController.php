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
    public function index()
    {
        $userDetail = User::latest()->limit(8)->get();
        $userCount = User::count();
        $shopCount = Shop::count();
        $shopAllocated = Shop::where('shop_allocated', '=', '1')->count();
        $totalRent = Shop::where('shop_allocated', '=', '1')->sum('shop_rent');
        $ownerCount = Owner::count();
        $ownerRegisteredToday = Owner::whereDate('created_at', Carbon::today())->count();
        $userRegisteredToday = User::whereDate('created_at', Carbon::today())->count();
        $shopRegisteredToday = Shop::whereDate('created_at', Carbon::today())->count();

        return view('owner.dashboard', compact('userDetail','userCount', 'shopCount', 'shopAllocated', 'totalRent', 'ownerCount', 'ownerRegisteredToday', 'userRegisteredToday', 'shopRegisteredToday'));
   
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
