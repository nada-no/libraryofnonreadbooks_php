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

    function getOne($id){
        $book = $this->bookself->getOneBook($id);
        return $book;
    }

    function updateOne($book){
        $this->bookself->updateBook($book);
    }

    function getStadistics(){
        $books = count($this->bookself->getAllBooks());
        $unread = count($this->bookself->getUnreadBooks());
        $read = $books - $unread;
        $YearsToComplete = $unread / 12 < 1 ? null : floor($unread / 12) ; //aprox 1 month per book
        $MonthsToComplete = $unread %12;

        return [$books,$read,$unread,$YearsToComplete,$MonthsToComplete];
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
