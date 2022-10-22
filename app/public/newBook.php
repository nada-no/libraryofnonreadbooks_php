<?php
include_once('commons/header.php');

if (isset($_POST['title']) && isset($_POST['author'])) {
    $book =  array(
        "title" => $_POST['title'],
        "author" => $_POST['author'],
        "toread" => isset($_POST['toread'])? 1 : 0
    );
    $Librarian->bookself->store($book);
   echo "<p>Book stored!</p>";
}
?>
<p><a href="index.php">See list of books</a></p>
<form action="newBook.php" method="POST" enctype="multipart/form-data">
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <label for="author">Author</label>
    <input type="text" name="author" id="author">
    <label for="toread">To Read</label>
    <input type="checkbox" name="toread" id="toread" value=1>
    <button type="submit">Submit</button>
</form>
<?php
include_once('commons/footer.php');
?>