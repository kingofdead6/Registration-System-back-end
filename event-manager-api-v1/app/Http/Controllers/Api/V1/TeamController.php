<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\TeamResource;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        return TeamResource::collection(Team::all());
        return $teams = Team::with(['leader', 'members.user'])->get();
//
//
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
    public function store(StoreTeamRequest $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'team_name' => 'required|string|max:100|unique:teams,team_name',
            'team_leader_id' => 'required|exists:users,id',
            'event_id' => 'required|exists:events,id',
        ]);

        // Create the team
        $team = Team::create([
            'team_name' => $validated['team_name'],
            'team_leader_id' => $validated['team_leader_id'],
            'event_id' => $validated['event_id'],
        ]);

        return response()->json([
            'message' => 'Team successfully created.',
            'team_id' => $team->id,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {

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
    public function update(UpdateTeamRequest $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }

    //Checks is a team is in the database
    public function checkTeamByName($name)
    {
        // Find the team by name
        $team = Team::where('team_name', $name)->first();

        // If the team does not exist, return an error message
        if (!$team) {
            return response()->json([
                'message' => 'The team does not exist.'
            ], 404);
        }

        // If the team exists, return the team ID and name
        return response()->json([
            'message' => 'The team exists.',
            'team_id' => $team->id,
            'team_name' => $team->team_name
        ], 200);
    }


}
