<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/youtube.css">
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
              <a href="../mainPages/facultyMain.php">Faculties ￬</a>
              
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
                  <li><a href="../mainPages/projectsMain.php">Projects</a></li>
                  <li><a href="#">Testimonies</a></li>
                  <li><a href="../mainPages/conferencesMain.php">Conferences</a></li>
                  <li><a href="../mainPages/newsMain.php">News</a></li>
              </ul>
          </li>
          <li><a href="../youtube/youtubeVideos.php">Youtube Videos</a></li>
      </ul>
                  </div>
            </div>
        </div>
    

<!-- the body starts here -->

<section class="mainContainer">
    <div class="videoContainer">
        <div class="videoTitle">
            <h1> Recent Videos</h1>
        </div>
        <div class="videoLeft">
        <div class="newsContent">
                            <div class="individualNews">
                                <div class="individualImage">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/EbVJi_oiARA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="individualTitle">
                                   <h3> <a href="https://www.youtube.com/watch?v=EbVJi_oiARA&t=15s" class="videoT" target="_blank"> How to Configure a Virtual Switch on Packet Tracer</a></h3> 
                                </div>
                                <div class="individualAbstract"> 
                                    <p> </p>
                                    <p> Faculty: Software Engineering</p>
                                    <p> Related to: Technology</p>
                                </div>
                            </div>
                    </div>
        </div>
        <div class="videoRight">
        <div class="newsContent">
        <div class="individualNews">
                                <div class="individualImage">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/opvI4lergGI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="individualTitle">
                                   <h3> <a href="https://www.youtube.com/watch?v=opvI4lergGI" class="videoT" target="_blank"> Creating a Basic Network Connection with Packet tracer</a></h3> 
                                </div>
                                <div class="individualAbstract"> 
                                    <p> </p>
                                    <p> Faculty: Software Engineering</p>
                                    <p> Related to: Technology</p>
                                </div>
                            </div>

                           

                    </div>  
                    <br><br>               
        </div>

        <div class="navIndex">
                            <table class="tableIndex">
                                <tr>
                                <td>
                                    <
                                    </td>
                                <?php $i=1; for ($x = 0; $x < 5; $x++ ){     ?>
                                    <td> <a href="#" ><?php echo $i ?><?php ?> </td>
                                    <?php $i=$i+1;}?>
                                    <td>
                                        >
                                    </td>
                                </tr>    
                            </table>
    </div>
    <br><br>
</section>

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
