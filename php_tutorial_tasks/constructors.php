<?php
// class Book
// {
//     var $title;
//     var $author;
//     var $pages;

//     function __construct($name)
//     {
//         // echo "New book created <br>";
//         echo $name;
//     }
// }

// $book1 = new Book("mike");
// $book1->title = "Harry Potter";
// $book1->author = "JK Rowling";
// $book1->pages = 500;

// $book2 = new Book("jack");
// $book2->title = "Lord of the rings";
// $book2->author = "Tolkien";
// $book2->pages = 700;

//-----mike jack


class Book
{
    var $title;
    var $author;
    var $pages;

    function __construct($aTitle, $aAuthor, $aPages)
    {
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
    }
}

$book1 = new Book("harry potter", "JK Rowling", 400);

//modify value
$book1->title = "hunger games";

//------same as------->
// $book1->title = "Harry Potter";
// $book1->author = "JK Rowling";
// $book1->pages = 500;

$book2 = new Book("lord of the rings", "Tolkien", 1200);
// $book2->title = "Lord of the rings";
// $book2->author = "Tolkien";
// $book2->pages = 700;

// echo $book1->title; //harry potter