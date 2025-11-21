<?php 
    $shareTitle = str_replace( ' ', '%20', get_the_title());
    $linkedinURL= 'https://www.linkedin.com/shareArticle?mini=true&url='.get_permalink().'&title='.$shareTitle.'&summary=';
    $twitterURL = 'https://twitter.com/intent/tweet?text='.$shareTitle.'&amp;url='.get_permalink();
	$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.get_permalink();
	$googleURL = 'https://plus.google.com/share?url='.get_permalink();
    $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.get_permalink().'&amp;media='.wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full") .'&amp;description='.$shareTitle;
?>
<div class="shareicons">
    <a target="_blank" class="fa fa-twitter" href="<?php echo $twitterURL;?>" title="Share on Twitter"></a>
    <a target="_blank" class="fa fa-facebook" href="<?php echo $facebookURL;?>" title="Share on Facebook"></a>
    <a target="_blank" class="fa fa-google-plus" href="<?php echo $googleURL;?>" title="Share on Google+"></a>
    <a target="_blank" class="fa fa-pinterest" href="<?php echo $pinterestURL;?>" title="Share on Twitter"></a>
    <a target="_blank" class="fa fa-linkedin" href="<?php echo $linkedinURL;?>" title="Share on LinkedIn"></a>
</div>