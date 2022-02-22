<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>みんなのアンケート</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Shizuru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div id="container">
        <header class="container my-2">        <!--上のヘッダー-->
        <nav class="row align-items-center py-2">
            <a href="" class="col-md d-flex align-items-center mb-3 mb-md-o">
                <img width="50" class="mr-2" src="images/logo.svg" alt="みんなのアンケート　サイトロゴ">
                <span class="h2 font-weight-bold mb-0">みんなのアンケート</span>
            </a>
            <div class="col-md-auto">

                <a href="" class="btn btn-primary mr-2">登録</a>
                <a href="">ログイン</a>

            </div>
        </nav>

    </header>　   <!--上のヘッダー-->

    <main class="container py-3">   <!--真ん中の枠-->
        <h1 class="sr-only">ログイン</h1>
        <div class="mt-5">
        <div class="text-center mb-4">
            <image width="65" src="images/logo.svg" alt="みんなのアンケート　サイトロゴ">
        </div>
    <div class="login-form bg-white p-4 shadow-sm mx-auto rounded">

    <form action="">
            <div class="form-group">
        <label for="">ユーザーID</label>
        <input type="text" class="form-control">
            </div>
            <div class="form-group">
        <label for="">パスワード</label>
        <input type="password" class="form-control">
            </div>
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <a href="">アカウント登録</a>
            </div>
            <div>
            <input type="submit" value="ログイン" class="btn btn-primary shadow-sm">
            </div>
        </div>
    </form>

    </div>

        </div>
        


    </main> <!--真ん中の枠-->

    <footer class="text-center p-3">
        <span class="text-muted"> &copy; SEIICHI</span>
    </footer>
    

    </div>




    <?php
    use lib\Auth;
    use lib\Msg;

    Msg::flush(); 
    ?>
