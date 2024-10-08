<?php

$balance = 400;
$status = true;
$overdraft = false;
$newBalance = 0;

echo "My balance : $balance <br>";

$status = false;
if($status == true){
    echo "My account is now reopened <br>";
}else{
    echo "My account is now closed <br>"; 
}
$status = true;
if($status == true){
    echo "My account is now reopened <br>";
}else{
    echo "My account is now closed <br>"; 
}


echo "Doing transaction deposito (+150) with current balance $balance <br>";
if($balance + 150 < 0){
    $overdraft = true;
    echo "Error transaction: Insufficient balance to complete withdraw <br>";
    echo "My balance after failed last transaction : $balance <br>";
}
if($overdraft == false){
$balance += 150;
}
$overdraft = false;

echo "My new balance after deposit (+150) : $balance <br>";
echo "Doing transaction withdraw (-25) with current balance $balance <br>";
if($balance - 25 < 0){
    $overdraft = true;
    echo "Error transaction: Insufficient balance to complete withdraw <br>";
    echo "My balance after failed last transaction : $balance <br>";
}
if($overdraft == false){
$balance -= 25;
}
$overdraft = false;

echo "My new balance after withdraw : $balance <br>";
echo "Doing transaction withdraw (-600) with current balance $balance <br>";
if($balance - 600 < 0){
    $overdraft = true;
    echo "Error transaction: Insufficient balance to complete withdraw <br>";
    echo "My balance after failed last transaction : $balance <br>";
}
if($overdraft == false){
$balance -= 600;
}
$overdraft = false;

$status = false;
if($status == true){
    echo "My account is now reopened <br>";
}else{
    echo "My account is now closed <br>"; 
}
