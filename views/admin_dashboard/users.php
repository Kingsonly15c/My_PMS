     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
 <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
            
                <div class="x_panel">
                  <div class="x_title">
                  <h3><i class="fa fa-users"></i> 
    Users</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>

              <th>Fullname</th>
                            <th>Username</th>
                            <th>Department</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email Address</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
            <?php foreach ($admin as $key => $value) { ?>

                        <tr>

              <td><?php echo $value['firstname'].' '.$value['lastname'] ?></td>
                            <td><?php echo $value['username'] ?></td>
              <td><?php echo $value['department'] ?></td>
              <td><?php echo $value['address'] ?></td>
              <td><?php echo $admin_phone ?></td>
              <td><?php echo $admin_email ?></td>
                          <td><i class="fa fa-eye hvr-bounce-in"></i>&nbsp;&nbsp;<i class="fa fa-pencil hvr-bounce-in"></i></td>

                        </tr>
                        <?php  } ?>
                            </tbody>
                            </table>
</div>
</div>
</div>
</div>
</div>
</div>
