<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>みんなのアンケート</title>
</head>
<body>
    <?php
    use lib\Auth;
    use lib\Msg;

    Msg::flush(); 


    if(Auth::islogin()){
        echo 'ログイン中';
    } else {
            echo 'ログインしてないよ';
    }

    ?>
