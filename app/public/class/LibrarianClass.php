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

    function getOne($id)
    {
        $book = $this->bookself->getOneBook($id);
        return $book;
    }

    function updateOne($book)
    {
        $this->bookself->updateBook($book);
    }

    function getStadistics()
    {
        $books = count($this->bookself->getAllBooks());
        $unread = count($this->bookself->getUnreadBooks());
        $read = $books - $unread;
        $YearsToComplete = $unread / 12 < 1 ? null : floor($unread / 12); //aprox 1 month per book
        $MonthsToComplete = $unread % 12;

        return [$books, $read, $unread, $YearsToComplete, $MonthsToComplete];
    }

    function parseFile($file)
    {
        // var_dump($file);
        if($file['type'] != "text/plain"){
            echo "Sorry, you need a .txt file";
            die();
        }

        $reader = fopen($file['tmp_name'], "r") or die("Unable to open file!");
        while(!feof($reader)){
            $line = fgets($reader);
            $book = explode("-",$line);
            if(!isset($book[2])) $book[2] = 0; //if theres no info about the read status, set it to unread
            var_dump($book);
            $book = array(
                "title" => $book[0],
                "author"=> $book[1],
                "readed"=> $book[2]
            );
            $this->bookself->store($book);

        }
        fclose($reader);
    }
}
