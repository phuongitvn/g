<?php $themeUrl = Yii::app()->theme->baseUrl;?>
<?php 
Yii::app()->getClientScript()->registerCssFile("$themeUrl/css/prettyPhoto.css");
Yii::app()->getClientScript()->registerScriptFile("$themeUrl/js/jquery.prettyPhoto.js");
?>
<script type="text/javascript">
  $(document).ready(function(){
	$("a[rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'fast', /* fast/slow/normal */
		slideshow: 5000, /* false OR interval time in ms */
		autoplay_slideshow: false, /* true/false */
		opacity: 0.70, /* Value between 0 and 1 */
		show_title: true, /* true/false */
		allow_resize: true, /* Resize the photos bigger than viewport. true/false */
		default_width: 500,
		default_height: 344,
		counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
		theme: 'pp_default' /* light_rounded / dark_rounded / light_square / dark_square / facebook */
	});
  });
</script>
<div id="main">
	<?php $this->widget('application.widgets.SlidePhotos.SlidePhotosWidget')?>
	<!-- boxes -->
	<section class="boxes">
		<div class="holder">
			<!-- title-box -->
			<div class="title-box">
				<h2>ISM - THÔNG TIN QUÁN LÝ</h2>
				<p>Phương châm tư vấn của chúng tôi là chú trọng đến sự phù hợp. Phát triển và triển khai giải pháp thật sự tin cậy cho doanh nghiệp. Đồng thời, với sự đam mê với nghề chúng tôi hoàn toàn có thể hứa với Quý khách hàng về việc hỗ trợ KH dài lâu.</p>
			</div>
			<!-- boxes-section -->
			<div class="boxes-section">
				<article class="col">
					<a href="#"><div class="icon ico1"></div></a>
					<div class="text-box">
						<h3>Tư vấn sự phù hợp</h3>
						<p>Chúng tôi chú trọng sự phù hợp của giải pháp cho doanh nghiệp hơn là sự tốt nhất.</p>
						<a href="#" class="btn">Đọc thêm</a>
					</div>
				</article>
				<article class="col">
					<a href="#"><div class="icon ico2"></div></a>
					<div class="text-box">
						<h3>Cung ứng giải pháp tin cậy</h3>
						<p>Đề cao tinh thần trách nhiệm, chúng tôi luôn mang giải pháp thực đến Quý khách hàng</p>
						<a href="#" class="btn">Đọc thêm</a>
					</div>
				</article>
				<article class="col last">
					<a href="#"><div class="icon ico3"></div></a>
					<div class="text-box">
						<h3>Hỗ trợ khách hàng lâu dài</h3>
						<p>Đây là phương châm sống còn của chúng tôi!</p>
						<a href="#" class="btn">Đọc thêm</a>
					</div>
				</article>
			</div>
		</div>
	</section>
	<div class="main-container holder">
		<!-- grid-cols -->
		<div class="grid-cols">
			<!-- col67 -->
			<div class="col67">
				<div class="col-holder">
					<?php $this->widget('application.widgets.CustomHtml.customHtml', array('_wID'=>20));?>
				</div>
			</div>					
							<!-- col33 -->
			<div class="col33">
				<div class="col-holder">
				<?php $this->widget('application.widgets.tab.TabWidget', array('_wID'=>21));?>
				</div>
			</div>
		</div>
		<!-- grid-cols -->
		<div class="grid-cols">
			<!-- col67 -->
			<div class="col67">
				<div class="col-holder">
					<?php $this->widget('application.widgets.CustomHtml.customHtml', array('_wID'=>22));?>
				</div>
			</div>						
			<!-- col33 -->
			<div class="col33">
				<div class="col-holder testimonials">
					<!-- testimonials-item -->
					<h3>Client Testimonials</h3>
					<ul>
						<li>
							<img class="image" src="<?php echo $themeUrl; ?>/images/testimonial-2.jpg" alt="image description" />
							<blockquote>
								<q>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</q>
								<cite>- John, <a href="#">The Bright Agency</a></cite>
							</blockquote>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- clients -->
	<?php $this->widget('application.widgets.partner.PartnerWidget')?>
</div>