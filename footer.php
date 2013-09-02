		</div>
		<div id="ft">
			<div id="ft-container">
				<div class="yui-gb">	
					<div class="yui-u first">
						<div class="footer-box">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?>
							<div class="footer-title">Recent Posts</div>
							<ul>
								<li><a href="#">A Post About Something of Interest</a></li>
								<li><a href="#">About Something of Interest</a></li>
								<li><a href="#">Post About Something</a></li>
								<li><a href="#">Something of Interest or Aboiut</a></li>
								<li><a href="#">Patrick's Last Post</a></li>
							</ul>
							<?php endif; ?>
						</div>
					</div>
					<div class="yui-u">
						<div class="footer-box">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?>
							<div class="footer-title">Popular Posts</div>
							<ul>
								<li><a href="#">A Post About Something of Interest</a></li>
								<li><a href="#">About Something of Interest</a></li>
								<li><a href="#">Post About Something</a></li>
								<li><a href="#">Something of Interest or Aboiut</a></li>
								<li><a href="#">Patrick's Last Post</a></li>
							</ul>
							<?php endif; ?>
						</div>
					</div>
					<div class="yui-u">
						<div class="footer-box blank">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?>
							<div class="footer-title">Contact</div>
							<p>
								<a href="http://developdaly.com/contact/">Use the form</a> or<br />
								patrick@developdaly.com<br />
								(940) 229-1510
							</p>
							<p>
								<a href="http://developdaly.com/feed/" id="footer-subscribe">Subscribe</a>
							</p>						
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="yui-g">
					<p>
						<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/us/">&copy; 2006 - 2009</a> | <a href="http://developdaly.com/privacy-policy/">Privacy Policy</a> | <a href="http://developdaly.com/sitemap/">Sitemap</a><br />
						Proudly powered by <a href="http://wordpress.org/">WordPress</a> &amp; hosted by <a href="http://secure.hostgator.com/cgi-bin/affiliates/clickthru.cgi?id=devdal1">Hostgator</a>
					</p>
				</div>
			</div>
		</div>		
		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-394845-1");
		pageTracker._trackPageview();
		} catch(err) {}</script>
		<?php wp_footer(); ?>
	</body>
</html>