<?php

namespace Unisys12\FakeCanine;

use Faker\Provider\Base;

/**
 * Fake Canine Provider
 *
 * This class extends the Base FakerPHP class
 *
 * Creates a generator instance that returns a random string
 * of a defined need. Male, female or breed name.
 *
 * @author Phillip Jackson (unisys12)
 *
 */
class FakeCanineProvider extends Base
{
    /**
     * canineNameMale()
     *
     * Returns a string that contains a random male name
     *
     * @return string
     */
    public function canineNameMale(): string
    {
        $gen = new FakeCanineGenerator();
        $name = $gen->nameMale();

        return $name;
    }

    /**
     * canineNameFemale()
     *
     * Returns a string that contains a random female name
     *
     * @return string
     */
    public function canineNameFemale(): string
    {
        $gen = new FakeCanineGenerator();
        $name = $gen->nameFemale();

        return $name;
    }

    /**
     * canineBreed()
     *
     * Returns a string that contains a random breed name
     *
     * @return string
     */
    public function canineBreed()
    {
        $gen = new FakeCanineGenerator();
        $breed = $gen->breed();

        return $breed;
    }
}
