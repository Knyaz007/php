<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список Туров</title>
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="image-container">
  <!--  <img th:src="@{/public/images/main.jpeg}" alt="main Image"/>-->
  <img src="{{ asset('images/main22.jpg') }}"   alt="main Image"/>
  <div class="image-text">
    <p>Paradise</p>
  </div>
</div>
<!-- Навигационная панель -->
<nav class="Mynavbar navbar-expand-lg navbar-light bg-light">
<button onclick="window.location.href='{{ route('hotels.index') }}'" type="button" class="btn btn-link">
    Отели
</button>
<button onclick="window.location.href='{{ route('buses.index') }}'" type="button" class="btn btn-link">
    Автобусы
</button>
<button onclick="window.location.href='{{ route('flights.index') }}'" type="button" class="btn btn-link">
    Авиабилета
</button>
<button onclick="window.location.href='{{ route('tours.index') }}'" type="button" class="btn btn-link">
    Туры
</button>
<button onclick="window.location.href='{{ route('trains.index') }}'" type="button" class="btn btn-link">
    ЖД/Билеты
</button>
   @if(auth()->check() && auth()->user()->isAdmin())
                   <button onclick="window.location.href='{{ route('bookings.index') }}'" type="button" class="btn btn-link">
    Реестр бронирования 
</button>
                    @endif

 








  <!-- Кнопка "Обратная связь" -->
  <button type="button" class="btn btn-link" data-toggle="modal" data-target="#feedbackModal">
    Обратная связь
  </button>

  <!-- Модальное окно "Обратная связь" -->
<!-- Модальное окно "Обратная связь" -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Обратная связь</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('/send-email') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="feedbackName">Ваше имя</label>
              <input type="text" class="form-control" id="feedbackName" name="name" placeholder="Введите ваше имя">
            </div>
            <div class="form-group">
              <label for="feedbackEmail">Ваш Email</label>
              <input type="email" class="form-control" id="feedbackEmail" name="email" placeholder="Введите ваш Email">
            </div>
            <div class="form-group">
              <label for="feedbackMessage">Сообщение</label>
              <textarea class="form-control" id="feedbackMessage" name="message" rows="4" placeholder="Введите ваше сообщение"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





<!-- Подключение SweetAlert2 и обработка формы с помощью AJAX -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


 









  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <!-- Conditionally render user information or registration/login buttons -->
         @if(Auth::check())
            <li class="nav-item">
                <span class="nav-link">{{ Auth::user()->name }}</span>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Вход</a>
            </li>
        @endif
    </ul>
</div>



</nav>


 
 @yield('content')
 

<footer>
  <div class="footer">
    <div class="column">
      <!-- Информация о копирайте -->


      <!-- Ссылки -->
      <nav>
        <ul>
          <li><a href="/privacy-policy">Политика конфиденциальности</a></li>
          <li><a href="/contact">Контакты</a></li>

          <li><a href="/home">Главная</a></li>
          <li><a href="/products">Продукты</a></li>
          <li><a href="/services">Услуги</a></li>
        </ul>
      </nav>

      <!-- Контактная информация -->

    </div>

    <div class="column">
      <!-- Ссылки на важные разделы сайта -->
      <address>
        <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
        <p>Телефон: 8 800 770 65 65</p>
        <p>Адрес: Россия, Владимирская область, Муром, ул.Орловская, дом 25"б", 412</p>
      </address>
      <div class="social-media">
        <a href="https://twitter.com/example" target="_blank"><img src="{{ asset('images/twitter-icon.png') }}" alt="Twitter"></a>
        <a href="https://www.facebook.com/example" target="_blank"><img src="{{ asset('images/facebook-icon.png') }}" alt="Facebook"></a>
         
        <!-- Добавьте другие иконки или ссылки на социальные сети -->
      </div>
      <!-- Ссылки на социальные сети -->


      <!-- Логотипы и брендирование -->

    </div>
    <div class="branding">

      <a href="https://www.mivlgu.ru/" target="_blank"><img  src="{{ asset('images/mi-vlgu.jpg') }}" alt="mi-vlgu"></a>

      <!-- Добавьте другие логотипы или элементы брендирования -->
    </div>
  </div>
  <p>&copy; 2024 My Website. The rights are not protected..</p>
</footer>

<!-- Подключение Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
