<?php

namespace Unisys12\FakeCanine;

use Faker\Provider\Base;

class FakeCanineProvider extends Base
{
    public function canineNameMale(): string
    {
        $gen = new FakeCanineGenerator();
        $name = $gen->nameMale();

        return $name;
    }

    public function canineNameFemale(): string
    {
        $gen = new FakeCanineGenerator();
        $name = $gen->nameFemale();

        return $name;
    }

    public function canineBreed()
    {
        $gen = new FakeCanineGenerator();
        $breed = $gen->breed();

        return $breed;
    }
}
