Umbrela design
=============
This is a repository to test and create UI design for Umbrela application.

Installation
------------

	composer install

You might also need to install less via npm if it is not present on your machine.

	npm i -g less less-plugin-clean-css



Web Server Setup
----------------

The simplest way to get started is to start the built-in PHP server in the root directory of your project:

	php -S localhost:8000 -t www

Then visit `http://localhost:8000` in your browser to see the welcome page.

For Apache or Nginx, setup a virtual host to point to the `www/` directory of the project and you
should be ready to go.

It is CRITICAL that whole `app/`, `log/` and `temp/` directories are not accessible directly
via a web browser. See [security warning](https://nette.org/security-warning).


Requirements
------------

PHP 7.1 or higher. To check whether server configuration meets the minimum requirements for
Nette Framework browse to the directory `/checker` in your project root (i.e. `http://localhost:8000/checker`).
