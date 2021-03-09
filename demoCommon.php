<?php


ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);
include_once('Classcommon.php');

$license = new CCLicense(1,1,1);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(1,1,2);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(1,2,1);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(1,2,2);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(2,1,1);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(2,1,2);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(2,2,1);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(2,2,2);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(3,1,1);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(3,1,2);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(3,2,1);
echo $license->logo; 
echo $license->url; 
$license = new CCLicense(3,2,2);
echo $license->logo; 
echo $license->url; 
?>

