### Installation Instructions

- Clone the repo.

```shell
  git clone git@github.com:mostafa68582/hotel-booking.git

  cd hotel-booking
    
  composer install
    
  cp .env.example .env / php -r "file_exists('.env') || copy('.env.example', '.env');"
    
  php artisan key:generate --ansi
    
  mysql -uroot
    
  create database hotel_booking;
```    

- edit `.env` file

```shell
  php artisan migrate --seed
```

- if you change something in js file

```shell
  npm install && npm run dev
```
