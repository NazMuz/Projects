<!Doctype html>
<head>
    <title>
        Matrix operation
    </title>
</head>
  <?php 
  $a1_0_0=$_POST['a1_0_0'];
  $a1_0_1=$_POST['a1_0_1'];
  $a1_0_2=$_POST['a1_0_2'];
  $a1_1_0=$_POST['a1_1_0'];
  $a1_1_1=$_POST['a1_1_1'];
  $a1_1_2=$_POST['a1_1_2'];
  $a1_2_0=$_POST['a1_2_0'];
  $a1_2_1=$_POST['a1_2_1'];
  $a1_2_2=$_POST['a1_2_2'];


  $a2_0_0=$_POST['a2_0_0'];
  $a2_0_1=$_POST['a2_0_1'];
  $a2_0_2=$_POST['a2_0_2'];
  $a2_1_0=$_POST['a2_1_0'];
  $a2_1_1=$_POST['a2_1_1'];
  $a2_1_2=$_POST['a2_1_2'];
  $a2_2_0=$_POST['a2_2_0'];
  $a2_2_1=$_POST['a2_2_1'];
  $a2_2_2=$_POST['a2_2_2'];
 
  $operator = $_POST ['operator'];
  $result_0_0 = ""  ;
  $result_0_1 =  "";
   $result_0_2 =  ""; 
   $result_1_0 =   "";
   $result_1_1 =   "";
   $result_1_2 =   "";
   $result_2_0 =   "";
   $result_2_1 =   "";
   $result_2_2 =  "";
  if ($operator=="add"){
      $result_0_0=$a1_0_0 + $a2_0_0;
      $result_0_1=$a1_0_1 + $a2_0_1;
      $result_0_2=$a1_0_2 + $a2_0_2;
      $result_1_0=$a1_1_0 + $a2_1_0;
      $result_1_1=$a1_1_1 + $a2_1_1;
      $result_1_2=$a1_1_2 + $a2_1_2;
      $result_2_0=$a1_2_0 + $a2_2_0;
      $result_2_1=$a1_2_1 + $a2_2_1;
      $result_2_2=$a1_2_2 + $a2_2_2;
  }elseif($operator=="sub") {
    $result_0_0=$a1_0_0 - $a2_0_0;
    $result_0_1=$a1_0_1 - $a2_0_1;
    $result_0_2=$a1_0_2 - $a2_0_2;
    $result_1_0=$a1_1_0 - $a2_1_0;
    $result_1_1=$a1_1_1 - $a2_1_1;
    $result_1_2=$a1_1_2 - $a2_1_2;
    $result_2_0=$a1_2_0 - $a2_2_0;
    $result_2_1=$a1_2_1 - $a2_2_1;
    $result_2_2=$a1_2_2 - $a2_2_2;
  }elseif($operator=="multiply"){
    $result_0_0 =     $a1_0_0 * $a2_0_0 + $a1_0_1 * $a2_1_0 + $a1_0_2 * $a2_2_0;
    $result_0_1 =     $a1_0_0 * $a2_0_1 + $a1_0_1 * $a2_1_1 + $a1_0_2 * $a2_2_1;
    $result_0_2 =     $a1_0_0 * $a2_0_2 + $a1_0_1 * $a2_1_2 + $a1_0_2 * $a2_2_2;
    $result_1_0 =     $a1_1_0 * $a2_0_0 + $a1_1_1 * $a2_1_0 + $a1_1_2 * $a2_2_0;
    $result_1_1 =     $a1_1_0 * $a2_0_1 + $a1_1_1 * $a2_1_1 + $a1_1_2 * $a2_2_1;
    $result_1_2 =     $a1_1_0 * $a2_0_2 + $a1_1_1 * $a2_1_2 + $a1_1_2 * $a2_2_2;
    $result_2_0 =     $a1_2_0 * $a2_0_0 + $a1_2_1 * $a2_1_0 + $a1_2_2 * $a2_2_0;
    $result_2_1 =     $a1_2_0 * $a2_0_1 + $a1_2_1 * $a2_1_1 + $a1_2_2 * $a2_2_1;
    $result_2_2 =     $a1_2_0 * $a2_0_2 + $a1_2_1 * $a2_1_2 + $a1_2_2 * $a2_2_2;
   
  }
  else{
      return 0;
  }
  
  
  
  
  
  ?>
<body>
    <h1>  MATRIX OPERATION   </h1>
    <form method= "POST">
      <lebel>
         <p > FIRST MATRIX </p> 
      </lebel> 
         <input type = "number " name= "a1_0_0" value="<?php echo $a1_0_0; ?>" >
         <input type = "number"  name= "a1_0_1" value="<?php echo $a1_0_1; ?>" >
         <input type = "number"  name= "a1_0_2" value="<?php echo $a1_0_2; ?>" ></br>
         <input type = "number"  name= "a1_1_0" value="<?php echo $a1_1_0; ?>" >
         <input type = "number"  name= "a1_1_1" value="<?php echo $a1_1_1; ?>" >
         <input type = "number"  name= "a1_1_2" value="<?php echo $a1_1_2; ?>" ></br>
         <input type = "number"  name= "a1_2_0" value="<?php echo $a1_2_0; ?>" >
         <input type = "number"  name= "a1_2_1" value="<?php echo $a1_2_1; ?>" >
         <input type = "number"  name= "a1_2_2" value="<?php echo $a1_2_2; ?>" ></br></br></br>
      <lebel>
         <p> SECOND MATRIX </p>
      </lebel>  
          <input type = "number"  name= "a2_0_0" value="<?php echo $a2_0_0; ?>" >
          <input type = "number"  name= "a2_0_1" value="<?php echo $a2_0_1; ?>" >
          <input type = "number"  name= "a2_0_2" value="<?php echo $a2_0_2; ?>" ></br>
          <input type = "number"  name= "a2_1_0" value="<?php echo $a2_1_0; ?>">
          <input type = "number"  name= "a2_1_1" value="<?php echo $a2_1_1; ?>" >
          <input type = "number"  name= "a2_1_2" value="<?php echo $a2_1_2; ?>" ></br>
          <input type = "number"  name= "a2_2_0" value="<?php echo $a2_2_0; ?>" >
          <input type = "number"  name= "a2_2_1" value="<?php echo $a2_2_1; ?>" >
          <input type = "number"  name= "a2_2_2" value="<?php echo $a2_2_2; ?>" ></br></br></br>

          <input type= "submit" value = "add" name ="operator"></br>
          <input type= "submit" value = "sub" name ="operator"></br>
          <input type= "submit" value = "multiply" name = "operator"></br>

       <lebel>
           <p> RESULT </p>
       </lebel>
          <input type= "number" name= "result_0_0" value="<?php  echo $result_0_0; ?>" >
          <input type= "number" name= "result_0_1" value="<?php  echo $result_0_1; ?>">
          <input type= "number" name= "result_0_2" value="<?php  echo $result_0_2; ?>"></br>
          <input type= "number" name= "result_1_0" value="<?php  echo $result_1_0; ?>">
          <input type= "number" name= "result_1_1" value="<?php  echo $result_1_1; ?>">
          <input type= "number" name= "result_1_2" value="<?php  echo $result_1_2; ?>"></br>
          <input type= "number" name= "result_2_0" value="<?php  echo $result_2_0; ?>">
          <input type= "number" name= "result_2_1" value="<?php  echo $result_2_1; ?>">
          <input type= "number" name= "result_2_2" value="<?php  echo $result_2_2; ?>">

    </form>
</body>