#!/bin/bash
rm -rf public
php build.php public https://$1

dest="$2@ssh.phx.nearlyfreespeech.net:/home/public"
rsync -avz --delete public/ $dest
