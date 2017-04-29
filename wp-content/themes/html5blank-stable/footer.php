	</div>
	<div id="footer-wrapper">
        <div class="footer-wrapper-inner">

            <!-- Copyright -->
            <div id="copyright-row" role="contentinfo">
                <div class="row-container">
                    <div class="container-fluid">
                        <div class="row-fluid">
                            <div id="copyright" class="span12">
                                <span class="siteName"><?php bloginfo('name'); ?></span>
                                <span class="copy">©</span> <span class="year"><?php echo date('Y'); ?></span> <a class="privacy_link" href="">Privacy Policy</a>
                            </div>

                            <div class="span12" id="to-desktop">
                                <a href="#">
                                    <span class="to_desktop">Back to desktop version</span>
                                    <span class="to_mobile">Back to mobile version</span>
                                </a>
                            </div>
                            <!-- {%FOOTER_LINK} -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="back-top" style="display: none;">
        <a href="#"><span></span> </a>
    </div>
    <div class="modal hide fade moduletable  loginPopup" id="modal" style="position: absolute; top: 104px; left: 543px;">
        <div class="modal-header">
            <button type="button" class="close modalClose">×</button>
            <header>
                <h3 class=""><span class="item_title_part0">Login</span> <span class="item_title_part1">form</span> </h3>
            </header>
        </div>
        <div class="modal-body">
            <div class="mod-login mod-login__">
                <form action="<?php echo get_template_directory_uri(); ?>" method="post" class="">
                    <div class="mod-login_userdata">
                        <label for="mod-login_username16" class="">User name</label>
                        <input id="mod-login_username16" class="inputbox mod-login_username" type="text" name="username" tabindex="1" size="18" placeholder="User name" required="">
                        <label for="mod-login_passwd16" class="">Password</label>
                        <input id="mod-login_passwd16" class="inputbox mod-login_passwd" type="password" name="password" tabindex="2" size="18" placeholder="Password" required="">
                        <label for="mod-login_remember16" class="checkbox">
                            <input id="mod-login_remember16" class="mod-login_remember" type="checkbox" name="remember" value="yes"> Remember me </label>
                        <div class="mod-login_submit">
                            <button type="submit" tabindex="3" name="Submit" class="btn btn-primary">Log in</button>
                        </div>

                        <ul class="unstyled">
                            <li class="firstItem"><a href="" class="" title="Forgot your username?">Forgot your username?</a>
                            </li>
                            <li><a href="" class="" title="Forgot your password?">Forgot your password?</a>
                            </li>
                            <li class="lastItem"><a href="">Create an account</a>
                            </li>
                        </ul>
                        <input type="hidden" name="option" value="com_users">
                        <input type="hidden" name="task" value="user.login">
                        <input type="hidden" name="return" value="aW5kZXgucGhwP0l0ZW1pZD0xMDE=">
                        <input type="hidden" name="fe93072449efaf2a36dcb7aa3cc7522d" value="1"> </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7078796-5']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
    </script>
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

	</body>
</html>
