<?php

require_once(realpath(MODEL_PATH) . '/Model.php');

class User extends Model
{
    protected static $tablename = 'users';
    protected static $columns = [
        "id",
        "name",
        "password",
        "email",
        "end_date",
        "start_date",
        "is_admin"
    ];
}
