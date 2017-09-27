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
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">Create</button>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>

              <th>Fullname</th>
                            <th>Username</th>
                            <th>Department</th>
                            <th>Address</th>
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

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Create New Admin</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="users/createAdmin" id="insert_form"> 

                          <div class="col-lg-6 col-md-6 col-sm-6"><label>First Name</label>  
                          <input type="text" name="firstname" placeholder="First Name" class="form-control" required> </div>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                          <label>Last Name</label>  
                          <input type="text" name="lastname" placeholder="Last Name" class="form-control" required>
                          </div>

                          <br /> <br> <div class="col-lg-6 col-md-6 col-sm-6">
                          <label>Phone Number</label>  
                          <input type="text" name="phone" placeholder="Phone" class="form-control" required>
                                                   </div>
                                                   <div class="col-lg-6 col-md-6 col-sm-6">
                          <label>Email Address</label>  
                          <input type="text" name="email" placeholder="Email Address" class="form-control">
                          </div>

                          <br /> <br> <div class="col-lg-6 col-md-6 col-sm-6">
                          <label>Username</label>  
                          <input type="text" name="username" placeholder="Username" class="form-control" required>
                                                   </div>
                                                   <div class="col-lg-6 col-md-6 col-sm-6">
                          <label>Password</label>  
                          <input type="text" name="password" placeholder="Password" class="form-control">
                          </div>

                          <br /> <br>
                          <div class="col-lg-12 col-md-12 col-sm-12"><label>Address</label>  
                          <input type="text" name="address" placeholder="Address" class="form-control" required>
                          </div>
                          <br />  <br>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                          <label>Department</label>  
                          <select name="department" class="form-control" required>
                          <option selected="selected">...</option>
                          <option value="GMSM">Guest Management System</option>
                          <option value="POSM">Point Of Sales</option>
                          <option value="SCM">Stock Control</option>
                          <option value="AM">Accounting</option>
                          <option value="PSIM">Payroll & Staff Information</option>
                          </select></div>

                          <div class="col-lg-6 col-md-6 col-sm-6">
                          <label>Access Level</label>  
                          <select name="access_level" class="form-control" required>
                          <option selected="selected">...</option>
                          <option value="3">High</option>
                          <option value="2">Mid</option>
                          <option value="1">Low</option>
                          </select></div>
                          <br /><br><br>
                          <input type="submit" name="insert" id="insert" value="Create" class="btn btn-danger" />  
                     </form>  
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                      </div>
                    </div>
                  </div>