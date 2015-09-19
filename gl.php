<?php
require_once 'credentials.class.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>Charity Mine</title>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="style.css">
      <script>
         var g_user = '<?php echo $username ?>';
         var g_password = '<?php echo $password ?>';
         var g_url = '<?php echo $url ?>';
         var g_port = '<?php echo $port ?>';
      </script>

      <SCRIPT src="http://code.jquery.com/jquery-1.11.0.min.js"></SCRIPT>
      <SCRIPT src="sha256.js"></SCRIPT>
      <SCRIPT src="util.js"></SCRIPT>
      <SCRIPT src="work-manager.js"></SCRIPT>
      <SCRIPT src="glminer.js"></SCRIPT>
    </head>

    <BODY>
        <h1>CHARITY MINE</h1>
        <p>Charity Mine lets you collectively mine bitcoins with <br> others for a good cause. Just hit the START MINING <br> button and you'll be raising bitcoins for good.</p>
        <div id="divider"></div>
        <h5>No installation. Efficient mining. <br> Collaborative charity.</h5>
        <div id="control">
    		<input type="radio" name="method" value="js" class="hidden"></input>
    		<input type="radio" name="method" value="jsworker" class="hidden"> </input>
    		<input type="radio" name="method" value="webgl" checked="checked" class="hidden"> </input>
        <input id="threads" value="1024" class="hidden"/>
    		<input type="checkbox" id="testmode" checked="checked" class="hidden">
    		<br><br><button id="start" onclick="begin_mining(); document.getElementById('start').style.display = 'none';">START<br> MINING</button>
        </div>
		<br />Total Hashes: <INPUT id="total-hashes" />
		<br />Hash/s: <INPUT id="hashes-per-second" />
		<BR/>
		<BR/>
     </BODY>

</html>
