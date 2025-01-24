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

        Event::factory()->count(5)->create();
    }
}
