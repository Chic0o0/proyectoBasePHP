<?php
class Config {
    const DB_PATH = 'mysql:dbname=proyectobasephp;host=127.0.0.1;port:3306'; //Database location
    const DB_PASSWORD = ""; //Databse password
    const PAGES = __DIR__ . '\app\pages\\'; //Pages folder location

    //regex

    const EMAIL_REGEX ="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
    const PASSWORD_REGEX =".{8,}";
    const PHONE_REGEX ="[0-9]{9}";
    const HEX_REGEX = "^#[A-Fa-f0-9]{6}$";
}