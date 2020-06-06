<?php

session_start();
if($_SESSION['login'])
{
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Traveller's</title>

        <!-- Bootstrap core CSS -->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
         <link href="../Bootstrap/bootstrap.css" rel="stylesheet">
          <link href="../CSS/packagedetails.css" rel="stylesheet">
        
        
          <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        
         
        <link href="../Bootstrap/bootstrap.min.css">
    
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        
           <style>
ul {
  list-style-type: none;
  margin-left: 0px;
    margin-bottom:-5px;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: navy    ;
}
                .session{
            font-family: serif;
           font-weight: bolder;
           font-size: 20px;
           color: aliceblue;
           float: right;
        }
</style>
</style> 
    </head>


    <body>
        
        <ul>
  <li><a class="active" href="../index.php">Home</a></li>
  <li><a href="#">World</a></li>
             <li><a href="index.php">Logout</a></li>
          <li class="session">Welcome : <?php echo $_SESSION['login'];?></li>
</ul>


        <!-- Intro -->
        <div id="about">
            <div class="light-wrapper">
                <div class="container inner">
                    <div class="row">
                        <div class="text-center">
                            <h2 class="main-title">Bali Tour Packages</h2>
                            <hr>
                        </div>
                        <div class="divide50"></div>
                        <div class="col-sm-4">
                          <figure><img src= "../IMAGES/balipack.jpg" alt="" style="width:100%;height: 300px;"></figure>
                        </div>
                        <div class="col-sm-8">
                          <h4>Visiting place</h4>
                          <p> Enchanted with beautiful arrays of shades, spreading across the variant natural bounty, Bali is an island leisure vacation every traveller dreams! Escape time and the fast paced life to the island of perfect dreamy holidays! These dreamy islands are blessed with a heavenly climate that soothes the body completely. Shimmering beaches, turquoise waters and scenic landscapes make the islands a perfect reason to hunt for Bali tour packages! Here at Veena World, we offer the amalgamation of the islands’ unique experiences into carefully crafted Bali holiday packages. The picturesque island is a favourite destination for honeymooners! If you’re looking for a perfect getaway with your better half to begin your new journey, then our Bali honeymoon packages from India await to surprise you. The true feels of these islands lift up the spirit of love between you and your partner.  </p>
                        </div>
                      </div>
                     <div class="divide50"></div>
                      <div class="row">
                        <div class="col-sm-4">
                          <h4>Our Journeys</h4><hr>
                          <p>A heart-warming symphony awaits to give you true love goals with perfect Bali honeymoon packages which can be selected from our specially crafted itinerary options. </p>
                          <div class="divide5"></div>
                         
                          <!-- /.progress-list --> 
                        </div>
                        <!-- /.col -->
                        
                        <div class="col-sm-4">
                          <h4>Tour Highlights</h4><hr>
            
                          <div class="divide10"></div>
                          <ol class="color">
                            <li> The island is home to religious sites such as cliffside Uluwatu Temple. </li>
                            <li> To the south, the beachside city of Kuta has lively bars, while Seminyak, Sanur and Nusa Dua are popular resort towns. </li>
                            <li> The island is also known for its yoga and meditation retreats. </li>
                            
                           
                
                          </ol>
                        </div>
                        <!-- /.col -->
                        
                        <div class="col-sm-4">
                          <h4>Our Facilities</h4><hr>
                          <div class="divide10"></div>
                          <div class="services-2">
                            <!-- /.icon -->
                            <div class="text">
                              <h5><i class='fas fa-building' style='font-size:24px'> </i> Hotels  </h5>
                            <p>Stay at the 5-star hotel.</p>
                            </div>
                            <!-- /.text -->
                            <div class="divide20"></div>
                            <div class="icon"> <img src="img/icon-heart.png" data-src="style/images/icons/icon-heart.png" data-ret="style/images/icons/icon-heart@2x.png" class="retina" alt="" /> </div>
                            <!-- /.icon -->
                            <div class="text">
                              <h5><i class='fas fa-hamburger' style='font-size:24px'> </i> Food</h5>
                            <p>Ordering own choice of food.</p>
                             
                            </div>
                            <!-- /.text -->
                            <div class="divide20"></div>
                            <div class="icon"> <img src="img/icon-print.png" data-src="style/images/icons/icon-print.png" data-ret="style/images/icons/icon-print@2x.png" class="retina" alt="" /> </div>
                            <!-- /.icon -->
                            <div class="text">
                              <h5><i class='fas fa-plane' style='font-size:24px'> </i>Transport</h5>
                              <p>Package includes all transportation cost and provide car booking facility</p>
                            </div>
                            <!-- /.text --> 
                            
                          </div>
                          <!-- /.services-2 --> 
                          
                        </div>
                        <!-- /.col --> 
                        
                      </div>
                      <!-- /.row --> 
                      
                    </div>
                    <!-- /.container --> 
                  </div>
                  <!-- /.light-wrapper -->
                </div>
        <!-- /Intro -->

        <!-- Services -->
        <div id="services" class="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <h2 class="main-title">Our Services</h2>
                        <hr>
                    </div>
                </div>
                <div class="divide50"></div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-plane"></i>
                            <h4 class="service-title">Great Transport</h4>
                            <p class="service-desc">Great transport facilty available for all the members with respect to their choices.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-usd"></i>
                            <h4 class="service-title">Not Expensive</h4>
                            <p class="service-desc">Resonable cost of package with reasonable facility.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-cutlery"></i>
                            <h4 class="service-title">Delicious Food</h4>
                            <p class="service-desc">Tasty food with respect to your choices.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-camera"></i>
                            <h4 class="service-title">Best Photographer's</h4>
                            <p class="service-desc">Making of best memories with best photographers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Services -->
        <br>

        <!-- Call to Action -->
        <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h3>We provide online booking</h3>
                        <a href="../PHP/packagereg.php" class="btn booking-btn text-center" data-toggle="modal" data-target="#booking">Click for Booking !</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Call to Action -->

    
        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>

        <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
        <script>
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        </script>
        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        </script>
        <script>
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
        </script>

        <!-- modal -->

        <script>

            $('.modal').on('shown.bs.modal', function () {
                var curModal = this;
                $('.modal').each(function(){
                    if(this != curModal){
                        $(this).modal('hide');
                    }
                });
            });

        </script>

    </body>
</html>
<?php
} else{
header('location:logout.php');
}


?>