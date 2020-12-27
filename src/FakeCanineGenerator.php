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
            'male' => ["Ace", "Apollo", "Bailey", "Bandit", "Baxter", "Bear", "Beau", "Benji", "Benny", "Bentley", "Blue", "Bo", "Boomer", "Brady", "Brody", "Bruno", "Brutus", "Bubba", "Buddy", "Buster", "Cash", "Champ", "Chance", "Charlie", "Chase", "Chester", "Chico", "Coco", "Cody", "Cooper", "Copper", "Dexter", "Diesel", "Duke", "Elvis", "Finn", "Frankie", "George", "Gizmo", "Gunner", "Gus", "Hank", "Harley", "Henry", "Hunter", "Jack", "Jackson", "Jake", "Jasper", "Jax", "Joey", "Kobe", "Leo", "Loki", "Louie", "Lucky", "Luke", "Mac", "Marley", "Max", "Mickey", "Milo", "Moose", "Murphy", "Oliver", "Ollie", "Oreo", "Oscar", "Otis", "Peanut", "Prince", "Rex", "Riley", "Rocco", "Rocky", "Romeo", "Roscoe", "Rudy", "Rufus", "Rusty", "Sam", "Sammy", "Samson", "Scooter", "Scout", "Shadow", "Simba", "Sparky", "Spike", "Tank", "Teddy", "Thor", "Toby", "Tucker", "Tyson", "Vader", "Winston", "Yoda", "Zeus", "Ziggy"],
            'female' => ["Abby", "Allie", "Angel", "Annie", "Athena", "Baby", "Bailey", "Bella", "Belle", "Bonnie", "Brandy", "Cali", "Callie", "Casey", "Charlie", "Chloe", "Cleo", "Coco", "Cocoa", "Cookie", "Daisy", "Dakota", "Dixie", "Ella", "Ellie", "Emma", "Gigi", "Ginger", "Grace", "Gracie", "Hannah", "Harley", "Hazel", "Heidi", "Holly", "Honey", "Izzy", "Jasmine", "Josie", "Katie", "Kona", "Lacey", "Lady", "Layla", "Lexi", "Lexie", "Lilly", "Lily", "Lola", "Lucky", "Lucy", "Lulu", "Luna", "Macy", "Maddie", "Madison", "Maggie", "Marley", "Maya", "Mia", "Millie", "Mimi", "Minnie", "Missy", "Misty", "Mocha", "Molly", "Nala", "Nikki", "Olive", "Peanut", "Pebbles", "Penny", "Pepper", "Phoebe", "Piper", "Princess", "Riley", "Rosie", "Roxie", "Roxy", "Ruby", "Sadie", "Sally", "Sandy", "Sasha", "Sassy", "Scout", "Shadow", "Shelby", "Sierra", "Sophie", "Stella", "Sugar", "Sydney", "Trixie", "Willow", "Winnie", "Zoe", "Zoey"]
        ],
        'breeds' => [
            'Retriever (Labrador)',
            'German Shepherd',
            'Retriever (Golden)',
            'French Bulldog',
            'Bulldog',
            'Poodle',
            'Beagle',
            'Rottweiler',
            'Pointer (German Shorthaired)',
            'Pembroke Welsh Corgis',
            'Dachshund',
            'Yorkshire Terrier',
            'Australian Shepherd',
            'Boxer',
            'Siberian Huskie',
            'Cavalier King Charles Spaniel',
            'Great Dane',
            'Miniature Schnauzer',
            'Doberman Pinscher',
            'Shih Tzu',
            'Boston Terrier',
            'Havanese',
            'Bernese Mountain Dog',
            'Pomeranian',
            'Shetland Sheepdog',
            'Brittany',
            'Spaniel (English Springer)',
            'Spaniel (Cocker)',
            'Miniature American Shepherd',
            'Cane Corso',
            'Pug',
            'Mastiff',
            'Border Collie',
            'Vizsla',
            'Chihuahua',
            'Maltese',
            'Basset Hound',
            'Collie',
            'Weimaraner',
            'Newfoundland',
            'Belgian Malinoi',
            'Rhodesian Ridgeback',
            'Bichons Frise',
            'West Highland White Terrier',
            'Shiba Inu',
            'Retriever (Chesapeake Bay)',
            'Akita',
            'St. Bernard',
            'Portuguese Water Dog',
            'Spaniel (English Cocker)',
            'Bloodhound',
            'Bullmastiff',
            'Papillon',
            'Soft Coated Wheaten Terrier',
            'Australian Cattle Dog',
            'Scottish Terrier',
            'Whippet',
            'Samoyed',
            'Dalmatian',
            'Airedale Terrier',
            'Bull Terrier',
            'Wirehaired Pointing Griffon',
            'Pointer (German Wirehaired)',
            'Alaskan Malamute',
            'Chinese Shar-Pei',
            'Cardigan Welsh Corgi',
            'Italian Greyhound',
            'Dogues de Bordeaux',
            'Great Pyrenee',
            'Old English Sheepdog',
            'Giant Schnauzer',
            'Cairn Terrier',
            'Greater Swiss Mountain Dog',
            'Miniature Pinscher',
            'Russell Terrier',
            'Irish Wolfhound',
            'Chow Chow',
            'Lhasa Apsos',
            'Setter (Irish)',
            'Chinese Crested',
            'Coton de Tulear',
            'Staffordshire Bull Terrier',
            'Pekingese',
            'Border Terrier',
            'American Staffordshire Terrier',
            'Retriever (Nova Scotia Duck Tolling)',
            'Basenjis',
            'Keeshonden',
            'Spaniel (Boykin)',
            'Lagotti Romagnoli',
            'Rat Terrier',
            'Bouviers des Flandre',
            'Norwegian Elkhound',
            'Anatolian Shepherd',
            'Leonberger',
            'Brussels Griffon',
            'Standard Schnauzer',
            'Setter (English)',
            'Fox Terrier (Wire)',
            'Neapolitan Mastiff',
            'Tibetan Terrier',
            'Norwich Terrier',
            'Belgian Tervuren',
            'Retriever (Flat-Coated)',
            'Borzois',
            'Schipperkes',
            'Toy Fox Terrier',
            'Japanese Chin',
            'Silky Terrier',
            'Welsh Terrier',
            'Afghan Hound',
            'Miniature Bull Terrier',
            'Setter (Gordon)',
            'Black Russian Terrier',
            'Pointer',
            'Spinoni Italiani',
            'Tibetan Spaniel',
            'Parson Russell Terrier',
            'Irish Terrier',
            'American Eskimo Dog',
            'Beauceron',
            'Fox Terrier (Smooth)',
            'German Pinscher',
            'American Hairless Terrier',
            'Salukis',
            'Belgian Sheepdog',
            'Boerboel',
            'Tibetan Mastiff',
            'Treeing Walker Coonhound',
            'Spaniel (Welsh Springer)',
            'Norfolk Terrier',
            'Icelandic Sheepdog',
            'Kerry Blue Terrier',
            'Spaniel (Clumber)',
            'Briard',
            'Bearded Collie',
            'Xoloitzcuintli',
            'Bluetick Coonhound',
            'English Toy Spaniel',
            'Manchester Terrier',
            'Black and Tan Coonhound',
            'Australian Terrier',
            'Redbone Coonhound',
            'Spanish Water Dog',
            'Wirehaired Vizsla',
            'Berger Picard',
            'Portuguese Podengo Pequeno',
            'Lakeland Terrier',
            'Scottish Deerhound',
            'Affenpinscher',
            'Bedlington Terrier',
            'Petits Bassets Griffons Vendeen',
            'Spaniel (Field)',
            'Sealyham Terrier',
            'Setter (Irish Red and White)',
            'Pumik',
            'Nederlandse Kooikerhondje',
            'Lowchen',
            'Swedish Vallhund',
            'Pulik',
            'Pharaoh Hound',
            'Greyhound',
            'Retriever (Curly-Coated)',
            'Spaniel (American Water)',
            'Finnish Lapphund',
            'Kuvaszok',
            'Entlebucher Mountain Dog',
            'Glen of Imaal Terrier',
            'Norwegian Buhund',
            'Spaniel (Irish Water)',
            'Ibizan Hound',
            'Otterhound',
            'Polish Lowland Sheepdog',
            'Dandie Dinmont Terrier',
            'American English Coonhound',
            'Spaniel (Sussex)',
            'Plott Hound',
            'Grand Basset Griffon Vendeen',
            'Canaan Dog',
            'Bergamasco Sheepdog',
            'Komondorok',
            'Pyrenean Shepherd',
            'Finnish Spitz',
            'Chinook',
            'Cirnechi dell’Etna',
            'Harrier',
            'Skye Terrier',
            'Cesky Terrier',
            'American Foxhound',
            'Azawakh',
            'Sloughis',
            'Norwegian Lundehund',
            'English Foxhound'
        ],
    ];
}
