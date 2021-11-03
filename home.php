<?php 
session_start();

?>

<!DOCTYPE html>
<html>

  <head>
    <title>weCare</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/homestyle.css">

<?php include "includes/header.php";?>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus">Contact</a>
            </li>
            <li class="nav-item">
                <?php
                if(isset($_SESSION['frist_name'])){
                  echo "<a class='nav-link' href=''>".$_SESSION['frist_name'] ."</a>" ;
                }else{
                  echo '<a class="nav-link" href="#" data-toggle="modal" data-target="#popup">Enter</a>';
                }
                ?>
            </li>
            <li class="nav-item">   
                <?php
                if(!isset($_SESSION['frist_name'])){
                  echo '<a class="nav-link" id="out" href="register.php">Register</a>' ;
                }else{
                  echo '<a class="nav-link" href="home.php?logout">Log Out</a>';
                }
                ?>
            </li>
          </ul>
      </div>        
          
<?php include "includes/logout.php"; ?>
  </nav>
 <!--Modal-->

    <div id="popup" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">
              <a href="home.html"><span>we</span><span style="color: #ff4345;">C</span><span>are</span></a>
            </h1>

            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          
          <form  >
            <div class="modal-body">

              <h3>Sign into your account </h3>
              <input type="email" placeholder="Email address" name="email" required />
              <input type="password" placeholder="************" name="password" id="pass" required />
              <button type="submit" class="btn" name="submit">Enter</button>


              <div>
                <a href="#">Forget password</a>
                <a href="register.php" class="rightlink">Make a new account</a>
              </div>
            </div>


          </form>

        </div>
      </div>

    </div>
      <div class="carouselPart">
        <div id="demo" class="carousel slide carouselPart" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>

          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/1.jpg" width="100%" height="710px" alt="Lab">
              <div class="carousel-caption carouselCaption">
                <h1>We are here for you.</h1>
                <p>Welcome to weCare site</p>
                <a href="#dicoverpart">Discover</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/2.jpg" width="100%" height="710px" alt="Lab">
              <div class="carousel-caption carouselCaption">
                <h1>Leading you to a simple life.</h1>
                <p>Welcome to weCare site</p>
                <a href="#dicoverpart">Discover</a>
              </div>
            </div>

          </div>

        </div>

      </div>
      
    </section>
    <!-- End First Section -->
    <!--Sart Second Section-->
    <section class="aboutSection" id="aboutus">
      <h1 class="headline">About us</h1>
      <div class="aboutimg d-flex justify-content-around flex-wrap">
        <div class="fixedImg">
          
        </div>
        <div class="about">
          <h2>we<span style="color: #ff4345;">C</span>are view</h2>
          <p>weCare site is a tool to ease understanding of medical&nbsp;analysis.<br> Here you will find another useful
            tool
            which
            is the BMI&nbsp;calculator.<br>
            Is it the right time to have a healthy life?
          </p>
          <a href="#dicoverpart">Discover</a>
        </div>
      </div>
    </section>
    <!--End Second Section-->
    <!--Start third Section-->
    <section class="analysisSection" id="dicoverpart">
      <h1 class="headline offer analysishead d-block">Analysis Tool</h1>
      <div class="d-flex justify-content-around flex-wrap content">
        <div class="analysisText">
          <h2>Check your analysis</h2>
          <p>
            Here we are prepared this tool for you. Our tool is just a way to understand your medical analysis. Just by
            Entering the name of your analysis and some -small- details then we will get you the simle explaination of
            your result. Wanna try?
          </p>
          <a href="analysis.php">Discover</a>
        </div>
        <div class="analysisImg">
          <img src="img/11.png" alt="Analysis photo" style="width: 100%;" />
        </div>
      </div>
    </section>
    <section class="analysisSection bmiSection">
      <h1 class="headline offer analysishead d-block">BMI Tool</h1>
      <div class="d-flex justify-content-around flex-wrap content">
        <div class="analysisImg shadowImgBMI">
          <img src="img/4.jpg" alt="Analysis photo" style="width: 100%;" />
        </div>
        <div class="analysisText">
          <h2>Check by BMI</h2>
          <p>
            Here we are prepared this tool for you. Our tool is just a way to understand your BMI. Just by
            Entering the name of your weight and height then we will get you the simle explaination about
            your body. Wanna try?
          </p>
          <a href="bmi.php">Discover</a>
        </div>

      </div>
    </section>
    <!--End third Section-->
    <!--Start Fourth Section-->
    <?php include "includes/footer.php";?>
