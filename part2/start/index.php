<?php

use lib\Msg;

require_once 'config.php';
//libs
require_once SOURCE_BASE . 'libs/helper.php';
require_once SOURCE_BASE . 'libs/Auth.php';
require_once SOURCE_BASE . 'libs/router.php';

//Model
require_once SOURCE_BASE . 'models/abstract.model.php';
require_once SOURCE_BASE . 'models/user.model.php';
require_once SOURCE_BASE . 'models/topic.model.php';
require_once SOURCE_BASE . 'models/comment.model.php';



//MESSAGE
require_once SOURCE_BASE . 'libs/message.php';

//DB
require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/user.query.php';
require_once SOURCE_BASE . 'db/topic.query.php';
require_once SOURCE_BASE . 'db/comment.query.php';



//PARTIALS
require_once SOURCE_BASE . 'partials/topic-list-item.php';
require_once SOURCE_BASE . 'partials/topic-header-item.php';
require_once SOURCE_BASE . 'partials/header.php';
require_once SOURCE_BASE . 'partials/footer.php';


//VIEW
require_once SOURCE_BASE . 'views/home.php';
require_once SOURCE_BASE . 'views/login.php';
require_once SOURCE_BASE . 'views/register.php';
require_once SOURCE_BASE . 'views/topic/archive.php';
require_once SOURCE_BASE . 'views/topic/detail.php';
require_once SOURCE_BASE . 'views/topic/edit.php';





use function lib\route;
session_start();

try{

    \partials\header();
$url = parse_url(CURRENT_URI);
//最後の文字列を取り出すため
$rpath = str_replace(BASE_CONTEXT_PATH, '', $url['path']);
$method = strtolower($_SERVER['REQUEST_METHOD']);

route($rpath, $method);

\partials\footer();

} catch (Throwable $e){
    die('<h1>トラブル発生</h1>');

}





