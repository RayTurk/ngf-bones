<?php
    if (get_field('quote_button_text', 'option') != "" || get_field('quote_button_link', 'option') != "") {
        echo '<a class="btn" href="'.get_field('quote_button_link', 'option').'">'.get_field('quote_button_text','option').'</a>';
    }
?>