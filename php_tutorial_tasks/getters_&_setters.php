<?php

class Movie
{
    public $title;
    private $rating;

    function __construct($title, $rating)
    {
        $this->title = $title;
        $this->setRating($rating);
    }

    function getRating()
    {
        return $this->rating;
    }

    //rating for this object is equal to the rating that got passed in
    // function setRating($rating)
    // {
    //     $this->rating = $rating;
    // }

    function setRating($rating)
    {
        if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R") {
            //if it passes this if statement condition, that means it's one of the valid ratings, so we can just go ahead and set it
            $this->rating = $rating;
        } else {
            $this->rating = "NR";
        }
    }
}

$avengers = new Movie("Avengers", "PG-13");
//valid ratings: G, PG, PG-13, R, NR

echo $avengers->rating; //cannot access

//it's allowing us to set the rating, even tho the rating itself is private
// echo $avengers->setRating("dog"); // dog

echo $avengers->getRating(); // PG-13

//after if statement that print "NR" instead of dog, because we passed invalid rating
echo $avengers->setRating("dog"); // NR
