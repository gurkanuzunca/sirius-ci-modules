<main id="main">
    <div class="container">
        <div class="page-title"><?php echo $this->module->arguments->title ?></div>

        <div class="newscast row">
            <?php foreach ($newscast as $news): ?>
                <div class="col-md-6">
                    <div class="news">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="<?php echo clink(array('@news', $news->slug, $news->id)) ?>" title="<?php echo htmlspecialchars($news->title) ?>">
                                    <img class="img-responsive" src="<?php echo uploadPath($news->image, 'news') ?>" alt="<?php echo htmlspecialchars($news->title) ?>" />
                                </a>
                            </div>
                            <div class="col-md-8">
                                <p class="title"><a href="<?php echo clink(array('@news', $news->slug, $news->id)) ?>"><?php echo $news->title ?></a></p>
                                <p class="summary"><?php echo $news->summary ?></p>
                                <p class="date"><?php echo $this->date->set($news->date)->dateWithName() ?></p>
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
</main>