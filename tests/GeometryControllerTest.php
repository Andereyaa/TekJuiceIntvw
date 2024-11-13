<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class GeometryControllerTest extends TestCase
{


    public function testCircle(): void
    {

        $client = new Client(['base_uri' => 'http://localhost:8000/']);
        $response = $client->request('GET', 'circle/2');
        $this->assertEquals(200, $response->getStatusCode());
        $data = json_decode($response->getBody(true), true);
        $this->assertArrayHasKey('type', $data);
        $this->assertArrayHasKey('radius', $data);
        $this->assertArrayHasKey('surface', $data);
        $this->assertArrayHasKey('circumference', $data);

        $this->assertEquals('circle', $data['type']);
        $this->assertEquals(2, $data['radius']);
        $this->assertEquals(12.566, $data['surface']);
        $this->assertEquals(12.566, $data['circumference']);
    }

    public function testTriangle(): void
    {

        $client = new Client(['base_uri' => 'http://localhost:8000/']);
        $response = $client->request('GET', 'triangle/5/4/3');
        $this->assertEquals(200, $response->getStatusCode());
        $data = json_decode($response->getBody(true), true);
        $this->assertArrayHasKey('type', $data);
        $this->assertArrayHasKey('a', $data);
        $this->assertArrayHasKey('b', $data);
        $this->assertArrayHasKey('c', $data);
        $this->assertArrayHasKey('surface', $data);
        $this->assertArrayHasKey('circumference', $data);

        $this->assertEquals('triangle', $data['type']);
        $this->assertEquals(5, $data['a']);
        $this->assertEquals(4, $data['b']);
        $this->assertEquals(3, $data['c']);
        $this->assertEquals(6, $data['surface']);
        $this->assertEquals(12, $data['circumference']);
    }
}
