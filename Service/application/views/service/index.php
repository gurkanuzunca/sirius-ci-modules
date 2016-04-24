<main id="main">

    <div class="container">
        <div class="page-title"><?php echo $this->module->arguments->title ?></div>

        <div class="services">
            <div class="row">
                <?php foreach ($services as $service): ?>
                    <div class="col-md-4">
                        <div class="service">
                            <div class="image">
                                <a href="<?php echo clink(array('@service', $service->slug, $service->id)) ?>" title="<?php echo htmlspecialchars($service->title) ?>">
                                    <img src="<?php echo uploadPath($service->image, 'service') ?>" alt="<?php echo $service->title ?>" />
                                </a>
                            </div>
                            <div class="detail">
                                <div class="title"><a href="<?php echo clink(array('@service', $service->slug, $service->id)) ?>" title="<?php echo htmlspecialchars($service->title) ?>"><?php echo $service->title ?></a></div>
                                <div class="summary"><?php echo $service->summary ?></div>
                                <div class="text-right"><a class="more-button" href="<?php echo clink(array('@service', $service->slug, $service->id)) ?>" title="<?php echo htmlspecialchars($service->title) ?>"><?php echo lang('service-more') ?></a></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


            <?php if (! empty($pagination)): ?>
                <div class="pagination">
                    <?php echo $pagination ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>
