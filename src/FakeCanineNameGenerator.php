<?php

namespace Unisys12\FakeCanine;

/**
 * Fake Canine Name Generator
 *
 * Returns a string representing a canine name based on gender
 *
 * @author Phillip Jackson (unisys12) <unisys12@gmail.com>
 */
class FakeCanineNameGenerator
{
    public function __construct(string $gender)
    {
        $this->gender = $gender;
    }
    /**
     * name()
     *
     * @param string $gender
     *
     * Returns a random genderized name
     *
     * @return string
     */
    public function name()
    {
        $name = array_rand($this->nameList['names'][$this->gender]);

        return $this->nameList['names'][$this->gender][$name];
    }

    private $nameList = [
        'names' => [
            'male' => ["Ace", "Apollo", "Bailey", "Bandit", "Baxter", "Bear", "Beau", "Benji", "Benny", "Bentley", "Blue", "Bo", "Boomer", "Brady", "Brody", "Bruno", "Brutus", "Bubba", "Buddy", "Buster", "Cash", "Champ", "Chance", "Charlie", "Chase", "Chester", "Chico", "Coco", "Cody", "Cooper", "Copper", "Dexter", "Diesel", "Duke", "Elvis", "Finn", "Frankie", "George", "Gizmo", "Gunner", "Gus", "Hank", "Harley", "Henry", "Hunter", "Jack", "Jackson", "Jake", "Jasper", "Jax", "Joey", "Kobe", "Leo", "Loki", "Louie", "Lucky", "Luke", "Mac", "Marley", "Max", "Mickey", "Milo", "Moose", "Murphy", "Oliver", "Ollie", "Oreo", "Oscar", "Otis", "Peanut", "Prince", "Rex", "Riley", "Rocco", "Rocky", "Romeo", "Roscoe", "Rudy", "Rufus", "Rusty", "Sam", "Sammy", "Samson", "Scooter", "Scout", "Shadow", "Simba", "Sparky", "Spike", "Tank", "Teddy", "Thor", "Toby", "Tucker", "Tyson", "Vader", "Winston", "Yoda", "Zeus", "Ziggy"],
            'female' => ["Abby", "Allie", "Angel", "Annie", "Athena", "Baby", "Bailey", "Bella", "Belle", "Bonnie", "Brandy", "Cali", "Callie", "Casey", "Charlie", "Chloe", "Cleo", "Coco", "Cocoa", "Cookie", "Daisy", "Dakota", "Dixie", "Ella", "Ellie", "Emma", "Gigi", "Ginger", "Grace", "Gracie", "Hannah", "Harley", "Hazel", "Heidi", "Holly", "Honey", "Izzy", "Jasmine", "Josie", "Katie", "Kona", "Lacey", "Lady", "Layla", "Lexi", "Lexie", "Lilly", "Lily", "Lola", "Lucky", "Lucy", "Lulu", "Luna", "Macy", "Maddie", "Madison", "Maggie", "Marley", "Maya", "Mia", "Millie", "Mimi", "Minnie", "Missy", "Misty", "Mocha", "Molly", "Nala", "Nikki", "Olive", "Peanut", "Pebbles", "Penny", "Pepper", "Phoebe", "Piper", "Princess", "Riley", "Rosie", "Roxie", "Roxy", "Ruby", "Sadie", "Sally", "Sandy", "Sasha", "Sassy", "Scout", "Shadow", "Shelby", "Sierra", "Sophie", "Stella", "Sugar", "Sydney", "Trixie", "Willow", "Winnie", "Zoe", "Zoey"]
        ],
    ];
}
