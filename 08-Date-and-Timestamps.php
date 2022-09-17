<?php 
echo date('d') . '<br>'; // Day
echo date('m') . '<br>'; // Month
echo date('Y') . '<br>'; // year
echo date('l') . '<br>'; // Day of week

echo date('Y/m/d') . '<br>'; // Date year, month, day
echo date('d/m/Y') . '<br>'; // Date day, month, year

echo date('h') . '<br>'; // Hour
echo date('i') . '<br>'; // Min
echo date('s') . '<br>'; // Seconds
echo date('a') . '<br>'; // AM or PM

// Set timezone
date_default_timezone_set('Europe/Madrid');

echo date('h:i:s a') . '<br>'; // time hours, minutes, seconds am or PM.

$timestamp = mktime(10, 14, 54, 10, 1981);
echo $timestamp . '<br>';
echo date('m/d/Y h:i', $timestamp) . '<br>';

$timestamp2 = strtotime('7:00pm March 22 2016');
echo $timestamp2 . '<br>';
echo date('m/d/Y h:i', $timestamp2) . '<br>';

$timestamp3 = strtotime('tomorrow');
echo $timestamp3 . '<br>';
echo date('m/d/Y', $timestamp3) . '<br>';

$timestamp4 = strtotime('next Sunday');
echo $timestamp4 . '<br>';
echo date('m/d/Y', $timestamp4) . '<br>';

$timestamp5 = strtotime('+2 Days');
echo $timestamp5 . '<br>';
echo date('m/d/Y', $timestamp5) . '<br>';

?>