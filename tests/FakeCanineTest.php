<?php

namespace Unisys12\FakeCanine\Tests;

use Faker\Generator;
use PHPUnit\Framework\TestCase;
use Unisys12\FakeCanine\FakeCanineProvider;

class FakeCanineTest extends TestCase
{
    /** @test */
    public function generate_a_random_name_as_a_string()
    {
        $faker = new Generator();
        $fakeCanine = new FakeCanineProvider($faker);

        $this->assertIsString($fakeCanine->name());
    }

    /** @test */
    public function generate_a_random_gender()
    {
        $faker = new Generator();
        $fakeCanine = new FakeCanineProvider($faker);
        $name = $fakeCanine->name();

        $this->assertIsString($fakeCanine->gender);
    }

    /** @test */
    public function generate_a_random_breed(): void
    {
        $faker = new Generator();
        $canineProvider = new FakeCanineProvider($faker);

        $this->assertNotEmpty($canineProvider->breed());
    }
}
