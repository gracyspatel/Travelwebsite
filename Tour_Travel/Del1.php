<HTML>
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
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1>Delete Tour Package</h1>
  <CENTER>
  <form action="Del4p.php" method="post" >
    <input type="text" id="Tour_id" name="Tour_id" placeholder="Enter Tour_ID">
    <br>
    <input type="submit" value="Delete">
    </form>
</center>
<center>
<button class="button button1" TYPE="button" onClick="history.go(-1);">Back</button> 
</center>
</BODY>
</HTML>