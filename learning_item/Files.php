<html>
<body>
<meta charset="utf-8">
<form action="/learning/item-Files" method="post" enctype="multipart/form-data">
    <input type="file" name="UserFile">
    <input type="submit" value="Submit"></form>
</body>
</html>






<?php
echo "<html><table border=\"1\">\n\n";

$f = fopen($_FILES['UserFile']['tmp_name'], "r");

while (($line = fgetcsv($f))) {
    echo "<tr>";
    foreach ($line as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>\n";
}
fclose($f);
echo "\n</table></html>";

?>

