<?php

namespace App\Http\Controllers\Api\V1;

use App\Mail\AcceptanceMail;
use App\Models\Registration;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Mail;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Registration::all();
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
    public function store(StoreRegistrationRequest $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:users,email',
            'phone_number' => 'nullable|string|max:15',
            'linkedin' => 'nullable|url',
            'github' => 'nullable|url',
            'other' => 'nullable|url',
            'team_id' => 'required|exists:teams,id',
            'event_id' => 'required|exists:events,id',
        ]);

        // Check if the user already exists
        $user = User::where('email', $request->email)->first();

        // If the user doesn't exist, create a new user
        if (!$user) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'linkedin' => $request->linkedin,
                'github' => $request->github,
                'other' => $request->other,
            ]);
        }

        // Check if the user is already registered for this event under this team
        $existingRegistration = Registration::where('user_id', $user->id)
            ->where('team_id', $request->team_id)
            ->where('event_id', $request->event_id)
            ->first();

        if ($existingRegistration) {
            return response()->json([
                'message' => 'The user is already registered for this event under the selected team.'
            ], 409);
        }

        // Create the new registration
        $registration = Registration::create([
            'user_id' => $user->id,
            'team_id' => $request->team_id,
            'event_id' => $request->event_id,
            'registered_at' => now(),
        ]);

        Mail::to($request->email)->send(new AcceptanceMail($request->name));

        return response()->json([
            'message' => 'Registration successfully created.',
            'registration' => $registration,
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
