<?php global $theme_vars;
$cta = $theme_vars['header_cta'];
if ($cta != "") {
    echo '<div class="cta">'.$cta.'</div>';
}