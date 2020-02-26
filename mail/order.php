<div>
    Имя: <?=$order->name?>
    Фамилия: <?=$order->surname?>
    Телефон: <?=$order->phone?>
    E-mail: <?=$order->email?>
    Адрес: <?=$order->adress?>
</div>
<h3>Информация о заказе:</h3>
<table class="table table-hover table-striped">
    <thead>
        <tr>                    
            <th>Наименование</th>
            <th>Количество</th>
            <th>Цена</th>
            <th>Сумма</th>                    
        </tr>
    </thead>
    <tbody>
    <?php foreach($session['cart'] as $id => $item):?>
        <tr>                    
            <td><?=$item['name']?></td>
            <td><?=$item['qty']?></td>
            <td><?=$item['price']?></td>
            <td><?= $item['qty'] * $item['price']?></td>                    
        </tr>
    <?php endforeach;?>
        <tr>                
            <td colspan="3">Итого: </td>
            <td><?=$session['cart.qty']?></td>
        </tr>
        <tr>                
            <td colspan="3">На сумму: </td>
            <td><?=$session['cart.sum']?></td>
        </tr>
    </tbody>
</table>
    
    

