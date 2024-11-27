<?php
date_default_timezone_set('Europe/Dublin'); // Set the timezone
include("CarPolicy2.php");
$initialPremium = 600;
$myCarpolicy = new CarPolicy("XM123456", $initialPremium);

$myCarpolicy->setDateOfLastClaim("2015-10-10");

echo "Years with no claims: " . $myCarpolicy->getTotalYearsNoClaims() . "\n";

echo "Your discount is " . $myCarpolicy->getDiscount() . "%\n";

echo "Your initial premium is $initialPremium\n";

echo "Your discounted premium is " . $myCarpolicy->getDiscountedPremium() . "\n";
?>