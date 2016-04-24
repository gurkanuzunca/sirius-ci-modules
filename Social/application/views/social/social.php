<ul>
    <?php foreach ($this->social->all() as $social): ?>
        <li>
            <a href="<?php echo $social->link ?>" title="<?php echo htmlspecialchars($social->title) ?>" target="_blank">
                <i class="fa <?php echo $social->icon ?>"></i>
            </a>
        </li>
    <?php endforeach; ?>
</ul>