<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Контакты</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://www.freepngimg.com/thumb/logo/70063-logo-travel-design-free-hq-image.png" alt="Логотип">
        </div>
        <div class="social-icons">
            <a href="https://www.instagram.com/your_instagram_profile" target="_blank"><img src="icons8-instagram-48.png" alt="Instagram"></a>
            <a href="https://vk.com/your_vk_profile" target="_blank"><img src="icons8-vk-48.png" alt="VK"></a>
            <a href="https://www.facebook.com/your_facebook_profile" target="_blank"><img src="icons8-facebook-48.png" alt="Facebook"></a>
        </div>
        <div class="back-btn">
            <a href="Главнаяя.html">Назад</a>
        </div>
    </header>
    <div class="container">
        <h1>Контакты</h1>
        <div class="contact-info">
            <p><strong>Телефон:</strong> +7 (777) 625-66-66</p>
            <p><strong>Email:</strong> Bahcrutoi@example.com</p>
            <p><strong>Адрес:</strong> Г. Шымкент</p>
            <p><strong>Время работы:</strong> Пн-Пт: 9:00-18:00, Сб-Вс: выходные</p>
            <p><strong>Skype:</strong> example_skype</p>
            <p><strong>WhatsApp:</strong> +7 (777) 625-66-66</p>
        </div>
        <div class="map">
            
        </div>
        <div class="contact-form">
            <h2>Напишите нам</h2>
            <form action="#" method="post">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
</body>
<footer>
    <p>© 2024 Отдых и Туризм. Все права защищены.</p>
</footer>
</html>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('https://avatars.mds.yandex.net/i?id=ccd569d4dee2c56257884b06f8456ec26935d4c0-11387523-images-thumbs&n=13'); /* Путь к вашему фоновому изображению */
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

.back-btn a {
    text-decoration: none;
    color: black;
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