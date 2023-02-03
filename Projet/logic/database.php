<?php
require '../models/User.php';
function loadUser(string $email) : User 
{
    $host = "db.3wa.io";
$port = "3306";
$dbname = "kilyangerard_phpj7";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "kilyangerard";
$password = "e17f39e5cb4de95dba99a2edd6835ab4";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
    $query = $db->prepare('SELECT * FROM users WERE email="value"');
    $parameter = ["value" => $email];
    $query->execute($parameter);
    $users = $query->fetch(PDO::FETCH_ASSOC);
    
}
function saveUser(User $user) : User
{
    $host = "db.3wa.io";
$port = "3306";
$dbname = "kilyangerard_phpj7";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "kilyangerard";
$password = "e17f39e5cb4de95dba99a2edd6835ab4";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
    $query = $db->prepare('INSERT INTO users VALUES (null, :value1, :value2, :value3, :value4)');
    $parameters = [
        'value1' => $user->getFirst_name(),
        'value2' => $user->getLast_name(),
        'value3' => $user->getEmail(),
        'value4' => $user->getPassword()
        ];
    $query->execute($parameters);
}

$newuser = new User("killyan","gerard","killyan.gerard@test.fr", 123 );
var_dump($newuser);
saveUser($newuser);
?>