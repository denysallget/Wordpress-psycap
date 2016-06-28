
	
		<!-- /wrapper -->


		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>



		<!-- **Footer** -->
        <footer id="footer">
            <div class="footer-widgets-wrapper">
                <div class="container">

                    <div class="column dt-sc-one-fourth first">
                        <aside class="widget widget_text">
                            <h3 class="widget-title">Contato  <span class="wlast"></span><span class="small-line"> </span></h3>
                            
                            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-1')) ?>
                            

                        </aside>
                    </div>

                    <div class="column dt-sc-one-half">
                        <aside class="widget widget_popular_entries">
                            <h3 class="widget-title">Últimos <span class="wlast">Posts</span><span class="small-line"> </span></h3>
                            <div class="recent-property-widget">
                                <ul>
                                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-2')) ?>
                                </ul>
                            </div>
                        </aside>
                    </div>

                    

                    <div class="column dt-sc-one-fourth">
                        <aside class="widget mailchimp">
                            <h3 class="widget-title">Newsletter <span class="wlast"></span><span class="small-line"> </span></h3>
                            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-3')) ?>

                            <div id="ajax_newsletter_msg"></div>
                            <div class="dt-sc-hr-invisible-small"></div>
                            <ul class="dt-sc-social-icons">
                                <li><a class="dt-sc-tooltip-top facebook" href='#' target="_blank" title="Facebook"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="dt-sc-tooltip-top twitter" href='#' target="_blank" title="Twitter"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="dt-sc-tooltip-top google-plus" href='#' target="_blank" title="Google-plus"> <i class="fa fa-google-plus"></i> </a></li>
                                <li><a class="dt-sc-tooltip-top youtube" href='#' target="_blank" title="Youtube"> <i class="fa fa-youtube"></i> </a></li>
                            </ul>
                        </aside>
                    </div>

                </div>
            </div><!-- **footer-widgets-wrapper - End** -->

            <div class="copyright">
                <div class="container">
                    <p>PSYCAP © 2016 - Todos os direitos reservados.</p>
                    <ul class="footer-links">
                       	<?php footer_nav(); ?>
                    </ul>
                </div>
            </div>

        </footer> 
        
	</body>
</html>
