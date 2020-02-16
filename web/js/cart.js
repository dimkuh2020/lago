//показ модальной корзины
function showCart(cart){
    $('#cart .modal-body').html(cart); //добавляем внутри .modal-body 
    $('#cart').modal(); // выводим модально
}

// показ корзины через навбар
function getCart(){ 
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
				showCart(res);	// показ модального окна корзины			
			},
			error: function(){
				alert('Error!!!');
			}
		});
	});

	//добавление 1 товара в cart-modal (+)
	$('#cart .modal-body').on('click', '.plus-item', function(){ // вытягиваем $id с атрибута data-id в  ссылке Х на удаление одного товара по классу del-item
		var id = $(this).data('id');
		//console.log(id);
		$.ajax({
			url: '/cart/plus-item',
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
	
	//удаление 1 товара в cart-modal (-)
	$('#cart .modal-body').on('click', '.minus-item', function(){ // вытягиваем $id с атрибута data-id в  ссылке Х на удаление одного товара по классу del-item
		var id = $(this).data('id');
		var qty = $(this).data('qty');
		if(qty==1){
			$('.minus-item').attr('disabled', true);			
		}

		console.log(qty);
		$.ajax({
			url: '/cart/minus-item',
			data: {id: id, qty: qty},
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
});