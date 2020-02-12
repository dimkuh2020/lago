

	//показ модальной корзины
	function showCart(cart){
		$('#cart .modal-body').html(cart); //добавляем внутри .modal-body 
		$('#cart').modal(); // выводим модально
	}

	function getCart(){ // показ корзины через навбар
		$.ajax({
			url: '/cart/show',
			type: 'GET',
			success: function(res){
				if(!res) alert('Ошибка!');
				showCart(res);	// показ модального окна корзины			
			},
			error: function(){
				alert('Error!!!');
			}
		});
		return false;
	}
	
	//кнопка "Очистить корзину"
	function clearCart(){
		$.ajax({
			url: '/cart/clear',
			type: 'GET',
			success: function(res){
				if(!res) alert('Ошибка!');
				showCart(res);	// показ модального окна корзины			
			},
			error: function(){
				alert('Error!!!');
			}
		});
	}
$(document).ready(function($){

	//кнопка "Добавить в корзину"  в т.ч для карточки товара
	$('.item_add').on('click', function(e){  // скрипт добавления в корзину товара через ajax
		e.preventDefault();
		var id = $(this).data('id'); // получение id товара через арибут data-id="<?=$hits->id?>" в <html>
		var qty = $('#qty').val(); // получение количества товаров ро id из карточки товара
		$.ajax({
			url: '/cart/add',
			data: {id: id, qty: qty},
			type: 'GET',
			success: function(res){
				if(!res) alert('Ошибка!');
				//console.log(res);
				showCart(res);	// показ модального окна корзины			
			},
			error: function(){
				alert('Error!!!');
			}
		});
	});

	//удаление одного товара по Х
	$('#cart .modal-body').on('click', '.del-item', function(){ // вытягиваем $id ис атрибута data-id в  ссылке Х на удаление одного товара по классу del-item
		var id = $(this).data('id');
		$.ajax({
			url: '/cart/del-item',
			data: {id: id},
			type: 'GET',
			success: function(res){
				if(!res) alert('Ошибка!');				
				showCart(res);	// показ модального окна корзины			
			},
			error: function(){
				alert('Error!!!');
			}
		});
	});	
	
	$('.qty').on('keydown', function(e){  // ввод цифр в колличество товаров в карте товаров перед добавлением в корзину
		if(e.key.length == 1 && e.key.match(/[^0-9'".]/)){
			return false;
		};
	  })
	
	$(".memenu").memenu(); // меню в моб
	
	$(function () { // слайдер надписей (в будущем можно поменять на карусель)
		$("#slider").responsiveSlides({
		auto: true,
		nav: true,
		speed: 500,
		namespace: "callbacks",
		pager: true,
		});
	});	

	var tabItems = $('.cd-tabs-navigation a'),
		tabContentWrapper = $('.cd-tabs-content');

	tabItems.on('click', function(event){
		event.preventDefault();
		var selectedItem = $(this);
		if( !selectedItem.hasClass('selected') ) {
			var selectedTab = selectedItem.data('content'),
				selectedContent = tabContentWrapper.find('li[data-content="'+selectedTab+'"]'),
				slectedContentHeight = selectedContent.innerHeight();
			
			tabItems.removeClass('selected');
			selectedItem.addClass('selected');
			selectedContent.addClass('selected').siblings('li').removeClass('selected');
			//animate tabContentWrapper height when content changes 
			tabContentWrapper.animate({
				'height': slectedContentHeight
			}, 200);
		}
	});

	//hide the .cd-tabs::after element when tabbed navigation has scrolled to the end (mobile version)
	checkScrolling($('.cd-tabs nav'));
	$(window).on('resize', function(){
		checkScrolling($('.cd-tabs nav'));
		tabContentWrapper.css('height', 'auto');
	});
	$('.cd-tabs nav').on('scroll', function(){ 
		checkScrolling($(this));
	});

	function checkScrolling(tabs){
		var totalTabWidth = parseInt(tabs.children('.cd-tabs-navigation').width()),
		 	tabsViewport = parseInt(tabs.width());
		if( tabs.scrollLeft() >= totalTabWidth - tabsViewport) {
			tabs.parent('.cd-tabs').addClass('is-ended');
		} else {
			tabs.parent('.cd-tabs').removeClass('is-ended');
		}
	}
});