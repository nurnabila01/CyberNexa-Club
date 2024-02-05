<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>CyberNexa Club (CNC)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family:"Times New Roman", Georgia, Serif;}
</style>

<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="w3-pale-green w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-pale-red w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo7.png" style="width:65%;" class="w3-round"><br><br>
    <h4><b><p class="w3-text-green">CNC</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-green"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
	<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT CNC</a> 
	<a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
	<a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
<a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a> 	
    <a href="#achievement" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
	<a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-green"><i class="fa fa-user fa-fw w3-margin-right"></i>Administrator</a> 
  </div>
  </div>
  <div class="w3-panel w3-large">
  <p>Never miss out on exciting events and opportunities! Follow us on :</p>
    
 <img src="photo/fb.jpeg" style="width:10%;" class="w3-round">
 <img src="photo/ig.jpeg" style="width:11%;" class="w3-round">
 <img src="photo/tw.jpeg" style="width:10%;" class="w3-round">
 <img src="photo/in.jpeg" style="width:10%;" class="w3-round">
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="home">
   
    <div class="w3-container w3-text-pale-red" p align="center"></p>
    <h1><b><p class="w3-text-green">Welcome to CyberNexa Club</b></h1>
   

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <p align="center"><img src="photo/logo5.png" alt="Me" style="width:200%"></p>
    </div>
    
	<br><br>
	
	


  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h3><b><p class="w3-text-green">CyberNexa Club</b></h3>
    <p>Welcome to CyberNexa Club!

Greetings, tech enthusiasts and cyber aficionados! We are thrilled to introduce you to CyberNexa Club, a dynamic community within UiTM Machang dedicated to exploring the vast realms of cybersecurity, technology, and innovation.

At CyberNexa, we believe in fostering a space where curiosity meets expertise, and where members embark on a journey to unravel the mysteries of cyberspace. Our club serves as a hub for passionate individuals eager to delve into the ever-evolving landscape of cybersecurity, exchange ideas, and contribute to the collective knowledge of the digital frontier.Whether you're a coding ninja or a tech newbie, everyone is welcome! Our club is a diverse community where we celebrate curiosity and the joy of learning.</p>
    <hr>
	
	 <!-- Header -->
  <header id="committee">
	<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2><p class="w3-text-green"><b>Our Committee</b></h2>
<h5><p class="w3-text-grey">Meet the team - our club ninja:</h5></p>

<div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/nuwy.jpg" alt="nuwy" style="width:100%">
      <h3>Bunga Chempaka</h3>
      <p class="w3-opacity">President</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/belle.png" alt="belle" style="width:94%">
      <h3>Lily Petunia</h3>
      <p class="w3-opacity">Vice President</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/sha.jpeg" alt="sha" style="width:100%">
      <h3>Iris Clarissa</h3>
      <p class="w3-opacity">Chief Information Officer</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/iqah.jpeg" alt="iqah" style="width:96%">
      <h3>Orked Aruna</h3>
      <p class="w3-opacity">Director of Programming</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/wanie.jpeg" alt="wanie" style="width:100%">
      <h3>Anggun Anggerik</h3>
      <p class="w3-opacity">Web Development Manager</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/ikha1.jpeg" alt="ikha" style="width:95%">
      <h3>Jasmine Ameena</h3>
      <p class="w3-opacity">Data Science Coordinator</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/una.jpeg" alt="una" style="width:100%">
      <h3>Melur Kasturi</h3>
      <p class="w3-opacity">Secretary</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
	<div class="w3-col l3 m6 w3-margin-bottom">
      <img src="photo/reen.jpeg" alt="s" style="width:90%">
      <h3>Azalea Hazel</h3>
      <p class="w3-opacity">Treasurer</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div>
<hr>


    <!-- Header -->
  <header id="membership">
  
    <h2><b><p class="w3-text-green">CyberNexa Club Membership</b></h2>
    <!-- Progress bars / Skills -->
     <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  
  
  <p align="center"><h5><p class="w3-text-grey">Membership form for CyberNexa Club 2024</h5></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
         
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM members";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
    <hr>
    
	<!-- Header -->
  <header id="activity">
    <h2><b><p class="w3-text-green">CyberNexa Club Activities</b></h2>
  

 <p align="center"><h5><p class="w3-text-grey">Activities form for CyberNexa Club 2024</h5></p>
 <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
         
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM activity";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>

          </tr>

        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


<hr>


     <!-- Header -->
  <header id="achievement">
  
  
   <!-- achievement-->
  <h2><p class="w3-text-green"><b>Achievements</b></h2>
<h5><p class="w3-text-grey">This are some of our club achievements</h5></p>
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-pale-red">
		
        <h4>Achievement</h4>
        </div>
        <ul class="w3-ul w3-white">
          <li class="w3-padding-16">
            <img src="photo/ac.png" alt="Image" class="w3-left w3-margin-right" style="width:110px">
            <span class="w3-large">Innovation Trailblazer Award (2022)</span>
            <br>
            <span><p class="w3-text-grey">Awarded to the club member who has shown exceptional creativity and innovation in implementing new technologies or solutions</span></p>
          </li>
          <li class="w3-padding-16">
            <img src="photo/ac3.png" alt="Image" class="w3-left w3-margin-right" style="width:110px">
            <span class="w3-large">Certificates Development Project Manager</span>
            <br>
            <span><p class="w3-text-grey">Awarded to the member who has demonstrated exceptional project management skills, ensuring the successful completion of IT projects within the club.</p></span>
          </li>
          <li class="w3-padding-16">
            <img src="photo/ac4.png" alt="Image" class="w3-left w3-margin-right" style="width:110px">
            <span class="w3-large">National Level Quiz on Python Programming</span>
            <br>
            <span><p class="w3-text-grey">The member who has shown exemplary dedication to participates in this quiz and promoting best practices within the club.</p></span>
          </li>
          <li class="w3-padding-16">
            <img src="photo/ac1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:110px">
            <span class="w3-large">Tech for Good Trophy (2022)</span>
            <br>
            <span><p class="w3-text-grey">Recognizes the member who has used technology to make a positive impact on the community or society, aligning IT skills with social responsibility.</p></span>
          </li>
        </ul>
      </div>
      <hr>

  
  <!-- Contact Section -->
  <header id="contact">
  <?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	<h2><b><p class="w3-text-green">Contact Us for CyberNexa Club</b></h2>
	<br>
<h5><p class="w3-text-grey">Fill this form for your comment about our club website</h5></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Contact Student ID</th>
          <th scope="col">Contact Number</th>
		 <th scope="col">Email</th>
          <th scope="col">Comment</th>
         
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>

            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
<hr>
  

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">Our Club</h3>
  <p class="w3-center"><em>You can contact the admin or go to our club at UiTM Machang!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="photo/map1.png" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a href="https://maps.app.goo.gl/RytwpQdzva3Vss798" title="W3.CSS" target="_blank" class="w3-hover-text-green">UiTM Machang</a><br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +06 11125572<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: lilypetunia@gmail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave us a note:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-pale-red w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-pale-red w3-padding-16">
<br>
  <a href="#home" class="w3-button w3-green"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <br><br><br>
  <p>If you haven't explored our website yet, you're missing out! Dive in, discover, and join the tech party with us</p>
  <p>Web Developer by Siti Nur Nabila Binti Mohd Razali (2021809794)</p>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
 
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
