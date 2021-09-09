Не были реализованы методы обновленияя и удаления, документация. Не в полной мере были реализованы реквесты для валидации.

Клонируем проект на пк

```shell
git clone https://github.com/step3003/test-donut-hole.git
```

Ставим зависимости
```shell
composer update
```

Меняем в .env данные бд

Делаем миграции
```shell
php artisan migrate
```
