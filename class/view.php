<?php
require_once 'admin/class.php';
class view{
    var $host = 'http://localhost/mine/blog';
    function nav(){
        $nav = array('about','activities','blog','contact');
        ?>
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $this->host; ?>">Situs Sundel Bangsat</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    for($i=0;$i<sizeof($nav);$i++){
                    ?>
                    <li><a href="<?php echo $this->host; ?>/<?php echo $nav[$i]; ?>"><?php echo $nav[$i]; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
<?php
    }
    function carousel(){
        $q = new database();
        $con = $q->connect();
        $pic = array();
        $text = array();
        $r = $q->query("SELECT a.text,b.filename FROM slide AS a,pictures AS b WHERE a.session=b.session",$con);
        while($d = $r->fetch_assoc()){
            array_push($pic,$d['filename']);
            array_push($text,$d['text']);
        }
        ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
      <?php
            for($i=0;$i<sizeof($pic);$i++){
            ?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0) echo 'class="active"'; ?>"></li>
    <?php } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
      <?php
            for($i=0;$i<sizeof($pic);$i++){
            ?>
    <div class="item <?php if($i==0){ echo 'active'; } ?>">
        <div class="fill" style="background-image:url('<?php echo $this->host; ?>/uploads/<?php echo $pic[$i]; ?>');"></div>
      <div class="carousel-caption">
        <h1><?php echo $text[$i]; ?></h1>
      </div>
    </div>
      <?php } ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

<?php
    }
    function menulist($title){
        $q = new database();
        $con = $q->connect();
        $pic = array();
        $text = array();
        $r = $q->query("SELECT title,session,description FROM blog LIMIT 0,3",$con);
        while($d = $r->fetch_assoc()){
            array_push($pic,$d['session'].'1.jpg');
            array_push($text,$d['title']);
        }
        ?>
    <div class="container">
        <div class="col-lg-12">
            <h2 class="page-header"><?php echo $title; ?></h2>
        </div>
        <div class="row">
            <?php
            for($i=0;$i<sizeof($pic);$i++){
            ?>
            <div class="col-md-4 portfolio-item">
                <a href="<?php echo $this->host; ?>/blog">
                    <img class="img-responsive img-thumbnail" src="<?php echo $this->host; ?>/uploads/<?php echo $pic[$i]; ?>_thumb.jpg">
                </a>
                <h3><a href="<?php echo $this->host; ?>/blog"><?php echo $text[$i]; ?></a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <?php } ?>
        </div>
    </div>
<?php
    }
    function bloglist(){
        $q = new database();
        $con = $q->connect();
?>
    <div class="container">
        <?php
        $rblog = $q->query("SELECT title,description,date,alias,session FROM blog",$con);
        while($dblog = $rblog->fetch_assoc()){
            $pictures = NULL;
            $rpic = $q->query("SELECT filename FROM pictures WHERE session='%s' LIMIT 0,1",$con,array($dblog['session']));
            while($dpic = $rpic->fetch_assoc()){
                $pictures = $dpic['filename'];
            }
        ?>
        <div class="row" style="margin-top: 10px;margin-bottom: 40px;">
            <?php
            $descsize = '12';
            if(!empty($pictures)){
                $descsize = '6';
            ?>
            <div class="col-md-6">
                <a href="<?php echo $this->host; ?>/blog">
                    <img src="<?php echo $this->host; ?>/uploads/<?php echo $pictures; ?>" class="img-responsive img-thumbnail">
                </a>
            </div>
            <?php } ?>
            <div class="col-md-<?php echo $descsize; ?>">
                <h3><a href="<?php echo $this->host; ?>/blog"><?php echo $dblog['title']; ?></a>
                </h3>
                <p><?php echo $dblog['date']; ?></p>
                <p><?php echo $dblog['description']; ?></p>
                <a class="btn btn-primary" href="<?php echo $this->host; ?>/blog/<?php echo $dblog['alias']; ?>">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <?php } ?>
    </div>
<div class="row text-center">

            <div class="col-lg-12">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>

        </div>
<?php
    }
    function sectioncolored(){
        ?>
<div class="section-colored text-center">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Sekilas Tentang PPI Yamaguchi</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->
<?php
    }
    function importantmenu(){
        ?>
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
    function jumplink(){
        ?>
    <div class="container">
        <div class="row well">
            <div class="col-lg-8 col-md-8">
                <h4>Daftar untuk Indonesian Day</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <a class="btn btn-lg btn-primary pull-right" href="http://startbootstrap.com">Daftar Sekarang!</a>
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
                        <p>Copyright &copy; Fucking Whore</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php
    }
    function pageheader($title,$pagename){
        ?>
    <div class="container">
    <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $title; ?></h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $this->host; ?>">Home</a></li>
                    <li class="active"><?php echo $pagename; ?></li>
                </ol>
            </div>

        </div>
    </div>
    <?php
    }
    function contact(){
        ?>
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
                <h2 class="page-header">Fucking Fuck Fuck</h2>
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