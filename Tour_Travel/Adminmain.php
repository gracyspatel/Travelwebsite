<!DOCTYPE html> 
<html> 
    <head> 

        <meta charset = "utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> 
            Tour and Travel 
        </title> 
        <link rel = "icon" href="C:\Drive 3\Website\Tour and Travel\TAT.jpg" type = "image/ico"/>
        <link rel="stylesheet" type="text/css" media="screen" href="Travel.css"/>  
    </head>
    <body> 
        <div class="topnav-left">
        <ul>
            <li>
                <div class="abc">
                <div class="container" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                </div>
            </li>

            <li><div class="abc">Travel Booking System </div></li>
            <div class="topnav-right">
            <li><a href="about2.php">About</a></li>
            <li><a href="Delete.php">Delete Packages</a></li>
            <li><a href="Modify.php">Modify Packages</a></li>
            <li><a href="Show.php">Display Packages</a></li>
            <li><a href="Add.php">Add Packages</a></li>
            </div>
        </ul>
        </div>
        <img src="512.jpg" style="height: 100%; width:100%";>
        <script>
            function myFunction(x) {
                x.classList.toggle("change");
            }
        </script>     
    </body> 
</html>         