<?php
include_once('commons/header.php');
?>

<main>
    <p><a href="newBook.php" class="btn btn-primary ms-3 my-2">Enter new book</a></p>

    <div class="container">
        <h3><?= $stats[0] ?> books in total. <?= $stats[1] ?> read and <?= $stats[2] ?> to read. Aprox <?= $stats[3] == null ? $stats[4] : $stats[3] . " years and " . $stats[4] ?> months to read everything!</h3>
        <table class="table">
            <tr>
                <th></th>
                <th>Title</th>
                <th>Author</th>
                <th>Date Added</th>
            </tr>
            <?php
            foreach ($books as $book) {
                if ($book['readed'] == 0) {
            ?>
                    <tr>
                        <td><a href="modifyBook.php?id=<?= $book['id'] ?>"><svg id="i-edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M30 7 L25 2 5 22 3 29 10 27 Z M21 6 L26 11 Z M5 22 L10 27 Z" />
                                </svg></td>
                        <td><?= $book['title'] ?></td>
                        <td><?= $book['author'] ?></td>
                        <td><?= $book['dateinserted'] ?></td>
                    </tr>
                <?php
                } else {
                ?>
                    <td><a href="modifyBook.php?id=<?= $book['id'] ?>"><svg id="i-edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M30 7 L25 2 5 22 3 29 10 27 Z M21 6 L26 11 Z M5 22 L10 27 Z" />
                                </svg></td>
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