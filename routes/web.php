<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*1*/echo '<i>1. Write a PHP program to print alphabet pattern "A".</i><br>';


/*2*/echo '<br><i>2. Write a PHP script to get JSON representation of a value from an array.</i><br>';


/*3*/echo '<br><i>3. Write a PHP function to display JSON decode errors.</i><br>';


/*4*/echo '<br><i>4. Write a PHP program to find a missing number(s) from an array.</i><br>';


/*5*/echo '<br><i>5. Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to zero.</i><br>';


/*6*/echo '<br><i>6. Write a PHP program to compute and return the square root of a given number.</i><br>';
    /*input number to*/ $toSqRt = 16; 
    echo 'Input number: ' . $toSqRt;
    echo '<br> The square root of ' . $toSqRt. ' is ' . sqrt($toSqRt) . '<br>';

/*7*/echo '<br><i>7. Write a PHP program to find the single element in an array where every element appears three times except for one.</i><br>';

/*8*/echo '<br><i>8. Write a PHP program to check whether a sequence of numbers is an arithmetic progression or not.</i><br>';

/*9*/echo '<br><i>9. Write a PHP program to reverse the bits of an integer (32 bits unsigned). </i><br>';

/*10*/echo '<br><i>10. Write a PHP program to add the digits of a positive integer repeatedly until the result has a single digit.</i><br>';

// $my_array = array(25, "or", 6, "to", 4);
// print_r($my_array);


Route::get('/', function () {
    return response('end');
});


