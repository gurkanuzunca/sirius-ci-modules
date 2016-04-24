<main id="main">

    <div class="container">
        <div class="page-title"><?php echo $this->module->arguments->title ?><span></span></div>

        <div class="row">
            <div class="col-md-6">
                <?php echo $this->module->arguments->detail ?>
            </div>

            <div class="col-md-6">
                <div class="second-title"><?php echo lang('cv-form-title') ?></div>

                <form method="post" action="<?php echo clink('@cv') ?>" accept-charset="utf-8" enctype="multipart/form-data">
                    <?php echo $this->site->alert() ?>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label"><?php echo lang('cv-fullname') ?> *:</label>
                                <input type="text" class="form-control" name="fullname" required="required" value="<?php echo set_value('fullname') ?>">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label"><?php echo lang('cv-email') ?> *:</label>
                                <input type="email" class="form-control" name="email" required="required" value="<?php echo set_value('email') ?>" />
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label"><?php echo lang('cv-phone') ?> *:</label>
                                <input type="text" class="form-control mask-phone" name="phone" required="required" value="<?php echo set_value('phone') ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label"><?php echo lang('cv-file') ?> *:</label>
                        <input class="filestyle" type="file" name="file" required="required" data-buttonText="&nbsp;<?php echo lang('cv-select') ?>" />
                    </div>

                    <div class="form-group">
                        <label class="control-label"><?php echo lang('cv-message') ?> :</label>
                        <textarea class="form-control" name="comment" rows="5"><?php echo set_value('comment') ?></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-ok"></span>&nbsp; <?php echo lang('cv-send') ?></button>
                    </div>

                </form>
            </div>
        </div>

    </div>


</main>



