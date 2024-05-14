<?php

class Movie {
    public string  $title;
    public $director;
    public $genres = [];
    public $description;
    
    public function __construct($title, $director, $genres, $description) {
        $this->title = $title;
        $this->director = $director;
        $this->genres = $genres;
        $this->description =$description;
    }

    public function displayMovie() {

}
}
