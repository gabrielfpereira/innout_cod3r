<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');


$user = new User(['name' => 'gabriel', 'email' => 'gabriel@gmail.com']);
print_r(User::get([]));

// echo "<br>" . User::getSelect([], 'name, email');
