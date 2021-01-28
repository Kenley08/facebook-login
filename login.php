<?php
    require_once "config.php";
    $redirectTo="http://localhost/facebook-login/callback.php";
    $data=['email'];
    $fullUrl=$handler->getReAuthenticationUrl($redirectTo,$data);
    // echo $fullUrl;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<div class="container">
<form>
  <button type="button" onclick="window.location='<?php echo $fullUrl ?>'" class="btn btn-primary">Login with Facebook</button>
</form>
</div>




    <!-- <form >
        <input type="button" onclick="window.location='<?php echo $fullUrl ?>'" value="Login with Facebook">
    </form> -->
</body>
</html>
<!-- <a href="<\"> Login with Facebook </a>  -->