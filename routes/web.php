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


/*1*/echo "1. Write a PHP program to print alphabet pattern 'A'.\n";
    for ($row=0; $row<=7; $row++)
    {
      for ($column=0; $column<=7; $column++)
      {
            if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
                echo "*";    
            else  
                echo " ";     
      }        
      echo "\n";
    }

/*2*/echo "\n2. Write a PHP script to get JSON representation of a value from an array\n";
    $obj = ["key 1"=> "value A", "key 2"=> "value B", "key 3"=> "value C" ,"key 4"=> "value D"]; 
    $arr = ["one", "two", "three", "four"];
    print_r(json_encode($obj));
    echo "\n";
    print_r(json_encode($arr));
    echo "\n";


/*3*/echo "\n3. Write a PHP function to display JSON decode errors\n";
    // function json_error_message($json_str)
    // {
    // $json[] = $json_str;
    // echo $json;
    // foreach ($json as $string)
    // {
    // echo "Decoding: " . $string."\n";
    // json_decode($string);

    // switch (json_last_error())
    // {
    // case JSON_ERROR_NONE:
    // echo " - No errors"."\n";
    // break;
    // case JSON_ERROR_DEPTH:
    // echo " - Maximum stack depth exceeded"."\n";
    // break;
    // case JSON_ERROR_STATE_MISMATCH:
    // echo " - Underflow or the modes mismatch"."\n";
    // break;
    // case JSON_ERROR_CTRL_CHAR:
    // echo " - Unexpected control character found"."\n";
    // break;
    // case JSON_ERROR_SYNTAX:
    // echo " - Syntax error, malformed JSON"."\n";
    // break;
    // case JSON_ERROR_UTF8:
    // echo " - Malformed UTF-8 characters, possibly incorrectly encoded"."\n";
    // break;
    // default:
    // echo " - Unknown error"."\n";
    // break;
    // }
    // }
    // }
    // json_error_message("{"color1": "Red Color"}");

/*4*/echo "\n4. Write a PHP program to find a missing number(s) from an array\n";
    /*input array of numbers to*/ $findFrom = [1,2,3,6,7,8,11];
    function findMissing($arr){
      $newArr = range(min($arr),max($arr));                                                     
      return array_diff($newArr, $arr);
    }
    echo "Input: " . implode(",",$findFrom) . "\n";
    print_r(findMissing($findFrom));
    echo "\n";

/*5*/echo "\n5. Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to zero\n";
    function three_Sum_zero($arr)
    {
    $count = count($arr) - 2;
    $result=[];
    for ($x = 0; $x < $count; $x++) 
    {
        if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == 0)
        {
            array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = 0");
        }
    }
    return $result;
    }
    $nums1= array(-1,0,1,2,-1,-4);
    echo "Input: " . implode(",",$nums1) . "\n";
    print_r(three_Sum_zero($nums1));

/*6*/echo "\n6. Write a PHP program to compute and return the square root of a given number\n";
    /*input number to*/ $toSqRt = 16; 
    echo "Input number: " . $toSqRt . "\n";
    echo "The square root of " . $toSqRt. " is " . sqrt($toSqRt) . "\n";

/*7*/echo "\n7. Write a PHP program to find the single element in an array where every element appears three times except for one\n";
    function single_number($arr)
    {
      $ones = 0;
      $twos = 0;
      $common_one_two = 0;
          for($i=0; $i<sizeof($arr); $i++)
          {
              $twos  = $twos | ($ones & $arr[$i]);
                
                $ones  = $ones ^ $arr[$i];
                $common_one_two = ~($ones & $twos);
                $ones &= $common_one_two;
                $twos &= $common_one_two;                    
          }
        return $ones;
    }
    $arr1 = array(5, 3, 4, 3, 5, 5, 3);
    $arr2 = array(-1, 1, 1, -1, -1, 1, 0);
    print_r($arr1);
    print_r("Single Number: ".single_number($arr1)."\n");
    print_r($arr2);
    print_r("Single Number: ".single_number($arr2)."\n");

/*8*/echo "\n8. Write a PHP program to check whether a sequence of numbers is an arithmetic progression or not.\n";
    function is_arithmetic($arr)
      {
      $delta = $arr[1] - $arr[0];
      for($index=0; $index<sizeof($arr)-1; $index++)
        {
            if (($arr[$index + 1] - $arr[$index]) != $delta)
            {
                
                return " is not an arithmetic sequence.";
            }       
        }
        return " is an arithmetic sequence.";
    }

    $my_arr = array(5, 7, 9, 11);

    echo implode(",",$my_arr);
    print_r(is_arithmetic($my_arr)."\n \n");

/*9*/echo "9. Write a PHP program to reverse the bits of an integer (32 bits unsigned). \n";
    function reverse_integer($n)
    {
      $x = $n;  
      $result = 0;
      for($i= 0; $i<32; $i++) {
        $result <<= 1;
        $result|= ($n & 1);
        $n >>= 1;
      }
      return "Input: " . $x . ", Output: " . $result;

    }
     
    print_r(reverse_integer(1234)."\n");

/*10*/echo "\n10. Write a PHP program to add the digits of a positive integer repeatedly until the result has a single digit\n";
    function add_digits($num)
    {
          if ( $num > 0)
          {
          return ($num - 1) % 9 + 1;
          }
          else
          {
              return 0;
          }
    }

    print_r(add_digits(555)."\n \n");


Route::get("/", function () {
  $x = [1,2,3];
  return
  $x;
});


