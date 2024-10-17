<?php

namespace App\Http\Controllers;
use App\Models\FootballTeam;
use App\Http\Requests\StoreFootballTeamRequest;
use App\Http\Requests\UpdateFootballTeamRequest;
use Illuminate\Http\Request;

class FootballTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footballTeams = FootballTeam::all();
        return response()->json($footballTeams);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFootballTeamRequest $request)
    {
        // Los datos ya están validados en StoreFootballTeamRequest
        $footballTeam = FootballTeam::create($request->validated());

        return response()->json($footballTeam, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $footballTeam = FootballTeam::findOrFail($id);
        return response()->json($footballTeam);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFootballTeamRequest $request, string $id)
    {
        $footballTeam = FootballTeam::findOrFail($id);

        // Los datos ya están validados en UpdateFootballTeamRequest
        $footballTeam->update($request->validated());

        return response()->json($footballTeam);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $footballTeam = FootballTeam::findOrFail($id);

        // Eliminar el equipo de fútbol
        $footballTeam->delete();

        return response()->json(['message' => 'Equipo de fútbol eliminado con éxito.']);
    }
}
