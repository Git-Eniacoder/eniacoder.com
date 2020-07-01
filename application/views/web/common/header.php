<!DOCTYPE html>
<html>
    <head>
        <title >Enicoder || Home</title>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body>

        <header class="head">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                  <div class="logo">
                    <a class="custom-logo-link " rel="home" href="#">
                      <img width="133" height="55" src="<?php echo base_url().'assets/img/logo/'.$site_setting['site_logo']; ?>" alt="Eniacoder" class="custom-logo" >
                    </a>
                  </div>
                  <button class="navbar-toggler nav-dark bbb" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                  </button>
                  <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
                    <ul id="nav" class="navbar-nav ml-auto ">
                      <li class=" nav-item">
                        <a title="Home" href="<?php echo base_url(); ?>" class="nav-link">
                          Home
                        </a>
                      </li>
                     
                      <li class=" nav-item">
                        <a title="About Us" href="<?php echo $url['blog']; ?>" class="nav-link">
                          Blog
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
                          Dropdown link
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Link 1</a>
                          <a class="dropdown-item" href="#">Link 2</a>
                          <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                      </li>
                  <?php foreach($page_name as $value){ ?>
                      <li class=" nav-item">
                        <a title="About Us" href="<?php echo $url['page-url'].$value['page_url']; ?>" class="nav-link">
                          <?php echo $value['page_name'] ;?>
                        </a>
                      </li>
                  <?php } ?>
                      <li   class="  nav-item">
                        <button  >Let's Start</button>
                        
                      </li>
                    </ul>
                  </div>
                </nav> <!-- navbar -->
              </div>
            </div> <!-- row -->
          </div> <!-- container -->
        </header>