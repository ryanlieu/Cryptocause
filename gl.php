<?php
require_once 'credentials.class.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>Charity Mine</title>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
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
        <h2>$352 RAISED THIS MONTH</h2>
        <p>Charity Mine lets you collectively mine bitcoins with others for a good cause.<br>Just hit Get Mining! And you'll be raising bitcoins for a good cause instantly.</p>
        <h3>No installation. Efficient mining. Collaborative charity.</h3>
        <div id="control">
    		<br />Mine Method:
    		<input type="radio" name="method" value="js" checked="checked"> Javascript
    		<input type="radio" name="method" value="jsworker"> WebWorker
    		<input type="radio" name="method" value="webgl"> WebGL
    		<br />WebGL Threads: <INPUT id="threads" value="1024"/>
    		<br /><input type="checkbox" id="testmode"> Testmode (Nonce will be found after ~18 khashes)
    		<br><br><button id="start" onclick="begin_mining(); document.getElementById('start').style.display = 'none';">Get Mining!</button>
        </div>
		<br />
        <br />pool: <?php echo $url ?>:<?php echo $port ?>
		<br />Total Hashes: <INPUT id="total-hashes" />
		<br />Hash/s: <INPUT id="hashes-per-second" />
		<br />Target/Difficulty: <INPUT id="target" />
		<br />Golden Ticket: <INPUT id="golden-ticket" />
		<BR/>
		<br />Info: <textarea id="info" style="width: 400px; height: 300px;"></textarea>
		<BR/>
     </BODY>

</html>
