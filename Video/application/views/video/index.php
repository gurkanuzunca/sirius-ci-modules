
<main id="main">

    <div class="container">
        <div class="page-title">
            <?php echo $this->module->arguments->title ?>
        </div>

        <div class="videos">
            <div class="row">

                <?php foreach ($videos as $video): ?>
                    <div class="col-md-6">
                        <div class="video">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="fancybox fancybox.iframe" href="//www.youtube-nocookie.com/embed/<?php echo $video->video ?>?rel=0" title="<?php echo $video->title ?>">
                                        <img class="img-responsive" src="<?php echo uploadPath($video->image, 'video') ?>" alt="<?php echo $video->title ?>" />
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="title"><a class="fancybox fancybox.iframe" href="//www.youtube-nocookie.com/embed/<?php echo $video->video ?>?rel=0"><?php echo $video->title ?></a></div>
                                    <div class="summary"><?php echo $video->summary ?></div>
                                    <div class="play"><a class="fancybox fancybox.iframe btn btn-xs btn-danger" href="//www.youtube-nocookie.com/embed/<?php echo $video->video ?>?rel=0"><?php echo lang('video-play') ?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center">
                <?php if (! empty($pagination)): ?>
                    <?php echo $pagination ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
</main>



