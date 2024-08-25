<?php
if(! isset($_POST['calc'])){
    $_POST['num1']=0;
    $_POST['num2']=0;
}

function mini_culc($num1,$num2)
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
 

?>
  
  <!DOCTYPE html >
<html >
<head>
<title>Mini Calculator Function</title>

<link rel="stylesheet"  href="styles.css" />
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
  <!-- Begin Header -->
  <div id="header">
    <h1>Mini Calculator</h1>
    <p>
        Simple Calculator Made using PHP function with 2 inputs.
    </p>
</div>
  <!-- End Header -->
  <!-- Begin Navigation -->
  <div id="navigation">
    <a href="index.php">Refresh</a>
  </div>
  <!-- End Navigation -->
  <!-- Begin Faux Columns -->
  <div id="faux">
    <!-- Begin Left Column -->
    <div id="leftcolumn">
    <p>
        Simple Calculator Made using PHP function with 2 inputs.
    </p>
    </div>
    <!-- End Left Column -->
    <!-- Begin Right Column -->
    <div id="rightcolumn">
      <h1>Mini Calculator:</h1><br>

    <form method="POST">
        <label for="num1">First Number:</label>
        <input type="text" name="num1" id="num1"><br><br>
        <label for="num2">Second Number:</label>
        <input type="text" name="num2" id="num2"><br>
        <button name="calc">Calculate</button>
    </form>

     
      
      <div class="clear">
        <p>
        <?php
        mini_culc($_POST['num1'],$_POST['num2']);
        ?>
     </p>

      </div>
    </div>
    <!-- End Right Column -->
    <div class="clear"> </div>
  </div>
  <!-- End Faux Columns -->
  <!-- Begin Footer -->
  <div id="footer"> Made By <b>Mohamed Nasser</b>  @2024 </div>
  <!-- End Footer -->
 </div>
<!-- End Wrapper -->
</body>
</html>