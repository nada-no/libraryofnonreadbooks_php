<?php
include_once('commons/header.php');

//parse the document
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $Librarian->parseFile($file);
}

?>
<main class="container">
    <p>Enter a list of books titles and authors separated by "-"</p>
    <form method="post" action="import.php" enctype="multipart/form-data">
        <label for="file">Upload a file with books data </label>
        <input type="file" name="file">
        <br>
        <button type="submit" class="btn btn-primary m-1">Submit</button>
    </form>
</main>