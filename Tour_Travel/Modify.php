<!DOCTYPE html>
<html>
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
body{
  background-image: url(log3.jpg);
  background-size: cover;
  background-repeat: no-repeat;
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

.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  color: black;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
  color: white;
</style>
<body>
<center>
<h1>MODIFY PACKAGES</h1>
<div class="container">
<img src="NewZealand.jpg" alt="Snow" style="width:100%">
<input class="btn" type=button onClick="location.href='name.php'" value='Tour Name'>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
<img src="Italy1.jpg" alt="Snow" style="width:100%">
<input class="btn" type=button onClick="location.href='from.php'" value='Place From'>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
<img src="71.jpg" alt="Snow" style="width:100%">
<input class="btn" type=button onClick="location.href='to.php'" value='Place To'>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
<img src="Lon.jpg" alt="Snow" style="width:100%">
<input class="btn" type=button onClick="location.href='day.php'" value='Number of days'>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
<img src="123.jpg" alt="Snow" style="width:100%">
<input class="btn" type=button onClick="location.href='fare.php'" value='Fare'>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<button class="button button1" TYPE="button" onClick="history.go(-1);">Back</button> 
</center>
</center>
</body>
</html>
