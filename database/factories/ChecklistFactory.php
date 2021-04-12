<?php

namespace Database\Factories;

use App\Models\Checklist;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ChecklistFactory extends Factory
{
	protected $model = Checklist::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'name' => $this->faker->title,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		];
	}
}
