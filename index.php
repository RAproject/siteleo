<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="frameworks/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="frameworks/bootstrap/dist/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="frameworks/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="plugins/immersive-slider-master/immersive-slider.css">
	<link rel="stylesheet" type="text/css" href="plugins/circular-navigation/css/style.css">
	<link rel="stylesheet" type="text/css" href="plugins/circular-navigation/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="plugins/slick/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="plugins/slick/slick/slick-theme.css">
	<style type="text/css">
		.margem-topo{
			margin-top:10px;
		}
		.barra-sem-borda{
			border-radius: 0px;
		}
		.img-slider{
			width: 100%;
			height: 100%;
		}
		.cor-hover:hover{
			background-color: black;
			color: white;
		}
		.muda-cursor-title:hover{
			cursor: pointer;
			color: green;
		}
		.muda-cursor:hover{
			cursor: pointer;
		}
		.borda-direita{
			border-right: 3px solid white;
		}
		.produtos-img{
			width: 100%;
			height: 100%;
		}
		.link-tab{
			color:white;
			text-decoration: none;
		}
		.link-tab:hover{
			color:white;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<!-- DIV CABEÇALHO -->
		<div class="row">
			<div class="panel panel-primary barra-sem-borda">
				<div class="panel-heading barra-sem-borda">
					<div class="row">
						<div class="col-sm-2 col-lg-2 col-xs-2 col-md-2">
							<b>Ol&aacute; visitante !</b>
						</div>
						<div class="col-sm-2 col-lg-2 col-xs-2 col-md-2 col-sm-offset-3 col-lg-offset-3 col-xs-offset-3 col-md-offset-3">
							<b>Bem Vindo !</b>
						</div>
						<div class="col-sm-2 col-lg-2 col-xs-2 col-md-2 col-sm-offset-3 col-lg-offset-3 col-xs-offset-3 col-md-offset-3 text-right">
							<b><?php echo date("d/m/Y");?></b>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<!-- DIV CABEÇALHO 2 -->
		<div class="row">
			<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3">
				<img src="img/logo1.jpg">
			</div>
			<div class="col-sm-2 col-lg-2 col-md-2 col-xs-2 col-sm-offset-3 col-lg-offset-3 col-md-offset-3 col-xs-offset-3 text-right muda-cursor-title">
				<b>HOME</b>
			</div>
			<div class="col-sm-2 col-lg-2 col-md-2 col-xs-2 text-right muda-cursor-title">
				<b>QUEM SOMOS</b>
			</div>
			<div class="col-sm-2 col-lg-2 col-md-2 col-xs-2 text-right muda-cursor-title">
				<b>FALE CONOSCO</b>
			</div>
		</div>
		<!-- DIV BUSCA -->
		<div class="row margem-topo">
			<div class="panel panel-primary barra-sem-borda">
				<div class="panel-heading barra-sem-borda">
					<div class="row">
						<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3 text-left" style="margin-top:3%;">
							<button class="cn-button" id="cn-button">Menu</button>
							<div class="cn-wrapper" id="cn-wrapper">
								<ul>
									<li>
										<a href="#">
											<span>Home</span>
											<svg class="caticon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="35px" height="70px" viewBox="0 0 512 512" enable-background="new 0 0 50 50" xml:space="preserve">
											<path fill="white" id="shop-3-icon" d="M79.792,217.25v235h352.75v-235H79.792z M397.542,381.75h-282.75v-129.5h282.75V381.75z M220.62,59.75
											l-17.798,85.332h-0.081v17.34c0,18.314-14.847,33.161-33.161,33.161s-33.16-14.847-33.16-33.161v-17.34l50.841-85.332H220.62z
											M168.232,59.75l-51.91,85.332v17.34c0,18.314-14.847,33.161-33.161,33.161S50,180.736,50,162.422v-17.34l83.666-85.332H168.232z
											M462,145.082v17.34c0,18.314-14.847,33.161-33.161,33.161s-33.161-14.847-33.161-33.161v-17.34l-51.91-85.332h34.566L462,145.082z
											M289.08,145.082h0.081v17.34c0,18.314-14.847,33.161-33.161,33.161s-33.161-14.847-33.161-33.161v-17.34h0.081l16.729-85.332
											h32.703L289.08,145.082z M324.739,59.75l50.841,85.332v17.34c0,18.314-14.846,33.161-33.16,33.161s-33.161-14.847-33.161-33.161
											v-17.34h-0.081L291.38,59.75H324.739z"/>
										</svg>
									</a>
								</li>
								<li><a href="#"><span>Furniture</span></a></li>
								<li><a href="#"><span>Transport</span></a></li>
								<li><a href="#"><span>Gift</span></a></li>
								<li><a href="#"><span>Clothes</span></a></li>
								<li><a href="#"><span>Games</span></a></li>
								<li><a href="#"><span>Stationary</span></a></li>
								<li><a href="#"><span>Toys</span></a></li>
								<li><a href="#"><span>Books</span></a></li>
								<li><a href="#"><span>Login</span></a></li>
								<li><a href="#"><span>Register</span></a></li>
								<li><a href="#"><span>Sell</span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-md-6 col-xs-6 text-center" style="margin-top:3%;">
						<input class="form-control" type="text" name="">
					</div>
					<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3 text-center muda-cursor">
						<p>
							<span class="fa fa-cart-plus fa-2x"></span>
						</p>
						<p>
							<b>CARRINHO DE COMPRAS</b>
						</p>
						<p>
							<b>ITEM: <u>1</u></b> R$ 1.800,00
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- DIV SLIDER-->
	<div class="row margem-topo">
		<div class="main">
			<div id="immersive_slider">
				<div class="slide text-center" data-blurred="img/img1.jpg">
					<img class="img-slider" src="img/img1.jpg">
				</div>
				<div class="slide text-center" data-blurred="img/img2.jpg">
					<img class="img-slider" src="img/img2.jpg">
				</div>
				<div class="slide text-center" data-blurred="img/img3.jpg">
					<img class="img-slider" src="img/img3.jpg">
				</div>
				<a href="#" class="is-prev">&laquo;</a>
				<a href="#" class="is-next">&raquo;</a>
			</div>
		</div>
	</div>
	<!-- DIV BLOCOS LINK -->
	<div class="row margem-topo muda-cursor">
		<div class="panel barra-sem-borda">
			<div class="panel-heading barra-sem-borda">
				<div class="row">
					<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3 cor-hover">
						<p class="text-center">
							<span class="fa fa-truck fa-2x"></span> 
						</p>
						<p class="text-center">
							<b>ENTREGA</b>
						</p>
						<p class="text-center">
							Apenas para Manaus/AM
						</p>
					</div>
					<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3 cor-hover">
						<p class="text-center">
							<span class="fa fa-plane fa-2x"></span> 
						</p>
						<p class="text-center">
							<b>FRETE GR&Aacute;TIS</b>
						</p>
						<p class="text-center">
							Para os pedidos acima de R$ 50,00
						</p>
					</div>
					<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3 cor-hover">
						<p class="text-center">
							<span class="fa fa-phone fa-2x"></span> 
						</p>
						<p class="text-center">
							<b>DUVIDAS NA COMPRA?</b>
						</p>
						<p class="text-center">
							Ligue para 2123-9595
						</p>
					</div>
					<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3 cor-hover">
						<p class="text-center">
							<span class="fa fa-credit-card fa-2x"></span> 
						</p>
						<p class="text-center">
							<b>PARCELAMENTO</b>
						</p>
						<p class="text-center">
							Em at&eacute; 10x
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- DIV LINHA PRODUTOS -->
	<div class="row margem-topo">
		<div class="panel panel-primary barra-sem-borda">
			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-2 col-lg-2 col-md-2 col-xs-2"><b>CARTUCHOS</b></div>
					<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 text-right"></div>
					<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 text-right"></div>
					<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 text-right"></div>
					<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 text-right"></div>
					<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 text-right"></div>
					<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 text-right"></div>
					<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 text-right borda-direita"><a class="link-tab" onclick="MudarConteudoSlide(1);"><b>EPSON<b></a></div>
					<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 text-right borda-direita" ><a class="link-tab" onclick="MudarConteudoSlide(2);"><b>HP</b></a></div>
					<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1 text-right"><a class="link-tab" onclick="MudarConteudoSlide(3);"><b>MAXPRINT</b></a></div>
				</div>
			</div>
		</div>
	</div>
	<!-- DIV BLOCOS PRODUTOS -->
	<div class="row margem-topo text-center">
		
		<div class="produtos" id="produtos1">
		Slide 1
			<div>
				<p >
					<img class="produtos-img" src="img/cartucho2.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho2.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho2.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho2.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho2.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho2.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho2.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho2.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>
		</div>

		<div class="produtos2" id="produtos2" style="display:none;">
		Slide 2
			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>
		</div>

		<div class="produtos" id="produtos3" style="display:none;">
		Slide 3
			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>

			<div>
				<p >
					<img class="produtos-img" src="img/cartucho.jpg">
				</p>
				<p><b>DESCRI&Ccedil;&Atilde;O</b></p>
				<p><b>VALOR</b></p>
			</div>
		</div>

	</div>
</div>
</body>
<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="frameworks/bootstrap/dist/js/bootstrap.js"></script>
<script type="text/javascript" src="plugins/immersive-slider-master/jquery.immersive-slider.js"></script>
<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>	
<script type="text/javascript" src="plugins/circular-navigation/js/index.js"></script>
<script type="text/javascript" src="plugins/slick/slick/slick.js"></script>
<script type="text/javascript">
	$("#immersive_slider").immersive_slider({
	  animation: "fade", // As usual, you can change the animation to these: slide (default), bounce, fade, slideUp, and bounceUp
	  slideSelector: ".slide", // This option will let you assign custom selector for each slides in case .slide is already taken
	  container: ".main", // This option lets you define the container of which the background will appear. Make sure the slider is inside this container as well.
	  cssBlur: false, // Experimental: In case you don't want to keep adding new data-blurred attributes, trigger this to true and it will generate the blur image on the fly (more info below).
	  pagination: true, // Toggle this to false if you don't want a pagination
	  loop: true, // Toggle to false if you don't want the slider to loop. Default is true.
	  autoStart: 5000 // Define the number of milliseconds before it navigates automatically. Change this to 0 or false to disable autoStart. The default value is 5000.
	});

	// ============================================= //

	$('.produtos').slick({
		arrows:true,
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		]
	});

	$('.produtos2').slick({
		arrows:true,
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		]
	});

function MudarConteudoSlide(slide){
	if(slide == 1){
		$("#produtos1").fadeOut(500);
		$("#produtos2").fadeIn(500);
		$("#produtos3").fadeOut(500);		
	}
}
</script>
</html>