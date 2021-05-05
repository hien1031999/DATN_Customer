@extends('master')
@section('content')

    <section class="bread-crumb clearfix">
<span class="crumb-border"></span>
<div class="container">
    <div class="row">
        <div class="col-xs-12 a-left">
            <ul class="breadcrumb">					
                <li class="home">
                    <a itemprop="url" href="trangchu" ><span >Trang chủ</span></a>						
                    <span class="mr_lr"> <i class="fa fa-angle-right"></i> </span>
                </li>
                
                <li><strong ><span >Giỏ hàng</span></strong></li>
                
            </ul>
        </div>
    </div>
</div>
</section> 
<div class="container bg_white">
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="page_title page__  margin-top-20 margin-bottom-20">
            <h1 class="title_page_h1"><span>Giỏ hàng</span></h1>
        </div>
    </div>
</div>
</div>

<section class="main-cart-page main-container col1-layout">
	<div class="main container hidden-xs hidden-sm bg_white">

		<div class="col-main cart_desktop_page cart-page"><div class="cart page_cart hidden-xs"><form action="/cart" method="post" novalidate="" class="margin-bottom-0"><div class="bg-scroll"><div class="cart-thead"><div style="width: 45%" class="a-left">Sản phẩm</div><div style="width: 25%" class="a-center"><span class="nobr">Giá</span></div><div style="width: 14%" class="a-center">Số lượng</div><div style="width: 16%" class="a-right">Tổng tiền</div></div><div class="cart-tbody"><div class="item-cart productid-15567687"><div style="width: 10%" class="image"><a class="product-image" title="Giày Converse Star 70 Wordmark Wool One Star '74 Camo - Xanh rêu" href="/giay-converse-one-star-74-camo"><img width="75" height="auto" alt="Giày Converse Star 70 Wordmark Wool One Star '74 Camo - Xanh rêu" src="//bizweb.dktcdn.net/thumb/compact/100/286/794/products/20min833641c2cb07436482b58a095.jpg"></a></div><div style="width: 35%" class="a-left"><h3 class="product-name"> <a class="text2line" href="/giay-converse-one-star-74-camo">Giày Converse Star 70 Wordmark Wool One Star '74 Camo</a> </h3><span class="variant-title">Xanh rêu</span><a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="15567687"><span><i class="fa fa-times"></i> Xoá</span></a></div><div style="width: 26%" class="a-center"><span class="item-price"> <span class="price">500.000₫/Kg</span></span></div><div style="width: 14%" class="a-center"><div class="input_qty_pr"><input class="variantID" type="hidden" name="variantId" value="15567687"><input type="text" maxlength="12" onkeypress="validate(event)" min="0" class="input-text number-sidebar input_pop input_pop qtyItem15567687" id="qtyItem15567687" name="Lines" size="4" value="1"><button onclick="var result = document.getElementById('qtyItem15567687'); var qtyItem15567687 = result.value; if( !isNaN( qtyItem15567687 )) result.value++;return false;" class="increase_pop items-count btn-plus" type="button"><i class="fa fa-caret-up"></i></button><button onclick="var result = document.getElementById('qtyItem15567687'); var qtyItem15567687 = result.value; if( !isNaN( qtyItem15567687 ) &amp;&amp; qtyItem15567687 > 1 ) result.value--;return false;" disabled="" class="reduced_pop items-count btn-minus" type="button"><i class="fa fa-caret-down"></i></button></div></div><div style="width: 15%" class="a-right"><span class="cart-price"> <span class="price">500.000₫</span> </span></div><div style="width: 5%" class="a-center"></div></div><div class="item-cart productid-15567673"><div style="width: 10%" class="image"><a class="product-image" title="Chuck Taylor All Star Converse Wordmark - Xanh" href="/giay-converse-cao-cap"><img width="75" height="auto" alt="Chuck Taylor All Star Converse Wordmark - Xanh" src="//bizweb.dktcdn.net/thumb/compact/100/286/794/products/1min.jpg"></a></div><div style="width: 35%" class="a-left"><h3 class="product-name"> <a class="text2line" href="/giay-converse-cao-cap">Chuck Taylor All Star Converse Wordmark</a> </h3><span class="variant-title">Xanh</span><a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="15567673"><span><i class="fa fa-times"></i> Xoá</span></a></div><div style="width: 26%" class="a-center"><span class="item-price"> <span class="price">450.000₫/Kg</span></span></div><div style="width: 14%" class="a-center"><div class="input_qty_pr"><input class="variantID" type="hidden" name="variantId" value="15567673"><input type="text" maxlength="12" onkeypress="validate(event)" min="0" class="input-text number-sidebar input_pop input_pop qtyItem15567673" id="qtyItem15567673" name="Lines" size="4" value="1"><button onclick="var result = document.getElementById('qtyItem15567673'); var qtyItem15567673 = result.value; if( !isNaN( qtyItem15567673 )) result.value++;return false;" class="increase_pop items-count btn-plus" type="button"><i class="fa fa-caret-up"></i></button><button onclick="var result = document.getElementById('qtyItem15567673'); var qtyItem15567673 = result.value; if( !isNaN( qtyItem15567673 ) &amp;&amp; qtyItem15567673 > 1 ) result.value--;return false;" disabled="" class="reduced_pop items-count btn-minus" type="button"><i class="fa fa-caret-down"></i></button></div></div><div style="width: 15%" class="a-right"><span class="cart-price"> <span class="price">450.000₫</span> </span></div><div style="width: 5%" class="a-center"></div></div></div></div></form><div class="cart-collaterals cart_submit row"><div class="totals col-sm-12 col-md-12 col-xs-12"><div class="totals"><div class="inner"><div class="fot_totals shopping-cart-table-total col-lg-6 col-md-6 col-sm-6 col-lg-offset-6 col-md-offset-6 col-sm-offset-6"><div class="total_price"><span class="total_text"></span><span class="total_p">Tổng tiền thanh toán: <span class="totals_price price">950.000₫</span></span></div></div></div></div></div></div><div class="checkout_button margin-bottom-50"><button class="btn btn-primary button btn-proceed-checkout f-right" title="Tiến hành đặt hàng" type="button" onclick="window.location.href='thanhtoan'">
        <span>Tiến hành thanh toán</span></button><button class="btn btn-white f-right" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='/collections/all'"><span>Tiếp tục mua hàng</span></button></div></div></div>

	</div>
	<div class="cart-mobile hidden-md hidden-lg container">
		<form action="giohang" method="post" novalidate="" class="margin-bottom-0">
			<div class="header-cart" style="background:#fff;">
				
				
				
			</div>

			<div class="header-cart-content" style="background:#fff;"><div class="cart_page_mobile content-product-list"><div class="item-product item-mobile-cart item productid-15567687 "><div class="item-product-cart-mobile"><a href="/giay-converse-one-star-74-camo">	</a><a class="product-images1" href="/giay-converse-one-star-74-camo" title="Giày Converse Star 70 Wordmark Wool One Star '74 Camo - Xanh rêu"><img width="80" height="150" alt="" src="//bizweb.dktcdn.net/thumb/small/100/286/794/products/20min833641c2cb07436482b58a095.jpg"></a></div><div class="title-product-cart-mobile"><h3><a class="text2line" href="/giay-converse-one-star-74-camo" title="Giày Converse Star 70 Wordmark Wool One Star '74 Camo - Xanh rêu">Giày Converse Star 70 Wordmark Wool One Star '74 Camo - Xanh rêu</a></h3><p>Giá: <span>500.000₫</span></p></div><div class="select-item-qty-mobile"><div class="txt_center in_put check_"><input class="variantID" type="hidden" name="variantId" value="15567687"><button onclick="var result = document.getElementById('qtyMobile15567687'); var qtyMobile15567687 = result.value; if( !isNaN( qtyMobile15567687 ) &amp;&amp; qtyMobile15567687 > 1 ) result.value--;return false;" class="reduced items-count btn-minus" type="button">–</button><input type="number" maxlength="12" min="1" class="input-text mobile_input number-sidebar qtyMobile15567687" id="qtyMobile15567687" name="Lines" size="4" value="1"><button onclick="var result = document.getElementById('qtyMobile15567687'); var qtyMobile15567687 = result.value; if( !isNaN( qtyMobile15567687 )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button></div><a class="button remove-item remove-item-cart" href="javascript:;" data-id="15567687">Xoá</a></div></div><div class="item-product item-mobile-cart item productid-15567673 "><div class="item-product-cart-mobile"><a href="/giay-converse-cao-cap">	</a><a class="product-images1" href="/giay-converse-cao-cap" title="Chuck Taylor All Star Converse Wordmark - Xanh"><img width="80" height="150" alt="" src="//bizweb.dktcdn.net/thumb/small/100/286/794/products/1min.jpg"></a></div><div class="title-product-cart-mobile"><h3><a class="text2line" href="/giay-converse-cao-cap" title="Chuck Taylor All Star Converse Wordmark - Xanh">Chuck Taylor All Star Converse Wordmark - Xanh</a></h3><p>Giá: <span>450.000₫</span></p></div><div class="select-item-qty-mobile"><div class="txt_center in_put check_"><input class="variantID" type="hidden" name="variantId" value="15567673"><button onclick="var result = document.getElementById('qtyMobile15567673'); var qtyMobile15567673 = result.value; if( !isNaN( qtyMobile15567673 ) &amp;&amp; qtyMobile15567673 > 1 ) result.value--;return false;" class="reduced items-count btn-minus" type="button">–</button><input type="number" maxlength="12" min="1" class="input-text mobile_input number-sidebar qtyMobile15567673" id="qtyMobile15567673" name="Lines" size="4" value="1"><button onclick="var result = document.getElementById('qtyMobile15567673'); var qtyMobile15567673 = result.value; if( !isNaN( qtyMobile15567673 )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button></div><a class="button remove-item remove-item-cart" href="javascript:;" data-id="15567673">Xoá</a></div></div></div><div class="header-cart-price" style=""><div class="title-cart a-center"><span class="total_mobile a-center">Tổng tiền: <span class=" totals_price_mobile">950.000₫</span><span></span></span></div><div class="checkout"><button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button" onclick="window.location.href='thanhtoan'"><span>
            Tiến hành thanh toán</span></button><button class="btn btn-white contin" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='/collections/all'"><span>Tiếp tục mua hàng</span></button></div></div></div>

		</form>

	</div>

</section>

@endsection


    <!-- Bizweb javascript -->
    <script>
window.Bizweb||(window.Bizweb={}),Bizweb.mediaDomainName="//bizweb.dktcdn.net/",Bizweb.each=function(a,b){for(var c=0;c<a.length;c++)b(a[c],c)},Bizweb.getClass=function(a){return Object.prototype.toString.call(a).slice(8,-1)},Bizweb.map=function(a,b){for(var c=[],d=0;d<a.length;d++)c.push(b(a[d],d));return c},Bizweb.arrayContains=function(a,b){for(var c=0;c<a.length;c++)if(a[c]==b)return!0;return!1},Bizweb.distinct=function(a){for(var b=[],c=0;c<a.length;c++)Bizweb.arrayContains(b,a[c])||b.push(a[c]);return b},Bizweb.getUrlParameter=function(a){var b=RegExp("[?&]"+a+"=([^&]*)").exec(window.location.search);return b&&decodeURIComponent(b[1].replace(/\+/g," "))},Bizweb.uniq=function(a){for(var b=[],c=0;c<a.length;c++)Bizweb.arrayIncludes(b,a[c])||b.push(a[c]);return b},Bizweb.arrayIncludes=function(a,b){for(var c=0;c<a.length;c++)if(a[c]==b)return!0;return!1},Bizweb.Product=function(){function a(a){if("undefined"!=typeof a)for(property in a)this[property]=a[property]}return a.prototype.optionNames=function(){return"Array"==Bizweb.getClass(this.options)?this.options:[]},a.prototype.optionValues=function(a){if("undefined"==typeof this.variants)return null;var b=Bizweb.map(this.variants,function(b){var c="option"+(a+1);return"undefined"==typeof b[c]?null:b[c]});return null==b[0]?null:Bizweb.distinct(b)},a.prototype.getVariant=function(a){var b=null;return a.length!=this.options.length?null:(Bizweb.each(this.variants,function(c){for(var d=!0,e=0;e<a.length;e++){var f="option"+(e+1);c[f]!=a[e]&&(d=!1)}if(d)return void(b=c)}),b)},a.prototype.getVariantById=function(a){for(var b=0;b<this.variants.length;b++){var c=this.variants[b];if(c.id==a)return c}return null},a.name="Product",a}(),Bizweb.money_format=" VND",Bizweb.formatMoney=function(a,b){function f(a,b,c,d){if("undefined"==typeof b&&(b=2),"undefined"==typeof c&&(c="."),"undefined"==typeof d&&(d=","),"undefined"==typeof a||null==a)return 0;a=a.toFixed(b);var e=a.split("."),f=e[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1"+c),g=e[1]?d+e[1]:"";return f+g}"string"==typeof a&&(a=a.replace(/\./g,""),a=a.replace(/\,/g,""));var c="",d=/\{\{\s*(\w+)\s*\}\}/,e=b||this.money_format;switch(e.match(d)[1]){case"amount":c=f(a,2);break;case"amount_no_decimals":c=f(a,0);break;case"amount_with_comma_separator":c=f(a,2,".",",");break;case"amount_no_decimals_with_comma_separator":c=f(a,0,".",",")}return e.replace(d,c)},Bizweb.OptionSelectors=function(){function a(a,b){return this.selectorDivClass="selector-wrapper",this.selectorClass="single-option-selector",this.variantIdFieldIdSuffix="-variant-id",this.variantIdField=null,this.selectors=[],this.domIdPrefix=a,this.product=new Bizweb.Product(b.product),"undefined"!=typeof b.onVariantSelected?this.onVariantSelected=b.onVariantSelected:this.onVariantSelected=function(){},this.replaceSelector(a),this.initDropdown(),!0}return a.prototype.replaceSelector=function(a){var b=document.getElementById(a),c=b.parentNode;Bizweb.each(this.buildSelectors(),function(a){c.insertBefore(a,b)}),b.style.display="none",this.variantIdField=b},a.prototype.buildSelectors=function(){for(var a=0;a<this.product.optionNames().length;a++){var b=new Bizweb.SingleOptionSelector(this,a,this.product.optionNames()[a],this.product.optionValues(a));b.element.disabled=!1,this.selectors.push(b)}var c=this.selectorDivClass,d=this.product.optionNames(),e=Bizweb.map(this.selectors,function(a){var b=document.createElement("div");if(b.setAttribute("class",c),d.length>1){var e=document.createElement("label");e.htmlFor=a.element.id,e.innerHTML=a.name,b.appendChild(e)}return b.appendChild(a.element),b});return e},a.prototype.initDropdown=function(){var a={initialLoad:!0},b=this.selectVariantFromDropdown(a);if(!b){var c=this;setTimeout(function(){c.selectVariantFromParams(a)||c.selectors[0].element.onchange(a)})}},a.prototype.selectVariantFromDropdown=function(a){var b=document.getElementById(this.domIdPrefix).querySelector("[selected]");return!!b&&this.selectVariant(b.value,a)},a.prototype.selectVariantFromParams=function(a){var b=Bizweb.getUrlParameter("variantid");return null==b&&(b=Bizweb.getUrlParameter("variantId")),this.selectVariant(b,a)},a.prototype.selectVariant=function(a,b){var c=this.product.getVariantById(a);if(null==c)return!1;for(var d=0;d<this.selectors.length;d++){var e=this.selectors[d].element,f=e.getAttribute("data-option"),g=c[f];null!=g&&this.optionExistInSelect(e,g)&&(e.value=g)}return"undefined"!=typeof jQuery?jQuery(this.selectors[0].element).trigger("change",b):this.selectors[0].element.onchange(b),!0},a.prototype.optionExistInSelect=function(a,b){for(var c=0;c<a.options.length;c++)if(a.options[c].value==b)return!0},a.prototype.updateSelectors=function(a,b){var c=this.selectedValues(),d=this.product.getVariant(c);d?(this.variantIdField.disabled=!1,this.variantIdField.value=d.id):this.variantIdField.disabled=!0,this.onVariantSelected(d,this,b),null!=this.historyState&&this.historyState.onVariantChange(d,this,b)},a.prototype.selectedValues=function(){for(var a=[],b=0;b<this.selectors.length;b++){var c=this.selectors[b].element.value;a.push(c)}return a},a.name="OptionSelectors",a}(),Bizweb.SingleOptionSelector=function(a,b,c,d){this.multiSelector=a,this.values=d,this.index=b,this.name=c,this.element=document.createElement("select");for(var e=0;e<d.length;e++){var f=document.createElement("option");f.value=d[e],f.innerHTML=d[e],this.element.appendChild(f)}return this.element.setAttribute("class",this.multiSelector.selectorClass),this.element.setAttribute("data-option","option"+(b+1)),this.element.id=a.domIdPrefix+"-option-"+b,this.element.onchange=function(c,d){d=d||{},a.updateSelectors(b,d)},!0},Bizweb.Image={preload:function(a,b){for(var c=0;c<a.length;c++){var d=a[c];this.loadImage(this.getSizedImageUrl(d,b))}},loadImage:function(a){(new Image).src=a},switchImage:function(a,b,c){if(a&&b){var d=this.imageSize(b.src),e=this.getSizedImageUrl(a.src,d);c?c(e,a,b):b.src=e}},imageSize:function(a){var b=a.match(/thumb\/(1024x1024|2048x2048|pico|icon|thumb|small|compact|medium|large|grande)\//);return null!=b?b[1]:null},getSizedImageUrl:function(a,b){if(null==b)return a;if("master"==b)return this.removeProtocol(a);var c=a.match(/\.(jpg|jpeg|gif|png|bmp|bitmap|tiff|tif)(\?v=\d+)?$/i);if(null!=c){var d=Bizweb.mediaDomainName+"thumb/"+b+"/";return this.removeProtocol(a).replace(Bizweb.mediaDomainName,d).split("?")[0]}return null},removeProtocol:function(a){return a.replace(/http(s)?:/,"")}};
function floatToString(t, r) {
var e = t.toFixed(r).toString();
return e.match(/^\.\d+/) ? "0" + e : e
}

function attributeToString(t) {
    return "string" != typeof t && (t += "", "undefined" === t && (t = "")), jQuery.trim(t)
}

"undefined" == typeof Bizweb && (Bizweb = {});

Bizweb.mediaDomainName = "//bizweb.dktcdn.net/";

Bizweb.money_format = "$", Bizweb.onError = function (XMLHttpRequest, textStatus) {
var data = eval("(" + XMLHttpRequest.responseText + ")");
alert(data.message ? data.message + "(" + data.status + "): " + data.description : "Error : " + Bizweb.fullMessagesFromErrors(data).join("; ") + ".")
}, Bizweb.fullMessagesFromErrors = function (t) {
    var r = [];
    return jQuery.each(t, function (t, e) {
        jQuery.each(e, function (e, o) {
            r.push(t + " " + o)
        })
    }), r
}, Bizweb.onCartUpdate = function (t) {
    alert("There are now " + t.item_count + " items in the cart.")
}, Bizweb.onCartShippingRatesUpdate = function (t, r) {
    var e = "";
    r.zip && (e += r.zip + ", "), r.province && (e += r.province + ", "), e += r.country, alert("There are " + t.length + " shipping rates available for " + e + ", starting at " + Bizweb.formatMoney(t[0].price) + ".")
}, Bizweb.onItemAdded = function (t) {
    alert(t.title + " was added to your shopping cart.")
}, Bizweb.onProduct = function (t) {
    alert("Received everything we ever wanted to know about " + t.title)
}, Bizweb.formatMoney = function (amount, moneyFormat) {
    function getDefault(value, defaultValue) {
        if (typeof value == "undefined")
            return defaultValue;

        return value;
    }

    function formatMoney(amount, decimal, thousandSeperate, decimalSeperate) {
        decimal = getDefault(decimal, 2);
        thousandSeperate = getDefault(thousandSeperate, ",");
        decimalSeperate = getDefault(decimalSeperate, ".");

        if (isNaN(amount) || null == amount)
            return 0;

        amount = amount.toFixed(decimal);

        var amountParts = amount.split(".");
        var integer = amountParts[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + thousandSeperate);
        var decimal = amountParts[1] ? decimalSeperate + amountParts[1] : "";

        return integer + decimal;
    }

    if (typeof amount == "string") {
        amount = amount.replace(".", "");
        amount = amount.replace(",", "");
    }

    var result = "";
    var moneyRegex = /\{\{\s*(\w+)\s*\}\}/;

    moneyFormat = moneyFormat || this.money_format;
    switch (moneyFormat.match(moneyRegex)[1]) {
        case "amount":
            result = formatMoney(amount, 2);
            break;
        case "amount_no_decimals":
            result = formatMoney(amount, 0);
            break;
        case "amount_with_comma_separator":
            result = formatMoney(amount, 2, ".", ",");
            break;
        case "amount_no_decimals_with_comma_separator":
            result = formatMoney(amount, 0, ".", ",")
    }

    return moneyFormat.replace(moneyRegex, result)
}, Bizweb.resizeImage = function (t, r) {
    try {
        if ("original" == r)
            return t;

        var thumbDomain = Bizweb.mediaDomainName + "thumb/" + r + "/";
        return t.replace(Bizweb.mediaDomainName, thumbDomain).split('?')[0];
    } catch (o) {
        return t
    }
}, Bizweb.addItem = function (t, r, e) {
    var r = r || 1,
        o = {
            type: "POST",
            url: "/cart/add.js",
            data: "quantity=" + r + "&VariantId=" + t,
            dataType: "json",
            success: function (t) {
                "function" == typeof e ? e(t) : Bizweb.onItemAdded(t)
            },
            error: function (t, r) {
                Bizweb.onError(t, r)
            }
        };
    jQuery.ajax(o)
}, Bizweb.addItemFromForm = function (t, r) {
    var e = {
        type: "POST",
        url: "/cart/add.js",
        data: jQuery("#" + t).serialize(),
        dataType: "json",
        success: function (t) {
            "function" == typeof r ? r(t) : Bizweb.onItemAdded(t)
        },
        error: function (t, r) {
            Bizweb.onError(t, r)
        }
    };
    jQuery.ajax(e)
}, Bizweb.getCart = function (t) {
    jQuery.getJSON("/cart.js", function (r) {
        "function" == typeof t ? t(r) : Bizweb.onCartUpdate(r)
    })
}, Bizweb.pollForCartShippingRatesForDestination = function (t, r, e) {
    e = e || Bizweb.onError;
    var o = function () {
        jQuery.ajax("/cart/async_shipping_rates", {
            dataType: "json",
            success: function (e, n, a) {
                200 === a.status ? "function" == typeof r ? r(e.shipping_rates, t) : Bizweb.onCartShippingRatesUpdate(e.shipping_rates, t) : setTimeout(o, 500)
            },
            error: e
        })
    };
    return o
}, Bizweb.getCartShippingRatesForDestination = function (t, r, e) {
    e = e || Bizweb.onError;
    var o = {
        type: "POST",
        url: "/cart/prepare_shipping_rates",
        data: Bizweb.param({
            shipping_address: t
        }),
        success: Bizweb.pollForCartShippingRatesForDestination(t, r, e),
        error: e
    };
    jQuery.ajax(o)
}, Bizweb.getProduct = function (t, r) {
    jQuery.getJSON("/products/" + t + ".js", function (t) {
        "function" == typeof r ? r(t) : Bizweb.onProduct(t)
    })
}, Bizweb.changeItem = function (t, r, e) {
    var o = {
        type: "POST",
        url: "/cart/change.js",
        data: "quantity=" + r + "&variantId=" + t,
        dataType: "json",
        success: function (t) {
            "function" == typeof e ? e(t) : Bizweb.onCartUpdate(t)
        },
        error: function (t, r) {
            Bizweb.onError(t, r)
        }
    };
    jQuery.ajax(o)
}, Bizweb.removeItem = function (t, r) {
    var e = {
        type: "POST",
        url: "/cart/change.js",
        data: "quantity=0&variantId=" + t,
        dataType: "json",
        success: function (t) {
            "function" == typeof r ? r(t) : Bizweb.onCartUpdate(t)
        },
        error: function (t, r) {
            Bizweb.onError(t, r)
        }
    };
    jQuery.ajax(e)
}, Bizweb.clear = function (t) {
    var r = {
        type: "POST",
        url: "/cart/clear.js",
        data: "",
        dataType: "json",
        success: function (r) {
            "function" == typeof t ? t(r) : Bizweb.onCartUpdate(r)
        },
        error: function (t, r) {
            Bizweb.onError(t, r)
        }
    };
    jQuery.ajax(r)
}, Bizweb.updateCartFromForm = function (t, r) {
    var e = {
        type: "POST",
        url: "/cart/update.js",
        data: jQuery("#" + t).serialize(),
        dataType: "json",
        success: function (t) {
            "function" == typeof r ? r(t) : Bizweb.onCartUpdate(t)
        },
        error: function (t, r) {
            Bizweb.onError(t, r)
        }
    };
    jQuery.ajax(e)
}, Bizweb.updateCartAttributes = function (t, r) {
    var e = "";
    jQuery.isArray(t) ? jQuery.each(t, function (t, r) {
        var o = attributeToString(r.key);
        "" !== o && (e += "attributes[" + o + "]=" + attributeToString(r.value) + "&")
    }) : "object" == typeof t && null !== t && jQuery.each(t, function (t, r) {
        e += "attributes[" + attributeToString(t) + "]=" + attributeToString(r) + "&"
    });
    var o = {
        type: "POST",
        url: "/cart/update.js",
        data: e,
        dataType: "json",
        success: function (t) {
            "function" == typeof r ? r(t) : Bizweb.onCartUpdate(t)
        },
        error: function (t, r) {
            Bizweb.onError(t, r)
        }
    };
    jQuery.ajax(o)
}, Bizweb.updateCartNote = function (t, r) {
    var e = {
        type: "POST",
        url: "/cart/update.js",
        data: "note=" + attributeToString(t),
        dataType: "json",
        success: function (t) {
            "function" == typeof r ? r(t) : Bizweb.onCartUpdate(t)
        },
        error: function (t, r) {
            Bizweb.onError(t, r)
        }
    };
    jQuery.ajax(e)
}, jQuery.fn.jquery >= "1.4" ? Bizweb.param = jQuery.param : (Bizweb.param = function (t) {
    var r = [],
        e = function (t, e) {
            e = jQuery.isFunction(e) ? e() : e, r[r.length] = encodeURIComponent(t) + "=" + encodeURIComponent(e)
        };
    if (jQuery.isArray(t) || t.jquery) jQuery.each(t, function () {
        e(this.name, this.value)
    });
    else
        for (var o in t) Bizweb.buildParams(o, t[o], e);
    return r.join("&").replace(/%20/g, "+")
}, Bizweb.buildParams = function (t, r, e) {
    jQuery.isArray(r) && r.length ? jQuery.each(r, function (r, o) {
        rbracket.test(t) ? e(t, o) : Bizweb.buildParams(t + "[" + ("object" == typeof o || jQuery.isArray(o) ? r : "") + "]", o, e)
    }) : null != r && "object" == typeof r ? Bizweb.isEmptyObject(r) ? e(t, "") : jQuery.each(r, function (r, o) {
        Bizweb.buildParams(t + "[" + r + "]", o, e)
    }) : e(t, r)
}, Bizweb.isEmptyObject = function (t) {
    for (var r in t) return !1;
    return !0
});
</script>

    <!-- Add to cart -->	
    <script>
/**
* Look under your chair! console.log FOR EVERYONE!
*
* @see http://paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
*/
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());

/**
* Page-specific call-backs
* Called after dom has loaded.
*/
var GLOBAL = {
    common : {
        init: function(){
            $('.add_to_cart').bind( 'click', addToCart );
        }
    },

    templateIndex : {
        init: function(){

        }
    },

    templateProduct : {
        init: function(){

        }
    },

    templateCart : {
        init: function(){

        }
    }

}
var UTIL = {
    fire : function(func,funcname, args){
        var namespace = GLOBAL;
        funcname = (funcname === undefined) ? 'init' : funcname;
        if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function'){
            namespace[func][funcname](args);
        }
    },

    loadEvents : function(){
        var bodyId = document.body.id;

        // hit up common first.
        UTIL.fire('common');

        // do all the classes too.
        $.each(document.body.className.split(/\s+/),function(i,classnm){
            UTIL.fire(classnm);
            UTIL.fire(classnm,bodyId);
        });
    }

};
$(document).ready(UTIL.loadEvents);
/**
* Ajaxy add-to-cart
*/
Number.prototype.formatMoney = function(c, d, t){
    var n = this, 
        c = isNaN(c = Math.abs(c)) ? 2 : c, 
        d = d == undefined ? "." : d, 
        t = t == undefined ? "." : t, 
        s = n < 0 ? "-" : "", 
        i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};
function addToCart(e){
    if (typeof e !== 'undefined') e.preventDefault();
    var $this = $(this);
    var form = $this.parents('form');	

    $.ajax({
        type: 'POST',
        url: '/cart/add.js',
        async: false,
        data: form.serialize(),
        dataType: 'json',
        error: addToCartFail,
        beforeSend: function() { 

        },
        success: addToCartSuccess,
        cache: false
    });
}
function addToCartSuccess (jqXHR, textStatus, errorThrown){

    $.ajax({
        type: 'GET',
        url: '/cart.js',
        async: false,
        cache: false,
        dataType: 'json',
        success: function (cart){
            awe_hidePopup('.loading');
            Bizweb.updateCartFromForm(cart, '.top-cart-content .mini-products-list');
            Bizweb.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
        }
    });



    var url_product = jqXHR['url'];
    var class_id = jqXHR['product_id'];
    var name = jqXHR['name'];
    var textDisplay = ('<i style="margin-right:5px; color:red; font-size:13px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm vào giỏ hàng');
    var id = jqXHR['variant_id'];
    var dataList = $(".item-name a").map(function() {
        var plus = $(this).text();
        return plus;
    }).get();
    $('.title-popup-cart .cart-popup-name').html('<a href="'+ url_product +'" title="'+name+'">'+ name + '</a> ');
    var nameid = dataList,
        found = $.inArray(name, nameid);
    var textfind = found;

    var src = '';
    if(Bizweb.resizeImage(jqXHR['image'], 'small') == null || Bizweb.resizeImage(jqXHR['image'], 'small') =="null" || Bizweb.resizeImage(jqXHR['image'], 'small') ==''){
        src= 'http://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif'
    }
    else
    {
        src=  Bizweb.resizeImage(jqXHR['image'], 'small')
    }

    $(".item-info > p:contains("+id+")").html('<span class="add_sus" style="color:#fe526a;"><i style="margin-right:5px; color:#fe526a; font-size:14px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm</span>');





    var windowW = $(window).width();
    if(windowW > 768){				
        $('#popup-cart').modal();
    }else{
        $('#myModal').html('');
        var $popupMobile = '<div class="modal-dialog"><div class="modal-content"><div class="modal-header">'
        + '<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative; z-index: 9;"><span aria-hidden="true">×</span></button>'
        + '<h4 class="modal-title"><span><i class="fa fa-check" aria-hidden="true"></i></span>Thêm vào giỏ hàng thành công</h4></div>'
        + '<div class="modal-body"><div class="media"><div class="media-left"><div class="thumb-1x1">'
        + '<img width="70px" src="'+ src +'" alt="'+ jqXHR['title'] +'"></div></div>'
        + '<div class="media-body"><div class="product-title">'+ jqXHR['name'] +'</div>'
        + '<div class="product-new-price"><span>' + (jqXHR['price']).formatMoney(0) + ' đ</span></div></div></div>'
        + '<button class="btn btn-block btn-outline-red" data-dismiss="modal">Tiếp tục mua hàng</button>'
        + '<a href="/checkout" class="btn btn-block btn-red">Tiến hành thanh toán »</a></div></div></div>';
        $('#myModal').html($popupMobile);
        $('#myModal').modal();
        clearTimeout($('#myModal').data('hideInterval'));
        $('#myModal').data('hideInterval', setTimeout(function(){
            $('#myModal').modal('hide');
        }, 5000));
    }
}
function addToCartFail(jqXHR, textStatus, errorThrown){
    var response = $.parseJSON(jqXHR.responseText);
    var $info = '<div class="error">'+ response.description +'</div>';
}
$(document).on('click', ".remove-item-cart", function () {
    var variantId = $(this).attr('data-id');
    removeItemCart(variantId);
});
$(document).on('click', ".items-count", function () {
    var thisBtn = $(this);
    var variantId = $(this).parent().find('.variantID').val();
    var qty =  $(this).parent().children('.number-sidebar').val();
    if (qty == '0') {
        $(this).parent().children('.number-sidebar').val(1);
    }
    updateQuantity(qty, variantId);
});
$(document).on('change', ".number-sidebar", function () {
    var variantId = $(this).parent().children('.variantID').val();
    var qty =  $(this).val();
    updateQuantity(qty, variantId);
});
function updateQuantity (qty, variantId){
    var variantIdUpdate = variantId;
    $.ajax({
        type: "POST",
        url: "/cart/change.js",
        data: {"quantity": qty, "variantId": variantId},
        dataType: "json",
        success: function (cart, variantId) {
            Bizweb.onCartUpdateClick(cart, variantIdUpdate);
        },
        error: function (qty, variantId) {
            Bizweb.onError(qty, variantId)
        }
    })
}
function removeItemCart (variantId){
    var variantIdRemove = variantId;
    $.ajax({
        type: "POST",
        url: "/cart/change.js",
        data: {"quantity": 0, "variantId": variantId},
        dataType: "json",
        success: function (cart, variantId) {
            Bizweb.onCartRemoveClick(cart, variantIdRemove);
            $('.productid-'+variantIdRemove).remove();
            if($('.tbody-popup>div').length == '0' ){
                $('#popup-cart').modal('hide');
            }
            if($('.list-item-cart>li').length == '0' ){
                $('.mini-products-list').html('<div class="no-item"><p>Không có sản phẩm nào trong giỏ hàng.</p></div>');
            }
            if($('.cart-tbody>div').length == '0' ){
                $('.bg-cart-page').remove();
                $('.bg-cart-page-mobile').remove();
                jQuery('<div class="bg-cart-page" style="min-height: auto"><p>Không có sản phẩm nào trong giỏ hàng. Quay lại <a href="/">cửa hàng</a> để tiếp tục mua sắm.</p></div>').appendTo('.cart');
            }
        },
        error: function (variantId, r) {
            Bizweb.onError(variantId, r)
        }
    })
}
		
    <div id="popup-cart" class="modal fade" role="dialog">
<div id="popup-cart-desktop" class="clearfix">
    <div class="title-popup-cart">
        Bạn đã thêm <span class="cart-popup-name"></span> vào giỏ hàng
    </div>
    <div class="title-quantity-popup left_" onclick="window.location.href='/cart';">
        Giỏ hàng của bạn <span class="hidden count_item_pr"></span>
    </div>
    
    <div class="content-popup-cart">
        <div class="thead-popup">
            <div style="width: 49.75%;" class="text-left">Sản phẩm</div>
            <div style="width: 15%;" class="text-center">Giá</div>
            <div style="width: 20%;" class="text-center">Số lượng</div>
            <div style="width: 15%;" class="text-right">Tổng tiền</div>
        </div>
        <div class="tbody-popup scrollbar-dynamic">
        </div>
        <div class="tfoot-popup">
            <div class="tfoot-popup-1 clearfix">
                <div class="title-quantity-popup popup-total right_ bottom_">
                    <p class="tongtien">Tổng số thành tiền: <span class="total-price"></span></p>
                </div>
                <div class="pull-left popup-ship">
                    <p class="hidden">Miễn phí giao hàng toàn quốc</p>
                    <a class="hidden button btn-continue" title="Tiếp tục mua hàng" onclick="$('#popup-cart').modal('hide');"><span><span>Tiếp tục mua hàng</span></span></a>
                </div>
                <div class="pull-right popup-total">
                    <p class="hidden">Phí vận chuyển: <span class="vanchuyen">Tính khi thanh toán</span></p>
                    <p class="tongtien hidden">Tổng tiền: <span class="total-price"></span></p>
                    <a class="button btn-proceed-checkout" title="Tiến hành đặt hàng" href="thanhtoan"><span>Tiến hành thanh toán</span></a>
                </div>
            </div>
            <div class="tfoot-popup-2 clearfix">
            </div>
        </div>
    </div>
    <a title="Close" class="quickview-close close-window" href="javascript:;" onclick="$('#popup-cart').modal('hide');"><i class="fa  fa-close"></i></a>
</div>

</div>
<div id="myModal" class="modal fade" role="dialog">
</div>

    <!-- Quick view -->
    

<div id="quick-view-product" class="quickview-product" style="display:none;">
<div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
<div class="quick-view-product"></div>
<div id="quickview-modal" style="display:none;">
    <div class="block-quickview primary_block row">

        <div class="product-left-column col-xs-12 col-sm-5 col-md-5 col-lg-5">
            <div class="clearfix image-block">
                <span class="view_full_size">
                    <a class="img-product" title="" href="#">
                        <img id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/logo.png?1618737291739" alt="quickview"  />
                    </a>
                </span>
                <div class="loading-imgquickview" style="display:none;"></div>
            </div>
            <div class="more-view-wrapper clearfix">
                <div class="thumbs_quickview" id="thumbs_list_quickview">
                    <ul class="product-photo-thumbs quickview-more-views-owlslider" id="thumblist_quickview"></ul>
                </div>
            </div>
        </div>
        <div class="product-center-column product-info product-item col-xs-5 col-sm-7 col-md-7 col-lg-7">
            <div class="head-qv">
                <h3 class="qwp-name">abc</h3>
                <div class="vend-qv">
                    <div class="left_vend">
                        <span class="vendor_"></span>		
                        <span class="line">|</span>
                        Tình trạng: <span class="soluong"></span>
                    </div>

                </div>
            </div>
            <div class="quickview-info">
                
                <div class="reviews_qv">
                    <div class="bizweb-product-reviews-badge" data-id=""></div>
                </div>
                
                <span class="prices">
                    <span class="price"></span>
                    <del class="old-price"></del>
                </span>
            </div>
            <div class="product-description">
                <div class="rte text2line">

                </div>
                
            </div>

            <form action="/cart/add" method="post" enctype="multipart/form-data" class="quick_option variants form-ajaxtocart">
                <span class="price-product-detail hidden" style="opacity: 0;">
                    <span class=""></span>
                </span>
                <select name='variantId' class="hidden" style="display:none"></select>
                <div class="clearfix"></div>
                <div class="quantity_wanted_p">
                    <div class="input_qty_qv">
                        <a class="btn_num num_1 button button_qty" onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv &gt; 1 ) result.value--;return false;" >-</a>
                        <input type="text" id="quantity-detail" name="quantity" value="1" onkeypress='validate(event)' onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')" class="form-control prd_quantity">
                        <a class="btn_num num_2 button button_qty" onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;" >+</a>
                    </div>

                    <div class="button_actions">							
                        <button type="submit" class="btn btn-lg fix_add_to_cart  btn-cart button_cart_buy_enable add_to_cart btn_buy add_to_cart_detail ajax_addtocart" title="Cho vào giỏ hàng">
                            <span class="btn-content">Cho vào giỏ hàng</span>
                        </button>
                    </div>
                </div>
                <div class="total-price" style="display:none">
                    <label>Tổng cộng: </label>
                    <span></span>
                </div>

            </form>

            
            <div class="contacts hidden">
                <span class="block_phone">Gọi ngay: <a title="Gọi ngay: 18005974759" href="tel:18005974759">18005974759</a></span>
            </div>
            
        </div>

    </div>      
    <a title="Close" class="quickview-close close-window" href="javascript:;"><i class="fa   fa-times"></i></a>
</div>    
</div>
<script type="text/javascript">  
Bizweb.doNotTriggerClickOnThumb = false;
function changeImageQuickView(img, selector) {
    var src = $(img).attr("src");
    src = src.replace("_compact", "");
    $(selector).attr("src", src);
}
function validate(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}

/*begin variant image*/
if (variant && variant.featured_image) {

    var originalImage = $("#product-featured-image-quickview");
    var newImage = variant.featured_image;
    var element = originalImage[0];
    Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
        $('#thumblist_quickview img').each(function() {
            var parentThumbImg = $(this).parent();
            var productImage = $(this).parent().data("image");
            if (newImageSizedSrc.includes(productImage)) {
                $(this).parent().trigger('click');
                return false;
            }
        });

    });
    $('#product-featured-image-quickview').attr('src',variant.featured_image.src);
}

};
</script>
<script>
initQuickView();
var product = {};
var currentLinkQuickView = '';
var option1 = '';
var option2 = '';
function setButtonNavQuickview() {
    $("#quickview-nav-button a").hide();
    $("#quickview-nav-button a").attr("data-index", "");
    var listProducts = $(currentLinkQuickView).closest(".slide").find("a.quick-view");
    if(listProducts.length > 0) {
        var currentPosition = 0;
        for(var i = 0; i < listProducts.length; i++) {
            if($(listProducts[i]).data("handle") == $(currentLinkQuickView).data("handle")) {
                currentPosition = i;
                break;
            }
        }
        if(currentPosition < listProducts.length - 1) {
            $("#quickview-nav-button .btn-next-product").show();
            $("#quickview-nav-button .btn-next-product").attr("data-index", currentPosition + 1);
        }
        if(currentPosition > 0) {
            $("#quickview-nav-button .btn-previous-product").show();
            $("#quickview-nav-button .btn-previous-product").attr("data-index", currentPosition - 1);
        }
    }
    $("#quickview-nav-button a").click(function() {
        $("#quickview-nav-button a").hide();
        var indexLink = parseInt($(this).data("index"));
        if(!isNaN(indexLink) && indexLink >= 0) {
            var listProducts = $(currentLinkQuickView).closest(".slide").find("a.quick-view");
            if(listProducts.length > 0 && indexLink < listProducts.length) {
                //$(".quickview-close").trigger("click");
                $(listProducts[indexLink]).trigger("click");
            }
        }
    });
}
function initQuickView(){

    $(document).on("click", "#thumblist_quickview li", function() {		
        changeImageQuickView($(this).find("img:first-child"), ".product-featured-image-quickview");
        $(this).parent().parent().find('li').removeClass('active');
        $(this).addClass('active');
    });	
    $(document).on('click', '.quick-view', function(e) {
        if($(window).width() > 1025){
            e.preventDefault();

            var producthandle = $(this).data("handle");
            currentLinkQuickView = $(this);
            Bizweb.getProduct(producthandle,function(product) {
                var qvhtml = $("#quickview-modal").html();
                $(".quick-view-product").html(qvhtml);
                var quickview= $(".quick-view-product");

                if(product.summary != null && product.summary !=""){
                    var productdes = product.summary.replace(/(&nbsp;|(<([^>]+)>))/ig,'');
                }else{

                    if(product.content != null){
                        var productdes = product.content.replace(/(&nbsp;|(<([^>]+)>))/ig,'');
                    }else{
                        var productdes = "";
                    }
                }
                var featured_image = Bizweb.resizeImage(product.featured_image, "large");
                if(featured_image == null){
                    featured_image = 'http://bizweb.dktcdn.net/thumb/grande/assets/themes_support/noimage.gif';
                }

                // Reset current link quickview and button navigate in Quickview
                setButtonNavQuickview();
                productdes = productdes.split(" ").splice(0,60).join(" ")+"...";	
                if(featured_image != null){


                    quickview.find(".view_full_size img").attr("src",featured_image);

                }


                if(product.price < 1 && product.variants.length < 2){				
                    quickview.find(".price").html('Liên hệ');
                    quickview.find("del").html('');
                    quickview.find("#quick-view-product form").hide();


                    quickview.find(".prices").html('<span class="price h2">Liên hệ</span>');

                    quickview.find(".add_to_cart_detail span").html('Liên hệ');

                }
                else{
                    quickview.find("#quick-view-product form").show();
                    
                    
                    quickview.find(".variants").attr("id", "product-actions-" + product.id);
                    quickview.find(".variants select").attr("id", "product-select-" + product.id);

                    quickview.find(".qwp-name").html('<a class="text2line" href="'+ product.url +'" title="'+product.name+'">'+product.name +'</a>');
                    quickview.find(".reviews_qv .text_revi").html('<a href="'+ product.url +'" title="Đánh giá '+product.name+'"><i class="fa fa-edit"></i>&nbsp;Đánh giá</a>');
                    quickview.find(".bizweb-product-reviews-badge").attr("data-id", product.id);
                    if(product.vendor){
                        quickview.find(".vend-qv .vendor_").append("<span>Thương hiệu: </span>"+product.vendor);
                    }else{
                        quickview.find(".vend-qv .vendor_").append("<span>Thương hiệu: </span>Đang cập nhật");
                    }
                    if(product.available){
                        if (product.variants[0].inventory_management == 'bizweb') {
                            quickview.find(".vend-qv .soluong").html('Còn hàng');
                        }else{
                            quickview.find(".vend-qv .soluong").html('Còn hàng');
                        }
                    }else {
                        quickview.find(".vend-qv .soluong").html('Hết hàng');
                    }


                    if(product.variants[0].sku){
                        quickview.find(".product-sku").append("<b>Mã sản phẩm: </b>"+product.variants[0].sku);
                    }else{
                        quickview.find(".product-sku").append("<b>Mã sản phẩm: </b>Không có");
                    }
                    quickview.find(".product-description .rte").html(productdes);
                    quickview.find(".view-more").attr('href',product.url);

                    if (product.compare_at_price_max > product.price) {
                        
                        
                                                          else {
                                                          quickview.find(".old-price").html("");
                        quickview.find(".price").removeClass("sale-price")
                    }
                    if (!product.available) {

                        $(".quick-view-product form").show();
                        $(".quick-view-product .quantity_wanted_p").show();
                        quickViewVariantsSwatch(product, quickview);

                        quickview.find(".add_to_cart_detail").text("Hết hàng").addClass("disabled").attr("disabled", "disabled");				
                        if(product.variants.length > 1){

                            quickview.find("select, .dec, .inc, .variants label").show();

                        }else{
                            quickview.find("select, .dec, .inc, .variants label").hide();
                        }

                    }
                    else {
                        quickViewVariantsSwatch(product, quickview);
                        $(".quick-view-product .quantity_wanted_p").show();
                        if(product.variants.length > 1){
                            $('#quick-view-product form').show();
                        }else{
                            if(product.price < 1){

                                $('#quick-view-product form').hide();
                            }else{
                                $('#quick-view-product form').show();
                            }
                        }
                    }

                    quickview.find('.more_info_block .page-product-heading li:first, .more_info_block .tab-content section:first').addClass('active');

                    $("#quick-view-product").modal();

                    $(".view_scroll_spacer").removeClass("hidden");


                    loadQuickViewSlider(product, quickview);

                    // Action
                    setTimeout(function(){					   
                        var thumbLargeimg = $('.view_full_size .img-product #product-featured-image-quickview').attr('src');
                        var thumMedium = $('#thumbs_list_quickview .owl-item li').find('img').attr('src');
                        if (thumbLargeimg == thumMedium) {
                            $( "#thumbs_list_quickview .owl-item li" ).first().addClass( "active" );
                        }
                    },2000);

                    //initQuickviewAddToCart();

                    $(".quick-view").fadeIn(500);
                    if ($(".quick-view .total-price").length > 0) {
                        $(".quick-view input[name=quantity]").on("change", updatePricingQuickView)
                    }			
                    updatePricingQuickView();
                    // Setup listeners to add/subtract from the input
                    $(".js-qty__adjust").on("click", function() {
                        var el = $(this),
                            id = el.data("id"),
                            qtySelector = el.siblings(".js-qty__num"),
                            qty = parseInt(qtySelector.val().replace(/\D/g, ''));

                        var qty = validateQty(qty);

                        // Add or subtract from the current quantity
                        if (el.hasClass("js-qty__adjust--plus")) {
                            qty = qty + 1;
                        } else {
                            qty = qty - 1;
                            if (qty <= 1) qty = 1;
                        }

                        // Update the input's number
                        qtySelector.val(qty);
                        updatePricingQuickView();
                    });
                    $(".js-qty__num").on("change", function() {
                        updatePricingQuickView();
                    });
                });



                var numInput = document.querySelector('.quantity_wanted_p input');
                numInput.addEventListener('input', function(){
                    // Let's match only digits.
                    var num = this.value.match(/^\d+$/);
                    if (num === null) {
                        // If we have no match, value will be empty.
                        this.value = "";
                    }		
                    if (num ==0) {
                        // If we have no match, value will be empty.
                        this.value = 1;
                    }	
                }, false)

                return false;
            }
                              });


        }

        function loadQuickViewSlider(n, r) {
            productImage();

            var loadingImgQuickView = $('.loading-imgquickview');
            var s = Bizweb.resizeImage(n.featured_image, "large");

            r.find(".quickview-featured-image").append('<a href="' + n.url + '"><img src="' + s + '" title="' + n.title + '"/><div style="height: 100%; width: 100%; top:0; left:0 z-index: 2000; position: absolute; display: none; background: url(' + window.loading_url + ') 50% 50% no-repeat;"></div></a>');
            if (n.images.length > 1) {
                $('.thumbs_quickview').addClass('thumbs_list_quickview');
                var o = r.find(".more-view-wrapper ul");
                for (i in n.images) {
                    var u = Bizweb.resizeImage(n.images[i], "large");
                    var a = Bizweb.resizeImage(n.images[i], "large");
                    var f = '<li><a href="javascript:void(0)" data-imageid="' + n.id + '"" data-zoom-image="' + u + '" ><img src="' + u + '" alt="Office World" style="max-width:120px; max-height:120px;" /></a></li>';
                    o.append(f)
                }
                o.find("a").click(function() {
                    var t = r.find("#product-featured-image-quickview");
                    if (t.attr("src") != $(this).attr("data-image")) {
                        t.attr("src", $(this).attr("data-image"));
                        loadingImgQuickView.show();
                        t.load(function(t) {
                            loadingImgQuickView.hide();
                            $(this).unbind("load");
                            loadingImgQuickView.hide()
                        })
                    }
                });
                o.owlCarousel({
                    navigation: true,
                    nav: true,
                    navText:false,
                    items: 4,
                    margin:0,
                    itemsDesktop: [1199, 4],
                    itemsDesktopSmall: [979, 3],
                    itemsTablet: [768, 3],
                    itemsTabletSmall: [540, 3],
                    itemsMobile: [360, 3]
                }).css("visibility", "visible")
            } else {  
                $('.thumbs_quickview').removeClass('thumbs_list_quickview');
                r.find(".quickview-more-views").remove();
                r.find(".quickview-more-view-wrapper-jcarousel").remove()
            }
        }
        /*function quickViewVariantsSwatch(t, quickview) {	
                var v = '<input type="hidden" name="id" value="' + t.id + '">';
                quickview.find("form.variants").append(v);
                if (t.variants.length > 1) {	
                    for (var r = 0; r < t.variants.length; r++) {
                        var i = t.variants[r];
                        var s = '<option value="' + i.id + '">' + i.title + "</option>";
                        quickview.find("form.variants > select").append(s)
                    }


                    var ps = "product-select-" + t.id;
                    new Bizweb.OptionSelectors( ps, { 
                        product: t, 
                        onVariantSelected: selectCallbackQuickView
                    });

                    if (t.options.length == 1) {

                        quickview.find(".selector-wrapper:eq(0)").prepend("<label>" + t.options[0].name + "</label>")
                    }

                    var options="";
                    for (var i = 0; i < t.options.length; i++) {
                        options += '<div class="swatch clearfix" data-option-index="' + i + '">';
                        options += '<div class="header">' + t.options[i].name + '</div>';
                        var is_color = false;
                        if (/Color|Colour|Màu/i.test(t.options[i].name)) {
                            is_color = true;
                        }
                        var optionValues = new Array();
                        for (var j = 0; j < t.variants.length; j++) {
                            var variant = t.variants[j];
                            var value = variant.options[i];
                            var valueHandle = awe_convertVietnamese(value);
                            var forText = 'swatch-' + i + '-' + valueHandle;
                            if (optionValues.indexOf(value) < 0) {
                                //not yet inserted
                                options += '<div data-value="' + value + '" class="swatch-element ' + (is_color ? "color " : " ") + valueHandle + (variant.available ? ' available ' : ' soldout ') + '">';

                                if (is_color) {
                                    options += '<div class="tooltip">' + value + '</div>';
                                }
                                options += '<input id="' + forText + '" type="radio" name="option-' + i + '" value="' + value + '" ' + (j == 0 ? ' checked ' : '') + (variant.available ? '' : '') + ' />';

                                if (is_color) {
                                    options += '<label for="' + forText + '" class="'+valueHandle+'" style="background-color: ' + valueHandle + ';"></label>';
                                } else {
                                    options += '<label for="' + forText + '">' + value + '</label>';
                                }
                                options += '</div>';
                                if (variant.available) {									
                                }
                                optionValues.push(value);
                            }
                        }
                        options += '</div>';
                    }


                    quickview.find('form.variants > select').after(options);
                    var chon = [];
                    var qmoney = [];
                    var qimage = [];
                    var qid = [];
                    quickview.find('.swatch :radio').change(function() {
                        var optionIndex = $(this).closest('.swatch').attr('data-option-index');
                        var optionValue = $(this).val();
                        $(this)
                            .closest('form')
                            .find('.single-option-selector')
                            .eq(optionIndex)
                            .val(optionValue)
                            .trigger('change');

                        var variant_id = $('.quickview-product select[name=id]').val();

                        var check = false;
                        for (var i = 0; i < qid.length; i++){
                            if (qid[i] == variant_id){                            
                                var quantity = parseInt($('.quickview-product input[name=quantity]').val());
                                var totalPrice = qmoney[i] * quantity;
                                var gia = Bizweb.formatMoney(qmoney[i], window.money_format); 
                                var totalPriceText = Bizweb.formatMoney(totalPrice, window.money_format);             

                                var totalPriceHtml = $('.quickview-product .price').html();


                                $('.quickview-product .total-price span').html(totalPriceText);
                                $('.quickview-product .price').html(gia);
                                currency();

                                if(qimage[i]){
                                    $('.quickview-product .featured-image img').attr('src',qimage[i]);
                                }


                            }
                        }
                        for (var i = 0; i < chon.length; i++){


                            if (chon[i] == variant_id){             
                                var check = true;
                            }                       
                            else{
                            }
                        }

                        if(check == true){
                            $('.quickview-product .btn-addToCart').attr('disabled','disabled');

                            $(".quickview-product .btn-addToCart").removeAttr("disabled");
                        }

                    });

                    quickview.find("form.variants .selector-wrapper label").each(function(n, r) {
                        $(this).html(t.options[n].name)
                    })
                }
                else {
                    quickview.find("form.variants > select").remove();
                    var q = '<input type="hidden" name="variantId" value="' + t.variants[0].id + '">';
                    quickview.find("form.variants").append(q);
                }
            }*/
        function quickViewVariantsSwatch(t, quickview) {	


            var v = '<input type="hidden" name="id" value="' + t.id + '">';
            quickview.find("form.variants").append(v);
            if (t.variants.length > 1) {	
                for (var r = 0; r < t.variants.length; r++) {
                    var i = t.variants[r];
                    var s = '<option value="' + i.id + '">' + i.title + "</option>";
                    quickview.find("form.variants > select").append(s)
                }


                var ps = "product-select-" + t.id;
                new Bizweb.OptionSelectors( ps, { 
                    product: t, 
                    onVariantSelected: selectCallbackQuickView
                });

                if (t.options.length == 1) {

                    quickview.find(".selector-wrapper:eq(0)").prepend("<label>" + t.options[0].name + "</label>")
                }

                var options="";
                for (var i = 0; i < t.options.length; i++) {
                    options += '<div class="swatch clearfix" data-option-index="' + i + '">';
                    options += '<div class="header">' + t.options[i].name + ': </div>';
                    var is_color = false;
                    if (/Color|Colour|Màu/i.test(t.options[i].name)) {
                        is_color = true;
                    }
                    var optionValues = new Array();
                    for (var j = 0; j < t.variants.length; j++) {
                        var variant = t.variants[j];
                        var value = variant.options[i];
                        var valueHandle = awe_convertVietnamese(value);

                        var forText = 'swatch-' + i + '-' + valueHandle;
                        if (optionValues.indexOf(value) < 0) {
                            //not yet inserted
                            if(variant.featured_image != null){
                                options += '<div data-image="'+variant.featured_image.src+'" data-value="' + value + '" class="swatch-element ' + (is_color ? "color " : " ") + valueHandle + (variant.available ? ' available ' : ' soldout ') + '">';
                            }else{
                                options += '<div  data-value="' + value + '" class="swatch-element ' + (is_color ? "color " : " ") + valueHandle + (variant.available ? ' available ' : ' soldout ') + '">';
                            }


                            if (is_color) {
                                options += '<div class="tooltip">' + value + '</div>';
                            }
                            options += '<input id="' + forText + '" type="radio" name="option-' + i + '" value="' + value + '" ' + (j == 0 ? ' checked ' : '') + (variant.available ? '' : '') + ' />';

                            if (is_color) {
                                if(variant.featured_image){
                                    options += '<label for="' + forText + '" class="'+valueHandle+'" style="background-color: ' + valueHandle + ';background-image:url('+variant.featured_image.src+');background-size: 50px 50px;"></label>';
                                }else{
                                    options += '<label for="' + forText + '" class="'+valueHandle+'" style="background-color: ' + valueHandle + ';background-size: 50px 50px;"></label>';
                                }
                            } else {
                                options += '<label for="' + forText + '">' + value + '</label>';
                            }
                            options += '</div>';

                            if (variant.available) {
                                //$('#quick-view-product .swatch[data-option-index="' + i + '"] .' + valueHandle).removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                            }
                            optionValues.push(value);
                        }
                    }
                    options += '</div>';
                }

                quickview.find('form.variants > select').after(options);
                var chon = [];
                var qmoney = [];
                var qimage = [];
                var qid = [];
                quickview.find('.swatch :radio').change(function() {
                    var optionIndex = $(this).closest('.swatch').attr('data-option-index');
                    var optionValue = $(this).val();
                    $(this)
                        .closest('form')
                        .find('.single-option-selector')
                        .eq(optionIndex)
                        .val(optionValue)
                        .trigger('change');

                    var variant_id = $('.quickview-product select[name=id]').val();

                    var check = false;
                    for (var i = 0; i < qid.length; i++){
                        if (qid[i] == variant_id){                            
                            var quantity = parseInt($('.quickview-product input[name=quantity]').val());
                            var totalPrice = qmoney[i] * quantity;
                            var gia = Bizweb.formatMoney(qmoney[i], window.money_format); 
                            var totalPriceText = Bizweb.formatMoney(totalPrice, window.money_format);             

                            var totalPriceHtml = $('.quickview-product .price').html();


                            $('.quickview-product .total-price span').html(totalPriceText);
                            $('.quickview-product .price').html(gia);
                            currency();

                            if(qimage[i]){
                                $('.quickview-product .featured-image img').attr('src',qimage[i]);
                            }


                        }
                    }
                    for (var i = 0; i < chon.length; i++){


                        if (chon[i] == variant_id){             
                            var check = true;
                        }                       
                        else{
                        }
                    }

                    if(check == true){
                        $('.quickview-product .btn-addToCart').attr('disabled','disabled');

                        $(".quickview-product .btn-addToCart").removeAttr("disabled");
                    }

                });

                quickview.find("form.variants .selector-wrapper label").each(function(n, r) {
                    $(this).html(t.options[n].name)
                })
            }
            else {
                quickview.find("form.variants > select").remove();
                var q = '<input type="hidden" name="variantId" value="' + t.variants[0].id + '">';
                quickview.find("form.variants").append(q);
            }
        }
        function productImage() {
            $('#thumblist').owlCarousel({
                navigation: true,
                items: 4,
                itemsDesktop: [1199, 4],
                itemsDesktopSmall: [979, 4],
                itemsTablet: [768, 3],
                itemsTabletSmall: [540, 4],
                itemsMobile: [360, 4]
            });

            if (!!$.prototype.fancybox){
                $('li:visible .fancybox, .fancybox.shown').fancybox({
                    'hideOnContentClick': true,
                    'openEffect'	: 'elastic',
                    'closeEffect'	: 'elastic'
                });
            }
        }
        /* Quick View ADD TO CART */

        function updatePricingQuickView() {

            //Currency.convertAll(window.shop_currency, $("#currencies a.selected").data("currency"), "span.money", "money_format")


        }


        function validate(evt) {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode( key );
            var regex = /[0-9]|\./;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
        }

        $(document).on('click', '.quickview-close, #quick-view-product .quickview-overlay, .fancybox-overlay', function(e){
            $("#quick-view-product").fadeOut(0);
            awe_hidePopup();
            $('#quick-view-product').modal('hide');
        });
        $(document).on('click', '.fix_add_to_cart', function(e) {	
            e.preventDefault();		
            $('#quick-view-product').modal('hide');
            var $this = $(this);
            var form = $this.parents('form');		
            $.ajax({
                type: 'POST',
                url: '/cart/add.js',
                async: false,
                data: form.serialize(),
                dataType: 'json',
                error: addToCartFail,
                beforeSend: function() {  
                },
                success: addToCartSuccess,
                cache: false
            });
        });
</script> 
    <script>
$(document).ready(function ($) {
    awe_backtotop();
    awe_owl();
    awe_category();
    awe_menumobile();
    owl_thumb_image();
    hover_thumb_image();
    count_product();
    awe_lazyloadImage();
});
function awe_lazyloadImage() {
    var ll = new LazyLoad({
        elements_selector: ".lazyload",
        load_delay: 100,
        threshold: 0
    });
} window.awe_lazyloadImage=awe_lazyloadImage;

$(window).on("load resize",function(e){	
    setTimeout(function(){					 
        awe_resizeimage();
    },200);
    setTimeout(function(){	
        awe_resizeimage();
    },1000);
});
$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
    awe_hidePopup('.awe-popup'); 	
    setTimeout(function(){
        $('.loading').removeClass('loaded-content');
    },500);
    return false;
})

function awe_resizeimage() { 
    $('.product-box .product-thumbnail a img').each(function(){
        var t1 = (this.naturalHeight/this.naturalWidth);
        var t2 = ($(this).parent().height()/$(this).parent().width());
        if(t1<= t2){
            $(this).addClass('bethua');
        }
        var m1 = $(this).height();
        var m2 = $(this).parent().height();
        if(m1 <= m2){
            $(this).css('padding-top',(m2-m1)/2 + 'px');
        }
    })	
} window.awe_resizeimage=awe_resizeimage;

function callbackW() {
    iWishCheck();				  
    iWishCheckInCollection();
    $(".iWishAdd").click(function () {			
        var iWishvId = iWish$(this).parents('form').find("[name='id']").val();
        if (typeof iWishvId === 'undefined') {
            iWishvId = iWish$(this).parents('form').find("[name='variantId']").val();
        };
        var iWishpId = iWish$(this).attr('data-product');
        if (Bizweb.template == 'collection' || Bizweb.template == 'index') {
            iWishvId = iWish$(this).attr('data-variant');
        }
        if (typeof iWishvId === 'undefined' || typeof iWishpId === 'undefined') {
            return false;
        }
        if (iwish_cid == 0) {
            iWishGotoStoreLogin();
        } else {
            var postObj = {
                actionx : 'add',
                cust: iwish_cid,
                pid: iWishpId,
                vid: iWishvId
            };
            iWish$.post(iWishLink, postObj, function (data) {
                if (iWishFindAndGetVal('#iwish_post_result', data) == undefined) return;
                var result = (iWishFindAndGetVal('#iwish_post_result', data).toString().toLowerCase() === 'true');
                var redirect = parseInt(iWishFindAndGetVal('#iwish_post_redirect', data), 10);
                if (result) {
                    if (Bizweb.template == "product") {
                        iWish$('.iWishAdd').addClass('iWishHidden'), iWish$('.iWishAdded').removeClass('iWishHidden');
                        if (redirect == 2) {
                            iWishSubmit(iWishLink, { cust: iwish_cid });
                        }
                    }
                    else if (Bizweb.template == 'collection' || Bizweb.template == 'index') {
                        iWish$.each(iWish$('.iWishAdd'), function () {
                            var _item = $(this);
                            if (_item.attr('data-variant') == iWishvId) {
                                _item.addClass('iWishHidden'), _item.parent().find('.iWishAdded').removeClass('iWishHidden');
                            }
                        });
                    }
                }
            }, 'html');
        }
        return false;
    });
    $(".iWishAdded").click(function () {
        var iWishvId = iWish$(this).parents('form').find("[name='id']").val();
        if (typeof iWishvId === 'undefined') {
            iWishvId = iWish$(this).parents('form').find("[name='variantId']").val();
        };
        var iWishpId = iWish$(this).attr('data-product');
        if (Bizweb.template == 'collection' || Bizweb.template == 'index') {
            iWishvId = iWish$(this).attr('data-variant');
        }
        if (typeof iWishvId === 'undefined' || typeof iWishpId === 'undefined') {
            return false;
        }
        if (iwish_cid == 0) {
            iWishGotoStoreLogin();
        } else {
            var postObj = {
                actionx: 'remove',
                cust: iwish_cid,
                pid: iWishpId,
                vid: iWishvId
            };
            iWish$.post(iWishLink, postObj, function (data) {
                if (iWishFindAndGetVal('#iwish_post_result', data) == undefined) return;
                var result = (iWishFindAndGetVal('#iwish_post_result', data).toString().toLowerCase() === 'true');
                var redirect = parseInt(iWishFindAndGetVal('#iwish_post_redirect', data), 10);
                if (result) {
                    if (Bizweb.template == "product") {
                        iWish$('.iWishAdd').removeClass('iWishHidden'), iWish$('.iWishAdded').addClass('iWishHidden');
                    }
                    else if (Bizweb.template == 'collection' || Bizweb.template == 'index') {
                        iWish$.each(iWish$('.iWishAdd'), function () {
                            var _item = $(this);
                            if (_item.attr('data-variant') == iWishvId) {
                                _item.removeClass('iWishHidden'), _item.parent().find('.iWishAdded').addClass('iWishHidden');
                            }
                        });
                    }
                }
            }, 'html');
        }
        return false;
    });

}  window.callbackW=callbackW;
function awe_currency(str){	
    str = str.replace('$','');
    str = str.replace('.00','');			
    str = str.replace('.','xxx');
    str = str.replace(',','.');
    str = str.replace('xxx',',');									
    return str;
}window.awe_currency=awe_currency;



/*UPdate OfficeWorld*/
$(window).bind('load resize scroll', function () {
    var wDH = $(window).height();
    var wDW = $(window).width();
    var heightSetmenu = $('.list_menu_header ').height();
    $('.ul_content_right_1, .ul_content_right_2').css('min-height', heightSetmenu);

    if (wDW < 991) {
        $('.list_menu_header').hide();
    }
});
/*Check so nho hon 1*/

function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
        object.value = object.value.slice(0, object.maxLength)
        }
function isNumeric (evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode (key);
    var regex = /[0-9]|\./;
    if ( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}







$(document).ready(function(){
    var wDW = $(window).width();
    /*Footer*/
    if(wDW > 767){
        $('.toggle-mn').show();

    }else {
        $('.footer-widget > .cliked').click(function(){
            $(this).toggleClass('open_');
            $(this).next('ul').slideToggle("fast");
            $(this).next('div').slideToggle("fast");
        });
    }
    if (wDW < 991) {
        $(".filter-group li span label").click(function(){
            $('.dqdt-sidebar').removeClass('openf');
            $('.open-filters').removeClass('openf');
            $('.opacity_filter').removeClass('opacity_filter_true');
        });
        $('.opacity_filter').click(function(e){
            $('.dqdt-sidebar').removeClass('openf');
            $('.open-filters').removeClass('openf');
            $('.opacity_filter').removeClass('opacity_filter_true');
        });
    }
    if (wDW > 992) {
        $(".button_clicked").click(function(){ 
            $('.search_pc').slideToggle('fast');
        })
    }

    /*Click tab danh muc*/
    var $this = $('.tab_link_module');
    $this.find('.head-tabs').first().addClass('active');
    $this.find('.content-tab').first().show();
    $this.find('.head-tabs').on('click',function(){
        if(!$(this).hasClass('active')){
            $this.find('.head-tabs').removeClass('active');
            var $src_tab = $(this).attr("data-src");
            $this.find($src_tab).addClass("active");
            $this.find(".content-tab").hide();
            var $selected_tab = $(this).attr("href");
            $this.find($selected_tab).show();
        }
        return false;
    })
    $(".tab_link_module .button_show_tab").click(function(){ 
        $('.link_tab_check_click').slideToggle('down');
    });
    if (wDW < 992) {
        var title_first = $('.link_tab_check_click li:first-child >a').text();
        $('.title_check_tabs').text(title_first);
        $this.find('.head-tabs').on('click',function(){
            $('.link_tab_check_click').slideToggle('up');
            var title_tabs = $(this).text();
            $('.title_check_tabs').text(title_tabs);
        })
    }

});
/*Show hide Recoverpass*/
$('.recv-text #rcv-pass').click(function(){
    $('.form_recover_').slideToggle('500');
});


// login_cart_clicked
var wDWs = $(window).width();

if (wDWs > 991) {
    $('.wrap_log .ti_login').click(function(){
        $('.mr_top').css('display', 'none');
        $('.log').slideToggle("fast");
    });
    $('.heading-cart .ti_cart ').click(function(){
        $('.log').css('display', 'none');
        $('.mr_top').slideToggle("fast");
    });
}else {
    $('.heading-cart .ti_cart ').click(function(){
        document.location.href='/cart';
    });
}
if (wDWs < 1199 || wDWs > 992) { 
    $('.menu_ .title_menu ').click(function(){
        $('.list_menu_header').slideToggle("fast");
    });
} else {
    $('.list_menu_header').show();
}





/*Show searchbar*/
$('.header_search').on('hover, mouseover', function() {
    $('.st-default-search-input').focus();
});
$('.showsearchfromtop').click(function(event){
    $('.searchfromtop').slideToggle("fast");
    $('.wrap_login_').hide();
});
$('.hidesearchfromtop').click(function(event){
    $('.searchfromtop').slideToggle("up");
});

var wDH = $(window).height();
if (wDH < 1199) {
    $('.use_ico_register').click(function(){
        $('.wrap_login_').slideToggle("fast");
        $('.searchfromtop').hide();
    });
}

/*Repcomment*/

$(".reply").click(function () {
    $(this).closest('div').find('.form-comment-input').focus();
});


/*End*/



/*Hover cart addd class opacity for body*/
// $(window).on("load resize",function(){
// 	if ($(window).width() >= 1200) {

// 		$(".cart_hover")
// 			.mouseover(function() { 
// 			$('.body_opactiy').addClass('opacity');
// 		})
// 			.mouseout(function() {
// 			$('.body_opactiy').removeClass('opacity');
// 		});

// 		$(".user_hover")
// 			.mouseover(function() { 
// 			$('.body_opactiy').addClass('opacity');
// 		})
// 			.mouseout(function() {
// 			$('.body_opactiy').removeClass('opacity');
// 		});

// 		$(".menu_hover")
// 			.mouseover(function() { 
// 			$('.body_opactiy').addClass('opacity');
// 		})
// 			.mouseout(function() {
// 			$('.body_opactiy').removeClass('opacity');
// 		});

// 	};
// });




function owl_thumb_image() { 
    $('.product_image_list').owlCarousel({
        loop:false,
        margin:5,
        responsiveClass:true,
        items: 5,
        dots:false,
        nav:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            992: {
                items:4,
            },
            1200:{
                items:5,
                nav:true,
                loop:false
            }
        }
    })
} window.owl_thumb_image=owl_thumb_image;

/*dem so san pham hien co tren trang*/
function count_product() {
    var size_col = $('.products-view-grid .row .product-col').size();
    var number_page = $('.paginate_position .pagination .page-item').size();
    if (size_col >= 25 || number_page > 1) {
        $('.sortPagiBar .wr_sort .sortpage').addClass('page_avalible');
    } else {
        $('.sortPagiBar .wr_sort .sortpage').removeClass('page_avalible');
    }
}window.count_product=count_product;




/*hover get image thumb product item grid*/
$(function() {
    $(".owl_product_item_content .saler_item").each(function() {
        var _this = $(this).find('.owl_item_product .product-box');
        var this_thumb = $(_this).find('.product-thumbnail .image_link img');
        var default_this_thumb = $(_this).find('.product-thumbnail .image_link').attr('data-images');
        var this_mini_thumb = $(_this).find('.action_image .owl_image_thumb_item .product_image_list .item_image');
        $(this_mini_thumb)
            .mouseover(function() { 
            var this_s = $(this).attr('data-image');
            this_thumb.attr('src', this_s);
        })
            .mouseout(function() {
            this_thumb.attr('src', default_this_thumb);
        });
    });
});
function hover_thumb_image() {
    $(function() {
        $(".product-col").each(function() {
            var _this = $(this).find('.product-box');
            var this_thumb = $(_this).find('.product-thumbnail .image_link img');
            var default_this_thumb = $(_this).find('.product-thumbnail .image_link').attr('data-images');
            var this_mini_thumb = $(_this).find('.action_image .owl_image_thumb_item .product_image_list .item_image');
            $(this_mini_thumb)
                .mouseover(function() { 
                var this_s = $(this).attr('data-image');
                this_thumb.attr('src', this_s);
            })
                .mouseout(function() {
                this_thumb.attr('src', default_this_thumb);
            });
        });
    });
} window.hover_thumb_image=hover_thumb_image;
/*End*/





/*Open filter*/
$('.open-filters').click(function(e){
    e.stopPropagation();
    $(this).toggleClass('openf');
    $('.opacity_filter').toggleClass('opacity_filter_true');
    $('.dqdt-sidebar').toggleClass('openf');
});

/*Menu mobile*/
$('.menu-bar').click(function(e){
    e.stopPropagation();
    $('.menu_mobile').toggleClass('open_sidebar_menu');
    $('.opacity_menu').toggleClass('open_opacity');
});
$('.opacity_menu').click(function(e){
    $('.menu_mobile').removeClass('open_sidebar_menu');
    $('.opacity_menu').removeClass('open_opacity');
});
$('.ct-mobile li .ti-plus').click(function() {
    $(this).closest('li').find('> .sub-menu').slideToggle("fast");
    $(this).closest('i').toggleClass('show_open hide_close');
    return false;              
}); 

function validate(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}

/*Double click go to link menu*/

var wDWs = $(window).width();
if (wDWs < 1199) {
    $('.ul_menu li:has(ul), .item_big li:has(ul)' ).one("click", function(e)     {
        e.preventDefault();
        return false;    
    });

}





/********************************************************
Search header
********************************************************/
$('body').click(function(event) {
    if (!$(event.target).closest('.collection-selector').length) {
        $('.list_search').css('display','none');
    };
});
/* top search */

$('.search_text').click(function(){
    $(this).next().slideToggle(200);
    $('.list_search').show();
})


$('.list_search .search_item').on('click', function (e) {
    $('.list_search').hide();

    var optionSelected = $(this);

    /*
var id = optionSelected.attr('data-coll-id');
var handle = optionSelected.attr('data-coll-handle');
var coll_name = optionSelected.attr('data-coll-name');
*/

    var title = optionSelected.text();
    //var filter = '(collectionid:product' + (id == 0 ? '>=0' : ('=' + id)) + ')';


    //console.log(coll_name);
    $('.search_text').text(title);

    /*
$('.ultimate-search .collection_id').val(filter);
$('.ultimate-search .collection_handle').val(handle);
$('.ultimate-search .collection_name').val(coll_name);
*/

    $(".search-text").focus();
    optionSelected.addClass('active').siblings().removeClass('active');
    //console.log($('.kd_search_text').innerWidth());


    //$('.list_search').slideToggle(0);

    /*
sessionStorage.setItem('last_search', JSON.stringify({
title: title,
handle: handle,
filter: filter,
name: coll_name
}));
*/  
});


$('.header_searchs form button').click(function(e) {
    e.preventDefault();

    searchCollection();
    setSearchStorage('.header_searchs form');
});

$('#mb_search').click(function(){
    $('.mb_header_search').slideToggle('fast');
});

$('.fi-title.drop-down').click(function(){
    $(this).toggleClass('opentab');
});

function searchCollection() {
    var collectionId = $('.list_search .search_item.active').attr('data-coll-id');
    var vl = $('.header form input').val();
    var searchVal = $('.header_searchs input[type="search"]').val();
    var url = '';
    if(collectionId == 0 || vl == '') {
        url = '/search?q='+ searchVal;
    }
    else {
        url = '/search?q=collections:'+ collectionId +' AND name:' + searchVal;
        /*
if(searchVal != '') {
  url = '/search?type=product&q=' + searchVal + '&filter=(collectionid:product=' + collectionId + ')';
}
else {
  url = '/search?type=product&q=filter=(collectionid:product=' + collectionId + ')';
}
*/
    }
    window.location=url;
}
/*** Search Storage ****/

function setSearchStorage(form_id) {
    var seach_input = $(form_id).find('.search-text').val();
    var search_collection = $(form_id).find('.list_search .search_item.active').attr('data-coll-id');
    sessionStorage.setItem('search_input', seach_input);
    sessionStorage.setItem('search_collection', search_collection);
}
function getSearchStorage(form_id) {
    var search_input_st = ''; // sessionStorage.getItem('search_input');
    var search_collection_st = ''; // sessionStorage.getItem('search_collection');
    if(sessionStorage.search_input != '') {
        search_input_st = sessionStorage.search_input;
    }
    if(sessionStorage.search_collection != '') {
        search_collection_st = sessionStorage.search_collection;
    }
    $(form_id).find('.search-text').val(search_input_st);
    $(form_id).find('.search_item[data-coll-id="'+search_collection_st+'"]').addClass('active').siblings().removeClass('active');
    var search_key = $(form_id).find('.search_item[data-coll-id="'+search_collection_st+'"]').text();
    if(search_key != ''){
        $(form_id).find('.collection-selector .search_text').text(search_key);
    }
    //$(form_id).find('.search_collection option[value="'+search_collection_st+'"]').prop('selected', true);
}
function resetSearchStorage() {
    sessionStorage.removeItem('search_input');
    sessionStorage.removeItem('search_collection');
}
$(window).load(function() {
    getSearchStorage('.header_searchs form');
    resetSearchStorage();
});


/********************************************************
# SHOW NOITICE
********************************************************/
function awe_showNoitice(selector) {
    $(selector).animate({right: '0'}, 500);
    setTimeout(function() {
        $(selector).animate({right: '-300px'}, 500);
    }, 3500);
}  window.awe_showNoitice=awe_showNoitice;

/********************************************************
# SHOW LOADING
********************************************************/
function awe_showLoading(selector) {
    var loading = $('.loader').html();
    $(selector).addClass("loading").append(loading); 
}  window.awe_showLoading=awe_showLoading;

/********************************************************
# HIDE LOADING
********************************************************/
function awe_hideLoading(selector) {
    $(selector).removeClass("loading"); 
    $(selector + ' .loading-icon').remove();
}  window.awe_hideLoading=awe_hideLoading;

/********************************************************
# SHOW POPUP
********************************************************/
function awe_showPopup(selector) {
    $(selector).addClass('active');
}  window.awe_showPopup=awe_showPopup;

/********************************************************
# HIDE POPUP
********************************************************/
function awe_hidePopup(selector) {
    $(selector).removeClass('active');
}  window.awe_hidePopup=awe_hidePopup;

/********************************************************
# CONVERT VIETNAMESE
********************************************************/
function awe_convertVietnamese(str) { 
    str= str.toLowerCase();
    str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
    str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
    str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
    str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
    str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
    str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
    str= str.replace(/đ/g,"d"); 
    str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
    str= str.replace(/-+-/g,"-");
    str= str.replace(/^\-+|\-+$/g,""); 
    return str; 
} window.awe_convertVietnamese=awe_convertVietnamese;

/********************************************************
# RESIDE IMAGE PRODUCT BOX
********************************************************/
function awe_resizeimage() { 

} window.awe_resizeimage=awe_resizeimage;

/********************************************************
# SIDEBAR CATEOGRY
********************************************************/
function awe_category(){
    $('.nav-category .fa-angle-down').click(function(e){
        $(this).parent().toggleClass('active');
    });
} window.awe_category=awe_category;

/********************************************************
# MENU MOBILE
********************************************************/
function awe_menumobile(){
    $('.menu-bar').click(function(e){
        e.preventDefault();
        $('#nav').toggleClass('open');
    });
    $('#nav .fa').click(function(e){		
        e.preventDefault();
        $(this).parent().parent().toggleClass('open');
    });
} window.awe_menumobile=awe_menumobile;

/********************************************************
# ACCORDION
********************************************************/
function awe_accordion(){
    $('.accordion .nav-link').click(function(e){
        e.preventDefault;
        $(this).parent().toggleClass('active');
    })
} window.awe_accordion=awe_accordion;

/********************************************************
# OWL CAROUSEL
********************************************************/
function awe_owl() { 
    $('.owl-carousel:not(.not-dqowl)').each( function(){
        var xs_item = $(this).attr('data-xs-items');
        var md_item = $(this).attr('data-md-items');
        var lg_item = $(this).attr('data-lg-items');
        var sm_item = $(this).attr('data-sm-items');	
        var margin=$(this).attr('data-margin');
        var dot=$(this).attr('data-dot');
        var nav=$(this).attr('data-nav');
        var height=$(this).attr('data-height');
        var play=$(this).attr('data-play');
        var loop=$(this).attr('data-loop');
        if (typeof margin !== typeof undefined && margin !== false) {    
        } else{
            margin = 30;
        }
        if (typeof xs_item !== typeof undefined && xs_item !== false) {    
        } else{
            xs_item = 1;
        }
        if (typeof sm_item !== typeof undefined && sm_item !== false) {    

        } else{
            sm_item = 3;
        }	
        if (typeof md_item !== typeof undefined && md_item !== false) {    
        } else{
            md_item = 3;
        }
        if (typeof lg_item !== typeof undefined && lg_item !== false) {    
        } else{
            lg_item = 3;
        }
        if (typeof dot !== typeof undefined && dot !== true) {   
            dot= true;
        } else{
            dot = false;
        }
        $(this).owlCarousel({
            loop:loop,
            margin:Number(margin),
            responsiveClass:true,
            dots:dot,
            nav:nav,
            autoplay:false,
            autoplayTimeout:3000,
            lazyLoad: true,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:Number(xs_item)				
                },
                600:{
                    items:Number(sm_item)				
                },
                1000:{
                    items:Number(md_item)				
                },
                1200:{
                    items:Number(lg_item)				
                }
            }
        })
    })
} window.awe_owl=awe_owl;





/**************************************************
Silick Slider
**************************************************/

$(document).ready(function(){



});






/********************************************************
# BACKTOTOP
********************************************************/
function awe_backtotop() { 
    /* Back to top */
    if ($('#back-to-top').length) {
        var scrollTrigger = 200, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
} window.awe_backtotop=awe_backtotop;

/********************************************************
# TAB
********************************************************/
/********************************************************
# Tab
********************************************************/
$(".e-tabs:not(.not-dqtab)").each( function(){
    $(this).find('.tabs-title li:first-child').addClass('current');
    $(this).find('.tab-content').first().addClass('current');

    $(this).find('.tabs-title li').click(function(){
        var tab_id = $(this).attr('data-tab');

        var url = $(this).attr('data-url');
        $(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);

        $(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
        $(this).closest('.e-tabs').find('.tab-content').removeClass('current');

        $(this).addClass('current');
        $(this).closest('.e-tabs').find("#"+tab_id).addClass('current');
    });    
});
/*Check so nho hon 1*/
function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
        object.value = object.value.slice(0, object.maxLength)
        }
function isNumeric (evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode (key);
    var regex = /[0-9]|\./;
    if ( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}

/********************************************************
# DROPDOWN
********************************************************/
$('.dropdown-toggle').click(function() {
    $(this).parent().toggleClass('open'); 	
}); 
$('.btn-close').click(function() {
    $(this).parents('.dropdown').toggleClass('open');
}); 
$('body').click(function(event) {
    if (!$(event.target).closest('.dropdown').length) {
        $('.dropdown').removeClass('open');
    };
});

/* NEW JS */

$(document).on('keydown','#qty, #quantity-detail, .number-sidebar, .key_phone',function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
$(document).on('click','.qtyplus',function(e){
    e.preventDefault();   
    fieldName = $(this).attr('data-field'); 
    var currentVal = parseInt($('input[data-field='+fieldName+']').val());
    if (!isNaN(currentVal)) { 
        $('input[data-field='+fieldName+']').val(currentVal + 1);
    } else {
        $('input[data-field='+fieldName+']').val(0);
    }
});

$(document).ready(function(){ 

    var ww = $(window).width();

    if (ww < 991) {
        $(".product-tab .tab-link h3").click(function(){
            $(this).next("div").slideToggle();
        });
    }

    var img_lazy_pc = $("img.lazy-pc");
    img_lazy_pc.addClass("lazy");


});
</script>


    <script type='text/javascript'>
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css");
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css");
    </script>
</body>
</html>