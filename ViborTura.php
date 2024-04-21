<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Выбор тура</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <div class="logo">
      <img src="https://www.freepngimg.com/thumb/logo/70063-logo-travel-design-free-hq-image.png" alt="Логотип">
    </div>
    <a href="Главнаяя.html" class="back-button">Назад</a>
  </header>
  
  <div class="tour-list">
    <div class="tour">
      <img src="https://tokio-travel.com/wp-content/uploads/2021/04/Antalya.jpg" alt="Tour 1">
      <div class="tour-info">
        <h2>Отдых на море в Турции</h2>
        <p>Исследуйте берега Турции, наслаждайтесь солнцем, морем и пляжами. Отдых в Турции - это великолепная возможность провести время на природе и насладиться отдыхом на море.</p>
        <button>Подробнее</button>
      </div>
    </div>
    <div class="tour">
      <img src="https://travelest.ru/images/for_articles2/320-ekskursii-v-parizhe-3.jpg" alt="Tour 2">
      <div class="tour-info">
        <h2>Экскурсия в Париж</h2>
        <p>Отправьтесь в романтическое путешествие в Париж, город любви и света. Посетите Эйфелеву башню, Лувр, Монмартр и другие знаменитые достопримечательности.</p>
        <button>Подробнее</button>
      </div>
    </div>
    <div class="tour">
      <img src="https://sportishka.com/uploads/posts/2022-03/thumbs/1647865409_30-sportishka-com-p-gudvangen-norvegiya-turizm-krasivo-foto-31.jpg" alt="Tour 3">
      <div class="tour-info">
        <h2>Путешествие по Долине Фиордов в Норвегии</h2>
        <p>Отправляйтесь на захватывающее путешествие в Долину Фиордов в Норвегии. Проведите время в удивительной природной красоте, наслаждаясь горами, водопадами и заливами.</p>
        <button>Подробнее</button>
      </div>
    </div>
  </div>
  <footer>
    <p>© 2024 Все права защищены</p>
  </footer>
</body>
</html>
<Style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-image: url('https://sportishka.com/uploads/posts/2022-03/1646174797_52-sportishka-com-p-tovari-dlya-turizma-turizm-krasivo-foto-62.jpg'); /* Фоновое изображение */
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
footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px;
  position: fixed;
  bottom: 0;
  width: 100%;
}
</Style>