<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Small Calculator</title>
  <style>
    div{
      background-color: rgb(62,211,216);
      padding-left: 50px;
      padding-top: 5px;
      width: 330px;
      height: 350px;
      margin-left: 300px;
      margin-top: 50px;
      padding-bottom: 50px;
    }
    h1{
      color: whitesmoke;
    }
    input[type="number"]{
      width: 140px;
      height: 25px;
      border-radius: 2px;
      border: 1px solid black;
    }
    label{
      font-weight: bold;
      font-size: 22px;
    }
    input[type="submit"]{
      font-size: 20px;
      width: 60px;
    }

    

  </style>
</head>
<body>
  <div>
  <h1>SMALL CALCULATOR</h1>
  <form action="small calculator.php" method="post">
    <label for="">First number</label>
    <input type="number" name="fname"> <br><br>
    <label for="">Second number</label>
    <input type="number" name="sname"><br>
    <br>
    <input type="submit" name="add" value="+">
    <input type="submit" name="subtract" value="-">
    <input type="submit" name="multiple" value="x">
    <input type="submit" name="divide" value="/">
    <input type="submit" name="clear" value= "C">
</form>
<h1>RESULT</h1>
<h2>
  <?php
  
  $a=$_POST['fname'];
  $b=$_POST['sname'];

  if(isset($s_POST['add'])){
    echo $a+$b;
  }elseif(isset($s_POST['subtract'])){
    echo $a-$b;
  }elseif(isset($s_POST['multiple'])){
    echo $a*$b;
  }elseif(isset($s_POST['divide'])){
    echo $a/$b;
  }elseif(isset($s_POST['clear'])){
    echo 0;
  }
  ?>
</h2>
</div>
</body>
</html>