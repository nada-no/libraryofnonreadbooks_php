<!DOCTYPE html>
<html>

<head>
    <title>Bookself</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php
        require('class/LibrarianClass.php');
        include_once('commons/header.php');

        $Librarian = new Librarian();
        $books = $Librarian->getBooks();
        $stats = $Librarian->getStadistics();
        ?>

        <h1 class="bd-title m-3">Library of non read books</h1>
    </header>