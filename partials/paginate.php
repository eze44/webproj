<?php
  $prev = "?" . "paginate=" . ((int) $_GET["paginate"] - 1);
  $next = "?" . "paginate=" . ((int) $_GET["paginate"] + 1);
?>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="<?php echo $prev; ?>">Previous</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo $next; ?>">Next</a></li>
  </ul>
</nav>
