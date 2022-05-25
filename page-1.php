<html>
      
<head>
<meta charset="utf-8">
<link rel="stylesheet"href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<section class="banner" id="banner">
  <header id="header">
    <div> <img src="images/p.png" height="50" weight="45" style="margin-top: 15px; margin-left: 15px; display:inline;">
    <nav class="navigation" >
		  <li><a href="#banner">Home</a></li>
          
      <li><a href="events.php">Events</a></li>
      <li><a href="playlist.php">Playlist</a></li>
          <li class="dropdown">
            <a class="dropbtn">Login/Register
              <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
              <a href="login.php">Login</a>
              <a href="register.php">Register</a>
              <a href="update.php">Update User Info</a>
              <a href="logout.php">Logout</a>
            </div></a></li>
          <li><a href="#dev" onclick='test();'>Devolopers Details</a></li> 
      </nav>
  </header>

      <div class="banner-text">
        <h1>Event Management</h1>
        <p>Light Up Spcial Occations</p>  
    </div>
    
    <div class="sidenav">
      <a href="#dev"  onclick='test1();' style="margin-top: 550px;">About</a>
      <a href="contact.php">Contact</a>
      <a href="logout.php">Logout</a>
      <a href="delete.php">Delete User</a>
    </div>
</section>

  <div>
      <h2 style="text-align:center;">Don't Miss This Event</h2>
      <h4 style="text-align:center;">There is lots of thing coming in this event, Every part of the event is important. Get every details of this huge event</h4> 
        <a href="events.php" class="btn btn-large">Events</a> <br><br><br><br>
  </div>
<section id="services" class="services">

  <div>
                <h2 >News & Updates</h2><br><br><br>
                <p >his text is styled with some of the text formatting properties. The heading uses the text-align, <br>text-transform, and color properties. The paragraph is indented,</p>
            </div>

        <div class="services-content">
          <h4 style="text-align:center;">Musical Night</h4>
		  <b style="text-align:center;">Day 1</b>
          <p style="text-align:center;">his text is styled with some of the text formatting properties. The heading uses the text-align, text-transform, and color properties. The paragraph is indented,</p>
        </div style="text-align:center;">
    
        <div class="services-content">
          <h4 style="text-align:center;">Dancing Night</h4>
		  <b style="text-align:center;">Day 2</b>
          <p style="text-align:center;">his text is styled with some of the text formatting properties. The heading uses the text-align, text-transform, and color properties. The paragraph is indented,</p>
        </div>
      </div> 
      
        <div class="services-content">
          <h4 style="text-align:center;">Food Night</h4>
		  <b style="text-align:center;">Day 3</b>
          <p style="text-align:center;">his text is styled with some of the text formatting properties. The heading uses the text-align, text-transform, and color properties. The paragraph is indented,</p>
        </div>
      </div> 
  </div>
</section> 


<section id="dev" >

      <div class="section-header">
                <h2>Devolopers Details</h2>
                <p>The Devolopers details and others members details is described below.</p>
            </div>

            <div class="w3-cell-row" style="width:50%; margin-left: 300px;">
              <div class="w3-container w3-cell">
            <img id="borderimg" src="images/dj2.jpg" height="170" width="150" style="margin-left: 40px;">
          </div>

            <div class="w3-container w3-cell">

            <h4>Dwaipayan Dash</h4>
            <h5>Founder</h5>
            <p>B.sc 4th year Computer Science and Engineering Student at <br><strong>Metropolitan University, Sylhet</strong></p>
          
          <span class="social-icons">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li> 
          </span>
          </div>
            <div class="w3-cell-row" style="width:50%">
              <div class="w3-container w3-cell">
            <img id="borderimg" src="images/dj3.jpg" height="170" width="150" style="margin-left: 40px;">
          </div>

            <div class="w3-container w3-cell">

            <h4>Priotush Sutradhar</h4>
            <h5>Founder</h5>
            <p>B.sc 4th year Computer Science and Engineering Student at <br><strong>Metropolitan University, Sylhet</strong></p>
          
          <span class="social-icons mb-5">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li> 
          </span>
          </div>
  </div>
</section>



</body>

</html>
