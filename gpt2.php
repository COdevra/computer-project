<!DOCTYPE html>
<html>
<head>
  <script src="code.js"></script>
  <script src="test.js"></script>
  <title>To-Do Application</title>
  <style>
    /* Add your CSS styles here */
    body {
      font-family: Arial, sans-serif;
      background-image: url('front.jpg');
      background-repeat: no-repeat;
      background-size:100% 100%;
     
    }
    /* form{
      background-image: url('back.jpg');
      background-repeat: no-repeat;
      background-size:auto;

    } */
    .container {
      width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    h1 {
      text-align: center;
      margin-bottom: 50px;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      
    }
    td, th {
      border: 2px solid black;
      text-align: left;
      padding: 8px;
    }
    th {
      background-color:#F6E1C3;
      color:black;
    }
    form {
      margin-bottom: 50px;
    }
   
    input[type="text"], input[type="date"],input[type="time"]{
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      margin-bottom: 20px;
    }
    input[type="submit"] {
      padding: 10px 20px;
      background-color:black;
      color: white;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      opacity: 0.8;
    }
    #fact{
      background-color:#0E2431;
      border:5px solid #f5e4c3;
      height:275px;
      width:750px;
      margin:0 auto;
      text-align:center;
    }
    #output{
      color:white;
      font-size: 20px;
      
    }
  </style>
</head>
<body >

  <div class="container">
 
    <h1>My Day</h1>
    <form action="insert.php" method="GET">
      <label for="work">Task:</label>
      <input type="text" name="work" id="task" placeholder="Write your task">
       <label for="date">Due Date:</label>
       <input type="date" name="date" id="date" value="date">
      <input class="button" type="submit" name="submit" value="submit">
    </form>
<div class list>
  <h1> Your lists</h1>
  <table class="table">
  <thead>
    <tr>
    <th scope="id">SNo</th>
      <th scope="Task">Task</th>
      <th scope="Due Date">Due_Date</th>
      <th scope="action" colspan="2">Action </th>
     </tr>
  </thead>

  <?php
  require 'connection.php';
   $sql = "SELECT * from plan";
  $records = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($records);
  if($count>0)
  {
  foreach($records as $record){
  echo "<tr>
   <td>".$record['id']."</td>
  <td>".$record['task']."</td>
  <td>".$record['duedate']."</td>
  <td>
  <a href='updateform.php?id=$record[id]&work=$record[task]&date=$record[duedate]'><button>Edit</button></a></td>
  <td><a href='delete.php?id=$record[id]'><button>Delete</button></a></td>
  </tr>";
  }
  }
  else{
  echo "no task found";
  }
?>
</table>
  </div> 
  </div>
  <div id="fact">
    <br>
    <button onclick="generateQuote()">Press for more Motivation!</button>
    <br>
    <br>
    <br>
    <p id="output"></p>
</div>
</body>
</html>
