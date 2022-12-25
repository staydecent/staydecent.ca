#!/bin/bash
rm -rf public
php build.php public https://staydecent.ca &&

netlify deploy --dir=public --prod
