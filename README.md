# cp

- Installar composer https://getcomposer.org/download/
- Ejecutar `composer install` o `php composer.phar install`
- Confirgurar o crear el archivo `wp-config.php` en directorio `wp`, reemplazar contenido por ``
<?php
require dirname (dirname(__FILE__)) . '/wp-config.php';
``
- En `wp-config.php`, configurar las credenciales MySql.