all:
	php -f index.php >docs/index.html
	php -f lightning.php >docs/lightning.html
	php -f madness.php >docs/madness.html
	php -f corruption.php >docs/corruption.html
	php -f 404.php >docs/404.html
