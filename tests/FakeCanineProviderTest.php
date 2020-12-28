<?php

namespace Unisys12\FakeCanine\Tests;

use Faker\Generator;
use PHPUnit\Framework\TestCase;
use Unisys12\FakeCanine\FakeCanineProvider;

class FakeCanineProviderTest extends TestCase
{
    /** @test */
    public function generate_male_name() : void
    {
        $faker = new Generator();
        $canineProvider = new FakeCanineProvider($faker);

        $this->assertNotEmpty($canineProvider->canineNameMale());
    }

    /** @test */
    public function generate_female_name() : void
    {
        $faker = new Generator();
        $canineProvider = new FakeCanineProvider($faker);

        $this->assertNotEmpty($canineProvider->canineNameFemale());
    }

    /** @test */
    public function generate_breed() : void
    {
        $faker = new Generator();
        $canineProvider = new FakeCanineProvider($faker);

        $this->assertNotEmpty($canineProvider->canineBreed());
    }
}
