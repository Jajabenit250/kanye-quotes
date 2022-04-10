## Kanye West Random Five Quotes
## Required Tools 

- PHP 8
```bash
brew install php
```
- Composer
```bash
brew install composer
```
- Laravel
```bash
composer global require laravel/installer 
```
- Git
- Browser
- Postman

## Download

To Download use git

```bash
git clone https://github.com/Jajabenit250/kanye-quotes.git
```

then IN CMD go to Cloned project root folder
```bash
cd kanye-quotes
```

## Installation

To install the project you can use composer

```bash
composer install
```

## Run

```bash
php artisan serve --port=8000
```

## Backend API Link

Access Route In Postman

 - GET Random 5 Quotes --- ```GET http://localhost:8000/api/quote/random/5``` Random 5 Quotes
 - GET Random 10 Quotes --- ```GET http://localhost:8000/api/quote/random/10``` Random 5 Quotes

### Web Link 

Access The Route in your favorite browser
 - ```http://localhost:8000/``` 

### Tests

```bash
php artisan test
```
