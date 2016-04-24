<div class="container">

    <section id="content">
        <div class="panel">
            <div class="panel-header"><?php echo $this->module->arguments->title ?></div>
            <div class="panel-body clearfix typography">

                <div class="reference-list clearfix">
                    <?php foreach ($references as $item): ?>
                        <div class="item">
                            <img src="<?php echo uploadPath($item->image, 'reference') ?>" alt="<?php echo htmlspecialchars($item->title) ?>" />
                            <div class="title"><?php echo $item->title ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>


            </div>
        </div>
    </section>


</div>
