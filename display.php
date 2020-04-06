
<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>comment</th>
            <th>gender</th>
            <th> Delete </th>
            <th> Update </th>

        </tr>

        <?php
        include_once 'conn.php';
        $q= "select * from userform";
        $query = mysqli_query($con,$q);

        while($res = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td> <?php echo $res['id'];  ?> </td>
            <td> <?php echo $res['name'];  ?> </td>
            <td> <?php echo $res['email'];  ?> </td>
            <td> <?php echo $res['comment'];  ?> </td>
            <td> <?php echo $res['gender'];  ?> </td>
            <td> <button> <a href="delete.php?id=<?php echo $res['id']; ?>"> Delete </a>  </button> </td>
            <td> <button> <a href="update.php?id=<?php echo $res['id']; ?>"> Update </a> </button> </td>
        </tr>
        <?php
    }
        ?>
        </table>
    </form>
</body>
</html>

