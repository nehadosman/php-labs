<?php
require_once("classes/Counter.php");
$counter = new counter();
$counter->increment_and_update();
$count = $counter->get_count();
echo "<h1> COUNT = $count <h1>";
