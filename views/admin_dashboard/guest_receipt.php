
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Guest Receipt</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          From
                          <address>
                                          <strong>DBI Guest House</strong>
                                          <br>795 Freedom Ave, Suite 600
                                          <br>Lagos, Nigeria
                                          <br>Phone: 1 (804) 123-9876
                                          <br>Email: dbiguest.com
                                      </address>
                        </div>
                        <!-- /.col -->
            <?php foreach ($guest_info as $key => $value) { ?>
                        <div class="col-sm-4 invoice-col">
                          To
                          <address>
                                          <strong><?php echo $value['firstname'].' '.$value['lastname'] ?></strong>
                                          <br><?php echo $value['address'] ?>
                                          <br>Phone: <?php echo $value['phone'] ?>
                                          <br>Email: <?php echo $value['email'] ?>
                                      </address>
                        </div>
                    <?php } ?>
                        <!-- /.col -->
            <?php foreach ($booking_info as $key => $value) { ?>
                        <div class="col-sm-4 invoice-col">
                          <b>Receipt #<?php echo $_GET['receipt_number']; ?></b>
                          <br>
                          <br>
                          <b>Booking ID:</b> <?php echo $value['booking_id'] ?>
                          <br>
                          <b>Payment Due:</b> <?php echo $value['checkout'] ?>
                          <br>
                          <b>Guest ID:</b> <?php echo $value['guest_id'] ?>
                        </div>
                        <!-- /.col -->
                        <?php } ?>
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <!-- <div class="row">
                        <div class="col-xs-12 col-md-6 col-sm-6 table">
                        <div class="table-responsive">
                          <table id="datatable-fixed-header" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Qty</th>
                                <th>Product</th>
                                <th>Amount</th>
                                <th style="width: 59%">Description</th>
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>
            <?php foreach ($booking as $key => $value) { ?>
                              <tr>
                                <td><?php echo $qty; ?></td>
                                <td><?php echo $room; ?></td>
                                <td>455-981-221</td>
                                <td>El snort testosterone trophy driving gloves handsome gerry Richardson helvetica tousled street art master testosterone trophy driving gloves handsome gerry Richardson
                                </td>
                                <td>$64.50</td>
                              </tr>
                      <?php } ?>
                            </tbody>
                          </table>
                          </div>
                        </div>
                      </div> -->
                      <!-- /.row -->

                      <div class="row">
                        <div class="col-xs-12">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>N<?= $subtotal ?></td>
                                </tr>
                                <tr>
                                  <th>Service Charge (10%):</th>
                                  <td><?= $service_charge ?></td>
                                </tr>
                                <tr>
                                  <th>VAT (5%)</th>
                                  <td>N<?= $vat ?></td>
                                </tr>
                                <tr>
                                  <th>Consumption (5%):</th>
                                  <td>N<?= $consumption ?></td>
                                </tr>
                                <tr>
                                  <th>Grand Total:</th>
                                  <td>N<?= $grand_total ?></td>
                                </tr>
                                
                                <tr>
                                  <th>Amount Paid:</th>
                                  <td><input type="text" name="amount_paid"></td></tr>
                                <tr>
                                  <th>Balance:</th>
                                  <td><div id="balance"></div></td></tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-primary pull-right" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->