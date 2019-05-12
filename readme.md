## Installation

Run `composer install`

Copy `.env.example` to `.env` and set database parameters.

To create database structure run `php artisan migrate`

To seed database with random binary tree structure run `php artisan db:seed --class=TreeNodesTableSeeder` 
and it can be run many times to generate new random structure.
In file `database/seeds/TreeNodesTableSeeder.php` can by set max tree height and probability to generate children for node.

Open url `/binary-tree` to display generated tree.
