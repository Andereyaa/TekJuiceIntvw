# Tek Juice Solution

## Requirements
1. PHP > 8
2. Symfony > 6
3. Composer
   
## Setup
1. Clone the project to your device and setp into the directory using terminal
2. run `composer install` to install dependencies
3. run `symfony server:start` to start server. Note the url and port number. normally it is 127.0.0.1:8000
4. In your browser enter in the address bar
   4.1. 127.0.0.1:8000/circle/{radius}            enter a numerical value for radius
   4.2. 127.0.0.1:8000/triangle/{a}/{b}/{c}       enter a numerical value for a, b, c
6. To run tests `php bin/phpunit`
