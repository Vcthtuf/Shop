<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Internet-shop">
    <meta name="author" content="Melnikov Sergey">
    <title>Ноутбуки - интернет магазин</title>
    <link rel="icon" href="../icon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize-min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <nav>
        <ul class="menu">
          <li class="item"><a href="index.html">Главная</a></li>
          <li class="item"><a href="catalog.html">Каталог</a></li>
          <li class="item"><a href="contacts.html">Контакты</a></li>
        </ul>
      </nav>
      <div class="title">
        <?php>
            $name = 'Ноутбук Asus F507UF-EJ393T';
        echo('<h1>'. $name . '</h1>');
        ?>
      </div>
      <div class="images"><a href="img/jpg/Asus/F507UF_1.jpg" target="_blank"><img src="img/jpg/Asus/F507UF_1.jpg" alt="Asus F507UF"></a>
      <a href="img/jpg/Asus/F507UF_2.jpg" target="_blank"><img src="img/jpg/Asus/F507UF_2.jpg" alt="Asus F507UF"></a>
      <a href="img/jpg/Asus/F507UF_3.jpg" target="_blank"><img src="img/jpg/Asus/F507UF_3.jpg" alt="Asus F507UF"></a>
    </div>
      <div class="descr">
          
        <h3>Краткое описание товара</h3>
        <div class="descr_short"> 
            <?php 
                $descr = 'Ноутбук ASUS Laptop X507UF - это мультимедийный ноутбук для повседневного использования';
                echo('<p>'.$descr.'</p>');
            ?>
          <!-- <p></p> -->
        </div>
        <div class="descr_specifications">
          <h3>Характеристики товара</h3>
          <ul>
            <li><span>Гарантийный срок</span><span>1 год</span></li>
            <li><span>Модель</span><span>90NB0JB2-M04790</span></li>
            <li><span>Версия операционной системы</span><span>Windows 10</span></li>
            <li><span>Разрешение экрана, px</span><span>1920x1080</span></li>
            <li><span>Процессор</span><span>Intel Core i3 7020U</span></li>
            <li><span>Количество ядер процессора</span><span>2</span></li>
            <li><span>Объем оперативной памяти</span><span>6 ГБ</span></li>
          </ul>
        </div>
        <div class="descr_full">
          <h3>Подробное описание товара</h3>
          <p>Ноутбук ASUS Laptop X507UF объединяет в себе стильный дизайн с современными технологиями. Он предлагает пользователю всю мощь процессора Intel Core i3 в сочетании с видеокартой NVIDIA GeForce MX130 и оперативной памятью DDR4 объемом 6 ГБ.</p>
        </div>
      </div>
      <div class="links"><a class="links_prev" href="hp.html">Предыдущий товар</a><a class="links_next" href="lenovo.html">Следующий товар</a></div>
      <hr>
    </div>
    <footer>
      <div class="copyright">Все права защищены &copy; 2020 &nbsp; <a href="https://geekbrains.ru" target="_blank">GeekBrains</a></div>
    </footer>
  </body>
</html>