

<html>
<body>
<meta charset="utf-8">
<form action="/learning/item-files-save" method="post" enctype="multipart/form-data">
    <input type="file" name="userFile">
    <input type="submit" value="Submit"></form>
</body>
</html>






<?php
echo "<html><table border=\"1\">\n\n";

$f = fopen($_FILES['userFile']['tmp_name'], "r");

while ($line = fgetcsv($f) !== false) {
    echo "<tr>";
    foreach ($line as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>\n";
}
fclose($f);
echo "\n</table></html>";

$info = pathinfo($_FILES['userFile']['name']);
$ext = $info['extension'];
$newname = "newname.".$ext;

$target = '/var/www/firstsite.loc/html/'.$newname;
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
?>
