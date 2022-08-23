<?php
    // Parámetros para la conexión a la base de datos
    const SERVER = "localhost";
    const DB = "prestamos";
    const USER = "root";
    const PASS = "root";

    // Variable para la conexión a la base de datos por medio de PDO
    const SGBD = "mysql:host=".SERVER.";dbname=".DB;

    // Metodos para hashear o encriptar contraseñas y otros parametros
    const METHOD = "AES-256-CBC";
    const SECRET_KEY = '$PRESTAMOS@2020';
    const SECRET_IV = '037970';