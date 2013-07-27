#!/bin/bash
clear
cd assets/less/
lessc bootstrap.less > ../css/bootstrap.css
cd ../../
php build.php public http://localhost:8000/public
