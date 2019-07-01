<html>
<body>
<meta charset="utf-8">
<form action="/learning/item-forms" method="post" enctype="multipart/form-data">
    <input type="text" name="text">
    <input type="submit" value="Submit"></form>
</body>
</html>
<?php
$text = $_POST['text'];
echo $text ;
?>
<html>
<body>
<meta charset="utf-8">
<hr>
<form action="/learning/item-forms" method="post" enctype="multipart/form-data">
    <input type="checkbox" name="vehicle" value="Bike"> I have a bike<br>
    <input type="checkbox" name="vehicle" value="Car"> I have a car<br>
    <input type="checkbox" name="vehicle" value="Boat"> I have a boat<br>
    <input type="submit" value="Submit"></form>
</body>
</html>
<?php
$fire = $_POST['vehicle'] ;
if(isset($_POST['vehicle'])) {
    echo "You chose $fire";
}
?>

<html>
<body>
<meta charset="utf-8">
<hr>
Yes or No?
<form action="/learning/item-forms" method="post" enctype="multipart/form-data">
    <input type="radio" name="radio" value="Yes"> Yes<br>
    <input type="radio" name="radio" value="No"> No<br>
    <input type="submit" value="Submit"></form>
</body>
</html>
<?php
$fire = $_POST['radio'] ;
if(isset($_POST['radio'])) {
    echo "You chose $fire";
}
?>


<html>
<body>
<meta charset="utf-8">
<hr>
Hi?
<form action="/learning/item-forms" method="post" enctype="multipart/form-data">
    <button type="button" onclick="alert('Hi all!')">Click Me!</button>
</body>
</html>
<hr>



<select name="s" size="3" multiple>
    <optgroup label="List">
        <option value="One">One</option>
        <option value="Two">Two</option>
        <option value="Three">Three</option>
        <option value="Four">Four</option>
        <input type="submit" value="Submit"></form>
    </optgroup>
</select>
<?php
$fire = $_POST['s'] ;
if(isset($_POST['s'])) {
    echo "You chose $fire";
}
?>
<hr>

<html>
<body>
<meta charset="utf-8">
What is your name?
<form action="/learning/item-forms" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="enter your name">
    <input type="submit" value="Submit"></form>
</body>
</html>
<?php
$fire = $_POST['name'] ;
if(isset($_POST['name'])) {
    echo "Your name is $fire.";
}
?>