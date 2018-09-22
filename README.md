
[1.Now](https://zeit.co/now) 

[2.nginx](https://github.com/paprikaLang/docker-demos/blob/master/nginx/log.txt)

[3.swift & vapor](https://github.com/paprikaLang/docker-demos/blob/master/vapor/log.txt)

4.compose-demo

```
services:
    product-service:
        build: ./product
        ... ...
    website:
        image: php:apache
        volumes:
            - ./websites:/var/www/html

```

```
<?php 
    $json = file_get_contents('http://product-service');
    $obj = json_decode($json);
```
