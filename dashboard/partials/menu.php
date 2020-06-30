<?php

require_once(__DIR__ . "/../../domain/models/role.php");

$showAuthors = true;
$showPosts = true;
$showResources = true;

if ((int)$_SESSION["role"] == Role::$USER_ROLE) {
  $showAuthors = false;
}

?>

<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">Dashboard panel</div>
  <div class="list-group list-group-flush">
    <?php if($showPosts): ?>
    <a href="/dashboard?page=posts" class="list-group-item list-group-item-action bg-light">Posts</a>
    <?php endif; ?>
    <?php if($showResources): ?>
    <!-- <a href="/dashboard?page=resources" class="list-group-item list-group-item-action bg-light">Resources</a> -->
    <?php endif; ?>
    <?php if($showAuthors): ?>
    <a href="/dashboard?page=authors" class="list-group-item list-group-item-action bg-light">Authors</a>
    <?php endif; ?>
  </div>
</div>
