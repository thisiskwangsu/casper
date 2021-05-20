//회원가입한것을 db에 넣는 곳 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contents</title>
    <?php
        // $mysqli = mysqli_connect("example.com", "user", "password", "database");
        // $result = mysqli_query($mysqli, "SELECT 'Please do not use the deprecated mysql extension for new development. ' AS _msg FROM DUAL");
        // $row = mysqli_fetch_assoc($result);
        // echo $row['_msg'];
        $conn = mysqli_connect('localhost', 'root', 'limlim', 'members'); //db접속
        $sql = "INSERT INTO topic (login_id, login_pw, created)
            VALUE('{$_POST['new_id']}', '{$_POST['new_pw']}', NOW())";
        $result = mysqli_query($conn, $sql); //mysqli_connect를 통해 연결된 객체를 이용하여 mysql 쿼리를 실행시킴
        if (!mysqli_connect_errno()){
            echo mysqli_error($conn); //서비스 할때는 하면 안됨
        }
    ?>
</head>
<body>
    <a href="index.php">로그인</a>
</body>
</html>