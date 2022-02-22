<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>みんなのアンケート</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"
</head>
<body>
    <div id="container">

    <header class="container my-2">
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
    </header>
    <main class="container py-3">
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
    </form>

    </div>


    </main>

    <footer></footer>
    

    </div>




    <?php
    use lib\Auth;
    use lib\Msg;

    Msg::flush(); 
    ?>
