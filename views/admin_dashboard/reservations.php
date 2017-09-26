     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
 <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
            
                <div class="x_panel">
                  <div class="x_title">
                  <h3><i class="fa fa-users"></i> 
    Reservations</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<div class="guest-index">

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>

              <th>Booking ID</th>
                            <th>Guest Name</th>
              <th>Room</th>
                            <th>Amount Paid</th>
                            <th>From Date</th>
                            <th>To Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
            <?php foreach ($reservation as $key => $value) { ?>

                        <tr>

                            <td><?php echo $value['guest_id'] ?></td>
              <td><?php echo $value['firstname'].' '.$value['lastname'] ?></td>
              <td><?php echo $value['room'] ?></td>
              <td><?php echo $value['amount_paid'] ?></td>
              <td><?php echo $value['checkin'] ?></td>
              <td><?php echo $value['checkout'] ?></td>
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
</div>
