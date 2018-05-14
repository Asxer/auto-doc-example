<?php

namespace Tests\Feature;

use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $response = $this->get('/api/test');

        $response->assertStatus(200);
    }

    public function testGetListNotFound() {
        $response = $this->json('get', '/api/test', [
            'not-found' => true
        ]);

        $response->assertStatus(Response::HTTP_NOT_FOUND);
    }

    public function testGetListNoAuth() {
        $response = $this->json('get', '/api/test', [
            'need-authorization' => true
        ]);

        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    public function testGetListWrongParameters() {
        $response = $this->json('get', '/api/test', [
            'test-parameter' => 'test'
        ]);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
