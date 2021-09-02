<?php
include('data.php');
echo "<h1>Victorian COVID Data</h1>";
echo "<h1>active cases</h1><br>";
echo "cases acquired locally (last 24 hours)". $local;
echo "<br>internationally acquired & in quarantine (last 24 hours)". $inter;
echo "<br>active cases". $current;

echo "<h1>Total tests and total cases</h1>";
echo "test results received (last 24 hours)". $testresults_24h;
echo "<br>total tests". $total_tests;
echo "<br>total cases".$cases;

echo "<h1>Lives lost and recovered </h1>";
echo "lives lost (last 24 hours)". $liveslost_24h;
echo "<br>total lives lost". $total_liveslost;
echo "<br>recovered".$recovered;
?>