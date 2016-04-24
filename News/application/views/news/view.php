<main id="main">
    <div class="container">
        <div class="page-title"><?php echo $news->title ?><span></span></div>

        <?php echo $news->detail ?>

        <div class="buttons clearfix">
            <a class="btn btn-xs btn-success" href="javascript:history.back();"><span class="glyphicon glyphicon-chevron-left"></span> <?php echo lang('news-go-back') ?></a>
            <a class="btn btn-xs btn-success" href="<?php echo clink('@news') ?>"><?php echo lang('news-all-news') ?></a>
        </div>

        <div class="share-box">
            <p><strong><?php echo lang('news-share-social') ?></strong></p>
            <a class="facebook" href="http://facebook.com/sharer.php?u=<?php echo current_url() ?>" title="<?php echo lang('news-share-facebook') ?>"><?php echo lang('news-share-facebook') ?></a>
            <a class="twitter" href="https://twitter.com/share?url=<?php echo current_url() ?>&text=<?php echo htmlspecialchars($news->title) ?>" title="<?php echo lang('news-share-twitter') ?>"><?php echo lang('news-share-twitter') ?></a>
            <a class="google" href="https://plus.google.com/share?url=<?php echo current_url() ?>" title="<?php echo lang('news-share-google') ?>"><?php echo lang('news-share-google') ?></a>
        </div>
    </div>
</main>


