<?php
date_default_timezone_set('Europe/Dublin');
include("CarPolicy.php");

$myCarpolicy = new CarPolicy("XM123456", 450);

$myCarpolicy->setDateOfLastClaim("2015-10-10");
echo "the policy " . $myCarpolicy;
echo "has " . $myCarpolicy->getTotalYearsNoClaims();
echo "years no claims.";

public function getTotalYearsNoClaims()
{
     $currentDate = new DateTime();
     $lastDate= new DateTime($this->dateOfLastClaim);
     $interval = $currentDate->diff($lastDate);
     return $interval->format("%y");
}

?>