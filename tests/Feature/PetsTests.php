<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PetsTests extends TestCase
{
    use RefreshDatabase;

    private User $user;

    protected function setUp(): void
    {
        parent::setUp();

        User::factory()->count(10)->hasPets(fake()->numberBetween(1, 2))->create();

        $this->user = User::factory()->hasPets(2)->create();
    }


    public function test_need_authentication_to_access_pet_list()
    {
        $response = $this->get('/pets');

        $response->assertRedirect('login');
    }


    public function test_authenticated_user_can_access_pet_list()
    {
        $response = $this->actingAs($this->user)->get('/pets');

        // El usuario puede ver la lista de mascotas
        $response->assertOk();

        $pet = $this->user->pets()->get()->first();

        // El usuario ve almenos a 1 de sus mascotas en la lista
        $response->assertSeeText($pet->name);
    }
}
