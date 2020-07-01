
<div id="layoutSidenav_content">
<main>
<div class="container py-4">
    <form id="catform" action="<?php echo base_url().'admin/blog/cat_blog/insert' ?>" method="post">
    <h3 class="text-center text-primary">Category Page</h3>
    <span id="response"></span>
        <div class="form-group">
          <label for="">Create Category</label>
          <input type="text" class="form-control" name="cat" id="" aria-describedby="helpId" placeholder="">       
        </div>
        <div class="form-group">
          <label for="">Category Description</label>
          <textarea class="form-control" name="catdesc" id="" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($category as $value){?>
            <tr id="hide<?php echo $value['cat_id'] ; ?>">
                <td scope="row"><?php echo $value['cat_name'];?></td>
                <td><?php echo $value['cat_desc'];?></td>
                <td><a class="btn btn-danger mx-1 text-white del" data-value="<?php echo $value['cat_id'] ; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>
</main>
<script>
$("#catform").submit(function(event){
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
        location.reload(true);
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
<script type="text/javascript">

$(".del").click(function(){
    $('#response').html('<center><div class="spinner-border text-warning" role="status"><span class="sr-only">Loading...</span></div></center>');
    i=$(this).data("value");
    $("#hide"+i).fadeOut();
    console.log(i);
  $.ajax({
    url: "<?php echo base_url().'admin/blog/cat_blog/delete/'?>"+i, 
    success: function(result){
    if(result == true){
        $('#response').html('<p class="text-success">Record Deleted</p>');
    }
      
  }});
});
</script>