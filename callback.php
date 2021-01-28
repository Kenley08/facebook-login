<?php
  
    require_once("config.php");
    if (!session_id()) {
        session_start();
    }
    try {
        //nou pran token nan 
        $accessToken=$handler->getAccessToken();
    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        echo "Response Exception: " .$e->getMessage();
        exit();
    }catch (\Facebook\Exceptions\FacebookSDKException $e) {
        echo "SDK Exception: " .$e->getMessage();
        exit();
    }

    //si token nan pa egziste tounen nan paj login la
    if(!$accessToken){
        header('location:login.php');
        exit();
    }
//nou aksede ak mod oauth 2 a
    $oAuth2Client=$fb->getOAuth2Client();
    if($accessToken->isLongLived()){
        $accessToken=$oAuth2Client->getLongLivedAccessToken($accessToken);
        // n ap rekipere ki donne n ap pran
        $response=$fb->get("/me?fields=id,first_name,last_name,email",$accessToken);
        //nou fetch data yo an array
        $userData=$response->getGraphNode()->asArray();
        //nou mete data user yo nan session
        $_SESSION['userData']=$userData;
        $_SESSION['access_token']=(string) $accessToken;
        header('location:index.php');
        exit();
    }
?>