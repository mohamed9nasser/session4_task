<?php
include_once "func.php";

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
        mini_calc($_POST['num1'],$_POST['num2']);
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