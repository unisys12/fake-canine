<?php

namespace Unisys12\FakeCanine;

class FakeCanineGenerator

{
    public function nameMale()
    {
        $name = array_rand($this->lists['names']['male']);

        return $this->lists['names']['male'][$name];
    }

    public function nameFemale()
    {
        $name = array_rand($this->lists['names']['female']);

        return $this->lists['names']['female'][$name];
    }

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
