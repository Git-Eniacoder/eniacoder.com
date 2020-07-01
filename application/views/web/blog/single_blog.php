<style>
      .head{
          width: 100%;
          height: auto;
          background-color: #292929;
          padding: 1rem;
        }        
        .head .nav-link{
          color: white;
          
        }
        .head .nav-item{
          margin-left: 2rem;
        }

        .head .nav-item button{
          border: 2px solid #FF785D;;
          outline: none;
          background-color: #292929;
        
          padding-left: 2rem;
          padding-right: 2rem;
          padding-top: .5rem;
          padding-bottom: .5rem;
          color: white;
          transition: 0.5s;
        }
        .head .nav-item button:hover{
          border: 2px solid #FF785D;
          
          background-color: #FF785D;
         
          
          color: white;
        }


        .foot{
          width: 100%;
          height: auto;
          background-color: #1A1A1A;
          color: white;
          padding-top: 2rem;
          padding-bottom: 2rem;
          
        }
        .foot h5{
          padding-left: 3px ;
          text-transform: uppercase;
        }
        .foot a{
          color: white;
          font-size: 18px;
          text-decoration: none;
        }
        .foot a:hover{
          color: #bd6d5d;
          
        }

        .foot .style1 {

border-top: 1px solid #FF785D;
margin-top: 1px;
width: 50%;
margin-left: 0px;
}

.last{
  width: 100%;
  height: auto;
  background-color: #0D0E0E;
  padding: .6rem;
}
.last a{
  font-size: 1rem;
  color: white;
  text-decoration: none;
}
.blog-main{
    width: 100%;
    height: auto;
    padding-top: 3rem;
}
.blog-main .blog-nav{
    width: 100%;
    height: auto;
    background-color: #f8f8ff ;
    padding: .2rem 0 .2rem 2rem;
}
.blog-main .blog-nav p{
    color:grey;
}
.blog-author{
    width: 100%;
    height: auto;
}
.blog-author .card img{
 border:.09rem solid #FF785D;
  width: 3.5rem;
  height: 3.5rem;
  border-radius: 50%;
  margin-right: .8rem;
}
.blog-author .flex {
  display: flex;
  flex-wrap: nowrap;

  
}
.blog-author .card{
    border: none;
   
}
.blog-author .card h5{
   color: #292929;
   margin-top: 5px;
}
.blog-author .card p{
    color: #292929;
    margin-top: -5px;
}
.blog-cont{
    width: 100%;
    height: auto;
}
.blog-cont .side .card{
    border: none;
    background-color: #f8f8ff;
    width: 100%;
    height: auto;
    margin-bottom: 2rem;
}
.blog-cont .side .card h4{
   color: #292929;
   font-weight: 400;
   padding-left: 10px;
}
.blog-cont .side .card .style1 {

border-top: 2px solid #FF785D;
margin-top: 1px;
width: 100%;
margin-left: 0px;
}
.blog-cont .side .card a {
    color: #292929;
    padding-left: 10px;
    text-decoration: none;
    font-size: 1.1rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
}
.blog-related{
    width: 100%;
    height: auto;
    margin-top: 2rem;
    margin-bottom: 3rem;
}
.blog-related .style1 {

border-top: 2px solid #FF785D;
margin-top: 1px;
width: 100%;
margin-left: 0px;
}
.blog-related h4{
   color: #292929;
   font-weight: 600;
   padding-left: 10px;
}
</style>
<div class="blog-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 blog-nav">
                        <p>Home / Blog / Design</p>
                    </div>    
                    <div class="col-md-4">

                    </div>  
                </div>    
            </div>    
        </div>    
       
         <!-- Page Content -->
  
        <div class="blog-cont">
         <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $single['post_heading'] ;?></h1>

        <!-- Author -->
        <div class="blog-author">
        <div class="flex">
            <div class="card" width="20%" >
                
                    <img class="image-responsive" src="<?php echo base_url().'assets/img/feature/'.$single['post_image']; ?>"  >
                

            </div>    
            <div class="card" width="80%">
                
                <h5>Written By Himanshu Goyal</h5>
                <p><?php echo $single['post_date']; ?></p>

            </div> 
             
        </div> 
        </div>
        

        <!-- Date/Time -->
        

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo base_url().'assets/img/feature/'.$single['post_image']; ?>" alt="" style="margin-top: 2rem; margin-bottom: 2rem;">
        <?php echo $single['post_content'] ;?>
  

        <!-- Comments Form -->
        

        <!-- Single Comment -->
       

        <!-- Comment with nested comments -->
        

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4 side">

        <!-- Search Widget -->
       

        <!-- Side Widget -->
        <div class="card">
            <div class="card-body">
          <h4>Recommended</h4>
          <hr class="style1">
          <a href="#">How to Write Good Heading ?</a></br>
          <a href="#">How to Write Good Heading ?</a></br>
          <a href="#">How to Write Good Heading ?</a></br>
          <a href="#">How to Write Good Heading ?</a></br>
          <a href="#">How to Write Good Heading ?</a></br>
          </div>
        </div>
        <div class="card">
            <div class="card-body">
          <h4>ADS</h4>
          
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>

 </div>       





 

<div class="blog-related">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                
                <h4>Related post</h4>
                <hr class="style1">
                    
                
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                
                      
                
                      <!--Slides-->
                      <div class="carousel-inner" role="listbox">
                
                        <!--First slide-->
                        <div class="carousel-item active">
                
                          <div class="row">
                            <div class="col-md-4">
                              <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                  alt="Card image cap">
                                <div class="card-body">
                                  <h4 class="card-title">Card title</h4>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                  <a class="btn btn-primary">Button</a>
                                </div>
                              </div>
                            </div>
                
                            <div class="col-md-4 clearfix d-none d-md-block">
                              <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                  alt="Card image cap">
                                <div class="card-body">
                                  <h4 class="card-title">Card title</h4>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                  <a class="btn btn-primary">Button</a>
                                </div>
                              </div>
                            </div>
                
                            <div class="col-md-4 clearfix d-none d-md-block">
                              <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                  alt="Card image cap">
                                <div class="card-body">
                                  <h4 class="card-title">Card title</h4>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                  <a class="btn btn-primary">Button</a>
                                </div>
                              </div>
                            </div>
                          </div>
                
                        </div>
                        <!--/.First slide-->
                
                        <!--Second slide-->
                        <div class="carousel-item">
                
                          <div class="row">
                            <div class="col-md-4">
                              <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                  alt="Card image cap">
                                <div class="card-body">
                                  <h4 class="card-title">Card title</h4>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                  <a class="btn btn-primary">Button</a>
                                </div>
                              </div>
                            </div>
                
                            <div class="col-md-4 clearfix d-none d-md-block">
                              <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                  alt="Card image cap">
                                <div class="card-body">
                                  <h4 class="card-title">Card title</h4>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                  <a class="btn btn-primary">Button</a>
                                </div>
                              </div>
                            </div>
                
                            <div class="col-md-4 clearfix d-none d-md-block">
                              <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                  alt="Card image cap">
                                <div class="card-body">
                                  <h4 class="card-title">Card title</h4>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                  <a class="btn btn-primary">Button</a>
                                </div>
                              </div>
                            </div>
                          </div>
                
                        </div>
                        <!--/.Second slide-->
                
                        <!--Third slide-->
                        <div class="carousel-item">
                
                          <div class="row">
                            <div class="col-md-4">
                              <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                  alt="Card image cap">
                                <div class="card-body">
                                  <h4 class="card-title">Card title</h4>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                  <a class="btn btn-primary">Button</a>
                                </div>
                              </div>
                            </div>
                
                            <div class="col-md-4 clearfix d-none d-md-block">
                              <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                                  alt="Card image cap">
                                <div class="card-body">
                                  <h4 class="card-title">Card title</h4>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                  <a class="btn btn-primary">Button</a>
                                </div>
                              </div>
                            </div>
                
                            <div class="col-md-4 clearfix d-none d-md-block">
                              <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                                  alt="Card image cap">
                                <div class="card-body">
                                  <h4 class="card-title">Card title</h4>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                  <a class="btn btn-primary">Button</a>
                                </div>
                              </div>
                            </div>
                          </div>
                
                        </div>
                        <!--/.Third slide-->
                
                      </div>
                      <!--/.Slides-->
                      <div class="controls-top">
                        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left" style="float: left;"></i> previous</a>
                        <a class="btn-floating" href="#multi-item-example" data-slide="next" style="float:right;">next<i class="fa fa-chevron-right" ></i></a>
                      </div>
                    </div>
                    <!--/.Carousel Wrapper-->
                
                
                  
            </div>
            <div class="col-md-4">

            </div>    
        </div>    
    </div>    
</div>
