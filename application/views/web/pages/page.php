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
                        <p>Home / page</p>
                    </div>    
                    <div class="col-md-4">

                    </div>  
                </div>    
            </div>    
        </div>    
       
         <!-- Page Content -->
  
        <div class="blog-cont">
         <div class="container">
            
        <?php echo $page['page_desc']; ?>
    
    </div>    
</div>
