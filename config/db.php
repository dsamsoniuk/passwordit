<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=mysqldb;dbname=yii',
    'username' => 'yii',
    'password' => 'yii',
    'charset' => 'utf8',
    // mysql -h localhost -P 8989 --protocol=tcp -u nazwapl -p
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
