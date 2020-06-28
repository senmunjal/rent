<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\User;
use App\Shop;
use App\Dashboard;
use App\Owner;
use App\Shoprent;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $userDetail = User::latest()->limit(8)->get();
        $userCount = User::count();
        $shopCount = Shop::count();
        $shopAllocated = Shop::where('shop_allocated', '=', '1')->count();
        $totalRent = Shop::where('shop_allocated', '=', '1')->sum('shop_rent');
        $ownerCount = Owner::count();
        $ownerRegisteredToday = Owner::whereDate('created_at', Carbon::today())->count();
        $userRegisteredToday = User::whereDate('created_at', Carbon::today())->count();
        $shopRegisteredToday = Shop::whereDate('created_at', Carbon::today())->count();

        return view('dashboard', compact('userDetail','userCount', 'shopCount', 'shopAllocated', 'totalRent', 'ownerCount', 'ownerRegisteredToday', 'userRegisteredToday', 'shopRegisteredToday'));
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
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
