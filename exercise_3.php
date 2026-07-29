<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Week 3 Exercise 3</title>
</head>
<body>

<?php

// Task 1: Simple Budget Calculator

$totalBudget = 5000;
$groceries = 1200;
$transport = 800;
$entertainment = 600;

$remainingBalance = $totalBudget - ($groceries + $transport + $entertainment);

echo "<h2>Simple Budget Calculator</h2>";
echo "Total Budget: R$totalBudget <br>";
echo "Groceries: R$groceries <br>";
echo "Transport: R$transport <br>";
echo "Entertainment: R$entertainment <br>";
echo "<strong>Remaining Balance: R$remainingBalance</strong>";


// Task 2: Age Category Check

$age = 24;

echo "<h2>Age Category Check</h2>";

if ($age < 12) {
    $category = "Child";
} elseif ($age >= 13 && $age <= 17) {
    $category = "Teen";
} elseif ($age >= 18 && $age <= 64) {
    $category = "Adult";
} else {
    $category = "Senior";
}

echo "Age: $age<br>";
echo "Category: $category<br>";

// Task 3: Simple Interest Calculator

$principal = 10000;
$rate = 5;
$time = 3;

$interest = ($principal * $rate * $time) / 100;
$totalAmount = $principal + $interest;

echo "<h2>Simple Interest Calculator</h2>";
echo "Principal Amount: R$principal <br>";
echo "Rate: $rate% <br>";
echo "Time: $time years <br>";
echo "Interest: R$interest <br>";
echo "Total Amount: R$totalAmount";

// Task 4: Logical Operator Practice

$userAge = 24;
$isRegisteredToVote = true;

echo "<h2>Logical Operator Practice</h2>";

if ($userAge >= 18 && $userAge <= 35 && $isRegisteredToVote) {
    echo "Eligible to vote.";
} else {
    echo "Not eligible to vote.";
}

echo "Age : $userAge<br>";
echo "Registered to vote: " . ($isRegisteredToVote ? "Yes" : "No") . "<br>";


// Task 5: Dynamic Discount

$purchaseAmount = 850;
$discount = 0;

if ($purchaseAmount > 1000) {
    $discount = 0.10;
} elseif ($purchaseAmount >= 500 && $purchaseAmount <= 999) {
    $discount = 0.05;
} elseif ($purchaseAmount >= 250 && $purchaseAmount <= 499) {
    $discount = 0.02;
} else {
    $discount = 0;
}

$discountAmount = ($purchaseAmount * $discount);
$finalAmount = $purchaseAmount - $discountAmount;

echo "<h2>Dynamic Discount</h2>";
echo "Purchase Amount: R" . number_format($purchaseAmount, 2) . "<br>";
echo "Discount: " . ($discount * 100) . "%<br>";
echo "Discount Amount: R" . number_format($discountAmount, 2) . "<br>";
echo "<strong>Final Amount: R" . number_format($finalAmount, 2) . "</strong>";


?>

</body>
</html>