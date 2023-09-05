<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Listing;

class ListingTest extends TestCase
{
  
    public function test_view_listing_page(): void
    {
        $listing = Listing::factory()->create();

        $response = $this->get("/listings/{$listing->id}");

        $response->assertStatus(200);
        $response->assertSeeText($listing->title);
    }
}
