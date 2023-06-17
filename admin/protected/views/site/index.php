<?php
/* @var $this SiteController */


?>
<div class="site-index">

	<div class="main">
		<div class="breadcrumbs">
			<ul>
				<li style="display: inline-block;" typeof="v:Breadcrumb"> <a href="<?php echo Yii::app()->request->baseUrl; ?>" title="Inicio" rel="v:url" property="v:title"> Inicio </a> <span>/</span></li>
				<li style="display: inline-block;"> <strong>Truper</strong></li>
			</ul>
		</div>
		<div class="col-main">
			<div class="std">
				<div class="cms-header-container">
					<div class="main-container historia">
						<div class="row cms-header">
							<div class="col-xs-12">
								<h1><i class="fas fa-caret-right"></i> Acerca de Truper</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="map-container">
					<div class="main-container">
						<picture>
							<source media="(max-width:768px)" srcset="https://www.truper.com/media/wysiwyg/acerca/banner2023-movil.jpg"> <img src="https://www.truper.com/media/wysiwyg/acerca/BANNER-WEB-2.jpg" alt="Banner-acerca-de">
						</picture>
					</div>
				</div>
				<div class="row mt-30 mb-10">
					<div class="col-xs-12 text-center">
						<p class="acerca-p">Somos la <span class="acerca-orange">empresa más reconocida en Latinoamérica</span> en manufactura, distribución y comercialización de herramientas y productos para todos los segmentos de la industria ferretera.</p>
						<p class="acerca-p">Nuestro catálogo está en constante crecimiento, incluye más de <span class="acerca-orange">13,000</span> productos. El buen desempeño de estos está garantizado por el Centro de Calidad Avanzada Truper CCAT, el laboratorio de calidad más avanzado del mundo en el sector ferretero.</p>
					</div>
				</div>
				<div class="row text-center brands">
					<div class="acerca-marcas-title-container">
						<p class="title">Contamos con 7 marcas especializadas por segmento:</p>
					</div>
				</div>
				<style>
					.g4-circles-container-desk .g1 {
						position: relative;
						left: 56px
					}

					.g4-circles-container-desk .g2 {
						position: relative;
						left: 19px
					}

					.g4-circles-container-desk .g3 {
						position: relative;
						left: -19px
					}

					.g4-circles-container-desk .g4 {
						position: relative;
						left: -56px
					}

					.g4-circles-container-desk {
						display: block
					}

					.g4-circles-container-mov {
						display: none
					}

					.vision-item-p span {
						font-weight: bold
					}

					.vision-item-p {
						text-align: center;
						font: normal normal normal 1.3em Arial;
						letter-spacing: 0;
						color: #fff;
						padding-top: 12%;
						padding-left: 2%;
						padding-right: 2%
					}

					.vision-item-title {
						text-align: center;
						font: bold normal normal 1.5em Arial;
						letter-spacing: 0;
						color: #fff;
						padding-top: 7%
					}

					.vision-item-p:before {
						content: "";
						position: absolute;
						left: 15%;
						bottom: 63%;
						height: 1px;
						width: 69%;
						border-bottom: 2px solid #f60
					}

					.vision-item-content {
						width: 87%;
						margin: 0 auto;
						height: 230px;
						border-radius: 25px;
						background-size: cover
					}

					.vision-background {
						background-image: url("/media/wysiwyg/acerca/VISION.png")
					}

					.mision-background {
						background-image: url("/media/wysiwyg/acerca/MISION.png")
					}

					.vision-container,
					.g4-container {
						margin-top: 8%;
						margin-bottom: 5%
					}

					.valores-last {
						left: 7%
					}

					.custom-p {
						text-align: center;
						font: normal normal normal 1.4em Arial;
						letter-spacing: 0;
						color: #383737;
						opacity: 1;
						padding: 0 25px 0 25px;
						position: relative;
						bottom: 12%
					}

					.valores-second {
						margin-top: 7% !important
					}

					.valores-title {
						margin-bottom: 5%
					}

					.valores-item img {
						max-height: 97px !important;
						position: relative;
						top: -23%;
						left: 0
					}

					.valores-item {
						background: #f6f6f6 0 0 no-repeat padding-box;
						border-radius: 15px;
						height: 200px
					}

					.eu-can img {
						margin-bottom: 40px;
						max-width: 1037px !important;
						width: 100% !important
					}

					#owl-brands .brands-mobile {
						color: #f60 !important;
						font-size: 4vw
					}

					#owl-brands .brands-mobile span {
						color: #383737 !important;
						font-weight: normal !important
					}

					.carusell-copies .brands-small {
						color: #f60 !important
					}

					.carusell-copies .brands-small span {
						color: #383737 !important;
						font-weight: normal !important
					}

					.carusell-copies {
						position: relative;
						bottom: 28px
					}

					.acerca-marcas-title-container {
						width: 100%;
						position: relative;
						z-index: 1
					}

					.acerca-marcas-title-container:before {
						content: "";
						position: absolute;
						left: 31%;
						bottom: -6px;
						height: 1px;
						width: 38%;
						border-bottom: 1px solid #f60
					}

					.acerca-p {
						text-align: center !important;
						font: normal normal normal 1.2vw Arial !important;
						letter-spacing: 0 !important;
						color: #383737 !important
					}

					.acerca-p .acerca-orange {
						text-align: center !important;
						font: normal normal normal 1.2vw Arial !important;
						letter-spacing: 0 !important;
						color: #f60 !important;
						font-weight: bold !important
					}

					.cms-acerca-de-truper .cms-header-container .main-container {
						margin-bottom: 18px !important
					}

					.cms-acerca-de-truper .map-container .main-container {
						padding: 0 !important
					}

					.cms-acerca-de-truper .map-container img {
						width: 100vw !important;
						margin-left: calc(-50vw + 50%);
						max-width: 100vw !important
					}

					.cms-acerca-de-truper .breadcrumbs {
						display: none !important
					}

					.separador {
						height: 50px;
						border-right: 1px solid #f60
					}

					.cms-acerca-de-truper .std p {
						font-style: normal !important
					}

					.videoWrapper {
						margin-top: -30px;
						position: relative;
						padding-bottom: 56.25%;
						padding-top: 25px;
						height: 0
					}

					.videoWrapper iframe {
						position: absolute;
						top: 0;
						left: 0;
						width: 100vw;
						margin-left: calc(-50vw + 50%);
						height: 100%
					}

					.cms-acerca-de-truper .map-container {
						width: 100vw !important;
						margin-left: calc(-50vw + 50%) !important;
						background: #000 url("https://www.truper.com/media/wysiwyg/desktop.jpg") center center no-repeat !important;
						-webkit-background-size: cover !important;
						-moz-background-size: cover !important;
						-o-background-size: cover !important;
						background-size: cover !important;
						margin-top: -30px
					}

					.us-main-text p {
						font-family: 'Lato', sans-serif !important;
						font-size: 18px !important;
						font-weight: lighter !important;
						color: #4b4b4b !important;
						letter-spacing: 1px;
						line-height: 25px !important
					}

					.us-main-text p span {
						font-weight: bold !important
					}

					.eu-can p {
						font-family: 'Lato', sans-serif !important;
						font-size: 1.3vw !important;
						font-weight: lighter !important;
						color: #4b4b4b !important
					}

					.us h2 {
						font-family: 'Lato', sans-serif;
						font-size: 26px !important;
						color: #f60 !important;
						text-transform: none;
						font-weight: bold !important
					}

					.us h2 i {
						position: relative;
						font-size: 16px !important;
						color: #f60 !important;
						top: -3px
					}

					.us p {
						font-family: 'Lato', sans-serif !important;
						font-size: 18px !important;
						font-weight: lighter !important;
						color: #4b4b4b !important
					}

					.us p span {
						font-family: 'Lato', sans-serif !important;
						font-size: 18px !important;
						font-weight: bold !important;
						color: #4b4b4b !important
					}

					.g4 p {
						font-family: 'Lato', sans-serif !important;
						font-size: 18px !important;
						font-weight: lighter !important;
						color: #4b4b4b !important;
						line-height: 20px;
						vertical-align: middle
					}

					.g4 p .num {
						font-size: 24px !important;
						border: 2px solid #ff6701;
						border-radius: 50%;
						height: 30px;
						width: 30px;
						position: relative;
						display: inline-block
					}

					.g4 p .diag {
						color: #f60 !important;
						font-size: 24px !important;
						display: none
					}

					.valores h3 {
						margin-top: 0;
						text-transform: none;
						position: relative;
						top: -15%;
						font: normal normal bold 1.4em Arial;
						letter-spacing: 0;
						color: #f60
					}

					.valores p {
						font-family: 'Lato', sans-serif !important;
						font-size: 18px !important;
						font-weight: lighter !important;
						color: #4b4b4b !important;
						position: relative;
						top: -13%
					}

					.brands .title {
						font-size: 18px !important
					}

					.eu-can span {
						font-size: 18px !important;
						color: #4b4b4b !important;
						line-height: 24px;
						font-style: normal !important;
						font-family: 'Lato', sans-serif !important;
						font-weight: bold
					}

					.brands .brands-small {
						font-size: 18px !important
					}

					.acerca_custom_p .num {
						position: relative;
						left: -6px
					}

					.custom-text-align {
						text-align: center
					}

					@media(min-width:1726px) {
						.custom-p {
							font-size: 17px !important
						}
					}

					@media(max-width:767px) {
						.videoWrapper {
							margin-top: 20px
						}

						.cms-acerca-de-truper .map-container {
							width: 100vw !important;
							margin-left: calc(-50vw + 50%) !important;
							background: #000 url("https://www.truper.com/media/wysiwyg/mobile.jpg") center center no-repeat !important;
							-webkit-background-size: cover !important;
							-moz-background-size: cover !important;
							-o-background-size: cover !important;
							background-size: cover !important
						}

						.us-main-text p {
							font-size: 20px !important
						}
					}

					@media(max-width:991px) {
						.col-md-3 {
							width: 25%;
							float: left
						}

						.movil-custom-margin {
							margin-top: 10%
						}

						.custom-p {
							font: normal normal normal 1.2em Arial
						}

						.vision-item-p {
							padding-top: 8%
						}
					}

					@media(max-width:770px) {
						.us .movil-special-font-size {
							font-size: 21px !important
						}

						.pmx-0 {
							padding-left: 0;
							padding-right: 0
						}

						.g4-circles-container-desk {
							display: none
						}

						.g4-circles-container-mov {
							display: block
						}

						.valores2 {
							margin-top: 16% !important
						}

						.vision-item-title {
							font: bold normal normal 2.5em Arial
						}

						.vision-item-p:before {
							bottom: 60%
						}

						.vision-item,
						.custom-movil-padding {
							padding-left: 0 !important;
							padding-right: 0 !important
						}

						.vision-item-content {
							width: 100%;
							background-color: black;
							margin: 0 auto;
							height: 275px;
							border-radius: 0
						}

						.custom-p {
							text-align: center;
							font: normal normal normal 1.3em Arial;
							letter-spacing: 0;
							color: #383737;
							opacity: 1;
							padding: 0 5px 0 5px;
							position: relative;
							bottom: 12%
						}

						.vision-item-p {
							text-align: center;
							font: normal normal normal 1.3em Arial;
							letter-spacing: 0;
							color: #fff;
							padding-top: 10%;
							padding-left: 2%;
							padding-right: 2%
						}

						.vision-container {
							margin-top: 20%
						}

						.valores-last {
							left: 0
						}

						.valores-second {
							margin-top: 4% !important
						}

						.valores h3 {
							font-size: 2em !important
						}

						.valores-item img {
							max-height: 156px !important;
							position: relative;
							top: -28%;
							left: 0
						}

						.valores img {
							max-width: 35% !important;
							height: 92px !important
						}

						.valores-item {
							margin-top: 23%;
							height: 183px
						}

						.valores {
							margin-top: 33%
						}

						.valores-container {
							padding-left: 0 !important;
							padding-right: 0 !important
						}

						.eu-can img {
							width: 111% !important;
							left: -6%;
							position: relative
						}

						.acerca-marcas-title-container:before {
							left: 3px;
							width: 98%
						}

						.acerca-p {
							font-size: 4vw !important
						}

						.acerca-p .acerca-orange {
							font-size: 4vw !important
						}

						.custom-text-align {
							text-align: left
						}

						.num {
							text-align: center
						}

						.acerca_custom_p .num {
							left: 0
						}

						.acerca_custom_col {
							margin: auto;
							width: 305px
						}
					}

					@media(max-width:550px) {
						.vision-item-p:before {
							bottom: 69%
						}
					}
				</style>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" type="text/javascript"></script>
				<script type="text/javascript">
					var brand = "";
					var brandcloned = "";
					var dot = "";
					var dotcloned = "";
					jQuery(document).ready(function() {
						jQuery("#owl-brands").owlCarousel({
							loop: true,
							items: 1,
							center: true,
							autoplay: false,
							autoplayTimeout: 3000,
							margin: 10,
							responsive: {
								0: {
									items: 1
								},
								480: {
									items: 1
								},
								768: {
									items: 7
								},
								1080: {
									items: 7
								}
							}
						});
						var i = 1;
						jQuery('#owl-brands .owl-dot').each(function() {
							jQuery(this).addClass('dot' + i);
							i++;
						});
						var j = 1;
						jQuery('#owl-brands .owl-item').each(function() {
							if (!jQuery(this).hasClass('cloned')) {
								jQuery(this).addClass('original');
								j++;
							}
						});
						jQuery(".original img").on("click", function() {
							var currentimg = jQuery(this);
							jQuery('.cloned').removeClass("cent-img");
							jQuery('.original').removeClass("cent-img");
							jQuery(this).parent().parent().addClass('cent-img');
							jQuery('.brands .brands-small').hide();
							jQuery(".original img").removeClass("active");
							jQuery(".cloned img").removeClass("active");
							brand = jQuery(this).attr('value');
							jQuery('.brands .brands-small').hide();
							jQuery('.brands .' + brand).show();
							dot = jQuery(this).attr('btn');
							jQuery("#owl-brands .owl-dot." + dot).click();
							jQuery(".original img").removeClass("active");
							jQuery(".cloned img").removeClass("active");
							currentimg.addClass('active');
							jQuery(".owl-item.active.center .item img").addClass('active');
						});
						jQuery(".cloned img").on("click", function() {
							var clonedthis = jQuery(this);
							jQuery('.cloned').removeClass("cent-img");
							jQuery('.original').removeClass("cent-img");
							jQuery(this).parent().parent().addClass('cent-img');
							jQuery('.brands .brands-small').hide();
							jQuery(".original img").removeClass("active");
							jQuery(".cloned img").removeClass("active");
							brandcloned = jQuery(this).attr('value');
							jQuery('.brands .brands-small').hide();
							jQuery('.brands .' + brandcloned).show();
							dotcloned = jQuery(this).attr('btn');
							jQuery("#owl-brands .owl-dot." + dotcloned).click();
							clonedthis.addClass('active');
							jQuery(".owl-item.active.center .item img").addClass('active');
						});
					});
				</script>
			</div>
		</div>
	</div>
</div>