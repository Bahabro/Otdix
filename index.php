
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_field('заголовок_сайта'); ?></title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<header>
    <div class="contact-info">
        <p></p>
        <p></p>
    </div>
    <img src="<?php the_field('логотип'); ?>" alt="Логотип" class="logo">
    <ul class="tabs">
    
    <li><a href="#contakti"><?php the_field('kon_t'); ?></a></li>
        <li><a href="#otziv"><?php the_field('otziv'); ?></a></li>
        <li><a href="#Uslugi"><?php the_field('uslygi'); ?></a></li>
        <li><a href="#Vibor"><?php the_field('vibor'); ?></a></li>
    </ul>
    
</header>
    <div class="gallery">
        <h2><?php the_field('galireya'); ?></h2>
        <button class="prev" onclick="prevImage()">&#10094;</button>
        <ul>
            <li><img src="<?php the_field('1_фото'); ?>" alt="Image 1"></li>
            <li><img src="<?php the_field('2фото'); ?>" alt="Image 2"></li>
            <li><img src="<?php the_field('3фото'); ?>" alt="Image 3"></li>
            <!-- Добавьте больше изображений, если нужно -->
            <li><img src=" <?php the_field('4фото'); ?>" alt="Image 4"></li>
           
        </ul>
        <button class="next" onclick="nextImage()">&#10095;</button>
    </div>
    <section class="blog">
        <section class="blog">
            <h2><?php the_field('about_name'); ?></h2>
            <div class="blog-post">
                <p><?php the_field('about_blog'); ?></p>
            </div>
            <!-- Добавьте больше постов по аналогии, если нужно -->
        </section>
        <section class="about-us">
            <h2><?php the_field('about_A'); ?></h2>
            <?php the_field('about_Text'); ?>
        </section>
    <footer>

    </footer>
</body>
</html>
<Style>
/* Общие стили для страницы */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-size: cover;
}
/* Стили для header */
header {
    display: flex;
    justify-content: space-between; /* Располагаем элементы по краям */
    align-items: center; /* Выравниваем элементы по вертикали */
    padding: 10px 20px;
    background-color: rgba(255, 255, 255, 0.8);
}
/* Стили для логотипа */
.logo {
    width: 100px;
    height: auto;
}
/* Стили для вкладок */
.tabs {
    list-style-type: none;
    margin: 30px;
    padding: 0;
    display: flex;
    justify-content: left; /* Располагаем вкладки по центру */
    align-items: center;
}
.tabs li {
    margin-right: 20px;
}
.tabs li:last-child {
    margin-right: 550px;
}
.tabs li a {
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.tabs li a:hover {
    color: #666;
}
/* Стили для контактной информации */
.contact-info {
    text-align: right; /* Выравнивание по правому краю */
    color: #000000;
    margin-right: 20px; /* Добавляем отступ справа, чтобы контактная информация не прижималась к логотипу */
}
/* Стили для раздела новостей */
.news {
    text-align: center;
    margin-top: 50px;
}
/* Стили для заголовка новостей */
.news-heading {
    margin-bottom: 20px;
}
/* Стили для контейнера новостей */
.news-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 5px;
}
/* Стили для отдельной новости */
.news-container article {
    margin-bottom: 20px;
}
.news-container article h2 {
    margin-top: 0;
}
.news-container article p {
    color: #666;
}
.gallery {
    text-align: center;
    position: relative;
}
.gallery h2 {
    margin-bottom: 10px;
}
.gallery button {
    background-color: transparent;
    border: none;
    font-size: 20px; /* Уменьшаем размер шрифта стрелок */
    cursor: pointer;
    outline: none;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 5px; /* Добавляем немного отступа для кнопок */
}
.prev {
    left: 20px; /* Приближаем левую кнопку */
}
.next {
    right: 20px; /* Приближаем правую кнопку */
}
.gallery {
    text-align: center;
    position: relative;
}
.gallery h2 {
    margin-bottom: 10px;
}
.gallery button {
    background-color: transparent;
    border: none;
    font-size: 24px;
    cursor: pointer;
    outline: none;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 10px;
}
.prev {
    left: 350px; /* Положение кнопки "назад" относительно списка изображений */
}
.next {
    right: 350px; /* Положение кнопки "вперёд" относительно списка изображений */
}
.gallery ul {
    list-style: none;
    padding: 0;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
}
.gallery li {
    margin: 10px;
}
.gallery img {
    width: 650px;
    height: auto;
}
.blog {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(200, 200, 200, 0.5); /* Чуть прозрачный серый фон */
    border-radius: 10px; /* Закруглим углы блока */
}
.blog h2 {
    text-align: center;
}
g-post {
    margin-bottom: 30px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 20px;
}
.blog-post h3 {
    margin-top: 0;
}
.blog-post a {
    color: #007bff;
    text-decoration: none;
}
.blog-post a:hover {
    text-decoration: underline;
}
.additional-content {
    display: none; /* Скрытый по умолчанию */
}
footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.8); /* Прозрачный белый фон */
    text-align: center;
    padding: 10px 0;
}
footer p {
    margin: 0;
    color: #333; /* Цвет текста */
}
</Style>
<script>
    let currentImageIndex = 0;
const images = document.querySelectorAll('.gallery li');

function showImage(index) {
    images.forEach((image, i) => {
        if (i === index) {
            image.style.display = 'block';
        } else {
            image.style.display = 'none';
        }
    });
}
function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    showImage(currentImageIndex);
}
function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    showImage(currentImageIndex);
}
// Показать первое изображение при загрузке страницы
showImage(currentImageIndex);

</script>
<?php $logo_url = get_field('название_вашего_поля_для_логотипа'); ?>
<?php if($logo_url): ?>
    <img src="<?php echo esc_url($logo_url); ?>" alt="Логотип">
<?php endif; ?>
<body>
    

<section id="otziv">
</section>
    <header>
        <div class="logo">

        
    </header>
    
    <div class="container">
        <h1><?php the_field('about_Ot'); ?></h1>
        <div class="reviews">
            <div class="review">
                <div class="avatar">
                    <img src="<?php the_field('фото_пользователя_1'); ?>" alt="Аватар пользователя">
                </div>
                <div class="info">
                    <p><strong> <?php the_field('imya_i'); ?> </strong>
                    <?php the_field('about_first'); ?></p>
                    <div class="stars">
                    </div>
                  
                </div>
                <p><?php the_field('about_otvetfirst'); ?></p>
                <div class="response">
                    <div class="avatar">
                        <img src="<?php the_field('фото_компании1'); ?>" alt="Аватар компании">
                    </div>
                    <p><strong><?php the_field('otvetcompant'); ?></strong> <?php the_field('kompany_otvet'); ?></p>
                </div>
            </div>
            <div class="review">
                <div class="avatar">
                    <img src="<?php the_field('фото_ползователя2'); ?>" alt="Аватар пользователя">
                </div>
                <div class="info">
                    <p><strong><?php the_field('imya_p2'); ?></strong> <?php the_field('naz_pol2'); ?></p>
                    <div class="stars">
            
                    </div>
                </div>
                <p><?php the_field('sam_ot2'); ?></p>
                <div class="response">
                    <div class="avatar">
                        <img src="<?php the_field('фото_компании2'); ?>" alt="Аватар компании">
                    </div>
                    <p><strong><?php the_field('ot_kom2'); ?></strong><?php the_field('sam_otKomp2'); ?></p>
                </div>
            </div>
            <div class="reviews">
              <div class="review">
                  <div class="avatar">
                      <img src="<?php the_field('фото_пользователя3'); ?>" alt="Аватар пользователя">
                  </div>
                  <div class="info">
                      <p><strong><?php the_field('imya_p3'); ?></strong><?php the_field('naz_pol3'); ?></p>
                      <div class="stars">
                     
                      </div>
                  </div>
                  <p><?php the_field('sam_ot3'); ?></p>
                  <div class="response">
                      <div class="avatar">
                          <img src="<?php the_field('фото_компании3'); ?>" alt="Аватар компании">
                      </div>
                      <p><strong><?php the_field('ot_kom3'); ?></strong> <?php the_field('sam_otk3'); ?></p>
                  </div>
              </div>
              <div class="reviews">
                <div class="review">
                    <div class="avatar">
                        <img src="<?php the_field('фото_пользователя_4'); ?>" alt="Аватар пользователя">
                    </div>
                    <div class="info">
                        <p><strong><?php the_field('imya_4'); ?></strong><?php the_field('im_4'); ?></p>
                        <div class="stars">
                          
                        </div>
                    </div>
                    <p><?php the_field('ot_pol4'); ?></p>
                    <div class="response">
                        <div class="avatar">
                            <img src="<?php the_field('фото_компании4'); ?>" alt="Аватар компании">
                        </div>
                        <p><strong><?php the_field('ot_komp4'); ?></strong> <?php the_field('sam_ot4'); ?></p>
                    </div>
                </div>
            <!-- Добавьте аналогичные блоки для остальных отзывов -->
        </div>
    </div>
    <footer>
    
    </footer>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-size: cover;
    background-position: center;
}

header {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 10px 0;
    display: flex;
    justify-content: center; /* Центрирование по горизонтали */
    align-items: center;
}

.logo img {
    height: 50px;
    width: auto;
    margin-left: 20px;
}



.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.reviews {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.review {
    width: 80%;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #fff;
}

.review:last-child {
    margin-bottom: 0;
}

.avatar img {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    margin-right: 10px;
    object-fit: cover;
}

.stars {
    color: gold;
    margin-bottom: 10px;
}

.stars::after {
    content: "★★★★★";
    letter-spacing: 5px;
}

.response {
    padding-left: 60px;
    border-left: 2px solid #ccc;
}

.response p {
    margin: 5px 0;
}
footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.8); /* Прозрачный белый фон */
    text-align: center;
    padding: 10px 0;
}

footer p {
    margin: 0;
    color: #333; /* Цвет текста */
}
</style>

<section id="Uslugi">
</section>
    <header>
   
        <h1><?php the_field('nash_ys'); ?></h1>
      
    </header>
    <button class="back-button" onclick="window.scrollTo(0, 0)"><?php the_field('button_back'); ?></button>
    
    <main>
        <section class="service">
            <img src="<?php the_field('изоброжения_экскурсии_'); ?>" alt="Экскурсии" class="service-image">
            <div class="service-content">
                <h2><?php the_field('ecs_k'); ?></h2>
                <p><?php the_field('text_ecs'); ?></p>
                <div class="decorative-line"></div>
            </div>
        </section>
        <section class="service">
            <img src="<?php the_field('изоброжения_отдых_на_природе'); ?>" alt="Отдых на природе" class="service-image">
            <div class="service-content">
                <h2><?php the_field('otdix_zag'); ?></h2>
                <p><?php the_field('text_otdixx'); ?></p>
                <div class="decorative-line"></div>
            </div>
        </section>
        <section class="service">
            <img src="<?php the_field('изоброжения_активный_отдых'); ?>" alt="Активный отдых" class="service-image">
            <div class="service-content">
                <h2><?php the_field('zag_aktiv'); ?></h2>
                <p><?php the_field('text_aktiv'); ?></p>
                <div class="decorative-line"></div>
            </div>
        </section>
        <section class="service">
            <img src="<?php the_field('изоброжения_семейный_отдых'); ?>" alt="Семейный отдых" class="service-image">
            <div class="service-content">
                <h2><?php the_field('family_zag'); ?></h2>
                <p><?php the_field('text_sem'); ?></p>
                <div class="decorative-line"></div>
            </div>
        </section>
        <section class="service">
            <img src=" <?php the_field('изоброжения_секретный_тур'); ?>" alt="Тур" class="service-image">
            <div class="service-content">
                <h2><?php the_field('secret_t'); ?></h2>
                <p><?php the_field('secret_text'); ?></p>
                <form action="submit_form.php" method="post" class="inquiry-form">
                    <label for="name"><?php the_field('na_me'); ?></label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email"><?php the_field('em_ile'); ?></label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message"><?php the_field('massege'); ?></label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    
                    <button type="submit"><?php the_field('opttt'); ?></button>
                </form>
                <div class="decorative-line"></div>
            </div>
        </section>
    </main>
    <style>
        
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
}

header {
    background-color: rgba(240, 240, 240, 0.9);
    padding: 20px;
    text-align: center;
    position: relative;
}

.logo {
    position: absolute;
    top: 0px;
    left: 20px;
    width: 70px; /* Ширина логотипа */
    height: auto; /* Автоматическое соотношение сторон */
}
.back-button {
    text-decoration: none;
    color: #333;
    padding: 8px 16px;
    border: 1px solid #333;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
    display: block;
    margin: 0 auto;
  }
  
  .back-button:hover {
    background-color: #333;
    color: #fff;
    transform: scale(1.1);
  }

main {
    padding: 20px;
}

.service {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.service-image {
    flex: 0 0 40%;
    max-width: 40%;
    height: auto;
    object-fit: cover;
}

.service-content {
    padding: 20px;
    flex: 1;
}

.service h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

.service p {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
}

.decorative-line {
    width:100%;
    height: 10px;
    background-color: #ff8c00;
    margin-top: 10px;
    margin-bottom: 10px;
}
.inquiry-form {
    text-align: center;
}

.inquiry-form label {
    display: block;
    margin-bottom: 5px;
}

.inquiry-form input,
.inquiry-form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ff8c00;
    border-radius: 4px;
    box-sizing: border-box;
}

.inquiry-form button {
    background-color: #ff8c00;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.inquiry-form button:hover {
    background-color: #ffaa33;
}
footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.8); /* Прозрачный белый фон */
    text-align: center;
    padding: 10px 0;
}

footer p {
    margin: 0;
    color: #333; /* Цвет текста */
}

    </style>
   
<section id="Vibor">
</section>
  <header>
    <div class="logo">
    </div>
    <button class="back-button" onclick="window.scrollTo(0, 0)"><?php the_field('кнопка_назад'); ?></button>
  
  </header>
  
  <div class="tour-list">
    <div class="tour">
      <img src="<?php the_field('изображения_турция_'); ?>" alt="Tour 1">
      <div class="tour-info">
        <h2><?php the_field('заголовок_отдых_на_море_в_турции'); ?></h2>
        <p><?php the_field('текст__отдых_на_море_в_турции'); ?></p>
        <button><?php the_field('кнопка_отдых_на_море_в_турции'); ?></button>
      </div>
    </div>
    <div class="tour">
      <img src="<?php the_field('изоброжения_Париж'); ?>" alt="Tour 2">
      <div class="tour-info">
        <h2><?php the_field('заголовок_экскурсия_в_париж'); ?></h2>
        <p><?php the_field('текст_экскурсия_в_париж'); ?></p>
        <button><?php the_field('кнопка_экскурсия_в_париж'); ?></button>
      </div>
    </div>
    <div class="tour">
      <img src="<?php the_field('изображения_путешествие_по_долине_фиордов_в_норвегии'); ?>" alt="Tour 3">
      <div class="tour-info">
        <h2><?php the_field('заголовок_путешествие_по_долине_фиордов_в_норвегии'); ?></h2>
        <p><?php the_field('текст_путешествие_по_долине_фиордов_в_норвегии'); ?></p>
        <button><?php the_field('кнопка_путешествие_по_долине_фиордов_в_норвегии'); ?></button>
      </div>
    </div>
  </div>
  <footer>

  </footer>
</body>
</html>
<Style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-image: url('<?php the_field('фоновое_изоброжения_сайта'); ?>'); /* Фоновое изображение */
  background-size: cover; /* Растягиваем изображение на весь экран */
  background-position: center;
  background-attachment: fixed; /* Фиксируем фон */
}

header {
  background-color: rgba(255, 255, 255, 0.7); /* Прозрачный фон заголовка */
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo img {
  max-width: 70px;
  height: auto;
}

.back-button {
  text-decoration: none;
  color: #333;
  padding: 8px 16px;
  border: 1px solid #333;
  border-radius: 5px;
  transition: background-color 0.3s, color 0.3s;
}

.back-button:hover {
  background-color: #333;
  color: #fff;
  transform: scale(1.1);
}

.tour-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  margin-top: 20px;
}

.tour {
  width: 30%;
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px;
  margin-bottom: 20px;
  border-radius: 5px;
}

.tour img {
  width: 100%;
  height: 200px; /* Установите желаемую высоту изображения */
  object-fit: cover; /* Обрезаем изображение до заданных размеров */
  border-top-left-radius: 5px; /* Закругляем верхний левый угол изображения */
  border-top-right-radius: 5px; /* Закругляем верхний правый угол изображения */
}

.tour h2 {
  margin-top: 10px;
  font-size: 20px;
}

.tour p {
  margin-top: 10px;
  font-size: 16px;
}
</Style>
<header>
        <div class="logo">

        </div>
      
        <div class="logo">
    </div>
    <button class="back-button" onclick="window.scrollTo(0, 0)"><?php the_field('кнопка_назад'); ?></button>
 
  </header>
        </div>
        <section id="contakti">
</section>
    </header>
    <div class="container">
        <h1><?php the_field('заголовок_контакты_'); ?></h1>
        <div class="contact-info">
            <p><strong><?php the_field('заголовок_контакты_'); ?></strong> <?php the_field('сам_номер_телефона'); ?></p>
            <p><strong><?php the_field('emailllll'); ?></strong> <?php the_field('сам_текст_эмайла'); ?></p>
            <p><strong><?php the_field('адрес'); ?></strong> <?php the_field('сам_текст_адреса'); ?></p>
            <p><strong><?php the_field('время_работы'); ?></strong><?php the_field('сам_текст_время_работы'); ?></p>
            <p><strong><?php the_field('skype'); ?></strong> <?php the_field('сам_текст_skype'); ?></p>
            <p><strong><?php the_field('whatssapp'); ?></strong> <?php the_field('сам_текст_для_WhatsApp'); ?></p>
        </div>
        <div class="map">
            
        </div>
        <div class="contact-form">
            <h2><?php the_field('заголовок_напишите_нам'); ?></h2>
            <form action="#" method="post">
                <label for="name"><?php the_field('имя_напишите_нам'); ?></label>
                <input type="text" id="name" name="name" required>
                <label for="email"><?php the_field('эмайл_напишите_нам'); ?></label>
                <input type="email" id="email" name="email" required>
                <label for="message"><?php the_field('сообщение_напищите_нам'); ?></label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit"><?php the_field('кнопка_отправитььь'); ?></button>
            </form>
        </div>
    </div>
<footer>
<p><?php the_field('все_права_защинены'); ?></p>
</footer>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

header {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo img {
    height: 50px;
    width: auto;
}

.social-icons img {
    height: 30px;
    width: auto;
    margin-right: 10px;
}

.back-button {
    text-decoration: none;
    color: #333;
    padding: 8px 16px;
    border: 1px solid #333;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
    display: block;
    margin: 0 auto;
  }
  
  .back-button:hover {
    background-color: #333;
    color: #fff;
    transform: scale(1.1);
  }

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8); /* Цвет фона контейнера */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Тень */
}

h1 {
    text-align: center;
}

.contact-info p {
    margin-bottom: 10px;
}

.map img {
    display: block;
    max-width: 100%;
    margin-top: 20px;
}

.contact-form {
    margin-top: 30px;
}

.contact-form h2 {
    margin-bottom: 10px;
}

.contact-form form {
    display: flex;
    flex-direction: column;
}

.contact-form label {
    margin-bottom: 5px;
}

.contact-form input,
.contact-form textarea {
    margin-bottom: 10px;
    padding: 5px;
    border: 1px solid #ccc;
}

.contact-form button {
    padding: 10px 20px;
    border: none;
    background-color: #007bff;
    color: white;
    cursor: pointer;
}

.contact-form button:hover {
    background-color: #0056b3;
}


</style>