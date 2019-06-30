<?php
date_default_timezone_set('UTC+2');
$time = date('H: i, j F ');

echo '
<form action="/learning/item-comment" method="POST">
<fieldset>
<legend>Leave your comment</legend>
<p>
<label>Name:</label></p>
<p>
<input type="text" name="user" />
</p>
<p>
<label>Comment:</label></p>
<textarea rows="5" cols="20" name="comment">
</textarea>
<input type="hidden" name="time" value=" '. $time.' ">
</fieldset><p><input type="submit" value="Submit" ></p></form>';

if(!empty($_POST['comment']) && !empty($_POST['user'])){
    $comment = $_POST['comment'];
    $user = $_POST['user'];
}
else {
    $comment = NULL;
    echo 'You must specify a comment';
}
$time =(!isset ($_POST['time']))? NULL: $_POST['time'];
if (($comment!= NULL) && ($time!= NULL))
{
    echo "<p><fieldset>Сomment received From $user at $time : <br>
    <fieldset> $comment </fieldset></fieldset> </p>";
}