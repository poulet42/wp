</div><!-- #container -->
<div id="footer">
	<ul id="menu-bottom" class="clearfix">
			<?php
				if(is_active_sidebar('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
				}
			?>
	</ul>
	<div class="footerlinks">
<!-- #ici code -->
	</div>
</div><!-- #footer -->
<?php wp_footer() ?> <!-- #NE PAS SUPPRIMER cf. codex wp_footer() -->
</body>
</html>
