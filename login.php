<?php
	require_once("./partials/header.php");
?>
<link rel="stylesheet" href="css/login.css">

<body>
<div class="wrapper">
  <div id="formContent">
    <form method="POST" action="authorize.php">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
  </div>
</div>

</body>
