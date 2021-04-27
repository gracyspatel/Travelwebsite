<HTML>
<STYLE>
  body{
  background-image: url(log3.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 8px;}
</STYLE>
<BODY>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
        
      $servername = "localhost:3309";
      $username = "root";
      $password = "";
      $dbname = "tour_data";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    // Check connection
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    $p12 = isset($_POST["Tour_id"]) ? $_POST["Tour_id"] : '';
    
    $sql = "DELETE FROM package WHERE Tour_ID=".$p12;
    $result = $conn->query($sql);

    if(!$result)
    {
        echo "Not deleted";
    }
    else
    {
        echo "<center><h2>Package Deleted successfully</h2></center>";
    }
  ?>
  <center>
<button class="button button1" TYPE="button" onClick="history.go(-1);">Back</button> 
</center>
</BODY>
</HTML>