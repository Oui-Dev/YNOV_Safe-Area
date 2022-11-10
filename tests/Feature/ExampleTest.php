<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get(route('no.public.homepage'));
        $response->assertStatus(200);
    }

    public function test_page_price()
    {
        $response = $this->get(route('no.public.prices'));
        $response->assertStatus(200);
    }

    public function test_page_mobileApp()
    {
        $response = $this->get(route('no.public.mobileApp'));
        $response->assertStatus(200);
    }

    public function test_page_contact()
    {
        $response = $this->get(route('no.public.contact'));
        $response->assertStatus(200);
    }

    public function test_page_legal()
    {
        $response = $this->get(route('no.public.legal'));
        $response->assertStatus(200);
    }

    public function test_page_changelog()
    {
        $response = $this->get(route('no.public.changelog'));
        $response->assertStatus(200);
    }

    public function test_minio_server()
    {
        $response = $this->get('http://minio.safearea.ml/login');
        $response->assertStatus(404);
    }

    public function test_graphana_server()
    {
        $response = $this->get('http://graphana.safearea.ml');
        $response->assertStatus(404);
    }

    public function test_matomo_server()
    {
        $response = $this->get('http://matomo.safearea.ml');
        $response->assertStatus(404);
    }
}
