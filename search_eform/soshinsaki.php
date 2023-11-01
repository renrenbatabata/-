<html>
    <head>
        <title>User List</title>
    </head>
    <body>
        <form action="user_list.php" method="post">
            ID:<input type="text" name="id" value="<?php echo $_POST['id']?>">
            <?php
                if(preg_match("/[^0-9A-Za-z]/", $_POST['id'])){
                   echo " IDは英数字で入力してください！";
                }
            ?>
            <br>
            Name:<input type="text" name="user_name" value="<?php echo $_POST['user_name']?>"><br>
            <input type="submit">
        </form>
    </body>
</html>