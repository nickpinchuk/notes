<?php

$mapping = array(
    '/learning/item-array' =>
        array('learning_item/array.php', 'Array'),
    '/learning/item-functions' =>
        array('learning_item/functions.php', 'functions'),
    '/learning/item-cycles' =>
        array('learning_item/cycles.php', 'cycles'),
    '/learning/item-files' =>
        array('learning_item/Files.php', 'Files'),
    '/learning/item-comment' =>
        array('learning_item/Comment.php', 'Comment')


);

$uri = $_SERVER['REQUEST_URI'];

if (isset($mapping[$uri])) {
    include $mapping[$uri];
}
else {
    ?>
    <html>
    <meta charset="utf-8">
    <table border="1" width="200" height="30">
        <th>PHP</th>
        <?php
        foreach ($mapping as $uri => $path) {
            ?>
            <tr>
                <td><a href=<?php echo $uri; ?>> Lessen</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    </html>
    <?php
}
