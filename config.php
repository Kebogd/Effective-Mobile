<?php

// Конфигурация базы данных
// Выберите один вариант: 'sqlite' или 'mysql'
define('DB_TYPE', 'mysql'); // ИЗМЕНЕНО на MySQL (более надежно)

// Для SQLite (если хотите использовать SQLite, измените DB_TYPE на 'sqlite'):
define('DB_PATH', __DIR__ . '/tasks.db');

// Для MySQL (настройте под свои параметры):
define('DB_HOST', 'localhost');
define('DB_NAME', 'todo_api');
define('DB_USER', 'root');
define('DB_PASS', ''); // Укажите пароль, если есть

// Настройки приложения
define('APP_DEBUG', true);

// CORS настройки
define('ALLOWED_ORIGINS', '*');

// Часовой пояс
date_default_timezone_set('Europe/Moscow');

// Кодировка
header('Content-Type: application/json; charset=utf-8');
