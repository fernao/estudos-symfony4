
# Objetivo:

Avaliar aspectos do uso do framework Symfony com GraphQL. Ligado a pesquisa de: https://github.com/lablivrebr/estudos-frameworks-php/issues/1


# Passos

## Instalar Symfony

```docker run --rm -v $(pwd):/app composer:1.5.1 create-project symfony/skeleton sf4

## Iniciar Symfony

```cd sf4
``` php -S 127.0.0.1:8000 -t public

## Hello World

Apontar navegador para: http://127.0.0.1/8000/hello/world

## Mexendo com banco de dados

Usaremos sqlite e doctrine

```composer require doctrine maker

Configure seu .env

```DATABASE_URL=sqlite::///%kernel.project_dir%/var/data.db

Crie o banco

```php bin/console doctrine:database:create
```php bin/console make:migration

## Criando um novo controller usando o console

```php bin/console make:controller CarroController

(cria

## Referências

* https://github.com/vinnyfs89/study-symfony-4
* https://symfony.com/doc/current/setup.html
* https://symfony.com/doc/current/page_creation.html
* https://symfony.com/doc/current/doctrine.html
