Инструкция по установке:
клонируем репозиторий на сервер
создаем бд и импортируем туда файл vittim.sql лежащий в корне проекта
в файле env указываем 
  DB_HOST=сервер бд
  DB_PORT=порт бд
  DB_DATABASE=название базы
  DB_USERNAME=логин
  DB_PASSWORD=пароль

в консоли переходим в корень проекта и выполнить команду
php artisan storage:link
