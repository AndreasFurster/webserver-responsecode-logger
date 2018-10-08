# webserver-responsecode-logger
**NOT READY FOR PRODUCTION USE.**

A simple logger using monolog for logging http response codes send by a webserver (eg Apache)

## Apache config
### .htaccess
You can leave out some of lines to remove logging entirely for those HTTP Status codes. 
```
ErrorDocument 301 /path/to/logger.php
ErrorDocument 302 /path/to/logger.php
ErrorDocument 400 /path/to/logger.php
ErrorDocument 401 /path/to/logger.php
ErrorDocument 403 /path/to/logger.php
ErrorDocument 404 /path/to/logger.php
ErrorDocument 500 /path/to/logger.php
ErrorDocument 502 /path/to/logger.php
```