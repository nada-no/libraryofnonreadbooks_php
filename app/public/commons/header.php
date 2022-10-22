<!DOCTYPE html>
<html>

<head>
    <title>Bookself</title>
    <link href="../css/styles.css" rel="stylesheet">
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
        <div class="container">
            <p class="d-inline"><a href="index.php" class="btn btn-primary ms-3 my-2">Go to the list</a></p>
            <p class="d-inline"><a href="newBook.php" class="btn btn-primary ms-3 my-2">Enter new book</a></p>
            <p class="d-inline"><a href="import.php" class="btn btn-primary ms-3 my-2">Import list file</a></p>
        </div>
    </header>