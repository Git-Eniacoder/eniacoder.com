
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
.blog-heading{
    width: 100%;
    height: auto;
    background-color: #292929;
    padding-top: 2rem;
    padding-bottom: 3rem;
}
.blog-heading h1{
    color: white;
    padding-left: 10px;
}
.blog-heading .style1{
    border-top: 2px solid #FF785D;

width: 15%;
margin-left: 0px;
}
.blogs-main{
    width: 100%;
    height: auto;
    padding-top: 3rem;
    padding-bottom: 3rem;
}
.blogs-main h2{
    color: #292929;
    font-weight: 400;
}
.blogs-all{
    width: 100%;
    height: auto;
    padding-bottom: 3rem;
}
.blogs-all .card{
    width: 100%;
    height: auto;
    border: none;
    outline: none;
    border-radius: 0px;
    background-color: #f8f8ff;
    margin-bottom: 2rem;
}
.blogs-all .card img{
    width: 100%;
    height: 150px;
}
.blogs-all .card h5{
    color: #292929;
    margin-top: .5rem;
    margin-bottom: .5rem;
    padding-left: 10px;
}
.blogs-all a{
    text-decoration: none;
    
}
.see-all-blog{
    width: 100%;
    height: auto;
  
    padding-bottom: 5rem;
}
.see-all-blog button{
    color: #FF785D;
    width: 10rem;
    font-size: 1.3rem;
    outline: none;
    border: 2px solid #FF785D;
    background-color: transparent;
    padding-bottom: .5rem;
    padding-top: .3rem;
}
.see-all-blog button:hover{
    background-color: #292929;
    transition: 0.5s;
}
    
</style>
<div class="blog-heading">
        <div class="container">
            <h1>Blogs</h1>
            <hr class="style1">




        </div>
    </div>   
        
    <div class="blogs-main">
        <div class="container">
            <h2>Read the ethusiasitic blogs that work </h2>
        </div>    
    </div>

    <div class="blogs-all">
        <div class="container">
            <div class="row">
            <?php foreach($blog as $value) { ?>
                <div class="col-md-3">
                    <a href="<?php echo $url['blog-url'].$value['post_url'] ?>">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo base_url().'assets/img/feature/'.$value['post_image']; ?>" alt="Card image" >
                        
                            <h5><?php echo $value['post_heading']; ?></h5>
                        
                      </div>
                    </a>  
                </div>
            <?php } ?>
               
               
        
            
            
               
        </div>
    </div>    

    <div class="see-all-blog">
        <div class="container">
            <center><button>See All Blogs</button></center>
        </div>    
    </div>    


        

