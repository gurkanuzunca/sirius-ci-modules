<main id="main">
    <div class="container">
        <div class="page-title"><?php echo $service->title ?></div>

        <?php echo $service->detail ?>

        <div class="buttons">
            <a class="btn btn-success" href="javascript:history.back();"><span class="glyphicon glyphicon-chevron-left"></span> <?php echo lang('service-go-back') ?></a>
        </div>

        <div class="share-box">
            <p><strong><?php echo lang('content-share-social') ?></strong></p>
            <a class="facebook" href="http://facebook.com/sharer.php?u=<?php echo current_url() ?>" title="<?php echo lang('service-share-facebook') ?>"><?php echo lang('service-share-facebook') ?></a>
            <a class="twitter" href="https://twitter.com/share?url=<?php echo current_url() ?>&text=<?php echo htmlspecialchars($service->title) ?>" title="<?php echo lang('service-share-twitter') ?>"><?php echo lang('service-share-twitter') ?></a>
            <a class="google" href="https://plus.google.com/share?url=<?php echo current_url() ?>" title="<?php echo lang('service-share-google') ?>"><?php echo lang('service-share-google') ?></a>
        </div>


    </div>
</main>

