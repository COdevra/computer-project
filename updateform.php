<html>
<head>
    <style>
         h1 {
      text-align: center;
      margin-bottom: 50px;
    }
        input[type="text"], input[type="date"] {
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      margin-bottom: 20px;
    }
    input[type="submit"] {
      padding: 10px 20px;
      background-color: black;
      color: white;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      opacity: 0.8;
    }
    form {
      margin-bottom: 50px;
    }
    body {
    text-align: center;
    
      font-family: Arial, sans-serif;
      background-image: url('white.jpg');
      background-repeat: no-repeat;
      background-size:100% 100%;
}
form {
    display: inline-block;
}

        </style>
</head>
<body>
    <h1>Update your To do list</h1>
<form action="updatedata.php" method="GET">
Task: <input type="text" name="work" value="<?php echo 
$_GET['work'];?>"/><br>
Due Date:  <input type="date" name="date"value="<?php echo 
$_GET['date'];?>"/><br><br> <br>
<input type ="submit" name ="submit" value="submit"/><br>
</form>
</body>
</html>