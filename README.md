## Authenticated API call from child to parent application with Laravel 5.6 + Passport 

- OAuth2 Server: /todos  (parent app)
- Oauth2 Client: /todoconsumer  (child app)

**Todos** OAuth2 Server app: build on Laravel 5.6 + Passport package. Include /todos GET API call (*routes/api.php*) with auth middleware.
To testing: 'php artisan serve' (http://127.0.0.1:8000 port)


**todoconsumer** Client: build on a simple PHP + GuzzleHttp + Bootstrap 4 template. Testing on Ubuntu 18.04 (php 7.2)
To testing: upload on /var/www/html/todoconsumer (http://localhost/todoconsumer).

Client --> POST API-call including:
- self client_id
- client_secret
- username of parent app registered user
- password of parent app registered user
