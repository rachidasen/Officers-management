<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide" id="carousel-68407" style="margin-top:80px;">
        <ol class="carousel-indicators">
          <li class="active" data-slide-to="0" data-target="#carousel-68407">
          </li>
          <li data-slide-to="1" data-target="#carousel-68407">
          </li>
          <li data-slide-to="2" data-target="#carousel-68407">
          </li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img alt="Carousel Bootstrap First" src="<?=base_url("assets/img/1.jpg");?>" />
            <div class="carousel-caption">
              
              
            </div>
          </div>
          <div class="item">
            <img alt="Carousel Bootstrap Second" src="<?=base_url("assets/img/2.jpg");?>" />
            <div class="carousel-caption">
              <h4>
                
              </h4>
              
            </div>
          </div>
          <div class="item">
            <img alt="Carousel Bootstrap Third" src="<?=base_url("assets/img/3.jpg");?>" />
            <div class="carousel-caption">
              <h4>
                
              </h4>
              <p>
                MINISTRY OF ROAD AND TRANSPORT AND HIGHWAYS.
              </p>
            </div>
          </div>
        </div> <a class="left carousel-control" href="#carousel-68407" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-68407" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
      <div class="tabbable" id="tabs-186887">
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#panel-540166" data-toggle="tab">OFFICER</a>
          </li>
          <li>
            <a href="#panel-537856" data-toggle="tab">REPORTING-OFFICER</a>
          </li>
          <li>
            <a href="#panel-537890" data-toggle="tab">REVIEWING-OFFICER</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="panel-540166">
            <p>
            
              <?php $this->load->view('gen-off.php');?>
            </p>
          </div>
          <div class="tab-pane" id="panel-537856">
            <p>
              
              <?php $this->load->view('rep-off.php');?>

            </p>
          </div>
          <div class="tab-pane" id="panel-537890">
            <p>
              <?php $this->load->view('rev-off.php'); ?>
            </p>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
           
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button> <a class="navbar-brand" href="#">Admin</a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Link</a>
            </li>
           
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input class="form-control" type="text" />
            </div> 
            <button type="submit" class="btn btn-default">
              Submit
            </button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#">Logout</a>
            </li>
           
          </ul>
        </div>
        
      </nav>
      
    
      
      <address>
         <!-- <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title="Phone">P:</abbr> (123) 456-7890 -->
      </address>
    </div>
  </div>
</div>