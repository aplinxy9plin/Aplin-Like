<!DOCTYPE html>
<html>
<head>
  <title>INSTAGRAM</title>
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
  <div id="loader"></div>
    <h1 style="text-align: center;">Поиск по логину</h1>
    <div class="form-group" style="margin-top: 5%;">
      <form action="#" method="POST">
        <input type="text" name="login" style="opacity: 0.8; text-align: center;" placeholder="Логин" class="form-control col-xs-3"><br>
        <center><button class="btn btn-lg semi-transparent-button">Найти</button>
</center>
      </form>
      <?php
        $login = $_POST['login'];
        if($login != ""){
          header("Location: https://www.instagram.com/".$login."");
        }      
      ?>
    </div> 
  </div>
</div>
</body>

<style type="text/css">
  body { 
    background: url(http://warp.la/wp-content/uploads/2016/11/AAEAAQAAAAAAAAgQAAAAJGQxZjU0NjBhLTUyNzUtNDRlNy1iNDk5LWI5NjE1ZjBhMWZkNg.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  .semi-transparent-button {
  display: block;
  box-sizing: border-box;
  margin: 0 auto;
  padding: 8px;
  max-width: 200px;
  background: #fff; /* fallback color for old browsers */
  background: rgba(255, 255, 255, 0.5);
  border-radius: 8px;
  color: #fff;
  text-align: center;
  text-decoration: none;
  letter-spacing: 1px;
  transition: all 0.3s ease-out;
}
.semi-transparent-button:hover,
.semi-transparent-button:focus,
.semi-transparent-button:active {
  background: #fff;
  color: #000;
  transition: all 0.5s ease-in;
}
.semi-transparent:focus {
  outline: none;
}

.is-blue {
  background: #1e348e; /* fallback color for old browsers */
  background: rgba(30, 52, 142, 0.5);
}
.is-blue:hover,
.is-blue:focus,
.is-blue:active {
  background: #1e348e; /* fallback color for old browsers */
  background: rgb(30, 52, 142);
  color: #fff;
}

.with-border {
  border: 1px solid #fff;
}
</html>	