# OLX-backend graphql

## Installing Composer Dependencies for Existing Applications

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs
```

### Copy the file located in the project root
```
cp env.example .env
```

### Start sail
```
./vendor/bin/sail up
```

### Generating the database
```
./vendor/bin/sail artisan migrate
```
### Loading the data
```
./vendor/bin/sail artisan db:seed
```
### access the url
```
http://localhost:8080/graphiql
```

### Customize configuration
See [Configuration to laravel.com](https://laravel.com/docs/11.x/sail)

