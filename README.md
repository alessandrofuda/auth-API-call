## Authenticated API call from child to parent application with Laravel + Passport 

- OAuth2 Server: todos
- Oauth2 Client: todoconsumer

**Todos** OAuth2 Server app: build on Laravel 5.6 + Passport package. Include routes/api.php with auth middleware.
To testing: 'php artisan serve' (http://127.0.0.1:8000 port)


**todoconsumer** Client: build on a simple PHP + GuzzleHttp + Bootstrap 4 template. Testing on Ubuntu 18.04 (php 7.2)
To testing: upload on /var/www/html/todoconsumer (http://localhost/todoconsumer)
