<?php
include_once('commons/header.php');
?>

<main>
    <p><a href="newBook.php">Enter new book</a></p>

    <div>
        <ul>
            <?php
            foreach ($books as $book) {
                if($book['toread'] == 1){
            ?>
                <li><?= $book['title'] ?></li>
            <?php
                }else{
                    ?>
                    <li><del><?= $book['title'] ?></del></li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
</main>
<?php
include_once('commons/footer.php');
?>