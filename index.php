<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отдых и Туризм</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <img src="https://www.freepngimg.com/thumb/logo/70063-logo-travel-design-free-hq-image.png" alt="Логотип" class="logo">
        <ul class="tabs">
            <li><a href="Контакты.html">Контакты</a></li>
            <li><a href="Отзыв.html">Отзывы</a></li>
            <li><a href="Услуги.html">Услуги</a></li>
            <li><a href="Выбрать ТУр.html">Выбор тура</a></li>
        </ul>
        <div class="contact-info">
            <p>Телефон: +7 (777) 625-66-66</p>
            <p>Email: BahCrytou@example.com</p>
        </div>
    </header>
    <div class="gallery">
        <h2>Галерея</h2>
        <button class="prev" onclick="prevImage()">&#10094;</button>
        <ul>
            <li><img src="https://tut1.ru/uploads/posts/2022-08/1661456571_chto-delat-kogda-vy-prishli-s-pohoda.jpg" alt="Image 1"></li>
            <li><img src="https://vsegda-pomnim.com/uploads/posts/2022-04/1650914664_30-vsegda-pomnim-com-p-turizm-gori-foto-34.jpg" alt="Image 2"></li>
            <li><img src="https://novikovnn.ru/wp-content/uploads/e/e/8/ee8aabe4e97ff43ddc485271e683e280.jpeg" alt="Image 3"></li>
            <!-- Добавьте больше изображений, если нужно -->
            <li><img src=" https://sportishka.com/uploads/posts/2022-03/1646912120_1-sportishka-com-p-molodezhnii-turizm-turizm-krasivo-foto-1.jpg" alt="Image 3"></li>
           
        </ul>
        <button class="next" onclick="nextImage()">&#10095;</button>
    </div>
    <section class="blog">
        <section class="blog">
            <h2>Блог</h2>
            <div class="blog-post">
                <h3>10 лучших мест для путешествий в 2024 году</h3>
                <p>Привет, путешественники! Сегодня мы расскажем вам о 10 лучших местах для путешествий в 2024 году. Готовы погрузиться в увлекательные приключения?</p>
                <p>От величественных горных вершин до живописных пляжей и захватывающих культурных достопримечательностей - здесь вы найдете все, что нужно для незабываемого отдыха!</p>
                <p>Добро пожаловать в наш блог об отдыхе и туризме! Здесь мы делимся с вами самыми интересными новостями из мира путешествий, рассказываем о лучших местах для отдыха, даем советы по планированию и подготовке к поездкам, а также делимся личными историями и впечатлениями.</p>
        <p>Будьте в курсе последних туристических трендов, узнавайте об уникальных местах, которые стоит посетить, и давайте вместе создадим свой список мест, которые стоит увидеть в жизни.</p>
        <p>Присоединяйтесь к нашему сообществу и отправляйтесь в захватывающие путешествия по всему миру!</p>
    
            </div>
            <!-- Добавьте больше постов по аналогии, если нужно -->
        </section>
        <section class="about-us">
            <h2>О нас</h2>
            <p>Отдых и Туризм - это ваш путеводитель в мире приключений! Мы - команда энтузиастов, которые любят путешествовать и делятся своим опытом с другими.</p>
            <p>Наши статьи, советы и рекомендации помогут вам сделать ваше путешествие незабываемым. Мы стремимся предоставить вам самую актуальную информацию о лучших местах для посещения, о культурных особенностях различных стран, о лучших отелях и ресторанах, а также о том, как путешествовать безопасно и с комфортом.</p>
            <p>Благодаря нашим советам вы сможете спланировать идеальное путешествие, которое будет соответствовать вашим желаниям и бюджету. Присоединяйтесь к нашему сообществу и начните свое приключение уже сегодня!</p>
        </section>
    <footer>
        <p>© 2024 Отдых и Туризм. Все права защищены.</p>
    </footer>
</body>
</html>
<Style>
/* Общие стили для страницы */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-image: url('https://avatars.mds.yandex.net/i?id=19c1e503a600375ce28c088e2e0dfe4c8ae58808-12475834-images-thumbs&n=13');
    background-size: cover;
}

/* Стили для header */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
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
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.tabs li {
    margin-right: 20px;
}

.tabs li:last-child {
    margin-right: 0;
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
    text-align: right;
    color: #000000;
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

.blog-post {
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