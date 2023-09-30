const View = {
	Cart: {
		item: [],
		init(){ 
	        var card        = localStorage.getItem("cosmetio-cart");  
	        var json_cart = JSON.parse(card);  
	        json_cart.cart.map(v => { 
	            View.Cart.item.push(v.id);
	        })
		}
	},
	Product: {
		Trending: { 
			render(data){
				data.map(v => {
	                var image           = v.images.split(",")[0];
					$(".product-trending-list")
						.append(`<div class="single-slider ptb-240 bg-img" >
				                    <div class="container" style="position: relative;">
				                    	<img src="/${image}" alt="placeholder+image" style="position: absolute; max-width: 600px; top: -60%; right: 0">
				                        <div class="slider-content slider-animated-1">
				                            <h2 class="animated" style="max-width: 400px"><a href="/product/${v.id}-${v.slug}">${v.name}</a>	</h2>
				                            <p>${v.description}</p>
				                        </div>
				                    </div>
				                </div>`)
				})
				View.Carousel.trending();
			},
		},
		New: { 
			render(data){ 
				data.map(v => {
	                var image           = v.images.split(",")[0];
					$(".product-new-list")
						.append(`<div class="product-wrapper">
			                        <div class="product-img">
			                            <a href="/product/${v.id}-${v.slug}" style="aspect-ratio: 1 / 1; background-color: #fff; display: block">
			                                <img alt="" src="/${image}">
			                            </a>
			                        </div>
			                        <div class="product-content text-left">
										<div class="product-hover-style">
											<div class="product-title">
												<h4>
													<a href="/product/${v.id}-${v.slug}">${v.name}</a>
												</h4>
											</div>
											<div class="cart-hover">
												<h4 class=" action-add-to-card" atr="Add to card" product-id="${v.id}" meta-id="1">${View.Cart.item.includes(v.id) ? `カート内の商品` : `カートに入れる`}</h4>
											</div>
										</div>
			                            <div class="product-price-wrapper">
			                                <span>${ViewIndex.Config.formatPrices(v.price)} 円</span> 
			                            </div>
			                        </div>
			                    </div>`)
				})
				View.Carousel.init('.product-new-list');
			},
		},
		TopView: {
			render(data){
				data.map(v => {
	                var image           = v.images.split(",")[0];
					$(".product-feature-list")
						.append(`<div class="product-wrapper-single">
									<div class="product-wrapper mb-30">
										<div class="product-img">
				                            <a href="/product/${v.id}-${v.slug}" style="aspect-ratio: 1 / 1; background-color: #fff; display: block">
				                                <img alt="" src="/${image}">
				                            </a>
				                        </div>
				                        <div class="product-content text-left">
											<div class="product-hover-style">
												<div class="product-title">
													<h4>
														<a href="/product/${v.id}-${v.slug}">${v.name}</a>
													</h4>
												</div>
												<div class="cart-hover">
													<h4 class=" action-add-to-card" atr="Add to card" product-id="${v.id}" meta-id="1">${View.Cart.item.includes(v.id) ? `カート内の商品` : `カートに入れる`}</h4>
												</div>
											</div>
				                            <div class="product-price-wrapper">
				                                <span>${ViewIndex.Config.formatPrices(v.price)} 円</span> 
				                            </div>
				                        </div>
									</div> 
	                            </div>`)
				}) 
				View.Carousel.init('.product-feature-list');
			},
		}
	},
	Carousel: {
		init(resource){ 
			$(resource).owlCarousel({
		        loop: true,
		        nav: false,
		        autoplay: false,
		        autoplayTimeout: 5000,
		        navText: ['<i class="ion-ios-arrow-back"></i>', '<i class="ion-ios-arrow-forward"></i>'],
		        item: 4,
		        margin: 30,
		        responsive: {
		            0: {
		                items: 1
		            },
		            576: {
		                items: 2
		            },
		            768: {
		                items: 3
		            },
		            992: {
		                items: 3
		            },
		            1100: {
		                items: 3
		            },
		            1200: {
		                items: 4
		            }
		        }
		    })
		} ,
		trending(){

		    $('.product-trending-list').owlCarousel({
		        loop: true,
		        nav: false,
		        autoplay: false,
		        autoplayTimeout: 5000,
		        animateOut: 'fadeOut',
		        animateIn: 'fadeIn',
		        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		        item: 1,
		        responsive: {
		            0: {
		                items: 1
		            },
		            768: {
		                items: 1
		            },
		            1000: {
		                items: 1
		            }
		        }
		    })
		}
	},
	init(){
		View.Cart.init();
	}
};
(() => {
    View.init();
    function init(){
    	getTrending();
    	getNewArrivals();
    	getTopView();

    	// getOrder( )
    }
    async function redirect_logined(url) {
        await delay(1500);
        window.location.replace(url);
    }
    function delay(delayInms) {
        return new Promise(resolve => {
            setTimeout(() => {
                resolve(2);
            }, delayInms);
        });
    }
    function getTrending(){
    	Api.Product.Trending()
            .done(res => { 
            	View.Product.Trending.render(res.data)
            })
            .fail(err => {   })
            .always(() => { });
    } 
    function getNewArrivals(){
        Api.Product.NewArrivals()
            .done(res => { 
            	View.Product.New.render(res.data)
            })
            .fail(err => {  })
            .always(() => { });
    }
    function getTopView(){
        Api.Product.TopView()
            .done(res => { 
            	View.Product.TopView.render(res.data)
            })
            .fail(err => {  })
            .always(() => { });
    }

    init();
})();