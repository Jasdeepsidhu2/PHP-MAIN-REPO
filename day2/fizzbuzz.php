<pre>
<?php

//Do not modify this portion.
$test_input = [27, 3, 5];

//Modify code only in the function to get the desired output.
function fizzBuzz($input){
    $first=$input[0];
    $second=$input[1];
     $third=$input[2];
    $flag1;
    $flag2;
    $result=[];

   
    for($i=$first;$i>=0;$i--)
    {
        
        $firstDigit=$i%10;
        $secondDigit=($i/10)%10;
        
        if($firstDigit==$second or $firstDigit==$third or
        $secondDigit==$second or $secondDigit==$third )
        {
            $result[]='FIZZ';
            $flag1= 1;
        }
        
        elseif($i%$second==0 or $i%$third==0 )
        {
            $result[]='BUZZ';
            $flag2=1;
        }
        elseif(($flag1==1) and ($flag2==1)){
            $result[]="FIZZBUZZ";
        }
        else
        {
           $result[]=$i;
            
        }
        
    }
    var_dump($result);
    echo "\n";
}

fizzBuzz($test_input);
