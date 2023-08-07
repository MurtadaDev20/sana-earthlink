<?php
include '../function/config.php' ?>

<?php
// api.php

// Retrieve the requested data
$dataint = fetchDataint(); // Implement this function to fetch the data

// Set the response headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Allowing cross-origin requests (can be restricted to specific domains)

// Format and return the response
echo json_encode($dataint);

// Function to fetch the data

function fetchDataint()
{
     global $con;
    
    


    $sql = "SELECT COUNT(*) as count, 
                CASE 
                    WHEN type = 'subr_name' THEN 'Internal'
                    WHEN type = 'name_recipient' THEN 'External'
                    ELSE 'Unknown Type' 
                END as label 
        FROM
                (SELECT 'subr_name' as type FROM completed_order
                UNION ALL
                SELECT 'name_recipient' as type FROM completed_order_external) as combined
        GROUP BY type";

    $result = mysqli_query($con, $sql);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    $chart_data = array();
    $chart_data[] = array('Type', 'Count');

    foreach ($data as $row) {
        $chart_data[] = array($row['label'], intval($row['count']));
    }
    return $data;
}




?>