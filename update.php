<?php

 include 'conn.php';

 if(isset($_POST['submit'])){

 $id = $_GET['id'];
 $name = $_POST['name'];
 $email = $_POST['email'];
$comment=$_POST['comment'];
$gender=$_POST['gender'];

 $q = " update userform set id=$id, name='$name', email='$email',comment='$comment',gender='$gender' where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:display.php');
 }

?>

<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <table>
        <tr>
            <td>name:</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Comment:</td>
            <td><textarea name='comment' rows="4" cols="30"></textarea></td>
        <tr>
            <td>Gender:</td>
            <td><input type="radio" name="gender" value="male" > Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other</td>
        </tr>
        <tr>
            <td><button type="submit" name="submit"> Submit </button></td>
        </tr>
        </table>
    </form>
</body>
</html>

