<?php
class Book
{
    var $title;
    var $author;
    var $pages;
}

// $book1 = new Book;
$book1->title = "Harry Potter";
$book1->author = "JK Rowling";
$book1->pages = 500;

// $book2 = new Book;
$book2->title = "Lord of the rings";
$book2->author = "Tolkien";
$book2->pages = 700;

echo $book1->author; //JK Rowling