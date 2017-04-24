<?php if ( is_active_sidebar( 'maxstore-footer-area' ) ) { ?>  				
	<div id="content-footer-section" class="row clearfix">    				
		<?php dynamic_sidebar( 'maxstore-footer-area' ) ?>  				
	</div>		
<?php } ?>         
<footer id="colophon" class="rsrc-footer" role="contentinfo">                
	<div class="row rsrc-author-credits">                                       
		<div class="text-center">
			Store Powered by WordPress/MaxStore. 
			<span class="sep"> | </span>
			Built by <a href="http://titanhack.com">titanhack.com</a>
		</div>
	</div>    
</footer>
<div id="back-top">  
	<a href="#top">
		<span></span>
	</a>
</div>
</div>
<!-- end main container -->
<?php wp_footer(); ?>
</body>
</html>