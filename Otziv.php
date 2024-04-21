

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Отзывы</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://www.freepngimg.com/thumb/logo/70063-logo-travel-design-free-hq-image.png" alt="Логотип">
        </div>
        <div class="back-btn">
            <a href="Главнаяя.html">Назад</a>
        </div>
    </header>
    <div class="container">
        <h1>Отзывы</h1>
        <div class="reviews">
            <div class="review">
                <div class="avatar">
                    <img src="https://avatars.mds.yandex.net/i?id=d08284358ec8b5e01af1d96bac1d23bbb2f919cd-11380860-images-thumbs&n=13" alt="Аватар пользователя">
                </div>
                <div class="info">
                    <p><strong>Имя пользователя:</strong> Иван Иванов</p>
                    <div class="stars">
                        ★★★★★
                    </div>
                </div>
                <p>"Отличный сервис! Путешествие было незабываемым благодаря профессионализму и дружелюбию персонала."</p>
                <div class="response">
                    <div class="avatar">
                        <img src="https://investtalk.ru/wp-content/uploads/2017/06/otzyvy-klientov-2.png" alt="Аватар компании">
                    </div>
                    <p><strong>Ответ компании:</strong> Благодарим за отзыв! Мы рады, что вам понравился наш сервис. Ждем вас снова!</p>
                </div>
            </div>
            <div class="review">
                <div class="avatar">
                    <img src="https://esquimaltmfrc.com/wp-content/uploads/2015/09/flat-faces-icons-circle-man-9.png" alt="Аватар пользователя">
                </div>
                <div class="info">
                    <p><strong>Имя пользователя:</strong> Анна Петрова</p>
                    <div class="stars">
                        ★★★★☆
                    </div>
                </div>
                <p>"Очень довольны качеством услуг. Все организовано на высшем уровне. Рекомендуем!"</p>
                <div class="response">
                    <div class="avatar">
                        <img src="https://investtalk.ru/wp-content/uploads/2017/06/otzyvy-klientov-2.png" alt="Аватар компании">
                    </div>
                    <p><strong>Ответ компании:</strong> Спасибо за отзыв! Мы всегда стараемся предоставить лучший сервис для наших клиентов.</p>
                </div>
            </div>
            <div class="reviews">
              <div class="review">
                  <div class="avatar">
                      <img src="https://w7.pngwing.com/pngs/78/538/png-transparent-service-industry-company-dentistry-rosemary-miscellaneous-game-company.png" alt="Аватар пользователя">
                  </div>
                  <div class="info">
                      <p><strong>Имя пользователя:</strong> Иван Иванов</p>
                      <div class="stars">
                          ★★★★★
                      </div>
                  </div>
                  <p>"Отличный сервис! Путешествие было незабываемым благодаря профессионализму и дружелюбию персонала."</p>
                  <div class="response">
                      <div class="avatar">
                          <img src="https://investtalk.ru/wp-content/uploads/2017/06/otzyvy-klientov-2.png" alt="Аватар компании">
                      </div>
                      <p><strong>Ответ компании:</strong> Благодарим за отзыв! Мы рады, что вам понравился наш сервис. Ждем вас снова!</p>
                  </div>
              </div>
              <div class="reviews">
                <div class="review">
                    <div class="avatar">
                        <img src="https://r1.nubex.ru/s13952-3ac/f3510_65/avatar-woman.png" alt="Аватар пользователя">
                    </div>
                    <div class="info">
                        <p><strong>Имя пользователя:</strong> Иван Иванов</p>
                        <div class="stars">
                            ★★★★★
                        </div>
                    </div>
                    <p>"Отличный сервис! Путешествие было незабываемым благодаря профессионализму и дружелюбию персонала."</p>
                    <div class="response">
                        <div class="avatar">
                            <img src="https://investtalk.ru/wp-content/uploads/2017/06/otzyvy-klientov-2.png" alt="Аватар компании">
                        </div>
                        <p><strong>Ответ компании:</strong> Благодарим за отзыв! Мы рады, что вам понравился наш сервис. Ждем вас снова!</p>
                    </div>
                </div>
            <!-- Добавьте аналогичные блоки для остальных отзывов -->
        </div>
    </div>
    <footer>
        <p>© 2024 Отдых и Туризм. Все права защищены.</p>
    </footer>
</body>
</html>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('animation.png'); /* Путь к вашему фоновому изображению */
    background-size: cover;
    background-position: center;
}

header {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo img {
    height: 50px;
    width: auto;
    margin-left: 20px;
}

.back-btn a {
    margin-right: 20px;
    text-decoration: none;
    color: black;
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