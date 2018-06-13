<?php header ( 'Location: /index.html') ; ?>
<!DOCTYPE html>
<html>

    <head>
        <!--
<title>Golden Bear Resort</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="styles/style_home.css"/>
<link href="https://fonts.googleapis.com/css?family=Raleway:300|Roboto:900|Rubik:700|Libre+Franklin:200" rel="stylesheet">

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
<script src="scripts/script.js"></script>
-->
        <title>Demo Form</title>
    </head>
    <body>
        <!--
<header id="header">
<div id="logo">
<img src="images/1.home/1.header/logo.png"/>
<pagetitle>GOLDEN BEAR RESORT<trademark>&reg;</trademark></pagetitle>
</div>
<nav>
<div class="menuBackground">
<div class="center myMenu">
<ul class="dropDownMenu">
<li><a href="index.html">HOME</a>
<li><a href="resort_map.html">RESORT MAP</a>
<li><a>ROOMS</a>
<ul>
<li><a>Classical Suite</a>
<ul>
<li><a href="classical_suite_for_single.html">For Single</a></li>
<li><a href="classical_suite_for_double.html">For Double</a></li>
<li><a href="classical_suite_for_quad.html">For Quad</a></li>
</ul>
</li>
<li><a href="presidential_suite.html">Presidential Suite</a></li>
<li><a>Chalet</a>
<ul>
<li><a href="chalet_for_single.html">For Single</a></li>
<li><a href="chalet_for_double.html">For Double</a></li>
<li><a href="chalet_for_quad.html">For Quad</a></li>
</ul>
</li>
<li><a href="reserve_now.html">Reserve Now</a></li>
</ul>
<li><a>FACILITIES</a>
<ul>
<li><a href="hot_spring.html">Hot Spring</a></li>
<li><a href="bbq_area.html">BBQ Area</a></li>
<li><a href="buffet.html">Buffet</a></li>
</ul>
</li>
<li><a href="events.html">EVENTS</a>
<li><a href="nearby.html">NEARBY</a>
</ul>
</div>
</div>
</nav>
</header>


<section class="slider">
<div class="carousel">
<div class="slide fig3">
<h2>THOUGHTFUL SERVICE</h2>
</div>
<div class="slide fig1">
<h2>COMFY TO LIVE</h2>
</div>
<div class="slide fig2">
<h2>AMAZING BBQ</h2>
</div>
<div class="slide fig4">
<h2>DELIGHTFUL CAMPFIRE</h2>
</div>
</div>
</section>


<div class="textbox">
<?php
//include('login.php'); // Includes Login Script
if(isset($_GET['create_success'])){
echo "<script>alert('New record is inserted sucessfully.')</script>";
}else if(isset($_GET['create_failure'])){
echo "<script>alert(SQL Error: " . $_GET['create_failure'] . ")</script>";
}else if(isset($_GET['create_failure1'])){
echo "<script>alert('Password should not be empty.')</script>";
}else if(isset($_GET['create_failure2'])){
echo "<script>alert('Username should not be empty.')</script>";
}else if(isset($_GET['login_failure'])){
echo "<script>alert('Username and/or password should not be empty.')</script>";
}else if(isset($_GET['login_failure1'])){
echo "<script>alert('Wrong password.')</script>";
}else if(isset($_GET['login_success'])){
echo "<script>alert('Login successful.')</script>";
}else if(isset($_GET['test_fail'])){
echo "<script>alert('Test Fail.')</script>";
}
else if(isset($_GET['test_success'])){
echo "<script>alert('Test Success.')</script>";
}

?> 

<h1>Login/Create Account</h1>

<h2>Login</h2>
<form method="post" action="login.php">
<div id="info_set">
<p>Username: </p>
<input id="text" name="username" type="text">
</div>
<div id="info_set">
<p>Password: </p>
<input id="password" name="password" type="password">
</div>
<button name="submit">Login</button> 
</form>

<span><?php echo $error; ?></span>
<h2>Create Account</h2>
<form method="post" action="connect.php">
<div id="info_set">
<p>Username: </p>
<input type="text" name="username">
</div>
<div id="info_set">
<p>Password: </p>
<input type="text" name="password">
</div>
<button>Create Account</button> 
</form>
</div>



<div class="textbox">
<h1>About Us</h1>
<p>Golden Bear Resort is one of the best resort in Taiwan. Our beautiful landscape and beach makes it a perfect place for vacation. We provide beautiful classic rooms, cabin, beach house and even tents to give our customer camping experience in the wild under stars and moon. You can decide whether you want to spend your vacation on mountain or at a beach. Our resort also include swimming pool, hot spring, and spa. Also, the wild life resources help you relax during your stay. The hospitality of our resort offers guarantee ultimate stratification and pleasing sensation one can ever imagine, and it&prime;s all here at Golden Bear Resort.</p>
</div>


<div class="textbox">
<h1>Room Reservation</h1>
<a href="classical_suite_for_single.html"><img src="images/1.home/3.room_reservation/classical_single.png"/></a>
<a href="classical_suite_for_double.html"><img src="images/1.home/3.room_reservation/classical_double.png"/></a>
<a href="classical_suite_for_quad.html"><img src="images/1.home/3.room_reservation/classical_quad.png"/></a>
<a href="presidential_suite.html"><img src="images/1.home/3.room_reservation/presidential.png"/></a>
<br/>
<a href="chalet_for_single.html"><img src="images/1.home/3.room_reservation/chalet_single.png"/></a>
<a href="chalet_for_double.html"><img src="images/1.home/3.room_reservation/chalet_double.png"/></a>
<a href="chalet_for_quad.html"><img src="images/1.home/3.room_reservation/chalet_quad.png"/></a>
<a href="reserve_now.html"><img src="images/1.home/3.room_reservation/reservenow.png"/></a>
</div>   
-->

        This form is processed by a simple PHP script that shows the name/value pairs on the page and also sends the form data to the specified email address. 
        <br><br>
        It only works with single values for each name attribute.
        <br><br>
        <hr>
        <br><br>

        <form action="email.php" method="post">
            <br>


            First Name: <input type="text" name="first_name"><br>
            Last Name: <input type="text" name="last_name"><br>

            <br><br>

            What type of animals do you like? <br>
            Dog <input type="checkbox" name="dog" value="yes"><br>
            Cat <input type="checkbox" name="cat" value="yes"><br>
            Bird <input type="checkbox" name="bird" value="yes"><br>
            Rabbit <input type="checkbox" name="rabbit" value="yes"><br>
            Horse <input type="checkbox" name="horse" value="yes"><br>

            <br><br>

            What is your favorite color? <br>
            Green <input type="radio" name="color" value="green"><br>
            Red <input type="radio" name="color" value="red"><br>
            Blue <input type="radio" name="color" value="blue"><br>

            <br><br>

            What is you favorite car model?<br>
            <select name="cars">
                <option value="choose one">Please select one</option>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
            </select>

            <br><br>

            Please enter your comments:<br>
            <textarea rows="5"  cols="50" name="comments"></textarea>


            <br><br><br><br>

            <input type="submit" value="Submit the Form">
            &nbsp; &nbsp; &nbsp; &nbsp;


            <input type="reset" value="Clear the Form">


        </form>
    </body>

    <footer>
        <p>&copy; 2018 Golden Bear Resort</p>
        <p>123 Zhongzheng Road, Taipei City, Taiwan&ensp;|&ensp;02-12345678&ensp;|&ensp;contactus@gbr.com</p>
    </footer>

</html>