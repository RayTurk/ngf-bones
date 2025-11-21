<?php

    $theme_vars = array (
		'ryan'			=> 'whereami',
        'header_logo' => get_field ('logo', 'option'),
        'footer_logo' => get_field ('footer_logo', 'option'),
        'Company Name' => get_field ('company_name', 'option'),
        'Street Address' => get_field ('co_street_address', 'option'),
        'City' => get_field ('co_city', 'option'),
        'State' => get_field ('co_state', 'option'),
        'Zip' => get_field ('co_zip', 'option'),
        'phone' => get_field ('co_phone', 'option'),
        'Header CTA' => get_field('header_cta', 'Option'),
        'hours' => get_field('hours_visual', 'Option'),
    );
?>