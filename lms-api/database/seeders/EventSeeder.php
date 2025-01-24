<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        $user = User::first(); // Use the first user for simplicity

        Event::create([
            'name' => 'Team Meeting',
            'description' => 'Monthly team meeting to discuss project updates.',
            'date' => now()->addDay(),
            'user_id' => $user->id,
        ]);
    }
}
