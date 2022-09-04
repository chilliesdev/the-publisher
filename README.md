# the-publisher
Take home assessment

# Set up
```
git clone https://github.com/chilliesdev/the-publisher
```

## To start up Subcriber test server
```
cd the-publisher/subscriber

composer install

php artisan serve --port=9000
```

## To start up Publisher server
```
cd ../publisher

composer install
```
// Change the ".env.example" to ".env"

```
add the following variables to the ".env"
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306

php artisan migrate --seed 

php artisan serve
```
