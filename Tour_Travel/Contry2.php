<!Doctype html>
<HTML>
<style>
	div {
  justify-content: center;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
p{
  font-size: 40px;
}
	.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}
</style>
<body>

<?php
$servername = "localhost:3309";
$username = "root";
$password = "";
$dbname = "tour_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = isset($_POST['name']) ? $_POST['name'] : '';
$p1 = isset($_POST["Tour_id"]) ? $_POST["Tour_id"] : '';
$p2 = isset($_POST["Tour_name"])? $_POST["Tour_name"] : '';
$p3 = isset($_POST["from"]) ? $_POST["from"] : '';
$p4 = isset($_POST["to"]) ? $_POST["to"] : '';
$p5 = isset($_POST["days"]) ? $_POST["days"] : '';
$p6 = isset($_POST["fare"]) ? $_POST["fare"] : '';
$p7 = isset($_POST["dis"]) ? $_POST["dis"] : '';
$p8 = isset($_POST["whi"]) ? $_POST["whi"] : '';

$sql = "INSERT INTO package (Tour_ID,Tour_Name,Place_From,Place_To,Days,Fare,Discription,wh) VALUES ('$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8')";
if ($conn->query($sql) === TRUE) {
  echo "<h2>New record added successfully</h2>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM package";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        // output data of each row
  
        while($row = $result->fetch_assoc()) 
        {

        $a1 = $row["Tour_ID"];
        $a2 = $row["Tour_Name"];
        $a3 = $row["Place_From"];
        $a4 = $row["Place_To"];
        $a5 = $row["Days"];
        $a6 = $row["Fare"];
        $a7 = $row["Discription"];
        $a8 = $row["wh"];
        
        if($p1 == $a1)
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

$conn->close();

?>
<center>
<button class="button button1" TYPE="button" onClick="history.go(-1);">Back</button> 
</center>
</body>
</HTML>