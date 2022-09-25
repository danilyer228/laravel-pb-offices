### Создать приложение на Laravel

Есть пользователь с admin@admin.com  pass: secret должен быть предустановлен через сидер
После авторизации есть форма в которой есть кнопка загрузить.
При нажатии на кнопку Загрузить в грид загружается список всех отделений Приватбанка в Никополе. Колонки таблицы: Название отделения, Город, Адрес, Индекс, Телефон

### Запуск

```
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
```

http://localhost:8080
