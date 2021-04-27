<!DOCTYPE html>
<html>
<style>

body{
	background-image: url(log3.jpg);
	background-size: cover;
	background-repeat: no-repeat;
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

div {
	justify-content: center;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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

<h1><b><i>ADD PACKAGE</i></b></h1>
<br>
<br>
<br>
<div>
	<center>
  <form action="Contry2.php" method="post">
    <label for="Tour_id">Tour ID</label>
    <br>
    <input type="text" id="Tour_id" name="Tour_id" placeholder="Enter tourid..">
    <br>
    <label for="Tour_name">Tour Name</label>
    <br>
    <input type="text" id="Tour_name"name="Tour_name"placeholder="Enter Tour name..">
    <br>
    <label for="from">Place From</label>
    <br>
    <input type="text" id="from" name="from" placeholder="Enter place..">
    <br>
    <label for="to">Place To</label>
    <br>
    <input type="text" id="to" name="to"placeholder="Enter your destination..">
    <br>
    <label for="days">Duration days</label>
    <br>
    <input type="text" id="days" name="days" placeholder="No of days..">
    <br>
    <label for="fare">Fare</label>
    <br>
    <input type="text" id="fare" name="fare" placeholder="Charges..">
    <br>
    <label for="dis">Discription</label>
    <br>
    <input type="text" id="dis" name="dis" placeholder="Discription details..">
    <br>
  	<select id="" name="whi">
      <option value="National">National</option>
      <option value="International">International</option>
    </select>
<br>
    <input type="submit" value="Submit">
  </form>
  </center>
</div>
<center>
<button class="button button1" TYPE="button" onClick="history.go(-1);">Back</button> 
</center>
</body>
</HTML>
