<?php
require __DIR__ . '/autoload.php';

$users =  \App\Models\User::findAll();
echo \App\Models\User::TABLE; ?> <br/> 
<?php
var_dump($users);
?>
