<?php
//insert.php
if(isset($_POST["subject"]))
{
 include("connect.php");

 $comment_subject = mysqli_real_escape_string($connect, $_POST["comment_subject"]);
 $comment_text = mysqli_real_escape_string($connect, $_POST["comment_text"]);
 $query = "
 INSERT INTO comments(comment_subject, comment_text)
 VALUES ('$comment_subject', '$comment_text')
 ";
 mysqli_query($connect, $query);
}
?>
