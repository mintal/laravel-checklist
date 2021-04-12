<?php

namespace Tests\Unit;

use App\Models\Checklist;
use Tests\TestCase;

class TestChecklist extends TestCase
{
    public function test_can_create_checklist()
    {
        $data = [
            'name' => $this->faker->name
        ];

        $this->post(route('checklist.store'), $data)
            ->assertStatus(201)
            ->assertJson([
                'data' => [
                    'id' => 1,
                    "name" => $data['name'],
                    'completed' => false
                ]
            ]);
    }

//    public function test_can_update_checklist()
//    {
//        $post = Checklist::factory()->create();
//        $data = [
//           'name' => $this->faker->title,
//           'completed' => $this->faker->boolean,
//        ];
//
//        $this->put(route('checklist.update', $post->id), $data)
//        ->assertStatus(200)
//        ->assertJson([
//            'data' => [
//                'name' => $data['name'],
//                'completed' => $data['completed']
//            ]
//        ]);
//    }
}
