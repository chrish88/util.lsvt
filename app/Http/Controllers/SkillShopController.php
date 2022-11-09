<?php

namespace App\Http\Controllers;

use App\Models\SkillShop;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SkillShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('SkillShop/Index', [
            
        ]);
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
     * @param  \App\Models\SkillShop  $skillShop
     * @return \Illuminate\Http\Response
     */
    public function show(SkillShop $skillShop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillShop  $skillShop
     * @return \Illuminate\Http\Response
     */
    public function edit(SkillShop $skillShop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkillShop  $skillShop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkillShop $skillShop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillShop  $skillShop
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillShop $skillShop)
    {
        //
    }
}
