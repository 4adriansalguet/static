
    <section id="section_5">
        
	<div class="footer_container">
        <div class="footer-des">
            <h3 class="sub-line"><span>Contact</span> Us</h3>
            <p>PROVIDE US ANY WRITTEN ESTIMATE, AND WE'LL BEAT IT BY 10%</p>
            <img src="./public/images/icons/logo.fw.png" alt="">
        </div>

		<div class="social_media">
			<div class="mail">
				<a href="#"><img src="./public/images/icons/footerphonefw.fw.png" alt=""></a>
				<h4>EMAIL</h4>
				<p type="email">mr_garcia_m@yahoo.com</p>
			</div>

			<div class="telephone">
				<a href="#"><img src="./public/images/icons/footerphone.fw.png" alt=""></a>
				<h4>PHONE</h4>
				<p>(408) 413-9093</p>
			</div>

			<div class="location">
				<a href="#"><img src="./public/images/icons/footerloc.fw.png" alt=""></a>
				<h4>LOCATION</h4>
				<p>Garcia Painting Gilroy, CA</p>
			</div>
		</div>

			<div class="payment_container">
				<div class="payment_choices">
					<h5>WE ACCEPT</h5>
					<img src="./public/images/icons/payments.fw.png" alt="">
				</div>
					
				<div class="soc_med">
					<h5>FOLLOW US:</h5>
					<img src="./public/images/icons/socmed.fw.png" alt="">
				</div>
			</div>
	</div>

	<div class="menu_footer_container">
		<div class="menu_choices">
			<a class="home_menu" href="#">HOME</a>
			<a href="#">ABOUT US</a>
			<a href="#">SERVICES</a>
			<a href="#">GALLERY</a>
			<a href="#">CONTACT US</a>
		</div>
	</div>

	<div class="copyright"> 
		<h5>GARCIA PAINTING © 2020. ALL RIGHTS RESERVED</h5>
	</div>
</section> 


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if( $this->siteInfo['cookie'] ): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if(in_array($view,["home","contact"])): ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function() {
			$('.g-recaptcha').each(function(index, el) {
				var recaptcha = grecaptcha.render(el, {'sitekey' : '<?php $this->info("site_key");?>'});
				$( '.destroy-on-load' ).remove();
			})
		};


		$('.consentBox').click(function () {
		    if ($(this).is(':checked')) {
		    	if($('.termsBox').length){
		    		if($('.termsBox').is(':checked')){
		        		$('.ctcBtn').removeAttr('disabled');
		        	}
		    	}else{
		        	$('.ctcBtn').removeAttr('disabled');
		    	}
		    } else {
		        $('.ctcBtn').attr('disabled', true);
		    }
		});

		$('.termsBox').click(function () {
		    if ($(this).is(':checked')) {
	    		if($('.consentBox').is(':checked')){
	        		$('.ctcBtn').removeAttr('disabled');
	        	}
		    } else {
		        $('.ctcBtn').attr('disabled', true);
		    }
		});

	</script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
	<script src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
	<script>
		$('#gall1').pajinate({ num_page_links_to_display : 3, items_per_page : 10 });
		$('.fancy').fancybox({
			helpers: {
				title : {
					type : 'over'
				}
			}
		});
	</script>
<?php endif; ?>

<a class="cta" href="tel:<?php $this->info("phone") ;?>"><span style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>
</html>


