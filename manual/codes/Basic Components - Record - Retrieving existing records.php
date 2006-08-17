<?php
$table = $session->getTable("User");

// find by primary key

$user = $table->find(2);
if($user !== false)
    print $user->name;

// get all users
foreach($table->findAll() as $user) {
    print $user->name;
}

// finding by dql
foreach($table->findByDql("name LIKE '%John%'") as $user) {
    print $user->created;
}

// finding objects with DQL

$users = $session->query("FROM User WHERE User.name LIKE '%John%'");
?>
