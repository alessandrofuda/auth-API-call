### Authenticated API call from child to parent application with Laravel 5.6 + Passport 

- OAuth2 Server: `/todos`  (parent app)
- Oauth2 Client: `/todoconsumer`  (child app)

**Todos** OAuth2 Server app: build on Laravel 5.6 + Passport package.  
Include `/todos` `GET` API Route (*routes/api.php*) with auth middleware.  
To testing: `php artisan serve` ([http://127.0.0.1:8000](http://127.0.0.1:8000) port)


**todoconsumer** Client: build on a simple PHP + GuzzleHttp + Bootstrap 4 template.  
Testing on Ubuntu 18.04 (php 7.2)  
To run: upload to `/var/www/html/todoconsumer` ([http://localhost/todoconsumer](http://localhost/todoconsumer) ).  





### OAuth2 Flow Client->Server->Client->Server->Client

1. Client --> makes `POST` API-call to Server (to `/oauth/token` web route) including:  

- self `client_id`
- `client_secret`
- `username` of parent app registered user
- `password` of parent app registered user


2. OAuth2 Server --> provides the Access Token (Passport use JWT)

3. Client --> makes `GET` API-call including AccessToken in Headers:
- `accept => application/json`
- `Authorization => Bearer $access_token`

4. OAuth2 Server --> provides the Access to Middleware-Protected API Route and provides a Todos list

5. Client --> data rendering
