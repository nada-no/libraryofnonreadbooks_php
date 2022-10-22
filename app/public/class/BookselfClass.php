<?php

class Bookself
{

    private $pdo = null;
    private $user = null;
    private $pass = null;
    private $database = null;
    private $dsn = null;
    private $attributes = null;

    function __construct()
    {
        $this->user = "root";
        $this->pass = "secret";
        $this->database = "bookself";
        $this->attributes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $this->dsn = "mysql:dbname=$this->database;host=mysql";
    }

    function connect()
    {
        try {
            $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $this->attributes);
        } catch (Exception $ex) {
            exit($ex->getMessage());
        }
    }

    function disconnect()
    {
        $this->pdo = null;
    }

    function getAllBooks()
    {
        $this->connect();
        $query = $this->pdo->prepare(
            'select * from books'
        );
        $query->execute();
        $books = $query->fetchAll();
        $this->disconnect();


        return $books;
    }

    function getOneBook($id){
        $this->connect();
        $query = $this->pdo->prepare(
            "select * from books where id=$id"
        );
        $query->execute();
        $book = $query->fetchAll();
        $this->disconnect();
        return $book[0];  //return only the first book (theres no more books)
    }

    function getUnreadBooks(){
        $this->connect();
        $query = $this->pdo->prepare(
            'select * from books where readed = 0'
        );
        $query->execute();
        $books = $query->fetchAll();
        $this->disconnect();


        return $books;
    }

    function store($book)
    {
        try {
            $this->connect();
            $sql=$this->pdo->prepare('insert into books (title,author,readed) values (?,?,?)');
            $sql->execute([$book['title'],$book['author'],$book['readed']]);

        } catch (PDOException $error) {
            echo "<br>" . $error->getMessage();
        }
        $this->disconnect();
    }

    function updateBook($book) {
        try {
            $this->connect();
            $sql=$this->pdo->prepare('update books set title=?, author=?, readed=? where id=?');
            $sql->execute([$book['title'],$book['author'],$book['readed'],$book['id']]);

        } catch (PDOException $error) {
            echo "<br>" . $error->getMessage();
        }
        $this->disconnect();
    }
}
