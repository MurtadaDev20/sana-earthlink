<?php
include '../function/config.php' ?>

<?php
// api.php

// Retrieve the requested data
$data = fetchData(); // Implement this function to fetch the data

// Set the response headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Allowing cross-origin requests (can be restricted to specific domains)

// Format and return the response
echo json_encode($data);

// Function to fetch the data

function fetchData()
{
    global $con;
    $supervisor = mysqli_query($con, "SELECT * FROM `supervisor` ORDER BY `id` DESC");

    while ($rowsub = mysqli_fetch_assoc($supervisor)) {
        $data[] = $rowsub;
    }


    return $data;
}


?>