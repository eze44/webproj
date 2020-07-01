<?php
	require_once("./partials/header.php");
?>
<link rel="stylesheet" href="css/login.css">

<body>
<div class="wrapper">
  <div id="formContent">
    <form method="POST" action="authorize.php">
      <input type="text" id="login" class="second" name="email" placeholder="email">
      <input type="password" id="password" class="third" name="password" placeholder="password">
      <input type="submit" class="fourth" value="Log In">
    </form>
  </div>
</div>

</body>
