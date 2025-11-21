
<style>
    .page_title {
        background-size: cover;
        background-position: center;
        position: relative;
        height: 350px;
        background-color: #000;
        
    }
    .page_title .caption {
        width: 100%;
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 15px;
        background: rgba(0,0,0,0.6);
    }
    .caption h1 {
        margin: 0;
        text-align: left;
        color: #fff;
        line-height: 1em;
    }
</style>
<div class="page_title centle-title" <?php if (!empty($vars['hero-image'])) { echo 'style="background-image:url('.$vars["hero-image"].');"';}?>>
    <div class="caption">
        <div class="container">
            
            <h1><?php echo $vars['pageTitle'];?></h1>
                
        </div>
    </div>
</div>