<?php
include_once 'conn.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment=$_POST['comment'];
    $gender=$_POST['gender'];
    $q = " INSERT INTO userform(name,email, comment, gender) 
        VALUES ('$name','$email','$comment','$gender')";
     if($query = mysqli_query($con,$q))
 {
    echo "sucessful";
 }
 else
    {
        echo "Error".$sql."<br>".mysqli_error($con);
    }
    mysqli_close($con);
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

