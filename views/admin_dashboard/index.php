        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Profile </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="public/admin/images/<?php echo $photo; ?>" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?php echo $fullname; ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $address; ?>
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $department; ?>
                        </li>

                        <li>
                          <i class="fa fa-envelope user-profile-icon"></i> <?php echo $email; ?>
                        </li>

                        <li>
                          <i class="fa fa-phone user-profile-icon"></i> <?php echo $phone; ?>
                        </li>
                      </ul>
                      <br>
                      <h3>Update Profile</h3>
                    <form class="form-horizontal form-label-left" method="POST" action="admin_dashboard/update_info">
                          <select name="update_field" class="form-control">
                          <option value="username">Username</option>
                          <option value="firstname">First Name</option>
                          <option value="lastname">Last Name</option>
                          <option value="email">Email</option>
                          <option value="password">Password</option>
                          <option value="address">Address</option>
                          <option value="phone">Phone</option>
                          </select><br>

                        <input type="text" name="update" class="form-control" id="inputSuccess3" placeholder="Update">
                        <br>
                      <div class="form-group">

                              <input type="submit" class="btn btn-danger" name="submit" value="UPDATE">
                            <!-- /btn-group -->
                          </div>
                        
                    </form>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Guest Activity Report</h2>
                        </div>
                        <div class="col-md-6">
                          <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                          </div>
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      <div id="graph_bar" style="width:100%; height:280px;"></div>
                      <!-- end of user-activity-graph -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->