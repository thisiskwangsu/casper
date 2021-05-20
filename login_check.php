//로그인 성공여부
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN_성공 실패</title>
    <?php
    // $mysqli = mysqli_connect("example.com", "user", "password", "database");
    // $result = mysqli_query($mysqli, "SELECT 'Please do not use the deprecated mysql extension for new development. ' AS _msg FROM DUAL");
    // $row = mysqli_fetch_assoc($result);
    // echo $row['_msg'];
    $conn = mysqli_connect('localhost', 'root', 'limlim', 'members'); //DB접속
    
    if(mysqli_connect_errno()){
        echo mysqli_error($conn);
    }

    $login_id = $_POST['id'];
    $login_pw = $_POST['password'];

    $sql = "SELECT * FROM topic WHERE login_id = '$login_id' and login_pw = '$login_pw'";
    $res = $conn -> query($sql);
    
    if (mysqli_num_rows($res)>0){
        echo "로그인 성공";
        echo $sql;
    } else{
        echo "로그인 실패";
    }
?>
</head>
<body>
    
</body>
</html>