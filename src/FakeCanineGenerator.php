<?php

namespace Unisys12\FakeCanine;

class FakeCanineGenerator

{
    public function nameMale()
    {
        return array_rand($this->lists['names']['male']);
    }

    public function nameFemale()
    {
        return array_rand($this->lists['names']['female']);
    }

    public function breed()
    {
        return array_rand($this->lists['breeds']);
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
