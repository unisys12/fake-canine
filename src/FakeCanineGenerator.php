<?php

namespace Unisys12\FakeCanine;

/**
 * FakeCanine Generator
 *
 * Generates random canine related things...
 *
 * @author Phillip Jackson (unisys12)
 */
class FakeCanineGenerator
{
    /**
     * nameMale()
     *
     * Returns a random male name
     *
     * @return string
     */
    public function nameMale()
    {
        $name = array_rand($this->lists['names']['male']);

        return $this->lists['names']['male'][$name];
    }

    /**
     * nameFemale()
     *
     * Return a random female name
     *
     * @return string
     */
    public function nameFemale()
    {
        $name = array_rand($this->lists['names']['female']);

        return $this->lists['names']['female'][$name];
    }

    /**
     * breed()
     *
     * Return a random breed
     *
     * @return string
     */
    public function breed()
    {
        $breed = array_rand($this->lists['breeds']);

        return $this->lists['breeds'][$breed];
    }

    private $lists = [
        'names' => [
            'male' => [
                'Ace',
                'Apollo',
                'Bailey',
                'Bandit',
                'Baxter',
                'Bear',
                'Beau',
                'Benji',
            ],
            'female' => [
                'Emma',
                'Lucy',
                'Sadie',
                'Millie',
                'Coco',
                'Maggie',
                'Molly',
                'Lilly',
                'Daisy',
                'Bailey',
            ]
        ],
        'breeds' => [
            'Retrievers (Labrador)',
            'German Shepherd Dogs',
            'Retrievers (Golden)',
            'French Bulldogs',
            'Bulldogs',
            'Poodles',
            'Beagles',
        ],
    ];
}
