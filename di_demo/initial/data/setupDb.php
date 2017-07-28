<?php

try {
    $dbPath = __DIR__.'/database.sqlite';
    $dbhelper = new PDO('sqlite:'.$dbPath);
} catch(PDOException $e) {
    die('Error! '.$e->getMessage());
}

$dbhelper->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/*** begin the transaction ***/
$dbhelper->beginTransaction();

$query = <<<EOF

DROP TABLE IF EXISTS subscribers;

CREATE TABLE subscribers (
    id INTEGER PRIMARY KEY,
    email STRING,
    name STRING
);

INSERT INTO subscribers VALUES(1,'piyuesh23@gmail.com', 'Piyuesh Gmail');
INSERT INTO subscribers VALUES(2,'piyuesh23@qed42.com', 'Piyuesh QED42');
EOF
    ;

$dbhelper->exec($query);
$dbhelper->commit();