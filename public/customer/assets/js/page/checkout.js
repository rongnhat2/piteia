const View = { 
	Cart: {
		total: 0,
		item: [],
		init(){ 
	        var card        = localStorage.getItem("cosmetio-cart");  
	        var json_cart = JSON.parse(card);  
	        json_cart.cart.map(v => { 
	            View.Cart.item.push(v.id);
	        })
		}
	},
    Order: {
        getVal(){
            var resource = '.cart-form-data';
            var fd = new FormData();
            var required_data = [];
            var onPushData = true;

            var data_id      = $(`${resource}`).find('.data-id').val(); 
            var data_name      = $(`${resource}`).find('.data-name').val(); 
            var data_email      = $(`${resource}`).find('.data-email').val(); 
            var data_phone      = $(`${resource}`).find('.data-phone').val(); 
            var data_address      = $(`${resource}`).find('.data-address').val(); 
            var data_zipcode      = $(`${resource}`).find('.data-zipcode').val(); 
            var data_description      = $(`${resource}`).find('.data-description').val(); 
            $(`${resource}`).find('.error-log .js-errors').remove();

            if (ViewIndex.Config.isEmail(data_email) == null) { 
                if (data_email == '') { 
                    required_data.push('Email is required.'); onPushData = false 
                }else{
                    required_data.push('Email is invalid.'); onPushData = false 
                }
            }
            if (data_address == '') { required_data.push('Address is required.'); onPushData = false }
            if (data_phone == '') { required_data.push('Phone is required.'); onPushData = false }
            if (data_name == '') { required_data.push('Name is required.'); onPushData = false }
            if (data_zipcode == '') { required_data.push('Zipcode is required.'); onPushData = false }
            
            if (onPushData) {
                fd.append('data_id', data_id);
                fd.append('data_name', ViewIndex.Config.toNoTag(data_name));
                fd.append('data_email', ViewIndex.Config.toNoTag(data_email));
                fd.append('data_phone', ViewIndex.Config.toNoTag(data_phone));
                fd.append('data_address', ViewIndex.Config.toNoTag(data_address));
                fd.append('data_zipcode', ViewIndex.Config.toNoTag(data_zipcode));
                fd.append('data_description', ViewIndex.Config.toNoTag(data_description));
                fd.append('metadata', localStorage.getItem("cosmetio-cart-data"));
                // $(`${resource}`).find('.error-log').prepend(` <ul class="js-errors"><li class="error">この機能を更新しています</li></ul> `)
                return fd;
            }else{
                $(`${resource}`).find('.error-log .js-errors').remove();
                var required_noti = ``;
                for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                $(`${resource}`).find('.error-log').prepend(` <ul class="js-errors">${required_noti}</ul> `)
                return false;
            }
        },
        onPush(callback){
            $(document).on('click', `.button-payment`, function() {
                var data = View.Order.getVal();
                if (data) callback(data);
            });
        },
    },
	Product: { 
		render(data, meta, qty){
            var image           = data.images.split(",")[0];
            var metadata        = meta.data[0];  
            var real_prices     = metadata.discount == 0 ? metadata.prices : metadata.prices - (metadata.prices*metadata.discount/100); 
            var prices = metadata.discount != 0 
            				? `<del class="d-flex">${ViewIndex.Config.formatPrices(metadata.prices)} 円 / 1 item</del>
                                ${ViewIndex.Config.formatPrices(real_prices)} 円`
                            : `${ViewIndex.Config.formatPrices(real_prices)} 円`

			$(".list-product-order")
				.prepend(`<li class="product-item-order">
                            <div class="product-thumb">
                                <a href="/product/${data.id}-${data.slug}" >
                                    <img src="/${image}" alt="img">
                                </a>
                            </div>
                            <div class="product-order-inner">
                                <h5 class="product-name">
                                    <a href="/product/${data.id}-${data.slug}" >${data.name}</a>
                                </h5>
                                <span class="attributes-select attributes-color">${metadata.size} ml</span> 
                                <div class="price">
                                    ${prices}
                                    <span class="count">x${qty}</span>
                                </div>
                            </div>
                        </li>`)
			View.Cart.total += real_prices * qty;
			$(".total-price").text(`${ViewIndex.Config.formatPrices(View.Cart.total)} 円`)
		}, 
	},
    response: { 
        success(message){
            $(".error-log .js-response").remove();
            $(".error-log").prepend(`<div class="js-response js-success"><li>${message}</li></div>`)
            setTimeout(function () {
                $('.error-log .js-response').remove();
            }, 5000);
        },
        error(message){
            $(".error-log .js-response").remove();
            $(".error-log").prepend(`<div class="js-response js-errors"><li>${message}</li></div>`)
            setTimeout(function () {
                $('.error-log .js-response').remove();
            }, 5000);
        },                  
    },
	init(){

	}
};
(() => {
    View.init();
    function init(){  
        var card        = localStorage.getItem("cosmetio-cart-data");   
        var json_cart = JSON.parse(card); 
        if (json_cart == null) {
            window.location.replace("/cart"); 
        }
        json_cart.cart.map(v => { 
        	getOne(v.id, v.meta, v.qty)
        }) 
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
    View.Order.onPush((fd) => {
        Api.Order.Checkout(fd)
            .done(res => {
                if (res.status == 200) {
                    View.response.success(res.message)
                    localStorage.removeItem("cosmetio-cart");
                    localStorage.removeItem("cosmetio-cart-data");
                    redirect_logined(res.data)
                }else if (res.status == 201) {
                    View.response.success(res.message)
                    localStorage.removeItem("cosmetio-cart"); 
                    localStorage.removeItem("cosmetio-cart-data");
                    redirect_logined("/")
                }else{
                    View.response.error(res.message)
                }
            })
            .fail(err => {  })
            .always(() => { });
    })
    function getOne(id, meta, qty){
        Api.Product.GetOne(id)
            .done(res => {  
            	View.Product.render(res.data[0], meta, qty)
            })
            .fail(err => {  })
            .always(() => { });
    } 
    init();
})();