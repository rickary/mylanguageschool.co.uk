<?php
    define('PERCH_LICENSE_KEY', 'P21407-YQW506-FNG778-FPD603-PUE023');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", 'root');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "mls");
    define("PERCH_DB_PREFIX", "perch3_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'rick@madeinbeta.co.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Rick Chadwick');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
