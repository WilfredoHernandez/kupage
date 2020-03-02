<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Gentium+Basic|PT+Serif|Source+Serif+Pro&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/structureMain.css">
<script src="../script/navbar.js"></script> 
<header>
    <title>SE Project Prototype</title>
</header>
</head>

<body> 
<!-- Header Navbar Container -->

    <div class="navMenu" id="navbar">
        <div class="container">
        <img  src="../images/logo.png" width="35%" height="60%">
        <br><br>
            <div class="menu-sm">
              
            <ul id="menu">
        <li><a href="../index.php">Home</a></li>
        <li>
            <a href="facultyMain">Faculties ￬</a>
            
            <ul class="hidden">
            <li><a href="../faculties/software.php">Software</a></li>
                <li><a href="../faculties/psychology.php">Psychology</a></li>
                <li><a href="../faculties/business.php">Business</a></li>
                <li><a href="../faculties/politicalsci.php">Political Science</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Categories ￬</a>
            <ul class="hidden">
            <li><a href="projectsMain.php">Projects</a></li>
                <li><a href="#">Testimonies</a></li>
                <li><a href="conferencesMain.php">Conferences</a></li>
                <li><a href="newsMain.php">News</a></li>
            </ul>
        </li>
        <li><a href="../youtube/youtubeVideos.php">Youtube Videos</a></li>
    </ul>
                </div>
            </div>
        </div>
    

<!-- the body starts here -->
<div class="mainContainer">
    <div class="newsMain"> 
            <div class="newsMainTitle">
            <h3> Most Recent Conferences </h3>                
            </div>
                <div class="newsContent">
                    <?php $i=1; for ($x = 0; $x < 4; $x++ ){     ?>
                            <div class="individualNews">
                                <div class="individualImage">
                                <img src="../images/example.jpg" width="100%px" height="100%">
                                </div>
                                <div class="individualTitle">
                                   <h3> <?php echo "Conference " . $i ?></h3> 
                                </div>
                                <div class="individualAbstract"> 
                                    <p> Lorem ipsum dolor dummy text sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                </div>
                            </div>
                        <?php $i=$i+1;}?>
                        <div class="navIndex">
                            <table class="tableIndex">
                                <tr>
                                <td>
                                    <
                                    </td>
                                <?php $i=1; for ($x = 0; $x < 5; $x++ ){     ?>
                                    <td> <?php echo $i ?> </td>
                                    <?php $i=$i+1;}?>
                                    <td>
                                        >
                                    </td>
                                </tr>    
                            </table>
                        </div>
                   
                </div>
        </div>
    </div>


</div>

<!-- first container -->

</body>

<!--footer -->
<footer class="footerSite">
  <div class="footerContent">
      <p></p>
      <div class="contentInfo">
    </div>

    <div class="contentInfo">
        <p></p>
    <p class="footerTags"><a href="#" class="footerLinks">About Us</a></p>
    <p class="footerTags"><a href="#" class="footerLinks">Student Request Form</a></p>
    <p class="footerTags"><a href="https://keiseruniversity.edu.ni/" class="footerLinks">Keiser University LAC Page</a></p>
    <p class="footerTags"><a href="../admin/faculty.php" class="footerLinks">Faculty Login</a></p>
    </div>

    <div class="contentInfo">
        <p></p>
    <p class="footerTags"><a href="https://www.youtube.com/channel/UCxT8MqsgtadIkKQaOo4D20Q" class="footerLinks">Youtube Channel<a></p>
    <p class="footerTags">Facebook Page</p>
    <p class="footerTags">Twitter Page</p>
    <p class="footerTags">Instagram Page</p>
    </div>

    <div class="contentInfoR">
        <p></p>
    <p class="footerTags">Gasolinera UNO 2c. al Sur</p>
    <p class="footerTags">San Marcos, Carazo, Nicaragua</p>
    <p class="footerTags">Phone: (505) 2278-6911 – (505) 2535-2314</p>
    <p class="footerTags">Toll Free: 1 (800) 969- 1685</p>
    </div>

  </div>
  
  <div class="copyrightContent"> 
  <p style="text-align:center; color: #999; font-family: Roboto;"> All rights reserved <span style="color:#f9b418">Keiser University Latin American Campus</span></p>
  </div>
</footer>

</html>

