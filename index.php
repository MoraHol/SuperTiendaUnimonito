<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>login | Unimonito</title>
  <link rel="stylesheet" href="/css/login.css">
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vendor/font-awesome/font-awesome.min.css">
</head>

<body>
  <div class="main">
    <div class="container">
      <center>
        <div class="middle">
          <div id="login">
            <form action="javascript:void(0);" id="form-login">
              <fieldset class="clearfix">
                <p><span class="fa fa-user"></span><input type="text" Placeholder="Cedula" required name="cedula"></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <div>
                  <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Iniciar Sesion"></span>
                </div>
              </fieldset>
              <div class="clearfix"></div>
            </form>
            <div class="clearfix"></div>
          </div> <!-- end login -->
          <div class="logo">
            <img src="/img/uniminuto.jpg" width="100">
            <div class="clearfix"></div>
          </div>
        </div>
      </center>
    </div>

  </div>
  <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="/vendor/bootstrap/js/tooltip.js"></script>
  <script src="/vendor/bootstrap/js/popper.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/vendor/notify/bootstrap-notify.js"></script>
  <script src="/js/login.js"></script>
</body>

</html>