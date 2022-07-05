# Technical_Sample
Technical sample projects done for learning

## Docker Guide
https://docs.google.com/document/d/16nSinx4xGhOodyQlkPNInCojOySoRM7l9oygYyX884c/edit?usp=sharing

Run the following command in the project root:
```
docker-compose up -d
```
Composer install
 * docker exec -it [container-name APP] bash
 * composer install
 * composer dump-autoload -o (optimised)
````````

PhpUnit test
 *Run inside docker exec -it [container-name APP] bash
 *Run ./vendor/bin/phpunit
 
````````
You can stop the Docker instance with the following command `docker-compose down`.


## Accessing the Site
*  <http://127.0.0.1:8000>



