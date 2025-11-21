<div id="cs_page">
    <?php
        $background = get_field('background_image', 'option');

        if (!empty($background)) {
            echo wp_get_attachment_image($background['id'], 'full');
        }
    ?>
    <div class="cs_content">
        <div class="container">
            <?php the_field('cs_text', 'option');?>
        </div>
    </div>
</div>