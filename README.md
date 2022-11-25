
## Zadanie passwordit



## Start

1. ### Configuration DB

localhost 3306 

root:root

db: yii2basic

2. ### Install packages

```bash
composer install
```
3. ### Run

```bash
php yii migrate
php yii serve
```

#### Url
Main page: http://localhost:8080

CRUD: http://localhost:8080/index.php?r=news%2Findex


### Run docker

```bash
docker-compose up
# in container php
composer install
php yii migrate
```

### Helpers

domain passedit.pl

packages:

* https://www.yiiframework.com/doc/guide/2.0/pl/start-gii - generate model,controller, crud

http://passedit.pl/index.php?r=gii

http://passedit.pl/index.php?r=news%2Findex

* https://demos.krajee.com/builder-details/tabular-form - generate form
