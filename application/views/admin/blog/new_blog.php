<div id="layoutSidenav_content">
<main>
   <div class="container-fluid">
      <div class="container py-5">
      <form id="pageblog" action="<?php echo base_url().'admin/blog/new_blog/createblog' ?>" method="post" enctype="multipart/form-data">
         <div class="row">
            <div class="col-md-10 border-right-1">
            <span id="response"></span>
               <div class="form-group">
               <label for="">Heading</label>
               <input type="text" class="form-control" name="bheading" id="heading" placeholder="Heading" required>
               </div>
               <textarea  name="bcontent" id="textareaContent" required></textarea>
            </div>
            <div class="col-md-2">
               <div class="form-group">
                 <label for="">Categories</label>
                 <select class="form-control form-control-sm" name="bcategory" id="">
                   <option selected>Select Category</option>
                   <?php foreach($category as $value){ ?>
                    <option><?php echo $value['cat_name'] ;?></option>
                   <?php } ?>
                 </select>
               </div>
               <div class="form-group">
                 <label for="">Url Of Post</label>
                 <input type="text" class="form-control" name="burl" id="permalink" placeholder="Permalink">
               </div>
               <div class="form-group">
                 <label for="">Featured Image</label>
                 <input type="file" class="form-control-file" name="bimage" id="imagepreview" placeholder="Feature Image" aria-describedby="fileHelpId">
               </div>
               <div style="width:10em" class="my-3">
               <img id="blah" class="w-100" src="#" alt="your image" />
              </div>
               <div class="form-group">
                 <label for="">Meta Tags</label>
                 <textarea class="form-control" name="btags" id="" rows="3"></textarea>
               </div>
               <button type="submit" class="btn btn-success m-2 ali">Publish</button>
            </div>
       </div>
       </form>
      </div>
   </div>
</main>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ckeditor/ckeditor.js"></script>
<script>
$(document).ready(function(){
    CKEDITOR.replace('textareaContent');
});
    </script>
<script>
   $( "#heading" ).change(function() {
     var get =  $("#heading").val();
     get = get.replace(/ /g,"_");
     get = get.substring(0, 30);
     $("#permalink").val(get);
   });
</script>
<script>
   function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imagepreview").change(function() {
  readURL(this);
});
</script>
<script>
$("#pageblog").submit(function(event){
event.preventDefault();
var post_url = $(this).attr("action"); 
var request_method = $(this).attr("method"); 
var form_data = new FormData(this);
$('#response').html('<center><div class="spinner-border text-warning" role="status"><span class="sr-only">Loading...</span></div></center>');

console.log(form_data)
$.ajax({
    url : post_url,
    type: request_method,
    processData: false,
    contentType: false,
    dataType:"json",
    data : form_data, 
}).done(function(response){ 
    console.log(response);
    if(response.error == false){
        $('#response').html(response.msg);
    }
    if(response.error == true){
        $('#response').html(response.msg);
    }
    if(response.form== true){
        $('#response').html(response.msg);
    }
});
});
</script>