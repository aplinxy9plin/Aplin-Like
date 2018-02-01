<!DOCTYPE html>
<html>
<head>
  <title>TOP4EK</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <meta charset="utf-8">
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
    <h1 style="text-align: center;">НАКРУТО4КА INSTAGRAM</h1>
    <div class="form-group" style="margin-top: 5%;">
      <form action="#" method="POST">
        <input type="text" name="link" style="opacity: 0.8; text-align: center;" placeholder="Ссылка на фото" class="form-control col-xs-3">
        <center><button class="btn btn-lg btn-primary" style="margin-top: 3%;">Накрутить 30</button></center>
      </form>
      <?
        $link = $_POST['link'];
        $pos = strpos($link, "http://www.instagram.com/p/");
        $posS = strpos($link, "https://www.instagram.com/p/");
        if($link != ""){
          if(($pos !== false)||($posS !== false)){
            $api = file_get_contents("http://api.instagram.com/oembed?url=".$link.""); 
            $apiObj = json_decode($api, true);
            $media_id = $apiObj['media_id'];
            //echo $media_id;
            //echo file_get_contents("http://75.102.21.228/add?id=".$media_id."");
            //echo '<script>window.location.href = "http://75.102.21.228/add?id='.$media_id.'";</script>';
            //echo ' <iframe style="border: none;" src="http://75.102.21.228/add?id='.$media_id.'" width="0" height="0" align="left">.</iframe>';
            //include("http://75.102.21.228/add?id=".$media_id."");
            //  header("http://75.102.21.228/add?id=".$media_id."");
            //require("http://75.102.21.228/add?id=".$media_id."");
            //fopen("http://75.102.21.228/add?id=".$media_id."", "r");
            header( "http://75.102.21.228/add?id=".$media_id."" );
            echo "<script>alert('Все работает, ждите! :)')</script>";
            echo "<p>Если накрутка прекратилась - повторите ввод ссылки и отправку, нажатием на кнопку.</p>";
          }else{
            echo "<script>alert('Ссылка введена неверно :Ссылка Проверь ввод :)')</script>";
          }
          if($link !== ""){
            print($arr[1]);
          }else{
            for ($i=0; $i < 3; $i++) { 
              echo ($apiObj);
            }
          }
        }
      ?>
    </div> 
  </div>
</div>
</body>
<style type="text/css">
  body { 
    background: url(http://getbg.net/upload/full/www.GetBg.net_3D-graphics_Rooster__3-D_graphics_104474_.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  p{
    border-color: white;
  }
</style>
</html>