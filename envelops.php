<?php

//initializing empty envelops
$necessityEnvelop = 0; //Necessity Account, NEC
$freedomEnvelop = 0; //Financial Freedom Account, FFA
$educationEnvelop = 0;//Education Account, EDU
$longTermEnvelop = 0;//Long Term Saving for Spending Account, LTSS
$playEnvelop = 0;//Play Account, PLAY
$giveEnvelop = 0;//Give Account, GIVE

//initializing percent rate
$necRate = 0.55;
$ffaRate = 0.1;
$eduRate = 0.1;
$ltssRate = 0.1;
$playRate = 0.1;
$giveRate = 0.05;

//initializing expected income, expected necessity and other amounts
$expectedIncome = 1000;
// $expectedNecessity = 550; //200 for rent appartment, 200 for food, 150 for clothes

//invitation, greetings etc.
echo "Hello.\n
We gonna fill your envelops by the money you input here!\n
Please input your amounts of money income and see the results.\n
Press Ctrl+c to exit script.
\n\n Enter the amount please:";

//initializing handler for standard input
$handle = fopen ("php://stdin","r");
$sum = 0;
while ($sum < $expectedIncome) {
    $line = fgets($handle);
    $sum += $line;

    $necessityEnvelop += $line * $necRate;
    $freedomEnvelop += $line * $ffaRate;
    $educationEnvelop += $line * $eduRate;
    $longTermEnvelop += $line * $ltssRate;
    $playEnvelop += $line * $playRate;
    $giveEnvelop += $line * $giveRate;

    echo "\n Enter the amount please:";
}

//final output
echo "At the end we have:\n
    Necessity Envelop has:                       $necessityEnvelop 
    Financial Freedom Envelop has:               $freedomEnvelop
    Education Envelop                            $educationEnvelop
    Long Term Saving for Spending Envelop has:   $longTermEnvelop
    Play Envelop has:                            $playEnvelop
    Give Envelop has:                            $giveEnvelop
    _______________________________________________________________

    Thanks for using our software :)
"
12345
?>
