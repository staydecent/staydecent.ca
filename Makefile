.PHONY: clean local_build prod_build cat_css cat_js server dev prod

clean:
	rm -rf public

local_build:
	php build.php ./public http://localhost:5000

prod_build:
	php build.php ./public https://staydecent.ca

# cat_css:
# 		cat ./public/assets/css/reset.css ./public/assets/css/vars.css ./public/assets/css/pwa/* > ./public/assets/bundle.css

# cat_js:
# 		cat ./public/assets/js/lib/* ./public/assets/js/pwa.js > ./public/assets/bundle.js

server:
	php -S localhost:5000 -t public/

netlify:
	netlify deploy --dir=public --prod

dev: local_build server # cat_css cat_js

prod: clean prod_build # cat_css cat_js

deploy: prod_build netlify