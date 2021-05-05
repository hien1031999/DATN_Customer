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
                
                <li >
                    <a itemprop="url" href="gioithieu"><span >Giới Thiệu Shop SMARKET</span></a>	
                    <span class="mr_lr"> <i class="fa fa-angle-right"></i> </span>
                </li>

                <li >
                <h2 style="color: #81d742;text-align: center" class="vc_custom_heading">CHÂN THÀNH CẢM ƠN QUÝ KHÁCH HÀNG ĐÃ QUAN TÂM ĐẾN SMARKET<p></p>
                    <p>"Nâng niu hành trang - Lan tỏa giá trị"</p><br></h2>
                    
                    <img src="{{asset('assets/images/htch1.jpg')}}" alt="htch"><br><br>
                    

                        <div class="article_detail">

                            <p>Hệ thống shop online&nbsp;<strong>SMARKET</strong>&nbsp;chuyên thiết kế và kinh doanh các mặt hàng Balo, Túi Xách, Vali cho mọi đối tượng người dùng, là cấu nối cho mọi người cả nước tiếp cận với xu hướng thời trang, Balo, Túi Xách, Chất Lượng trên thế giới. "Chúng tôi mang đến sự khác biệt!" - Cùng với xu hướng thời trang của thế giới&nbsp;<strong>Hệ thống Shop SMARKET</strong>&nbsp;đã và đang không ngừng đổi mới để mang đến cho tất cả mọi người mẫu Balo, Túi Xách, Vali thời trang độc đáo, mới lạ, chất lượng tốt, để tiên phong cho một phong cách thời trang Balo, Túi Xách, Vali mới.</p>

                            <p>Vì thế&nbsp;<strong>SMARKET</strong>&nbsp;đang dần trở thành một cái tên quen thuộc với tất cả các bạn trẻ với những chiếc Balo, Túi Xách, Vali phong cách thời trang hoàn toàn mới lạ, khẳng định cá tính của chính mình. Đặc biệt vẫn là chất lượng cực tốt của sản phẩm đem lại cho người dùng ♥</p>

                            <p>Thành lập hơn 3 năm với hệ thống hơn 5 cửa hàng trong Tp. hcm và Hà Nội.</p>

                            <p><em>Sự hài lòng của các bạn chính là mục tiêu phấn đấu của chúng tôi ♥.</em></p>
                            <br>

                            <img src="{{asset('assets/images/htch2.jpg')}}" alt="htch">
                            <br>     
                </li>

                <li >
                    <h2 style="color: #81d742;text-align: left" class="vc_custom_heading">CHÍNH SÁCH CHẤT LƯỢNG CỦA SMARKET</h2>
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                            <h2>Những cam kết&nbsp; vàng SMARKET dành cho khách hàng.</h2>
                            <p>Với chính sách chất lượng được thiết lập và tuân thủ trong quá trình hoạt động, SMARKET luôn suy nghĩ và hướng tới cung cấp những sản phẩm, dịch vụ tốt nhất cho khách hàng.</p>
                            <p>Những cam kết SMARKET luôn kết dành cho khách hàng như sau:</p>
                            <p>1- Chúng tôi cam kết mang lại sự chuyên nghiệp, thuận lợi nhất cho khách hàng từ việc đặt hàng đến khi nhận sản phẩm.</p>
                            <p>2- Hoàn tiền 100% nếu khách hàng không hài lòng về chất lượng sản phẩm.</p>
                            <p>3- Hỗ trợ tư vấn Online 24/7</p>
                            <p>4- Sản phẩm bảo hành 6 tháng – 1 năm</p>
                            <p>5- Giao hàng đúng hẹn như đã thỏa thuận với khách hàng.</p>
                            <p>6- Kiểm tra hàng thoái mái trước khi thanh toán.</p>
                            <p>7- Sản phẩm sau cùng được đóng gói đẹp, giao hàng tận nơi, giao hàng toàn quốc theo yêu cầu của khách hàng.<p><br>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

                        



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
                    <a class="button btn-proceed-checkout" title="Tiến hành đặt hàng" href="/checkout"><span>Tiến hành thanh toán</span></a>
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


    
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script> -->



    <script type='text/javascript'>
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css");
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css");
    </script>
</body>
</html>