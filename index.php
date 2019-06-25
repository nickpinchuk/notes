<?php

$mapping = array(
    '/learning/item-array' => 'learning_item/array.php',
    '/learning/item-functions' => 'functions.php',
    '/learning/item-cycles' => 'cycles.php'
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
