<?php

$users = [
    'admin' => 'admin123',
    'user1' => 'user123',
    'user2' => 'user234'
];

function authenticate($username, $password) {
    global $users;
    return isset($users[$username]) && $users[$username] === $password;
}
?>
