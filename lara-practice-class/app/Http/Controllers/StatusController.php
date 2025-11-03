<?php

namespace App\Http\Controllers;

// use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //Query Builder
    //=================
    public function index()
    {
        $status=DB::table('statuses')->get();
        dd($status);
        // $status=DB::select('select id ,name,is_inactuve form statuses');
        // dd($status);
        //$status = DB::table('statuses')
        //->select("is_inactive",DB::raw("count(*) as total"))
        //->groupBy("is_inactive")
        //->get();
        //dd($staus);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
