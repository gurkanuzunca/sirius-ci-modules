
<main id="main">

    <div class="container">
        <div class="page-title">
            <?php echo $this->module->arguments->title ?>
        </div>

        <div class="faqs">
            <?php foreach ($faqs as $faq): ?>
                <div class="faq">
                    <div class="question"><?php echo $faq->question ?></div>
                    <div class="answer">
                        <figure><?php echo $faq->answer ?></figure>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</main>

