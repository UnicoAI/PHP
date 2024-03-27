<?php include 'header.php'; ?>
<div class="intro">
    <h1> HTTP User Agent</h1>
<?php echo $_SERVER["HTTP_USER_AGENT"]; ?>
<H1>Server Name</h1>
<?php echo $_SERVER["SERVER_NAME"]; ?>
<h2> Server Protocol</h2>
<?php echo $_SERVER["SERVER_PROTOCOL"]; ?>
</div>
</body>
</html>