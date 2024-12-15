<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_name' => $this->faker->company,
            'team_leader_id' => Team::factory(), // Assuming user IDs are 1-100
            'event_id' => Event::factory(),        // Assuming event IDs are 1-10
            'accepted' => $this->faker->boolean(70), // 70% chance of being accepted
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
