jQuery(document).ready(function(){
    jQuery('.better-categories .expander').click(function(){
        jQuery(this).parent().toggleClass("open");
    });
});