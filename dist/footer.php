			<!-- footer -->
			<footer class="footer" role="contentinfo">
<ul class="social">
                                  <li class="facebook"><i class="fa fa-facebook"></i></a></li>
                                  <li class="twitter"><i class="fa fa-twitter"></i></a></li>
                                  <li class="behance2"><i class="fa fa-instagram"></i></a></li>
                                </ul>
				<!-- copyright -->
				<p class="copyright">
					 <?php echo date('Y'); ?>  <?php bloginfo('name'); ?>
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
<script type="text/javascript">
      //var loading_screen = pleaseWait({
        //logo: "",
        //backgroundColor: '#f46d3b',
        //loadingHtml: "<p class='loading-message'>Preloooooooad!</p>"
      //});

            //loading_screen.finish();
        $('html').load(function(){
            console.log("ral");
            loading_screen.finish();
      });
    </script>
<script>$(window).load(function(){$(".prel").fadeOut();$(".preloader").delay(150).fadeOut("slow");})</script>

	</body>
</html>
