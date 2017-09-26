     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
 <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
            
                <div class="x_panel">
                  <div class="x_title">
                  <h3><i class="fa fa-users"></i> 
    Rooms</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

            <?php foreach ($room as $key => $value) { ?>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
     
                <div class="tile-stats outer-box">
                <div class="hover-hide">
                  <div class="icon"><i style="<?php if($value['status'] == "unoccupied") {echo 'color: #FFC107 !important;';} elseif ($value['status'] == "occupied") {echo 'color: green !important;';} elseif ($value['status'] == "out-of-order") {echo 'color: red !important;';} elseif ($value['status'] == "out-of-service") {echo 'color: #800000 !important;';} elseif ($value['status'] == "vacant-but-dirty") {echo 'color: #2196F3 !important;';}?>" class="<?php if($value['status'] == "occupied") {echo 'fa fa-lock';} else {echo 'fa fa-unlock';} ?>"></i></div>
                  <div class="count">Room <?php echo $value['room_number'] ?></div>
                  <h3><?php echo $value['room_type'] ?></h3>
                  <h3><?php echo $value['room_tariff'] ?></h3>
                  </div>
                  <div class="inner-box" style="<?php if($value['status'] == "unoccupied") {echo 'background-color: #FFC107 !important;';} elseif ($value['status'] == "occupied") {echo 'background-color: green !important;';} elseif ($value['status'] == "out-of-order") {echo 'background-color: red !important;';} elseif ($value['status'] == "out-of-service") {echo 'background-color: #800000 !important;';} elseif ($value['status'] == "vacant-but-dirty") {echo 'background-color: #2196F3 !important;';}?>">
                  <p>
            <?php if ($value['status'] == "unoccupied") {
              echo '<a data-id="'.$value['room_number'].'" class="signin"  data-target="#signin-modal" onClick="$("#signin-modal").modal()"><i style="color:#fff;" class="hvr-bounce-in fa fa-lock"></i></a>&nbsp;&nbsp;';
            } else{
              echo '<a data-id="'.$value['room_number'].'" class="signout"  data-target="#signout-modal" onClick="$("#signout-modal").modal()"><i style="color:#fff;" class="hvr-bounce-in fa fa-unlock"></i></a>&nbsp;&nbsp;';
              }?>
            <a href="<?php echo URL?>room_history?room_id=<?php echo urlencode(base64_encode($value['room_id'])) ?>"><i style="color:#fff;" class="fa fa-eye hvr-bounce-in"></i></a>&nbsp;&nbsp;
            
               </div>
                </div>
              </div>
              <?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>

                      <div id="signout-modal" tabindex="-1" aria-hidden="true" aria-labelledby="signout-modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Signout Of Room</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" action="rooms/signout" id="insert_form">  
                          Are you sure you want to sign out of this Room?
                         <br><input type="hidden" name="room_number" id="room_id" value=""><br>
                          <input type="submit" name="insert" id="insert" value="SIGNOUT" class="btn btn-danger" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>

                      <div id="signin-modal" tabindex="-1" aria-hidden="true" aria-labelledby="signin-modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Create New Booking</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" action="rooms/createBooking" id="insert_form">  
                          <input type="hidden" name="room_number" id="room_id" value="">
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

                          <br /> <br>
                          <div class="col-lg-12 col-md-12 col-sm-12"><label>Address</label>  
                          <input type="text" name="address" placeholder="Address" class="form-control" required>
                          </div>

                          <br /> <br>
                          <div class="col-lg-6 col-md-6 col-sm-6"><label>Check-in</label>  
                    <div class="form-group">
                        <div class="input-group date" name="checkin" id="datetimepicker6">
                            <input type="text" name="checkin" class="form-control" />
                            <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                          </div>  
                          <div class="col-lg-6 col-md-6 col-sm-6"><label>Total Days</label>  
                    <div class="form-group">
                          <input type="number" name="no_of_days" placeholder="Total Days" class="form-control" required>
                       <!--  <div class="input-group date" name="checkout" id="datetimepicker7">
                            <input type="text" name="checkout" class="form-control" />
                            <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div> -->
                    </div>
                          </div> 

                          <br /><br>
                          <div class="col-lg-6 col-md-6 col-sm-6"><label>Country</label>  
                          <select name="country_id" class="form-control"  data-live-search="true" required> 
                           <?php foreach ($country as $key => $value) { ?>
                                                    <option value="<?php echo $value['country_id'] ?>"><?php echo $value['country_name'] ?></option>
                                                <?php } ?>
                          </select>
                          </div>  
                          <div class="col-lg-6 col-md-6 col-sm-6"><label>State</label>  
                          <select name="state_id" class="form-control" required>
                            <?php foreach ($state as $key => $value) { ?>
                                                    <option value="<?php echo $value['state_id'] ?>"><?php echo $value['state'] ?></option>
                                                <?php } ?>
                          </select>
                          </div> 

                          <br />  <br>
                          <div class="col-lg-6 col-md-6 col-sm-6">
                          <label>Type Of Booking</label>  
                          <select name="type" class="form-control" required>
                          <option value="SINGLE OCCUPANCY">SINGLE OCCUPANCY</option>
                          <option value="DOUBLE OCCUPANCY">DOUBLE OCCUPANCY</option>
                          <option value="MULTIPLE OCCUPANCY">MULTIPLE OCCUPANCY</option>
                          </select></div>

                          <div class="col-lg-6 col-md-6 col-sm-6">
                          <label>Type Of Guest</label>  
                          <select name="guest_type" class="form-control" required>
                          <option value="REGULAR">REGULAR</option>
                          <option value="FIRST">FIRST</option>
                          <option value="CORPORATE">CORPORATE</option>
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
  <script src="public/assets/js/jquery-2.1.4.min.js"></script>
  <script>
   $(document).ready(function(){
       $(".signin").click(function(){
         $("#room_id").val($(this).attr('data-id')); 
         $('#signin-modal').modal('show');
       });
    });
    </script>
  <script>
   $(document).ready(function(){
       $(".signout").click(function(){
         $("#room_id").val($(this).attr('data-id')); 
         $('#signout-modal').modal('show');
       });
    });
    </script>