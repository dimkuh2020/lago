<div>
    Имя: <?=$order->name?><br>
    Фамилия: <?=$order->surname?><br>
    Телефон: <?=$order->phone?><br>
    E-mail: <?=$order->email?><br>
    Адрес: <?=$order->address?><br>
</div>
<h3>Информация о заказе:</h3>
<div class="table-responsive">
    <table class="table table-hover table-striped" style="border: 1px solid">
        <thead>
            <tr>                   
                <th  style="text-align: center;">Наименование</th>
                <th  style="text-align: center;">Количество</th>
                <th  style="text-align: center;">Цена</th>
                <th  style="text-align: center;">Сумма</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($session['cart'] as $id => $item):?>
            <tr style="text-align: center;">
                
                <td style="text-align: left;"><h5><?=$item['name']?></h5></td>
                <td><h5><?=$item['qty']?></h5></td>
                <td><h5><?=$item['price']?> грн.</h5></td>
                <td><h5><?= $item['qty'] * $item['price']?><h5></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
<div>
    <table class="table table-borderless">
        <tbody>
            <tr>                
                <td><h4>Всего товаров:</h4></td>
                <td><h4><?=$session['cart.qty']?></h4></td>
            </tr>
            <tr>                
                <td><h4>На сумму:</h4></td>
                <td><h4><?=$session['cart.sum']?> грн.</h4></td>
            </tr>
        </tbody>
    </table>
</div>
        
        
        
        
       
       
    
    

