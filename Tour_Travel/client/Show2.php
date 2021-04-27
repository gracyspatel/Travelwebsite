<HTML>
<title>Display</title>
<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
#sho
{
  height: 100px;
    width: 150px;
    border: 2px solid black;
    float: left;
    margin-left: 42px;
}
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
h1{
  text-align: center;
}
input[type=submit] {
  width: 50%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: grey;
}

h1{
  text-align: center;
}
input[type=submit] {
  width: 50%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: grey;
}

div {
  justify-content: center;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
p{
  font-size: 40px;
}
img{
  float: right;
  height: 40%;
  width: 40%;
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
</style>
<BODY>
  <h1>Packages</h1>
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
    
    $sql = "SELECT * FROM package";
    $result = $conn->query($sql);
    //$state = isset($_POST['s_name']) ? $_POST['s_name'] : '';
    //echo "State :".$state;
    if ($result->num_rows > 0)
    {
        // output data of each row
  
        while($row = $result->fetch_assoc()) {
        $a1 = $row["Tour_ID"];
        $a2 = $row["Tour_Name"];
        $a3 = $row["Place_From"];
        $a4 = $row["Place_To"];
        $a5 = $row["Days"];
        $a6 = $row["Fare"];
        $a7 = $row["Discription"];
        $a8 = $row["wh"];
        
        if($a8 == "International" || $a8 == "international")
        {
            echo "<br>";
        echo "<center><h1>".$a2."</h1></center>";
        echo "<div><p><br>Tour_ID : " . $a1. "<br>Tour_Name : " .  " " . $a2. "<br>Place_From".$a3."<br>Place_To :".$a4."<br>Days :".$a5."<br>Fare :".$a6."<br>Discription : ".$a7."<br>National/International : ".$a8."<br></p></div>";
        }
    }
}
    else
    {
        echo "0 results";
    }
  ?>
    <br>
    <br>
    <center>
    <input type="text" id="Tour_id" name="Tour_id" placeholder="Enter Tour_ID Which you would like to book...">
    </center>
    <br>
    <br><br>
    <center>
    <center><a href = "userregistration.php"><h1>BOOK NOW</h1></a></center>
    <button class="button button1" TYPE="button" onClick="history.go(-1)";>Back</button> 
    </center>
</BODY>
</HTML>