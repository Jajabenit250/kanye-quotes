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
 
<img width="1080" alt="Screen Shot 2022-04-10 at 16 31 49" src="https://user-images.githubusercontent.com/51251401/162624397-50fa6565-6496-47f9-8cf9-95f16869fbdc.png">


### Web Link 

Access The Route in your favorite browser
 - ```http://localhost:8000/``` 

![image](https://user-images.githubusercontent.com/51251401/162624292-c9cb4aef-9f83-407d-8cd5-b0d7bec381c3.png)

### Tests

```bash
php artisan test
```
<img width="1121" alt="Screen Shot 2022-04-10 at 16 34 52" src="https://user-images.githubusercontent.com/51251401/162624507-61d1711b-acd0-414b-ac14-e5084de12d6d.png">
