 
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>READMAIL</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <?php foreach ($msg as $key => $value) { ?>
                    <div class="card">
                        <div class="header bg-teal">
                            <h2>
                                From: <?php echo $value['fullname'] ?><small><?php echo $value['datetime'] ?></small>
                            </h2>
                        </div>
                        <div class="body">
                        Subject: <?php echo $value['subject'] ?>
                        <br>
                        <?php echo $value['message'] ?>
                        <br><br><br><a href="<?php echo URL?>mailbox" class="btn bg-teal btn-lg  waves-effect pull-right">Back To Mailbox</a>
                        <form method="POST" action="readmail/mark_as_read">
                        <input type="hidden" name="msg_id" value="<?php echo base64_decode(urldecode($_GET['msg_id'])) ?>">
                        <input type="submit" name="submit" class="btn bg-red btn-lg  waves-effect" value="Mark As Read"></form><br><br>
                            </div>
                            </div>
                            <?php } ?>
                            </div>
                            </div>

            <div class="row clearfix">
            </div>
        </div>
    </section>