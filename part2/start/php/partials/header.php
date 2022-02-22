<?php
 use lib\Auth;
 use lib\Msg;
?>
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
    <link rel="stylesheet" href="<?php echo BASE_CSS_PATH; ?>style.css"> 
    
</head>
<body>
<div id="container">
        <header class="container my-2">
            <nav class="row align-items-center py-2">
                <a href="<?php the_url('/'); ?>" class="col-md d-flex align-items-center mb-3 mb-md-0">
                    <img width="50" class="mr-2" src="<?php echo BASE_IMAGE_PATH;?>logo.svg" alt="みんなのアンケート　サイトロゴ">
                    <span class="h2 font-weight-bold mb-0">みんなのアンケート</span>
                </a>
                <div class="col-md-auto">
                    <?php if(true) : ?>
                    <a href="<?php the_url('register'); ?>" class="btn btn-primary mr-2">登録</a>
                    <a href="<?php the_url('login'); ?>">ログイン</a>
                    <?php else: ?>
                        <!--ログインしてる時-->
                    <?php endif; ?>
                </div>
            </nav>
        </header>
        <main class="container py-3">   <!--真ん中の枠-->



    <?php Msg::flush(); 
    ?>
