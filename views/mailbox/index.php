 
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MAILBOX</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="card">
                        <div class="header">
                            <h2>
                                UNREAD MESSAGES
                            </h2>
                        </div>
                        <div class="body">
  <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Sender</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Date-time</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sender</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Date-time</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
            <?php foreach ($new_msg as $key => $value) { ?>
                                        <tr>
                                            <td><a href="<?php echo URL?>readmail?msg_id=<?php echo urlencode(base64_encode($value['msg_id'])); ?>"><?php echo $value['fullname'] ?></td>
                                            <td><?php echo $value['email'] ?></td>
                                            <td><?php echo $value['phone'] ?></td>
                                            <td><?php echo $value['subject'] ?></td>
                                            <td><?php echo $value['datetime'] ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>


            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="card">
                        <div class="header">
                            <h2>
                                OLDER MESSAGES
                            </h2>
                        </div>
                        <div class="body">
  <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Sender</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Date-time</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sender</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Date-time</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
            <?php foreach ($old_msg as $key => $value) { ?>
                                        <tr>
                                            <td><a href="<?php echo URL?>readmail?msg_id=<?php echo urlencode(base64_encode($value['msg_id'])); ?>"><?php echo $value['fullname'] ?></td>
                                            <td><?php echo $value['email'] ?></td>
                                            <td><?php echo $value['phone'] ?></td>
                                            <td><?php echo $value['subject'] ?></td>
                                            <td><?php echo $value['datetime'] ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
            <div class="row clearfix">
            </div>
        </div>
    </section>