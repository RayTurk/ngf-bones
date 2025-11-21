<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			
			
			
        <footer id="footer" role="contentinfo">
            <div class="container">

            </div>
        </footer>
		<script type="text/javascript">
            $(document).ready(function(){
                $('.cartlink').click(function(){
                    $('.minicart').slideToggle();
                
                })
            })
        </script>
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>