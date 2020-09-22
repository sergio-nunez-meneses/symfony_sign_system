# Building a basic sign system

## Create database
- Open _.env_ file and edit database information: ```DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=mariadb-10.4.10"```

## Create sign system
- Install additional security support: ```composer require symfony/security-bundle```
- Create User Class: ```php bin/console make:user```
- Update database:
  - ```php bin/console make:migration```
  - ```php bin/console doctrine:migrations:migrate```
- Create sign in form: ```php bin/console make:auth```
- Create sign up form: ```php bin/console make:registration-form```

## Create table
- Create Entity Class: ```php bin/console make:entity```
- Update database without dropping existing data:
 - ```php bin/console doctrine:migrations:diff```
 - ```php bin/console doctrine:migrations:migrations```

## Create controller
- ```php bin/console make:controller IndexController```

## Create dashboard
- Install EasyAdmin bundle: ```composer require easycorp/easyadmin-bundle```
- Create dashboard:
 - Create Admin folder:
    - ```cd src/Controller```
    - ```mkdir Admin```
 - ```php bin/console make:admin:dashboard```
- Create CRUD: ```php bin/console make:admin:crud```

## Clear cache
- ```php bin/console cache:clear```
