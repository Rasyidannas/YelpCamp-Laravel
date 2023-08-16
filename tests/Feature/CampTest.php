<?php

namespace Tests\Feature;

use App\Models\Camp;
use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CampTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function testNoCampWhenNothingInDatabase(): void
    {
        $response = $this->get('/camps');

        $response->assertStatus(200);
        $response->assertSeeText('No Camps Found');
    }

    public function testSeeOneCampWhenThereOnlyOneWithoutComments(): void
    {
        $camp = $this->createDummyCamp();

        $response = $this->get('/camps');

        $response->assertSeeText('New Camp');
        $response->assertSeeText('200');

        $this->assertDatabaseHas('camps', [
            'name' => 'New Camp',
            'price' => '200',
            'images' => 'https://i.ibb.co/VWJgcYr/download-17.jpg',
            'description' => 'Dive into a world of water-based adventures at Camp Aquatic Bliss! Located near a beautiful lake, this camp is perfect for kids aged 9-13 who love the water. Campers will enjoy swimming, kayaking, fishing, and even learn water safety techniques. The camp also features exciting water games and friendly competitions that promote sportsmanship and aquatic skills'
        ]);
    }

    public function testSeeOneCampWithComment(): void
    {
        $camp = $this->createDummyCamp();

        $comment = new Comment();
        $comment::factory()->suspended()->create([
            'user_id' => $userId ?? $this->user()->id,
            'camp_id' => $camp->id
        ]);

        $this->assertDatabaseHas('comments', [
            'content' => 'This is so coool place :D'
        ]);
    }

    public function testStoreValid(): void
    {
        $camp = $this->createDummyCamp();

        $this->assertDatabaseHas('camps', [
            'price' => '200',
            'images' => 'https://i.ibb.co/VWJgcYr/download-17.jpg',
            'description' => 'Dive into a world of water-based adventures at Camp Aquatic Bliss! Located near a beautiful lake, this camp is perfect for kids aged 9-13 who love the water. Campers will enjoy swimming, kayaking, fishing, and even learn water safety techniques. The camp also features exciting water games and friendly competitions that promote sportsmanship and aquatic skills'
        ]);
    }

    public function testStoreFail(): void
    {
        $camp = [
            'name' => 'a',
            'price' => 'a',
            'images' => 'a',
            'description' => 'a'
        ];

        $this->actingAs($this->user())->post('/camps', $camp)->assertStatus(302);

        $response = $this->get('/camps/create');

        $response->assertSeeText('The name field must be at least 3 characters.');
    }

    public function testUpdateValid(): void
    {
        $user = $this->user();

        $camp = $this->createDummyCamp($user->id);

        $campUpdate = [
            'name' => 'New Camp Updated',
            'price' => '250',
            'images' => 'https://i.ibb.co/VWJgcYr/download-17.jpg',
            'description' => 'Updated Dive into a world of water-based adventures at Camp Aquatic Bliss! Located near a beautiful lake, this camp is perfect for kids aged 9-13 who love the water. Campers will enjoy swimming, kayaking, fishing, and even learn water safety techniques. The camp also features exciting water games and friendly competitions that promote sportsmanship and aquatic skills'
        ];
     
        //check old data
        $this->assertDatabaseHas('camps', [
            'name' => 'New Camp',
            'price' => '200',
            'images' => 'https://i.ibb.co/VWJgcYr/download-17.jpg',
            'description' => 'Dive into a world of water-based adventures at Camp Aquatic Bliss! Located near a beautiful lake, this camp is perfect for kids aged 9-13 who love the water. Campers will enjoy swimming, kayaking, fishing, and even learn water safety techniques. The camp also features exciting water games and friendly competitions that promote sportsmanship and aquatic skills'
        ]);

        //update data and checking
        $this->actingAs($user)->put("/camps/{$camp->id}", $campUpdate)->assertStatus(302);
        $this->assertDatabaseHas('camps', $campUpdate);
    }

    public function testDeleted(): void 
    {
        $user = $this->user();

        $camp = $this->createDummyCamp();

        //delete data
        $this->actingAs($user)->delete("/camps/{$camp->id}")->assertStatus(302);

        $this->assertDatabaseMissing('camps', [
            'price' => '200',
            'images' => 'https://i.ibb.co/VWJgcYr/download-17.jpg',
            'description' => 'Dive into a world of water-based adventures at Camp Aquatic Bliss! Located near a beautiful lake, this camp is perfect for kids aged 9-13 who love the water. Campers will enjoy swimming, kayaking, fishing, and even learn water safety techniques. The camp also features exciting water games and friendly competitions that promote sportsmanship and aquatic skills'
        ]);
    }

    private function createDummyCamp($userId = null): Camp
    {
        $camp = new Camp();

        return $camp::factory()->suspended()->create(
            [
                //$this->user is vonnect with TestCase.php
                'user_id' => $userId ?? $this->user()->id,
            ]
        );
    }
}
