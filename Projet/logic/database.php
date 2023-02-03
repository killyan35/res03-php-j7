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
function saveUser(User $user){
    $db = new PDO(
        "mysql:host=db.3wa.io;port=3306;dbname=kilyangerard_phpj7",
        "kilyangerard",
        "e17f39e5cb4de95dba99a2edd6835ab4"
    );
    $query = $db->prepare('INSERT INTO users VALUES (null, :value1, :value2, :value3, :value4)');
    $parameters = [
    'value1' => $user->getFirst_name(),
    'value2' => $user->getLast_name(),
    'value3' => $user->getEmail(),
    'value4' => $user->getPassword()
    ];
    $query->execute($parameters);
    // $userAdded = $query->fetch(PDO::FETCH_ASSOC);
    // var_dump ($userAdded);
    
}

$userToSave = new User("Killyan", "Gerard", "to@test.com", 124);
var_dump ($userToSave);
saveUser($userToSave);
var_dump ($userToSave);

?>