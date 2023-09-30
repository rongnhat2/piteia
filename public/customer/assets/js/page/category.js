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
		render(data){
            $(".product-view .row div").remove()
			data.map(v => {
                var image           = v.images.split(",")[0];
                var rate 		= Math.floor(Math.random() * 5) + 3;
                var rate_total 	= Math.floor(Math.random() * 200) + 100;
				$(".product-view .row")
					.append(`<div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="/product/${v.id}-${v.slug}" style="aspect-ratio: 1 / 1; background-color: #fff; display: block">
                                                <img alt="" src="/${image}" style="aspect-ratio: 1 / 1;"">
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
                                                    <h4 class=" action-add-to-card" atr="Add to card" product-id="${v.id}" meta-id="1">${View.Cart.item.includes(v.id) ? `カート内の商品` : `カートに入れる`}  </h4>
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper">
                                                <span>${ViewIndex.Config.formatPrices(v.price)} 円</span>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h4>
                                                <a href="/product/${v.id}-${v.slug}">${v.name}</a>
                                            </h4>
                                            <div class="product-price-wrapper">
                                                <span>${ViewIndex.Config.formatPrices(v.price)} 円</span> 
                                            </div>
                                            <p>${v.description}</p>
                                            <div class="shop-list-cart-wishlist"> 
                                                <a href="#" class=" action-add-to-card" atr="Add to card" product-id="${v.id}" meta-id="1">${View.Cart.item.includes(v.id) ? `カート内の商品` : `カートに入れる`}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>`) 
                    })
		}
	},
	Category: {
		id: 0,
		render(data){
            $(".category-list-tag")
                    .append(`<li class="tag-cloud-link status-tag" status-id="new"><a>新着商品</a> </li>`)
            $(".category-list-tag")
                    .append(`<li class="tag-cloud-link status-tag" status-id="hot"><a>オススメ商品</a> </li>`)
			data.map((v, k) => {
				$(".category-list-tag")
					.append(`<li class="tag-cloud-link category-tag" category-id="${v.id}"><a category-id="${v.id}">${v.name}</a> </li>`)
			})
		},
        onEvent(callback){ 
            $(document).on('click', `.tag-cloud-link.category-tag`, function() {
                $(".category-list-tag .tag-cloud-link").removeClass("active");
                $(this).addClass("active")
                callback($(this).find("a").attr("category-id"))
            }); 
        },
        onStatusEvent(callback){ 
            $(document).on('click', `.tag-cloud-link.status-tag`, function() {
                $(".category-list-tag .tag-cloud-link").removeClass("active");
                $(this).addClass("active")
                console.log($(this).attr("status-id"));
                callback($(this).attr("status-id"))
            }); 
        },
        init(){
            $(".category-list-tag .tag-cloud-link.category-tag").removeClass("active")
            $(`.category-list-tag .tag-cloud-link.category-tag[category-id=${View.Category.id}]`).addClass("active")

            $(".category-list-tag .tag-cloud-link.status-tag").removeClass("active")
            $(`.category-list-tag .tag-cloud-link.status-tag[status-id='${View.URL.get("status") ?? 0}']`).addClass("active")
        }
	},
	SlidesRange: { 
        onStop(callback){ 
            $('#slider-range').slider({ 
                    stop : function(e, ui) {
                        callback();   
                    }  
                });
        }
	},
    pagination: {
        page: 1,
        pageSize: 6,
        total: 0,
        onChange(callback) {
            const oThis = View.pagination;
            $(document).on('click', '.pagination-style .page-numbers:not(.disabled, .active)', function () {
                const page = $(this).attr("atr");
                let nextPage = null;
                if (page.match(/Next/g)) {
                    nextPage = oThis.page + 1;
                }
                else if (page.match(/Back/g)) {
                    nextPage = oThis.page - 1;
                }
                else {
                    nextPage = +page;
                }
                callback(+nextPage);
                oThis.page = +nextPage;
            });
        },
        length(){
            return Math.ceil(this.total / this.pageSize);
        },
        render() {
            const paginationHTML = generatePagination(this.page, Math.ceil(this.total / this.pageSize));
            if($('.pagination-style ul li').length) {
                $('.pagination-style ul li').remove();
            }

            $('.pagination-style').append(paginationHTML);
            const startEntry = this.pageSize * (this.page - 1) + 1;
            const lastEntry = Math.min(this.pageSize * this.page, this.total);
        }
    },
    URL: {
        setURL(filters){
            const param     = (new URLSearchParams({ ...filters })).toString();
            window.history.pushState('','', '?' + param);
        },
        getFilterURL(){
            // lấy ra url và trả về chuỗi filter tương ứng
            var urlParam    = new URLSearchParams(window.location.search); 
            return filters  = {
                keyword:      View.Keyword ?? '',
                category:     View.Category.id ?? '0',
                sort:         urlParam.get('sort') ?? $(".sort-by").val(),
                status:       urlParam.get('status') ?? '',
                prices:       $(".js-range-slider").val(),
                page:         View.pagination.page ?? '1',
            };
        }, 
        set(item){
            const pageState = item;
            const param     = (new URLSearchParams({ ...pageState })).toString();
            window.history.pushState('','', '?' + param);
        },
        get(id){
            var urlParam    = new URLSearchParams(window.location.search);
            return urlParam.get(id)
        }
    },
    Sort:{
        onChange(callback){
            $(document).on('change', `.sort-by`, function() { 
                callback($(this).val())
            });
        }
    },
    Layout: {
        onChange(){
            $(".grid-view-mode .modes-mode").on("click", function(){
                $(".grid-view-mode .modes-mode").removeClass("active");
                $(this).addClass("active");
                var control = $(this).attr("atr");
                $(".list-products").removeClass("active");
                $(`.list-products[option-control=${control}]`).addClass("active");
            })
        }
    },
	init(){ 
        View.Layout.onChange();
        View.Cart.init();
	}
};
(() => {
    View.init();
    function init(){
        View.Category.id = View.URL.get("category") 
    	View.URL.setURL(View.URL.getFilterURL())
    	getCategory();
    	getData();
        new Promise(() => {
            setTimeout(() => {
                View.Category.init();
            }, 1000);
        });
        
    	// getOrder( )
    }
    async function redirect_logined(url) {
        await delay(1500);
        window.location.replace(url);
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

    View.Sort.onChange(() => {
        View.pagination.page = 1;
        View.pagination.render();
        View.URL.set({'sort': $(".sort-by").val()}); 
        View.URL.setURL(View.URL.getFilterURL())
        getData();
    })

    View.Category.onEvent((id) => {
        View.Category.id = id;
        View.pagination.page = 1;
        View.pagination.render();
        View.URL.set({'status': 0, 'sort': 0}); 
        View.URL.setURL(View.URL.getFilterURL())
        getData();
    }) 
    View.Category.onStatusEvent((tag) => {
        View.Category.id = 0;
        View.pagination.page = 1;
        View.pagination.render();
        View.URL.set({'status': tag, 'sort': 0}); 
        View.URL.setURL(View.URL.getFilterURL())
        getData();
    }) 


    View.pagination.onChange((page) => {
        View.pagination.page = +page;
        View.pagination.render();
        View.URL.setURL(View.URL.getFilterURL()) 
        getData()
    })
 
    View.SlidesRange.onStop(() => {
        View.pagination.page = 1;
        View.pagination.render();
        View.URL.setURL(View.URL.getFilterURL()) 
        getData()
    });

    function getData(){
        Api.Product.GetAll(View.URL.getFilterURL())
            .done(res => {  
                View.Product.render(res.data.data)
                View.pagination.total = res.data.count;
                View.pagination.render();
            })
            .fail(err => {  })
            .always(() => { });
    }

    function getCategory(){
        Api.Category.GetAll()
            .done(res => { 
                View.Category.render(res.data); 
            })
            .fail(err => {  })
            .always(() => { });
    }

    init();
})();