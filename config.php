<?php
    //  session_start();
    require_once "Facebook/autoload.php";
    if (!session_id()) {
        session_start();
    }
    $fb=new \Facebook\Facebook([
        'app_id'=>'1028857617607688',
        'app_secret'=>'777af4b4605e4afa6eacd23b7268ba85',
        'default_graph_version'=>'v2.10'

    ]);
 
    $handler=$fb->getRedirectLoginHelper();

?>