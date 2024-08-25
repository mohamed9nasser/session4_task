<?php
if(! isset($_POST['calc'])){
    $_POST['num1']=0;
    $_POST['num2']=0;
}

function mini_calc($num1,$num2)
{
    if(isset($_POST['num1'])){
        $num1=$_POST['num1'];
    };
    if(isset($_POST['num2'])){
        $num2=$_POST['num2'];
    };

    if(isset($_POST['calc'])){
        $sum_res= $num1 + $num2;
        $sub_res=$num1 - $num2;
        $mul_res= $num1 * $num2;
        $div_res= $num1 / $num2;

        echo "Answer of ".$num1." + ".$num2 ." is: ". $sum_res;
        echo "<br>";
        echo "Answer of ".$num1." - ".$num2 ." is: ".$sub_res;
        echo "<br>";
        echo "Answer of ".$num1." x ".$num2 ." is: ". $mul_res;
        echo "<br>";
        echo "Answer of ".$num1." / ".$num2 ." is: ". $div_res;
    };
    

    
    
};
 