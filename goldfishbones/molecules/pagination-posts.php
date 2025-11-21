<style>
    .page-numbers {
        margin: 0 auto;
        text-align: center;
        padding: 0;
    }
    .page-numbers li {
        display: inline;
    }
    .page-numbers li a, .page-numbers li span {
        display: inline-block;
        border: 1px solid;
        height: 40px;
        width: 40px;
        line-height: 40px;
        border-collapse: collapse;
    }
</style>
<?php 
    $args2 = array(
        
        'prev_text'          => __('«'),
        'next_text'          => __('»'),
        'type'               => 'list',
        
    );
    echo paginate_links($args2);
?>
