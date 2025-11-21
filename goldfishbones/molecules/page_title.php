
<style>
    .page_title {
        background-size: cover;
        background-position: center;
        
    }
</style>
<div class="page_title" <?php if (!empty($vars['hero-image'])) { echo 'style="background-image:url('.$vars["hero-image"].');"';}?>>
    <div class="container">
        <div class="row row-title">
            <div class="col-sm-12 col">
                <h1><?php echo $vars['pageTitle'];?></h1>
            </div>
        </div>
    </div>
</div>