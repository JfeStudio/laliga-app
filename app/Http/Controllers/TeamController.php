<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.teams.index', [
            'teams' => Team::latest()->get(),
        ]);
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
        $request->validate([
            'name_club' => 'required|unique:teams',
            'city_club' => 'required|string',
        ],[
            'name_club.required' => 'Nama Club harus diisi',
            'name_club.unique' => 'Nama Club sudah ada',
            'city_club.required' => 'Kota Club harus diisi',
        ]);
        Team::create($request->all());
        flash('Data berhasil ditambahkan!')->success();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();
        flash('Data berhasil dihapus')->success();
        return back();
    }
}
