<style>
    .maplink {
        position: relative;
        display: inline-block;
    }
    .maplink .overlay {
        display:none;
        text-decoration: none;
        position: absolute;
        top:0;
        left: 0;
        height: 100%;
        width: 100%;
        background: #000;
        background: rgba(0,0,0,.3);
        color:#fff;
        text-align: center;
        padding:25%;
    }
    .maplink:hover .overlay  {
        display: block;
    }
</style>
<a class="maplink" href="<?php echo $vars['Map URL'];?>" title="Click to View Map"><span class="overlay">View Map</span><img src="<?php echo $vars ['Map Image'];?>" alt="Map Image: Courtsey Google"></a>