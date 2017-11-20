<?php

// Create MySQL DB Connection Instance

$conn = new mysqli(
  "aa13ncrypeit0um.cbjusgnuba1a.us-east-2.rds.amazonaws.com",
    "collegeknight",
    "collegeknight",
    "php-dev"
);

//Check DB Connection

if (mysqli_connect_errno()) {
    echo "OOOOPS - Coud not connect to the database! \n", $conn->connect_error;
};

/* activate reporting */
$driver = new mysqli_driver();
// $driver->report_mode = MYSQLI_REPORT_ALL;
#All errors except those about indexes
$driver->report_mode = MYSQLI_REPORT_ALL & ~MYSQLI_REPORT_INDEX;
