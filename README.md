
Installation
------------


In .env, the string to change is like:

DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name

Create your database

php bin/console doctrine:database:create

Update the schema with the informations from your User class entity

php bin/console doctrine:schema:update --force

composer update

