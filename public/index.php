<?php

// when are we counting down until?
$target = "December 25th";

$target_date = new DateTime($target);
$diff = $target_date->diff(new DateTime());

?>

There are <?=$diff->days?> days until Christmas
