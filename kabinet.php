
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/prof.css">
	<!-- Template CSS -->
</head>

<body>

	<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1><a class="navbar-brand" href="index.html"><span class="fa fa-play icon-log"
							aria-hidden="true"></span>
						Illuminos </a></h1>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<!-- <span class="navbar-toggler-icon"></span> -->
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Главная</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">Фильмы</a>
						</li>
				<li class="nav-item">
								<a class="nav-link" href="genre.php">Сериалы</a>
							</li>

						<li class="nav-item">
							<a class="nav-link" href="contact.php">Профиль</a>
							
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Оплата</a>
						</li>
					</ul>

					<!--/search-right-->
					<!--/search-right-->
					<div class="search-right">
						<a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Рупоиск <span
								class="fa fa-search ml-3" aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">
								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Введите свой запрос" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form>
								<div class="browse-items">
									<h3 class="hny-title two mt-md-5 mt-4">Фильтры:</h3>
									<ul class="search-items">
										<li><a href="genre.html">Action</a></li>
										<li><a href="genre.html">Drama</a></li>
										<li><a href="genre.html">Family</a></li>
										<li><a href="genre.html">Thriller</a></li>
										<li><a href="genre.html">Commedy</a></li>
										<li><a href="genre.html">Romantic</a></li>
										<li><a href="genre.html">Tv-Series</a></li>
										<li><a href="genre.html">Horror</a></li>
										<li><a href="genre.html">Action</a></li>
										<li><a href="genre.html">Drama</a></li>
										<li><a href="genre.html">Family</a></li>
										<li><a href="genre.html">Thriller</a></li>
										<li><a href="genre.html">Commedy</a></li>
										<li><a href="genre.html">Romantic</a></li>
										<li><a href="genre.html">Tv-Series</a></li>
										<li><a href="genre.html">Horror</a></li>
									</ul>
								</div>
							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
						<!--/search-right-->
					</div>


				</div>
				<!-- toggle switch for light and dark theme -->
				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
				<!-- //toggle switch for light and dark theme -->
			</div>
		</nav>
		<!--//nav-->
	</header>
	<!-- //header -->
	<!-- main-slider -->
	
	<section class="w3l-albums py-5" id="projects">
		<div class="container py-lg-4">
			<div class="row">
				<div class="container">
					<h1>Кабинет пользователя</h1>
					
					<!-- История просмотров -->
					<h2>История просмотров</h2>
					<ul id="watch-historv">
					<img class="img-fluid" src="assets/images/m7.jpg" alt="">
                    <img class="img-fluid" src="assets/images/m4.jpg" alt="">
                    <img class="img-fluid" src="assets/images/m3.jpg" alt="">
					</ul>
			
					<!-- Подписка -->
					<h2>Подписка</h2>
					<div id="subscription">
					<h2>Подпишитесь на нашу рассылку</h2>
    <form action="podpiska.php" method="post">
        <input type="email" name="email" placeholder="Введите ваш e-mail" required>
        <input type="submit" value="Подписаться">
    </form>

    <h2>Проверить состояние подписки</h2>
    <form action="podpiska.php" method="get">
        <input type="email" name="email" placeholder="Введите ваш e-mail" required>
        <input type="submit" value="Проверить">
    </form>
					</div>
			
					<!-- Избранное -->
					<h2>Избранное</h2>
					<ul id="watch-historv">
					<div class="page">
        <div class="modal-body">
            <div class="block_cart">
            <div class="card rounded-3 mb-4">
            <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-2 col-lg-2 col-xl-2">
            <img src="assets/images/m2.png" class="img-fluid rounded-3" alt="Cotton T-shirt">
            </div>
       
      
        <div class="col-md-1 col-lg-1 col-xl-1 text-end text-center">
            <a href="#!" class="btn btn-danger btn-sm" onclick="cartLS.remove(181)"><i class="fas fa-trash"><img src="icon/крестик.png" alt="" width="25" height="30"> </i></a>
        </div>
    </div>
    </div>
    </div></div>
          
        </div>
</div>
					</ul>
				</div>
			
			</div>
		</div>
	</section>
	<!-- //tabs-->
	<!-- footer-66 -->
	
	<footer class="w3l-footer">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">
							
							<div class="row footer-links">


								
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Информация</h6>
									<ul>
										
										<li><a href="#">Войти</a></li>
									
									</ul>
								</div>
							
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Подписка</h6>
									<form action="#" class="subscribe mb-3" method="post">
										<input type="email" name="email" placeholder="Почта" required="">
										<button><span class="fa fa-envelope-o"></span></button>
									</form>
									<p>Введите свою почту для получения уведомлений.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p>&copy; 2023 Illuminos </p>
						</div>

						<ul class="social text-lg-right">
							<li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
							</li>
							<li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
							</li>
							<li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
							</li>
							<li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
							</li>

						</ul>
					</div>
				</div>
			</div>
			<!-- copyright -->
			<!-- move top -->
			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-arrow-up" aria-hidden="true"></span>
			</button>
			<script>
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function () {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
			</script>
			<!-- /move top -->

		</section>
	</footer>
	<!--//footer-66 -->
</body>

</html>
<!-- responsive tabs -->
<script src="assets/js/jquery-1.9.1.min.js"></script>
  <script src="assets/js/easyResponsiveTabs.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      //Horizontal Tab
      $('#parentHorizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function (event) { // Callback function if tab is switched
          var $tab = $(this);
          var $info = $('#nested-tabInfo');
          var $name = $('span', $info);
          $name.text($tab.text());
          $info.show();
        }
      });
    });
  </script>  
<!-- //responsive tabs -->
<!--/theme-change-->
<script src="assets/js/theme-change.js"></script>
<!-- //theme-change-->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			stagePadding:280,
			loop: true,
			margin: 20,
			nav: true,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					stagePadding:40,
					nav: false
				},
				480: {
					items: 1,
					stagePadding:60,
					nav: true
				},
				667: {
					items: 1,
					stagePadding:80,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<script>
	$(document).ready(function () {
		$('.owl-three').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 2,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 3,
					nav: true
				},
				1000: {
					items: 5,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- /mid-script -->
<script>
	$(document).ready(function () {
		$('.owl-mid').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //mid-script -->

<!-- script for owlcarousel -->
<!-- Template JavaScript -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!--//-->
<!-- disable body scroll which navbar is in active -->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 80) {
			$("#site-header").addClass("nav-fixed");
		} else {
			$("#site-header").removeClass("nav-fixed");
		}
	});

	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
		$("header").toggleClass("active");
	});
	$(document).on("ready", function () {
		if ($(window).width() > 991) {
			$("header").removeClass("active");
		}
		$(window).on("resize", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
		});
	});
</script>
<!-- Подключаем файлы JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
	// Получаем данные пользователя из сервера или сессии
	
	// История просмотров
	const watchHistory = ["Фильм 1", "Фильм 2", "Фильм 3"];
	const watchHistoryElement = document.getElementById("watch-history");
	watchHistory.forEach(item => {
		const li = document.createElement("li");
		li.innerText = item;
		watchHistoryElement.appendChild(li);
	});

	// Подписка
	const subscription = true;  // Устанавливаем значение подписки
	const subscriptionElement = document.getElementById("subscription");
	subscriptionElement.innerText = subscription ? "Активна" : "Не активна";

	// Избранное
	const favorites = ["Фильм 1", "Фильм 3"];
	const favoritesElement = document.getElementById("favorites");
	favorites.forEach(item => {
		const li = document.createElement("li");
		li.innerText = item;
		favoritesElement.appendChild(li);
	});
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/menu.js"></script>
    <script>$(document).ready(function () {
            $('.menu-burger__header').click(function () {
                $('.menu-burger__header').toggleClass('open-menu');
                $('.header__nav').toggleClass('open-menu');
                $('body').toggleClass('fixed-page');
            });
        });</script>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Корзина покупок</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="block_cart">

                    </div>
                    <div class="h5 text-right"><strong class="total"></strong></div>
                </div>
                <div class="modal-footer">
                    <div class="send_order"></div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Продолжить покупки</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/cart-localstorage@1.1.4/dist/cart-localstorage.min.js"
        type="text/javascript"></script>
    <script>
        //var loc =  JSON.parse({"1":{"id":174,"name":"Iphone 11 Pro","price":255,"color":"\u0421\u0435\u0440\u044b\u0439","img":".\/img\/iphone11.png"},"2":{"id":181,"name":"Samsung Galaxy A52","price":235,"color":"\u0411\u0435\u043b\u044b\u0439","img":".\/img\/samsung_galaxy_a52.png"},"3":{"id":166,"name":"Iphone 13 Pro","price":365,"color":"\u0421\u0435\u0440\u044b\u0439","img":".\/img\/iphone_13_pro.png"},"4":{"id":134,"name":"Xiaomi Mi 9","price":210,"color":"\u0427\u0435\u0440\u043d\u044b\u0439","img":".\/img\/Xiaomi_Mi_9.png"}});
        function renderCart(items) {
            const $cart = document.querySelector(".cart")
            const $total = document.querySelector(".total")
            const $count = document.querySelector("#count")
            const $block_cart = document.querySelector(".block_cart")
            const $send_order = document.querySelector(".send_order")

            $block_cart.innerHTML = items.map((item) => `
            <div class="card rounded-3 mb-4">
            <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-2 col-lg-2 col-xl-2">
            <img src="${item.img}" class="img-fluid rounded-3" alt="Cotton T-shirt">
            </div>
       
        
        
        <div class="col-md-1 col-lg-1 col-xl-1 text-end text-center">
            <a href="#!" class="btn btn-danger btn-sm" onClick="cartLS.remove(${item.id})"><img src="image/крестик.png" alt="" width="25" height="30"> </a>
        </div>
    </div>
    </div>
    </div>`).join("")

            var items = cartLS.list();

            var tot = items.reduce((sum, item) => sum + item.quantity, 0);
            if (cartLS.total() === 0) {
                $total.innerHTML = 'В корзине нет товаров.';
                $send_order.innerHTML = '';
                $count.innerHTML = '';
            } else {
                $total.innerHTML = "Товаров: " + tot + " на сумму: ₽" + cartLS.total();

                $count.innerHTML = cartLS.list().length;
            }

        }

        renderCart(cartLS.list())
        cartLS.onChange(renderCart)
    </script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/menu.js"></script>
    <script>$(document).ready(function () {
            $('.menu-burger__header').click(function () {
                $('.menu-burger__header').toggleClass('open-menu');
                $('.header__nav').toggleClass('open-menu');
                $('body').toggleClass('fixed-page');
            });
        });</script>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Корзина покупок</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="block_cart">

                    </div>
                    <div class="h5 text-right"><strong class="total"></strong></div>
                </div>
                <div class="modal-footer">
                    <div class="send_order"></div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Продолжить покупки</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/cart-localstorage@1.1.4/dist/cart-localstorage.min.js"
        type="text/javascript"></script>
    <script>
        //var loc =  JSON.parse({"1":{"id":174,"name":"Iphone 11 Pro","price":255,"color":"\u0421\u0435\u0440\u044b\u0439","img":".\/img\/iphone11.png"},"2":{"id":181,"name":"Samsung Galaxy A52","price":235,"color":"\u0411\u0435\u043b\u044b\u0439","img":".\/img\/samsung_galaxy_a52.png"},"3":{"id":166,"name":"Iphone 13 Pro","price":365,"color":"\u0421\u0435\u0440\u044b\u0439","img":".\/img\/iphone_13_pro.png"},"4":{"id":134,"name":"Xiaomi Mi 9","price":210,"color":"\u0427\u0435\u0440\u043d\u044b\u0439","img":".\/img\/Xiaomi_Mi_9.png"}});
        function renderCart(items) {
            const $cart = document.querySelector(".cart")
            const $total = document.querySelector(".total")
            const $count = document.querySelector("#count")
            const $block_cart = document.querySelector(".block_cart")
            const $send_order = document.querySelector(".send_order")

            $block_cart.innerHTML = items.map((item) => `
            <div class="card rounded-3 mb-4">
            <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-2 col-lg-2 col-xl-2">
            <img src="${item.img}" class="img-fluid rounded-3" alt="Cotton T-shirt">
            </div>
    
      
        
        <div class="col-md-1 col-lg-1 col-xl-1 text-end text-center">
            <a href="#!" class="btn btn-danger btn-sm" onClick="cartLS.remove(${item.id})"><img src="images/крестик.png" alt="" width="25" height="30"> </a>
        </div>
    </div>
    </div>
    </div>`).join("")

            var items = cartLS.list();

            var tot = items.reduce((sum, item) => sum + item.quantity, 0);
            if (cartLS.total() === 0) {
                $total.innerHTML = 'В корзине нет товаров.';
                $send_order.innerHTML = '';
                $count.innerHTML = '';
            } else {
                $total.innerHTML = "Товаров: " + tot + " на сумму: ₽" + cartLS.total();

                $count.innerHTML = cartLS.list().length;
            }

        }

        renderCart(cartLS.list())
        cartLS.onChange(renderCart)
    </script>
