<?php
include_once('commons/header.php');

//modify the book
if(isset($_POST['title']) && isset($_POST['author'])){
    $modBook = array(
        "id" => $_GET['id'],
        "title" => $_POST['title'],
        "author" => $_POST['author'],
        "readed" => isset($_POST['readed']) ? 1 : 0
    );
    $Librarian->updateOne($modBook);
    echo "Book updated!";
}

//get the data of the book to modify
if (!empty($_GET['id'])) {
    $book = $Librarian->getOne($_GET['id']);
} else {
    die();
}

?>
<main>
    <form action="modifyBook.php?id=<?= $book['id']?>" method="POST" enctype="multipart/form-data" class="container">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?= $book['title'] ?>">
        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="<?= $book['author'] ?>">
        <label for="readed">Read</label>
        <?php
        if ($book['readed'] == 0) {
        ?>
            <input type="checkbox" name="readed" id="readed" value=1>
        <?php
        } else {
        ?>
            <input type="checkbox" name="readed" id="readed" value=1 checked>

        <?php
        }
        ?>
        <br>
        <button type="submit" class="btn btn-primary m-1">Submit</button>
    </form>
</main>
<?php
include_once('commons/footer.php');
?>