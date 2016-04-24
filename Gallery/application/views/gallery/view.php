
<main id="main">

    <div class="container">
        <div class="page-title">
            <?php echo $gallery->title ?>
        </div>

        <div class="galleries">
            <div class="row">

                <?php foreach ($gallery->images as $image): ?>
                    <div class="column col-md-3">
                        <div class="gallery">
                            <a class="fancybox" rel="gallery" href="<?php echo uploadPath($image->image, 'gallery/normal') ?>">
                                <img class="img-responsive" src="<?php echo uploadPath($image->image, 'gallery/thumb') ?>" />
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <div class="buttons">
                <a class="btn btn-primary btn-sm" href="javascript:history.back();"><span class="glyphicon glyphicon-circle-arrow-left"></span> <?php echo lang('gallery-go-back') ?></a>
                <a class="btn btn-primary btn-sm" href="<?php echo clink('@gallery') ?>"><?php echo lang('gallery-all-galleries') ?></a>
            </div>
        </div>

    </div>
</main>
