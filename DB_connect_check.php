<?php
$link = mysqli_connect("<YOUR_HOST>", "USER_DB", "PASS", "DB");


if (!$link) {
   echo "Error" . PHP_EOL;
   echo "Code err " . mysqli_connect_errno() . PHP_EOL;
   echo "Text error: " . mysqli_connect_error() . PHP_EOL;
   exit;
}

echo "Connected" . PHP_EOL;
echo "Server: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>
