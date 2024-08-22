# **Zatulin Test Project**

## **Установка**

Чтобы установить проект, выполните следующие шаги:

### **1. Клонируйте репозиторий**
Откройте терминал и выполните следующие команды:

```bash
git clone https://github.com/kriher50/Zatulin-Test-s.git
cd Zatulin-Test-s
2. Установите зависимости PHP
Используйте Composer для установки необходимых PHP-зависимостей:

bash
Копировать код
composer install
3. Установите зависимости Node.js
Установите зависимости Node.js и исправьте потенциальные уязвимости:

bash
Копировать код
npm install
npm audit fix --force
npm audit fix
4. Сборка ресурсов
Соберите фронтенд-ресурсы проекта с помощью команды:

bash
Копировать код
npm run build
5. Настройте файл .env
Создайте и настройте файл окружения:

bash
Копировать код
cp .env.example .env
php artisan key:generate
6. Выполните миграции и наполнение базы данных
Запустите миграции и выполните начальное наполнение базы данных:

bash
Копировать код
php artisan migrate
php artisan db:seed
php artisan db:seed --class=ArticleSeeder
7. Запустите локальный сервер
Запустите локальный сервер для разработки:

bash
Копировать код
php artisan serve
Быстрая установка
Если необходимо быстро установить проект, выполните все шаги одной командой:

bash
Копировать код
git clone https://github.com/kriher50/Zatulin-Test-s.git && \
cd Zatulin-Test-s && \
composer install && \
npm install && \
npm audit fix --force && \
npm audit fix && \
npm run build && \
cp .env.example .env && \
php artisan key:generate && \
php artisan migrate && \
php artisan db:seed && \
php artisan db:seed --class=ArticleSeeder && \
php artisan serve
Тестирование
1. Проверка дистанции
Для проверки дистанции используйте следующую команду:

bash
Копировать код
php artisan test:transport "200"
2. Проверка скобок
Для проверки правильности расстановки скобок используйте команду:

bash
Копировать код
php artisan test:smile "(((()))())))()((((()Привет! :)))))) Как дела? :((()"
arduino
Копировать код

This `README.md` format provides clear instructions for setting up and running 
