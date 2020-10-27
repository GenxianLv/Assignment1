<?php
namespace App\Models;
class Heroes {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Iron Man',
            'country'=>'United States',
            'image' => 'ironman.jpg',
            'hobby'=>'invention',
            'favorite food'=>'Cheeseburger',
            'team'=>'Avengers',
            'star'=>'Robert Downey Jr',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Venom',
            'country'=>'United States',
            'image' => 'venom.jpg',
            'hobby'=>'destroy, eat',
            'favorite food'=>'seafood',
            'team'=>'Avengers',
            'star'=>'Tom Hardy',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Spider Man',
            'country'=>'United States',
            'image' => 'spiderman.jpg',
            'hobby'=>'taking pictures',
            'favorite food'=>'hamburger',
            'team'=>'Avengers',
            'star'=>'Peter parker',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Captain Marvel',
            'country'=>'United States',
            'image' => 'marvel.jpg',
            'hobby'=>'Fly a plane around the world',
            'favorite food'=>'salad',
            'team'=>'Avengers',
            'star'=>'Brie Larson',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Doctor Strange',
            'country'=>'United States',
            'image' => 'strange.jpg',
            'hobby'=>'See magic book',
            'favorite food'=>'The Fried chicken',
            'team'=>'Avengers',
            'star'=>'Benedict Cumberbatch',
        ],
         '6' => [
            'id' => 6,
            'name' => 'Hulk',
            'country'=>'United States',
            'image' => 'Hulk.jpg',
            'hobby'=>'Do sports',
            'favorite food'=>'barbecue',
            'team'=>'Avengers',
            'star'=>'Mark Ruffalo',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}