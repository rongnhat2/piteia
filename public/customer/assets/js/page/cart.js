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
	Product: {
		getCart(){
			var cart_data = JSON.parse(`{ "cart": [] }`); 
			$(".shoppingcart-content table tbody")
				.find(".cart_item").each(function(index, el) {
		            cart_data.cart 
		                .push(
		                    JSON.parse(`{ "id": ${$(el).attr("product-id")}, "meta": ${$(el).attr("metadata")}, "qty": ${$(el).attr("qty")}}`)
		                ); 
				});
			return JSON.stringify(cart_data)
		},
		render(data, meta){
            var image           = data.images.split(",")[0];
            var metadata           = JSON.parse(data.metadata).data[meta-1];  
            var real_prices     = metadata.discount == 0 ? metadata.prices : metadata.prices - (metadata.prices*metadata.discount/100);
            var prices = metadata.discount != 0 
            				? `<del>${ViewIndex.Config.formatPrices(metadata.prices)} 円 / 1 item</del>
                                <span class="woocommerce-Price-currencySymbol">
                                    ${ViewIndex.Config.formatPrices(real_prices)} 円
                                </span>`
                            : `<span class="woocommerce-Price-currencySymbol">
                                    ${ViewIndex.Config.formatPrices(real_prices)} 円
                                </span>`

			$(".shoppingcart-content table tbody")
				.prepend(`<tr class="cart_item" product-id="${data.id}" metadata='${data.metadata}' prices="${real_prices}" qty="1">
                            <td class="product-thumbnail">
                                <a href="/product/${data.id}-${data.slug}">
                                    <img src="/${image}" alt="" style="max-width: 200px">
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="/product/${data.id}-${data.slug}">${data.name}
                                <span class="attributes-select attributes-color">${metadata.size} ml</span> </a>
                            </td> 
                            <td class="product-quantity">
                                <div class="pro-dec-cart">
                                    <input class="cart-plus-minus-box input-qty qty" data-step="1" data-min="0" value="1" title="Qty" class="" name="qtybutton">
                                </div>
                            </td>
                            <td class="product-subtotal">${prices}</td>
                            <td class="product-remove product-remove"> 
                                <a href="#" class="remove"><i class="fa fa-times"></i></a>
                           </td>
                        </tr> `)
			View.Cart.total += real_prices;
			$(".order-total .total-price").text(`${ViewIndex.Config.formatPrices(View.Cart.total)} 円`)
		},
		updateCart(){
			var total = 0;
			$(".shoppingcart-content table tbody")
				.find(".cart_item").each(function(index, el) {
					var total_row = +$(el).attr("prices") * +$(el).attr("qty");
					total += total_row;
					$(el).find(".woocommerce-Price-currencySymbol").text(`${ViewIndex.Config.formatPrices(total_row)} 円`)
				});
			$(".order-total .total-price").text(`${ViewIndex.Config.formatPrices(total)} 円`)
		},
		init(){
            $(document).on('click', `.product-remove a`, function() {
            	$(this).parent().parent().remove();
            	View.Product.updateCart();
            }); 
            $(document).on('keyup', `.input-qty.qty`, function() {
            	var qty = $(this).val(); 
            	$(this).parent().parent().parent().parent().attr("qty", qty);
            	View.Product.updateCart();
            }); 
            $(document).on('click', `.btn-cart-to-checkout`, function() { 
            	localStorage.setItem("cosmetio-cart-data", View.Product.getCart())
            });  
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
        var card        = localStorage.getItem("cosmetio-cart");  
        var json_cart = JSON.parse(card);   
        if (json_cart.cart.length == 0) {
            $(".cart-form").css({"display": "none"})
            $(".btn-cart-to-checkout").css({"display": "none"}) 
            $(".page-main-content").prepend(`<h3 class="text-center">カートが空です</h3>`)
        }
        json_cart.cart.map(v => {
        	getOne(v.id, v.meta)
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

    function getOne(id, meta){
        Api.Product.GetOne(id)
            .done(res => { 
            	View.Product.render(res.data[0], meta)
            })
            .fail(err => {  })
            .always(() => { });
    } 
    init();
})();