# Ridiculous build script and source to staydecent.ca
I tried hacking jekyll to work with files/dirs the way I wanted but failed. So, I wrote this ridiculous build script in PHP.

## Build
`build.php` expects an output dir and a hostname.
`php build.php public http://localhost:8000`

## Test
To test the output locally (it's just HTML files) just run:
`php -S localhost:8000 -t public/`

`index.php` expects the output dir to be `public/`.

