.PHONY: clean local_build prod_build cat_css cat_js server dev prod

clean:
	rm -rf public

local_build:
	php build.php ./public http://localhost:5000

prod_build:
	php build.php ./public https://staydecent.ca

cp_feed:
	cp ./public/feed/index.html ./public/feed.xml && rm -rf ./public/feed

server:
	php -S localhost:5000 -t public/

netlify:
	netlify deploy --dir=public --prod

dev: local_build cp_feed server

prod: clean prod_build cp_feed

deploy: prod_build netlify