<div id="layerslider" style="width: 100%; height: 500px;">
    <?php foreach ($this->banner->all() as $banner): ?>
        <div class="ls-slide" data-ls="slidedelay: <?php echo $banner->delay ?>; <?php echo $banner->transition ?>">
            <img class="ls-bg" src="public/upload/banner/<?php echo $banner->image ?>" alt="<?php echo $banner->title ?>" />

            <?php if (! empty($banner->text)): ?>
                <?php
                $top = 100;
                $delayin = 200;
                ?>

                <?php foreach (explode("\n", $banner->text, 2) as $text): ?>
                    <div class="ls-l text" style="top: <?php echo $top ?>px; left: 0;" data-ls="delayin: <?php echo $delayin ?>; offsetxin: -150; offsetxout: 150;">
                        <span><?php echo $text ?></span>
                    </div>
                    <?php
                    $top += 71;
                    $delayin += 100;
                    ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <?php echo !empty($banner->link) ? '<a class="ls-link" href="'. $banner->link .'" title="'. $banner->title .'"></a>':'' ?>
        </div>
    <?php endforeach; ?>
</div>