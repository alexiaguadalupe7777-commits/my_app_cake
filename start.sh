#!/bin/sh
echo "PORT es: $PORT"
exec php -S 0.0.0.0:${PORT} -t /app/webroot /app/webroot/index.php