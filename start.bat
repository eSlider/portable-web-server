"php/php.exe" -f convertString.php

cd "nginx"
START /MIN nginx

cd "../php"
php-cgi -b 127.0.0.1:9000 -c php.ini

ping 127.0.0.1 -n 1>NUL
echo Starting nginx
echo .
echo .
echo .
ping 127.0.0.1 >NUL
EXIT