<?php

require('BookselfClass.php');

class Librarian
{
    public $bookself = null;

    function __construct()
    {
        $this->bookself = new Bookself();
    }

    function getBooks()
    {
        $books = $this->bookself->getAllBooks();
        return $books;
    }

    // function storeBook(){
    //     $book =  array(
    //         "title" => $_POST['title'],
    //         "author" => $_POST['author'],
    //         "toread" => 1
    //     );
    //     $this->bookself->store($book);
    // }
}
