<?php

namespace Unisys12\FakeCanine\Tests;

use Faker\Generator;
use PHPUnit\Framework\TestCase;
use Unisys12\FakeCanine\FakeCanineProvider;

class FakeCanineProviderTest extends TestCase
{
    /** @test */
    public function core_class_exists()
    {
        $faker = new Generator();
        $canineProvider = new FakeCanineProvider($faker);

        $this->assertTrue($canineProvider->canineNameMale() == 'MaleName');
    }
}
