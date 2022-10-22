<?php
include_once('commons/header.php');

if (isset($_POST['title']) && isset($_POST['author'])) {
    $book =  array(
        "title" => $_POST['title'],
        "author" => $_POST['author'],
        "readed" => isset($_POST['readed']) ? 0 : 1
    );
    $Librarian->bookself->store($book);
    echo "<p>Book stored!</p>";
}
?>
<main>
    <form action="newBook.php" method="POST" enctype="multipart/form-data" class="container">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="author">Author</label>
        <input type="text" name="author" id="author">
        <label for="readed">Read</label>
        <input type="checkbox" name="readed" id="readed" value=1>
        <br>
        <button type="submit" class="btn btn-primary m-1">Submit</button>
    </form>
</main>
<?php
include_once('commons/footer.php');
?>