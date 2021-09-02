<?php
header('Content-Type: application/json'); 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
include('data.php');
$arr =  array(
    "info" => array (
        "Title" => "Victorian Caronavirus Statistics",
        "All infomation from" => " https://www.coronavirus.vic.gov.au/victorian-coronavirus-covid-19-data",
        "Credits" =>"Made by Jack Sam, @wacko1805",
        "Github" => "https://github.com/eacko1805/vic-covid-stats"
        
),
    "active_cases" => array(
        "cases_acquired_locally_24h" => (strip_tags("$local")),
        "internationally_acquired_and_in_quarantine_24h" => (strip_tags("$inter")),
        "active_cases" => (strip_tags("$current"))
    ),
    "Total_tests_and_total_cases" => array(
        "test_results_received_24h" => (strip_tags("$testresults_24h")),
        "total_tests" => (strip_tags("$total_tests")),
        "total_cases" => (strip_tags("$cases"))
    ),
    "Lives_lost_and_recovered " => array(
        "lives_lost_24h" => (strip_tags("$liveslost_24h")),
        "total_lives_lost" => (strip_tags("$total_liveslost")),
        "recovered" => (strip_tags("$recovered"))
    ),
    "Current_cases_in_hospital" => array(
        "cases_in_hospital" => (strip_tags("$hospital")),
        "cases_in_icu" => (strip_tags("$icu"))
    ),
);
echo json_encode($arr);
?>