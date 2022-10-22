<?php
include_once('commons/header.php');
?>

<main>
    <p><a href="newBook.php"  class="btn btn-primary ms-3">Enter new book</a></p>

    <div class="container">
        <h3><?= $stats[0] ?> books in total. <?= $stats[1] ?> readed and <?= $stats[2] ?> to read. Aprox <?= $stats[3] == null ? $stats[4] : $stats[3] . " years and " . $stats[4] ?> months to read everything!</h3>
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Date Added</th>
            </tr>
            <?php
            foreach ($books as $book) {
                if ($book['toread'] == 1) {
            ?>
                    <tr>
                        <td><?= $book['title'] ?></td>
                        <td><?= $book['author'] ?></td>
                        <td><?= $book['dateinserted'] ?></td>
                    </tr>
                <?php
                } else {
                ?>
                    <td><del><?= $book['title'] ?></del></td>
                    <td><del><?= $book['author'] ?></del></td>
                    <td><del><?= $book['dateinserted'] ?></del></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</main>
<?php
include_once('commons/footer.php');
?>