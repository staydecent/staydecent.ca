#!/bin/bash
rm -rf public
php build.php public http://localhost:8000 &&

php -S localhost:8000 -t public/
