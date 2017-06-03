redesigned-couscous
========

Instalação
-------------

1. `composer install`
2. `cp .env.example .env`
3. `php artisan key:generate`
4. `php artisan serve`

Migrations e Seeds
--------------

1. Para criar o banco: `mysql < database/create.sql --user=seuusuario -p`
2. `php artisan migrate:refresh --seed`

Equipe
----------
- Neyde Karen;
- Caroline Ferraz
- Juliana Luz;
- Adeilson Silva;
