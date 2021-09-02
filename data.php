<?php
require 'simple_html_dom.php';

$html = file_get_html('https://www.coronavirus.vic.gov.au/victorian-coronavirus-covid-19-data');

$local = $html->find('.ch-daily-update__statistics-item-text', 0);
$inter = $html->find('.ch-daily-update__statistics-item-text', 1);
$current = $html->find('.ch-daily-update__statistics-item-text', 2);

$testresults_24h = $html->find('.ch-daily-update__statistics-item-text', 3);
$total_tests = $html->find('.ch-daily-update__statistics-item-text', 4);
$cases = $html->find('.ch-daily-update__statistics-item-text', 5);

$liveslost_24h = $html->find('.ch-daily-update__statistics-item-text', 6);
$total_liveslost = $html->find('.ch-daily-update__statistics-item-text', 7);
$recovered = $html->find('.ch-daily-update__statistics-item-text', 8);

$hospital= $html->find('.ch-daily-update__statistics-item-text', 9);
$icu= $html->find('.ch-daily-update__statistics-item-text', 10);



?>
