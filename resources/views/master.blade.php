<!DOCTYPE html>
<html lang="en">
@include('user.layout.head');
<body>

    @include('user.layout.header')
    
    @yield('content')
    
    @include('user.layout.footer')
    

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
    <script>
        !function(a){"use strict";"function"==typeof define&&define.amd?define(["jquery"],a):a(jQuery)}(function(a){"use strict";function b(a){if(a instanceof Date)return a;if(String(a).match(g))return String(a).match(/^[0-9]*$/)&&(a=Number(a)),String(a).match(/\-/)&&(a=String(a).replace(/\-/g,"/")),new Date(a);throw new Error("Couldn't cast `"+a+"` to a date object.")}function c(a){return function(b){var c=b.match(/%(-|!)?[A-Z]{1}(:[^;]+;)?/gi);if(c)for(var e=0,f=c.length;f>e;++e){var g=c[e].match(/%(-|!)?([a-zA-Z]{1})(:[^;]+;)?/),i=new RegExp(g[0]),j=g[1]||"",k=g[3]||"",l=null;g=g[2],h.hasOwnProperty(g)&&(l=h[g],l=Number(a[l])),null!==l&&("!"===j&&(l=d(k,l)),""===j&&10>l&&(l="0"+l.toString()),b=b.replace(i,l.toString()))}return b=b.replace(/%%/,"%")}}function d(a,b){var c="s",d="";return a&&(a=a.replace(/(:|;|\s)/gi,"").split(/\,/),1===a.length?c=a[0]:(d=a[0],c=a[1])),1===Math.abs(b)?d:c}var e=100,f=[],g=[];g.push(/^[0-9]*$/.source),g.push(/([0-9]{1,2}\/){2}[0-9]{4}( [0-9]{1,2}(:[0-9]{2}){2})?/.source),g.push(/[0-9]{4}([\/\-][0-9]{1,2}){2}( [0-9]{1,2}(:[0-9]{2}){2})?/.source),g=new RegExp(g.join("|"));var h={Y:"years",m:"months",w:"weeks",d:"days",D:"totalDays",H:"hours",M:"minutes",S:"seconds"},i=function(b,c,d){this.el=b,this.$el=a(b),this.interval=null,this.offset={},this.instanceNumber=f.length,f.push(this),this.$el.data("countdown-instance",this.instanceNumber),d&&(this.$el.on("update.countdown",d),this.$el.on("stoped.countdown",d),this.$el.on("finish.countdown",d)),this.setFinalDate(c),this.start()};a.extend(i.prototype,{start:function(){null!==this.interval&&clearInterval(this.interval);var a=this;this.update(),this.interval=setInterval(function(){a.update.call(a)},e)},stop:function(){clearInterval(this.interval),this.interval=null,this.dispatchEvent("stoped")},pause:function(){this.stop.call(this)},resume:function(){this.start.call(this)},remove:function(){this.stop(),f[this.instanceNumber]=null,delete this.$el.data().countdownInstance},setFinalDate:function(a){this.finalDate=b(a)},update:function(){return 0===this.$el.closest("html").length?void this.remove():(this.totalSecsLeft=this.finalDate.getTime()-(new Date).getTime(),this.totalSecsLeft=Math.ceil(this.totalSecsLeft/1e3),this.totalSecsLeft=this.totalSecsLeft<0?0:this.totalSecsLeft,this.offset={seconds:this.totalSecsLeft%60,minutes:Math.floor(this.totalSecsLeft/60)%60,hours:Math.floor(this.totalSecsLeft/60/60)%24,days:Math.floor(this.totalSecsLeft/60/60/24)%7,totalDays:Math.floor(this.totalSecsLeft/60/60/24),weeks:Math.floor(this.totalSecsLeft/60/60/24/7),months:Math.floor(this.totalSecsLeft/60/60/24/30),years:Math.floor(this.totalSecsLeft/60/60/24/365)},void(0===this.totalSecsLeft?(this.stop(),this.dispatchEvent("finish")):this.dispatchEvent("update")))},dispatchEvent:function(b){var d=a.Event(b+".countdown");d.finalDate=this.finalDate,d.offset=a.extend({},this.offset),d.strftime=c(this.offset),this.$el.trigger(d)}}),a.fn.countdown=function(){var b=Array.prototype.slice.call(arguments,0);return this.each(function(){var c=a(this).data("countdown-instance");if(void 0!==c){var d=f[c],e=b[0];i.prototype.hasOwnProperty(e)?d[e].apply(d,b.slice(1)):null===String(e).match(/^[$A-Z_][0-9A-Z_$]*$/i)?(d.setFinalDate.call(d,e),d.start()):a.error("Method %s does not exist on jQuery.countdown".replace(/\%s/gi,e))}else new i(this,b[0],b[1])})}});
    </script>
    <script>
        $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                $this.html(event.strftime('<div><span class="days">%D<br /><small>Ngày</small></div><span class="clocks"></span><div><span class="hours ">%H<br /><small>Giờ</small></span></div><span class="clocks"></span><div><span class="minutes ">%M<br /><small>Phút</small></span></div><span class="clocks"></span><div><span class="seconds">%S<br /><small>Giây</small></span></div>'));
            });
        });

        /* Check data-countdown */
        $(document).ready(function(){
            var test = $('.clockdiv').attr('data-countdown');
            console.log(test);
            var dt = new Date();
            var time = dt.getFullYear() + "/" + dt.getMonth() + "/" + dt.getDate();
            console.log(time);
            if (test > time) {
                $('.clockdiv').attr('data-countdown', test);
            } else {
                $('.clockdiv').hide();
            }
        });
        $('.loop_two_ctrl span:nth-child(1)').click(function(){
            $(this).parents().next().children('.active').prev().children().click();
        });
        $('.loop_two_ctrl span:nth-child(2)').click(function(){
            $(this).parents().next().children('.active').next().children().click();
        });

    </script>


    <script type='text/javascript'>
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css");
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css");
    </script>

</body>
</html>