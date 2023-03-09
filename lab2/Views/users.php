<?php

$users = convert_file_to_array();
$types = ["Visit Date", "IP", "Name", "Email", "Message"];
foreach ($users as $user) {
  $counter = 0;
  $user_details = explode(",", $user);
  echo str_repeat(" * ", 10);
  echo " User ";
  echo str_repeat(" * ", 10);
  echo "<div>";
  foreach ($user_details as $value) {
    echo "<h4>$types[$counter]: $value </h4>";
    $counter++;
  }
  echo "</div>";
}
?>