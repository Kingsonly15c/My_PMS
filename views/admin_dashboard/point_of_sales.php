     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
 <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
            
                <div class="x_panel">
                  <div class="x_title">
                    <div class="pull-right"><font size="+2"><i class="fa fa-shopping-cart"></i></font><span style="float: right; color: #fff;" class="badge bg-red small-badge">6</span>
                      </div>
                  <h3><i class="fa fa-users"></i> 
    Point Of Sales</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Products</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">History</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Register Product</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Reports & Statistics</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
              
            <?php foreach ($product as $key => $value) { ?>
              <div class="animated flipInY col-lg-2 col-md-2 col-sm-4 col-xs-12">
     
                <div class="tile-stats outer-box" style="padding-right: 10px !important;">
                <br>
                  <div class="icon"><i style="color: red;" class="fa <?php if($value['type'] == "food"){echo 'fa-cutlery';} else {echo 'fa-glass';}?>"></i></div>
                  <div class="count"><?php echo  $value['product'];?> <br>Status: <?php echo  $value['status'];?></div>
                  <div class="count">N<?php echo  $value['price'];?></div>
                  <br><br><button class="hvr-bounce-in pull-right btn btn-danger btn-round">ADD ITEM <i class="fa fa-plus"></i></button><br>
                </div>
              </div>
              <?php } ?>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Order</th>
                            <th>Guest</th>
                            <th>Order Date</th>
                            <th>Total Amount</th>
                            <th>Amount Paid</th>
                          <th>Change</th>
                        </tr>
                      </thead>
                      <tbody>
            <?php foreach ($order_history as $key => $value) { ?>

                        <tr>
                            <td><?php echo $value['order_id'] ?></td>
                            <td><?php echo $value['orders'] ?></td>
              <td><?php echo $value['firstname'].' '.$value['lastname'] ?></td>
              <td><?php echo $value['order_date'] ?></td>
              <td><?php echo $value['total'] ?></td>
              <td><?php echo $value['amount_paid'] ?></td>
              <td><?php echo $value['change'] ?></td>

                        </tr>
                        <?php  } ?>
                            </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Register Product</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left">


                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Product">
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess3" placeholder="Type">
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Price">
                      </div>
                      <div class="form-group">

                        <div class="col-sm-9">
                              <input type="submit" class="btn btn-danger" name="submit" value="SUBMIT">
                            </div>
                            <!-- /btn-group -->
                          </div>
                        
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Out Of Stock Product</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left">


                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Product">
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess3" placeholder="Type">
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Price">
                      </div>
                      <div class="form-group">

                        <div class="col-sm-9">
                              <input type="submit" class="btn btn-danger" name="submit" value="SUBMIT">
                            </div>
                            <!-- /btn-group -->
                          </div>
                        
                    </form>
                  </div>
                </div>
              </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                        <h3>Generate Report</h3>
                          <div id="reportrange" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                          </div><br>
                            <button type="submit" class="btn btn-danger" name="submit">Generate Report</button>
                        </div>
                      </div>
                    </div>
</div>
</div>
</div>
</div>
</div>
</div>
