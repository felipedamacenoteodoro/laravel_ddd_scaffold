# Laravel DDD Scaffold

### The base for developing laravel ddd application

Laravel DDD Scaffold is a free, Open Source Starter kit a fasted way of building your custom and modular Laravel application based in DDD

Created with Laravel 7

See the [Domain-driven design](https://en.wikipedia.org/wiki/Domain-driven_design) for more details

## Installation


#### Requirements

https://laravel.com/docs/7.x


#### Clone Repo

```
git clone https://github.com/felipedamacenoteodoro/laravel_ddd_scaffold.git
```

Enter folder
```
cd laravel_ddd_scaffold
```

#### Using Docker

Exec Docker Compose
```
docker-compose up -d
```

Enter the app container
```
docker-compose exec app bash
```

Install Depencencies
```
composer install
```

Generate key
```
php artisan key:generate
```

Generate symbolic link to Storage
```
php artisan storage:link
```

#### If you don't use the docker

Install Depencencies
```
composer install
npm install
```

Generate .env file
```
cp .env.example .env
```

Generate APP_KEY
```
php artisan key:generate
```

If you are in production
```
sudo chown -R www-data:www-data storage
```

Database

```
# Create Data Base
mysql -u{user} -p{password}
mysql> create database laravel_ddd_scaffold;
```

```
# Add params into .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_ddd_scaffold
DB_USERNAME=user
DB_PASSWORD=password
```

#### Run

```
# Migrations
php artisan migrate

# Seeder (optional)
php artisan db:seed

# Compiling assets
npm run dev

# Run serve
php artisan serve

or to developer mode
npm run dev || npm run watch
```

## License

The © License 2020 - Felipe D. Teodoro.

---

> Developed with :bulb: :headphones: :coffee: by [@felipedamacenoteodoro](https://www.linkedin.com/in/felipedamacenoteodoro)
