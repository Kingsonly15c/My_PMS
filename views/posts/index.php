 <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>RECORDS</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="card">
                        <div class="header">
                            <h2>
                                POSTS
                            </h2>
                        </div>
                        <div class="body">                      
                              <div class="table-responsive">
                              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
        <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th></th>
          </tr>
        </thead>   
        <tfoot>
        <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th></th>
          </tr>
        </tfoot>
        <tbody>
            <?php foreach ($post as $key => $value) { ?>
        <tr>
          <th class="col-md-8"><?php echo $value['title'] ?></th>
          <td><?php echo $value['category'] ?></td>
          <td><?php echo $value['date'] ?></td>
      <td><form method="POST" action="posts/delete_post"><input type="hidden" name="post_id" value="<?php echo $value['post_id'] ?>"><input type="submit" class="btn btn-danger waves-effect" value="Delete"></form></td>
<!--       <td><button class="btn btn-success waves-effect edit" data-id="<?php echo $value['post_id']; ?>"  data-target="#edit-modal" onClick="$('#edit-modal').modal()">Update</button></td> -->

          </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
                            </div>
                        </div>

                    <div class="card">
                        <div class="header">
                            <h2>
                                COMMUNITY TOPICS
                            </h2>
                        </div>
                        <div class="body">                      
                              <div class="table-responsive">
                              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
        <tr>
                        <th>Topic</th>
                        <th>Author</th>
                        <th>Contact</th>
                        <th>Date</th>
                        <th>Approved</th>
                        <th></th>
                        <th></th>
          </tr>
        </thead>   
        <tfoot>
        <tr>
                        <th>Topic</th>
                        <th>Author</th>
                        <th>Contact</th>
                        <th>Date</th>
                        <th>Approved</th>
                        <th></th>
                        <th></th>
          </tr>
        </tfoot>
        <tbody>
            <?php foreach ($topic1 as $key => $value) { ?>
        <tr>
          <th class="col-md-8"><?php echo $value['topic'] ?></th>
          <td><?php echo $value['author'] ?></td>
          <td><?php echo $value['contact'] ?></td>
          <td><?php echo $value['date'] ?></td>
          <td><?php echo $value['approved'] ?></td>
      <td><form method="POST" action="posts/approve_topic1"><input type="hidden" name="approved" value="<?php echo $value['approved'] ?>"><input type="hidden" name="topic_id" value="<?php echo $value['topic_id'] ?>"><input type="submit" class="btn btn-danger waves-effect" value="Approve"></form></td>
      <td><form method="POST" action="posts/delete_topic1"><input type="hidden" name="topic_id" value="<?php echo $value['topic_id'] ?>"><input type="submit" class="btn btn-danger waves-effect" value="Delete"></form></td>
          </tr>
          <?php } ?>
            <?php foreach ($topic2 as $key => $value) { ?>
        <tr>
          <th class="col-md-8"><?php echo $value['topic'] ?></th>
          <td><?php echo $value['author'] ?></td>
          <td><?php echo $value['contact'] ?></td>
          <td><?php echo $value['date'] ?></td>
          <td><?php echo $value['approved'] ?></td>
      <td><form method="POST" action="posts/approve_topic2"><input type="hidden" name="approved" value="<?php echo $value['approved'] ?>"><input type="hidden" name="topic_id" value="<?php echo $value['topic_id'] ?>"><input type="submit" class="btn btn-danger waves-effect" value="Approve"></form></td>
      <td><form method="POST" action="posts/delete_topic2"><input type="hidden" name="topic_id" value="<?php echo $value['topic_id'] ?>"><input type="submit" class="btn btn-danger waves-effect" value="Delete"></form></td>
          </tr>
          <?php } ?>
            <?php foreach ($topic3 as $key => $value) { ?>
        <tr>
          <th class="col-md-8"><?php echo $value['topic'] ?></th>
          <td><?php echo $value['author'] ?></td>
          <td><?php echo $value['contact'] ?></td>
          <td><?php echo $value['date'] ?></td>
          <td><?php echo $value['approved'] ?></td>
      <td><form method="POST" action="posts/approve_topic3"><input type="hidden" name="approved" value="<?php echo $value['approved'] ?>"><input type="hidden" name="topic_id" value="<?php echo $value['topic_id'] ?>"><input type="submit" class="btn btn-danger waves-effect" value="Approve"></form></td>
      <td><form method="POST" action="posts/delete_topic4"><input type="hidden" name="topic_id" value="<?php echo $value['topic_id'] ?>"><input type="submit" class="btn btn-danger waves-effect" value="Delete"></form></td>
          </tr>
          <?php } ?>
            <?php foreach ($topic4 as $key => $value) { ?>
        <tr>
          <th class="col-md-8"><?php echo $value['topic'] ?></th>
          <td><?php echo $value['author'] ?></td>
          <td><?php echo $value['contact'] ?></td>
          <td><?php echo $value['date'] ?></td>
          <td><?php echo $value['approved'] ?></td>
      <td><form method="POST" action="posts/approve_topic4"><input type="hidden" name="approved" value="<?php echo $value['approved'] ?>"><input type="hidden" name="topic_id" value="<?php echo $value['topic_id'] ?>"><input type="submit" class="btn btn-danger waves-effect" value="Approve"></form></td>
      <td><form method="POST" action="posts/delete_topic3"><input type="hidden" name="topic_id" value="<?php echo $value['topic_id'] ?>"><input type="submit" class="btn btn-danger waves-effect" value="Delete"></form></td>
          </tr>
          <?php } ?>
            <?php foreach ($topic5 as $key => $value) { ?>
        <tr>
          <th class="col-md-8"><?php echo $value['topic'] ?></th>
          <td><?php echo $value['author'] ?></td>
          <td><?php echo $value['contact'] ?></td>
          <td><?php echo $value['date'] ?></td>
          <td><?php echo $value['approved'] ?></td>
      <td><form method="POST" action="posts/approve_topic5"><input type="hidden" name="approved" value="<?php echo $value['approved'] ?>"><input type="hidden" name="topic_id" value="<?php echo $value['topic_id'] ?>"><input type="submit" class="btn btn-danger waves-effect" value="Approve"></form></td>
      <td><form method="POST" action="posts/delete_topic5"><input type="hidden" name="topic_id" value="<?php echo $value['topic_id'] ?>"><input type="submit" class="btn btn-danger waves-effect" value="Delete"></form></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </section>
                      <div id="edit-modal" tabindex="-1" aria-hidden="true" aria-labelledby="edit-modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Update Post</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Post id</label>  
                          <input type="text" name="post_id" class="form-control" id="post_id" value="">
                          <br />  
                          <p class="edit-content"></p>
                          <label>Enter svc no</label>  
                          <input type="text" name="svc_no" id="svc_no" class="form-control"> 
                          <br />  
                          <label>enter rank</label>  
                          <input type="text" name="rank" id="rank" class="form-control">
                          
                          <input type="submit" name="insert" id="insert" value="Update" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
  <script>
   $(document).ready(function(){
       $(".edit").click(function(){
         $("#post_id").val($(this).attr('data-id')); 
         $('#edit-modal').modal('show');
       });
    });
    </script>