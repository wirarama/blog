<?php
class view{
    var $host = 'http://localhost/ppiyamaguchi';
    function nav(){
        $nav = array('home','background','objective','schedule','contact');
        ?>
<nav class="navbar navbar-fixed-top navbar-default nav-follow" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $this->host; ?>">Indonesia Day</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    for($i=0;$i<sizeof($nav);$i++){
                    ?>
                    <li><a href="#<?php echo $nav[$i]; ?>"><?php echo $nav[$i]; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
<?php
    }
    function topcover(){
        ?>
<a id="home"></a>
<div class="carousel">
    <div class="fill" style="background-image:url('<?php echo $this->host; ?>/images/001.jpg');">
            <div class="carousel-caption">
            <h1>Indonesia Day</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
<?php
    }
    function credit(){
        ?>
    <div class="section-colored text-center creditku">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; PPI Yamaguchi 2014</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php
    }
    function importantmenu($id){
        
        ?>
<a id="<?php echo $id; ?>"></a>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive img-thumbnail" src="<?php echo $this->host; ?>/images/thumbs/004.jpg">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Indonesian Day in Aprils!!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
        </div>
    </div>
<?php
    }
    function contact(){
        ?>
<a id="contact"></a>
    <div class="container">
    <div class="row">

        <div class="col-sm-8">
          <h3>Let's Get In Touch!</h3>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Name</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email Address</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Phone Number</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Message</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Modern Business</h3>
          <h4>A Start Bootstrap Template</h4>
          <p>
            5555 44th Street N.<br>
            Bootstrapville, CA 32323<br>
          </p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: (555) 984-3600</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a></p>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
          </ul>
        </div>

      </div><!-- /.row -->
    </div>
    <?php
    }
    function blogdetail(){
        ?>
    <div class="container">
        <div class="row">
                <div class="col-lg-8">
                <img class="img-responsive img-thumbnail" src="<?php echo $this->host; ?>/images/thumbs/005.jpg">
                <p class="lead">Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>
                <p>You know, being a test pilot isn't always the healthiest business in the world.</p>
                <p>Cookie jelly beans soufflé icing. Gummi bears tootsie roll powder chupa chups cheesecake chocolate jelly-o lollipop lollipop. Halvah applicake chupa chups. Marshmallow chocolate jujubes icing lollipop gummi bears chupa chups pudding bonbon. Jelly beans jelly soufflé jujubes. Sesame snaps lollipop icing donut lemon drops soufflé.</p>
                <p>Donut caramels gingerbread. Sweet roll macaroon pastry cotton candy oat cake sesame snaps biscuit lemon drops dessert. Candy canes carrot cake danish carrot cake soufflé jelly chocolate cake muffin. Topping brownie donut. Oat cake marzipan dragée cheesecake. Donut chocolate cake jujubes tart dragée toffee.</p>
                <p>Tilefish electric knifefish salmon shark southern Dolly Varden. Pacific argentine tope golden shiner ilisha barreleye loosejaw catla, dogteeth tetra catfish tenpounder nase scup Ragfish brotula." Codlet brook lamprey pleco, Japanese eel convict cichlid titan triggerfish, plownose chimaera topminnow Black scalyfin. Walleye pollock, blue shark Sacramento blackfish prickleback airbreathing catfish yellowfin cutthroat trout, goby southern sandfish. North Pacific daggertooth dorab cepalin weever flying gurnard.</p>
                
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
    </div>
    <?php
    }
    function about(){
        ?>
    <div class="container" style="margin-bottom:20px;">
    <div class="row">

            <div class="col-lg-12">
                <img class="img-responsive img-thumbnail" src="<?php echo $this->host; ?>/images/thumbs/005.jpg">
            </div>

        </div>
        <!-- /.row -->

        <!-- Service Paragraphs -->

        <div class="row">

            <div class="col-md-8">
                <h2 class="page-header">PPI Yamaguchi</h2>
                <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>

            <div class="col-md-4">
                <h2 class="page-header">Struktur Organisasi</h2>
                <p>Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
            </div>

        </div>
    </div>
    <?php
    }
}
?>