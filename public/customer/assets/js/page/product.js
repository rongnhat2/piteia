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
		setVal(data){
            var image           = data.images.split(",")[0];
            $(".image_preview_container").css({
            	"background-image": `url('/${image}')`
            })
            $(".image-preview-container img").attr("data-zoom-image", `/${image}`)
            $(".image-preview-container img").attr("src", `/${image}`)
            data.images.split(",").map((v, k )=> {
            	$(".product-dec-slider2")
            		.append(`<img src="/${v}" alt=""> `)
            })
			View.Carousel.init(".product-dec-slider2"); 

			data.description.split("<br />").map(v => {
				$(".product-details-description ul")
					.append(`<li>${v}</li>`)
			}) 
			$("#product-detail").append(data.detail)
			$(".product-title").text(data.name)
        	View.Product.Metadata = JSON.parse(data.metadata);   
			View.Product.Metadata.data.map((v, k) => { 
				$(".list-size")
					.append(`<a class="${k == 0 ? "is-active" : ""}" size-id="${v.id}" data-prices="${v.prices}" data-discount="${v.discount}" style="padding: 4px 8px">${v.size} ml</a>`)
			})
			View.Product.setPrice();

			if (data.sex == 1) {
				$(".list-sex").append(`<a class="is-active" value-id="1"> 男性</a>`)
			}else if(data.sex == 2){
				$(".list-sex").append(`<a class="is-active" value-id="2"> 女性</a>`)
			}else{
				$(".list-sex").append(`<a class="is-active" value-id="1"> 男性</a>`)
				$(".list-sex").append(`<a class="" value-id="2"> 女性</a>`)
			}

			$(".category-data-name a").text(data.category_name)
			$(".category-data-name a").attr("href", `/category?category=${data.category_id}`)
			$(".item-data-name").text(data.name)

			if (View.Cart.item.includes(data.id)) { 
				$(".quantity-add-to-cart .button").removeClass("action-add-to-card");
				$(".quantity-add-to-cart .button").html('カート内の商品');
			}
			$(".details-infor .action-add-to-card").attr("product-id", data.id);
			$(".details-infor .action-add-to-card").attr("meta-id", $(".list-size a[class='is-active']").attr("size-id")); 
		},
		renderRelated(data){
			data.map(v => {
                var image           = v.images.split(",")[0];
                var rate 		= Math.floor(Math.random() * 5) + 3;
                var rate_total 	= Math.floor(Math.random() * 200) + 100;
				$(".product-related-list")
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
			View.Carousel.init2('.product-related-list');
		},
		setPrice(){
			var item = $(`.list-size a[class="is-active"]`); 
			var price = item.attr("data-prices");
			var discount = item.attr("data-discount");
			var real_price = price - ( price / 100 * discount )
             $(".data-prices").text(`${real_price.toFixed(2).replaceAll('.00', "")} 円`)
             discount != 0 ? $(".data-discount").text(`${price} 円`) : "";
			$(".details-infor .action-add-to-card").attr("meta-id", $(".list-size a[class='is-active']").attr("size-id")); 
		},
		onAddToCart(){
			$(document).on('click', `.list-size a`, function() {
                $(".list-size a").removeClass("is-active");
                $(this).addClass("is-active")
                View.Product.setPrice();
            });
		},
		init(){
			$(document).on('click', `.list-size a`, function() {
                $(".list-size a").removeClass("is-active");
                $(this).addClass("is-active")
                View.Product.setPrice();
            });
			$(document).on('click', `.list-sex a`, function() {
                $(".list-sex a").removeClass("is-active");
                $(this).addClass("is-active")
                View.Product.setPrice();
            });
		}
	},
	Carousel: {
		init2(resource){ 
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
		init(resource){ 
			$('.product-dec-slider2').owlCarousel({
		        loop: false,
		        nav: false,
		        autoplay: true,
		        autoplayTimeout: 5000, 
		        items: 1
		    }) 
		} 
	},
	init(){
		View.Cart.init();
		View.Product.init();
	}
};
(() => {
    View.init();
    function init(){ 
    	getRelatedProduct();
    	getData()
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
    function getData(){
        Api.Product.GetOne($(".product-id").val())
            .done(res => { 
            	View.Product.setVal(res.data[0]) 
            })
            .fail(err => {  })
            .always(() => { });
    }
    function getRelatedProduct(){
        Api.Product.GetRelated($(".product-id").val())
            .done(res => {
                View.Product.renderRelated(res.data);
            })
            .fail(err => {  })
            .always(() => { });
    } 

    init();
})();