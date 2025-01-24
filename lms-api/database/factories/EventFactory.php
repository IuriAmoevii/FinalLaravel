<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'date' => $this->faker->dateTimeBetween('+1 day', '+1 week'),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
