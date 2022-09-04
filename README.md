# the-publisher
Take home assessment

# Set up
```
run git clone https://github.com/chilliesdev/the-publisher
```

## To start up Subcriber test server
```
run cd the-publisher/subscriber

run composer install

run php artisan serve --port=9000
```

## To start up Publisher server
```
run cd ../publisher

// Change the ".env.example" to ".env"

add the following variables to the ".env"
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306

run php artisan migrate --seed 

run php artisan serve
```
