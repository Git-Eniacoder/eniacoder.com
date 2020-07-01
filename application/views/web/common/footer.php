<footer class="shadow-lg foot">
          <div class="container">
            <div class="row">

              <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <img src="<?php echo base_url().'assets/img/logo/'.$site_setting['site_logo']; ?>" alt="" height="50" width="80" srcset=""><br>
                <?php echo $site_setting['site_title']; ?><br>
                <?php echo $site_setting['site_desc']; ?>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <h5>products</h5>
                <hr class="style1">
                <div class="links">
                  <a href="#">Health insurance</a></br>
                  <a href="#">Term insurance</a></br>
                  <a href="#">Bike insurance</a></br>
                  <a href="#">Car insurance</a></br>
                  <a href="#">Travel insurance</a></br>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <h5>quick links</h5>
                <hr class="style1">
                <div class="links"> 
                  <?php foreach($page_name as $value){ ?>
                  <a href="<?php echo $url['page-url'].$value['page_url']; ?>"><?php echo $value['page_name'] ;?></a></br>
                  <?php } ?>
                </div>
              </div>
              
            </div>
          </div>    
        </footer>


        <div class="last">
          <div class="container text-center">
            <a href="http://www.eniacoder.com">Eniacoder.com</a>
          </div>  
        </div>  
        
    </body>    
</html>