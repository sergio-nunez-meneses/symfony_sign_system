# Building a basic sign in system

- Install additional security support: ```composer require symfony/security-bundle```
- Create User Class: ```php bin/console make:user```
- Update database:
  - ```php bin/console make:migration```
  - ```php bin/console doctrine:migrations:migrate```
- Create sign in form: ```php bin/console make:auth```
- Create sign up form: ```php bin/console make:registration-form```

# Create dashboard

- Install EasyAdmin bundle: ```composer require easycorp/easyadmin-bundle```
- ```php bin/console make:admin:dashboard```
- ```php bin/console make:admin:crud```

# Create controller
- ```php bin/console make:controller NameController```
