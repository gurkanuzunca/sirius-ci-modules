<main id="main">
    <div class="container">
        <div class="page-title"><?php echo $this->module->arguments->title ?><span></span></div>

        <div class="row">
            <div class="col-md-6">
                <div class="second-title"><?php echo lang('contact-information') ?></div>
                <?php echo $this->module->arguments->detail ?>
            </div>

            <div class="col-md-6">
                <div class="second-title"><?php echo lang('contact-form') ?></div>

                <form method="post" action="<?php echo clink('@contact') ?>" accept-charset="utf-8">
                    <?php echo $this->site->alert() ?>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label"><?php echo lang('contact-fullname') ?> *:</label>
                                <input type="text" class="form-control" name="fullname" required="required" value="<?php echo set_value('fullname') ?>">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label"><?php echo lang('contact-email') ?> *:</label>
                                <input type="email" class="form-control" name="email" required="required" value="<?php echo set_value('email') ?>" />
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label"><?php echo lang('contact-phone') ?> *:</label>
                                <input type="text" class="form-control mask-phone" name="phone" required="required" value="<?php echo set_value('phone') ?>" />
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label"><?php echo lang('contact-message') ?> *:</label>
                        <textarea class="form-control" name="comment" required="required" rows="5"><?php echo set_value('comment') ?></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-ok"></span>&nbsp; <?php echo lang('contact-send') ?></button>
                    </div>

                </form>
            </div>
        </div>

    </div>

</main>


<?php if (! empty($this->module->arguments->googleMap)): ?>
    <div class="googlemap">
        <div id="map" style="height: 400px;"></div>
    </div>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript">
        function initialize() {
            var myLatlng = new google.maps.LatLng(<?php echo $this->module->arguments->googleMap ?>);
            var mapOptions = {
                zoom: 13,
                scrollwheel: false,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            var contentString = '<?php echo htmlspecialchars($this->module->arguments->googleMapText) ?>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 200
            });

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: '<?php htmlspecialchars($this->module->arguments->title) ?>'
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
<?php endif; ?>