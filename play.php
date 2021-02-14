<?php
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];
  $user_data = $update_data + $user_data;

print_r($user_data);
?>
