

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваши услуги</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="https://www.freepngimg.com/thumb/logo/70063-logo-travel-design-free-hq-image.png" alt="Логотип" class="logo">
        <h1>Ваши услуги</h1>
        <a href="Главнаяя.html" class="btn-home">На главную</a>
    </header>
    <main>
        <section class="service">
            <img src="https://kudamoscow.ru/uploads/50acd520154d1ecb03533461164f7211.jpeg" alt="Экскурсии" class="service-image">
            <div class="service-content">
                <h2>Экскурсии</h2>
                <p>Путешествуйте и открывайте для себя новые места с нашими захватывающими экскурсиями. Мы предлагаем широкий выбор туров по достопримечательностям, пешеходные экскурсии и многое другое!</p>
                <div class="decorative-line"></div>
            </div>
        </section>
        <section class="service">
            <img src="https://cdn.nur.kz/images/1120/82e1038338788af7.jpeg" alt="Отдых на природе" class="service-image">
            <div class="service-content">
                <h2>Отдых на природе</h2>
                <p>Отдохните от городской суеты и насладитесь красотой природы вместе с нами. Мы организуем пикники, кемпинги, походы в горы и многое другое для вашего идеального отдыха на свежем воздухе.</p>
                <div class="decorative-line"></div>
            </div>
        </section>
        <section class="service">
            <img src="https://cdn.tripster.ru/thumbs2/5b3c080a-02b0-11ed-a41e-56f772642bc6.1220x600.jpeg" alt="Активный отдых" class="service-image">
            <div class="service-content">
                <h2>Активный отдых</h2>
                <p>Любите активный отдых? Мы предлагаем широкий выбор возможностей для занятия спортом на отдыхе: велосипедные прогулки, водные виды спорта, альпинизм и многое другое!</p>
                <div class="decorative-line"></div>
            </div>
        </section>
        <section class="service">
            <img src="https://turk.estate/uploads/images/2020-10/semejnijotdih_480x320.jpg" alt="Семейный отдых" class="service-image">
            <div class="service-content">
                <h2>Семейный отдых</h2>
                <p>Проведите незабываемое время вместе с семьей! У нас есть множество активностей для детей и взрослых: игры, анимация, развлечения и многое другое.</p>
                <div class="decorative-line"></div>
            </div>
        </section>
        <section class="service">
            <img src=" https://inbusiness.kz/uploads/37/images/A2oeUwop.jpg" alt="Тур" class="service-image">
            <div class="service-content">
                <h2>Секретный Тур</h2>
                <p>"Погрузитесь в захватывающее приключение с нашим Секретным туром! Это уникальное путешествие предлагает вам возможность ощутить дух приключений, не зная заранее, в какую страну вы отправитесь. Подарите себе незабываемый опыт, где каждый день будет полон загадок и сюрпризов. Помимо этого, фишкой этого тура является уникальная возможность ощутить настоящий адреналин и волнение от неожиданных открытий и приключений в загадочной стране, которую вы узнаете только в момент отправления. Готовьтесь к волнующему путешествию, которое перевернет ваше представление о приключениях!"</p>
                <form action="submit_form.php" method="post" class="inquiry-form">
                    <label for="name">Имя:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Сообщение:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    
                    <button type="submit">Отправить запрос</button>
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
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTitXWnbq6NI7FE2Q0ilUOc2Tv5TYCnfQvD7n4CRuctJA&s');
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

.btn-home {
    position: absolute;
    top: 20px;
    right: 20px; /* Переместить кнопку вправо, чтобы она не перекрывала логотип */
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

h1 {
    margin: 0;
}

.btn-home {
    position: absolute;
    top: 20px;
    right: 20px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.btn-home:hover {
    background-color: #45a049;
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
    <footer>
        <p>© 2024 Отдых и Туризм. Все права защищены.</p>
    </footer>
</body>
</html>