<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package acc_wp_project
 */

get_header(); 
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="http://www.escrotrans.com/content/images/truck-1-crop.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1><p>The #1 Solution For All Commercial Truck Travel Needs</p></h1>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="second-slide" src="http://localhost/objectOrientedPHP/ClassWordPress/WP_Project/wordpress/wp-content/uploads/2017/05/2img.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h4><p>A certified “green” solution to help carriers determine routes optimized for enhanced fuel economy and reduced emissions</p></h4>          
        </div>
      </div>
    </div>
    <div class="item">
      <img class="third-slide" src="http://localhost/objectOrientedPHP/ClassWordPress/WP_Project/wordpress/wp-content/uploads/2017/05/img-2.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h2><p>Commercial Vehicle Navigation and Distribution System</p></h2>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr>
<div class="text-center">
  <h4>Introducing MuniRoute™ by ARMA International, LLC</h4 class="text-ceneter">
  <hr>
  <p><a class="btn btn-lg btn-primary fp-btn" href="http://muniroute.com/index.php/about-muniroute/" role="button">Learn more</a></p>
</div>
<div class="text-center">
	<ul class="list-inline">
  <li><a href="https://www.facebook.com/MuniRoute" class="hoverable"><img height="60" width="60" src="http://giiam.org/muniroute.com/Social-Truck/Social-Truck_fb2.png"></a></li>
  <li><a href="https://twitter.com/MuniRoute" class="hoverable"><img height="60" width="60" src="http://giiam.org/muniroute.com/Social-Truck/Social-Truck_twi.png"></a></li>
  <li><a href="https://www.linkedin.com/company/asset-and-risk-management-associates-arma-international-llc" class="hoverable"><img height="60" width="60" src="http://giiam.org/muniroute.com/Social-Truck/Social-Truck_li2.png"></a></li>
  <li><a href="http://armamuniroute.wordpress.com/" class="hoverable"><img src="http://giiam.org/muniroute.com/Social-Truck/Social-Truck_wp_2.png"></a></li>
  </ul>
</div>

<div class="section" id="This_is_where_the_Information_Blocks_Start" style="margin-top: 3%;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="panel panel-default hoverable">
          <div class="panel-heading">
            <center><br>
              <h3><i class="fa fa-fw fa-check-circle"></i> MuniRoute™ News</h3>
              <p></p>
            </center>
          </div>
          <div class="panel-body">
            <li> <b><a href="http://giiam.org/MuniRoutev2/MRbp090314.html">09/02/14</a></b> - MuniRoute™ published in the USPTO Official Gazette. 
            </li>
            <li> <b>07/24/14</b> - MuniRoute™ trademark officially approved for publication.</li>
            <p></p>
          </div>
          <p></p>
        </div>
        <p></p>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="panel panel-default hoverable">
          <div class="panel-heading">
              <center><br>
                <h3><i class="fa fa-fw fa-gift"></i> Request a Demo</h3>
                <p></p>
              </center>
            </div>
            <div class="panel-body">
              <p>Want a live presentation on how MuniRoute™ works for you? <a href="http://giiam.org/MuniRoutev2/MRcontact.html">Request a demonstration.</a>  </p>
              <p></p>
            </div>
            <p></p>
          </div>
          <p></p>
        </div>
      <div class="col-lg-4 col-md-4">
        <div class="panel panel-default hoverable">
          <div class="panel-heading">
            <center><br>
              <h3><i class="fa fa-fw fa-folder-open"></i> Got a question?</h3>
              <p></p>
            </center>
          </div>
          <div class="panel-body">
            <p>Check out our <a href="http://giiam.org/MuniRoutev2/MRfaq.html">FAQ</a> or send us a message.</p>
            <p></p>
          </div>
          <p></p>
        </div>
        <p></p>
      </div>
      <p></p>
    </div>
    <p></p>
  </div>
  <p></p>
</div>

<?php
get_footer();
