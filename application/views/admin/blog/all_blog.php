
<div id="layoutSidenav_content">
<main>
   <div class="container-fluid">
   <div class="card m-4 border-0">
   <span id="response" class="text-center"></span>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table " id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Featured Image</th>
                                                <th>Categories</th>
                                                <th>Tags</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      <?php foreach($blog as $value) {?>
                                            <tr id="hide<?php echo $value['post_id'] ; ?>">
                                              
                                                <td><?php echo $value['post_heading'] ; ?></td>
                                                <td><img style="width:8.5rem" src="<?php echo base_url().'assets/img/feature/'.$value['post_image'] ; ?>"></td>
                                                <td><?php echo $value['post_category'] ; ?></td>
                                                <td><?php echo $value['post_tags'] ; ?></td>
                                                <td><?php echo $value['post_date'] ; ?></td>
                                                <td class="d-flex">
                                                    <a class="btn btn-success mx-1" href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    <a class="btn btn-danger mx-1 text-white del" data-value="<?php echo $value['post_id'] ; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                          
                                      <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
        
   </div>
</main>
<script type="text/javascript">

$(".del").click(function(){
    $('#response').html('<center><div class="spinner-border text-warning" role="status"><span class="sr-only">Loading...</span></div></center>');
    i=$(this).data("value");
    $("#hide"+i).fadeOut();
    console.log(i);
  $.ajax({
    url: "<?php echo base_url() ;?>admin/blog/all_blog/delete/"+i, 
    success: function(result){
    if(result == true){
        $('#response').html('<p class="text-success">Record Deleted</p>');
    }
      
  }});
});
</script>

