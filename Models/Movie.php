<?php


class Movie {
    public string $title;
    public $director;
    public $genres = [];
    public $description;

    public function __construct($title, $director, $genres, $description) {
        $this->title = $title;
        $this->director = $director;
        $this->genres = $genres;
        $this->description = $description;
    }

    public function formatGenres() {
        $formattedGenres = '';
        $count = count($this->genres);
        foreach ($this->genres as $index => $genre) {
            $formattedGenres .= $genre;
            if ($index < $count - 1) {
                $formattedGenres .= ', ';
            }
        }
        return $formattedGenres;
    }

    public function displayDetails() {
        $details = "Title: " . $this->title . "<br>";
        $details .= "Director: " . $this->director . "<br>";
        $details .= "Description: " . $this->description . "<br>";
        $details .= "Genres: " . $this->formatGenres() . "<br>";
        return $details;
    }
}

