<?php
include("CarPolicy2.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $policyNumber = $_POST['policyNumber'];
    $premium = $_POST['premium'];
    $lastClaimDate = $_POST['lastClaimDate'];
};

    $myCarpolicy = new CarPolicy($policyNumber, $premium);

    $myCarpolicy->setDateOfLastClaim($lastClaimDate);

    $discount = $myCarpolicy->getDiscount();
    $discountedPremium = $myCarpolicy->getDiscountedPremium();
