<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = true;

        if($user>7){
            echo "username lebih dari 7";
            $x = false;
        }
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "password kapital\n";
           $x = false;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "password kecil\n";
           $x = false;
        }
    
        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "password special character\n";
            $x = false;
        }
    
        if (!preg_match("/[0-9]/", $password)) {
            echo "password digit\n";
           $x = false;
        }
        if($pass<0){
            echo "password kurang dari 10";
            $x = false;
        }
        if( $x == true ){
            echo "berhasil";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <ul>
            <li>
                <label for="username">username</label>
            <input type="text" name="username" id="use">
            </li>
            <li>
                <label for="password">password</label>
            <input type="text" name="password" id="pass">
            </li>
            <li>
            <button type="submit">submit</button>
            </li>
        </ul>
    </form>
</body>
</html>