<a class="logo" href="/">
    <?php 
        $logo = get_field ('logo', 'option');
        if ($logo != "") {
            $type = get_post_mime_type($logo);
            if ($type == "image/svg+xml" && file_exists(get_attached_file($logo, true)) ) {
                require get_attached_file($logo, true);
            }
            else {
                echo '<img src="'.wp_get_attachment_url($logo).'" alt="'.get_bloginfo('name').'">';
            }
        }
        else {
            echo get_bloginfo('name');
        }
    ?>
</a>