<?php
    ob_start();
?>
<?php
echo "
    <div class='Ad'>
        <h1>".$data[0]['address']."</h1>
        <div class='picture'>
            <div class='slider' show='1' scroll='1' time='200'>
                <ul>";
                    foreach ($data[2] as $photo) { 
                        echo "
                        <li>
                            <a 
                                href='public/uploads/user_".$data[1]['id']."/ad_".$data[0]['id']."/".$photo['photo']."' 
                                data-lightbox='user".$data[1]['id']."-".count($data[2])."' data-title='".$photo['description']."'
                            >
                                <div class='img_slider' 
                                    style='background-image: url(public/uploads/user_".$data[1]['id']."/ad_".$data[0]['id']."/".$photo['photo'].");'>
                                </div>
                            </a>
                        </li>
                        ";
                    }; echo "
                </ul>
            </div>
        </div>
        <ul class='inf'>
            <li><p>Местоположение: ".$data[0]['city'].", Maardu linn</p></li>
            <li><p>Тип недвижимости: ".$data[0]['type']."</p></li>
            <li><p>Количество комнат: ".$data[0]['roomCount']."</p></li>
            <li><p>Этажи: ".$data[0]['floorCount']."</p></li>
            <li><p>Площадь: ".$data[0]['area']."m²</p></li>
            <li><p>Цена: ".$data[0]['price']." €</p></li>
            <li>
                <form action=''>
                    <h3>Запросить доп. информацию:</h3>
                    <input type='text' name='name' class='form-control' id='name' placeholder='Имя' autocomplete='off'>
                    <input type='email' name='email' class='form-control' id='email' placeholder='Е-мейл' autocomplete='off'>
                    <input type='tel' name='tel' class='form-control' id='tel' placeholder='Телефон' autocomplete='off'>
                    <textarea name='question' id='question' class='form-control' cols='30' rows='10' placeholder='Ваш вопрос'></textarea>
                    <button class='btn btn-secondary w-100'>Send</button>
                </form>
            </li>
        </ul>
        <div class='des'>
            <h3>Description</h3>
            <p>".$data[0]['description']."</p>
            <p>More information:</p>
            <p>".$data[1]['email']."</p>
            <p>tel: ".$data[1]['phone']."</p>
        </div>
    </div>
";
?>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>