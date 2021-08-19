<?php

namespace Unisys12\FakeCanine;

use Faker\Provider\Base;
use Unisys12\FakeCanine\Generators\FakeCanineNameGenerator;
use Unisys12\FakeCanine\Generators\FakeCanineBreedGenerator;

/**
 * Fake Canine Provider
 *
 * This class extends the Base FakerPHP class
 *
 * @return string
 * @author Phillip Jackson (unisys12)
 *
 */
class FakeCanineProvider extends Base
{
    /**
     * gender
     *
     * @var string
     *
     * Only populated after calling name() method
     */
    public $gender = null;

    protected function gender()
    {
        $gender = array_rand(['male' => 0, 'female' => 1]);
        return $gender;
    }

    /**
     * name()
     *
     * Returns a canine name, as a string, based on the gender passed.
     *
     * @return string
     */
    public function name()
    {
        $this->gender = $this->gender();

        $gen = new FakeCanineNameGenerator($this->gender);

        return $gen->name();
    }

    /**
     * canineBreed()
     *
     * Returns a string that contains a random breed name
     *
     * @return string
     */
    public function breed(): string
    {
        $gen = new FakeCanineBreedGenerator();
        $breed = $gen->canineBreed();

        return $breed;
    }
}
