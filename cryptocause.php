<?php
require_once 'credentials.class.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>Cryptocause</title>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="vendor/epoch/epoch.min.css">
      <script>
         var g_user = '<?php echo $username ?>';
         var g_password = '<?php echo $password ?>';
         var g_url = '<?php echo $url ?>';
         var g_port = '<?php echo $port ?>';
      </script>

      <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
      <script src="vendor/d3/d3.min.js"></script>
      <script src="vendor/epoch/epoch.min.js"></script>

      <script src="js/sha256.js"></script>
      <script src="js/util.js"></script>
      <script src="js/work-manager.js"></script>
      <script src="js/glminer.js"></script>

    </head>
    <body>
      <h1>Cryptocause</h1>
      <section>
        <p id="head"></p>
        <h5 id="hero">Cryptocause is a distributed computing project to use your extra CPU cycles for good. Just hit the START MINING button and you'll be raising bitcoins for good, right in the browser.</h5>
        <div id="divider"></div>
        <span id="hash"></span>
        <input type="radio" name="method" value="js" class="hidden"></input>
        <input type="radio" name="method" value="jsworker" class="checked" class="hidden"> </input>
        <input type="radio" name="method" value="webgl" class="hidden"> </input>
        <input id="threads" value="1024" class="hidden"/>
        <input type="checkbox" id="testmode" class="hidden">
        <div id="numandStart">
          <button id="start" onclick="begin_mining();">START<br>MINING</button>
          <!--<div id="userCount">10</div>-->
        </div>
        <!--<div id="statusBar"><div id="progress"></div></div>-->
        <div class="stats">
          <input id="total-hashes" />
          <span class="caption">hashes completed</span>
          <input id="hashes-per-second" />
          <span class="caption">hashes per second</span>
          <div id="meter" style="width: 300px; height: 200px"></div>
          <div id="graph" style="width: 400px; height: 200px"></div>
        </div>
      </section>
      <script>

      </script>
     </body>
</html>
