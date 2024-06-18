<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Criamos uma API que mostra todos os dados dos produtos da nossa indústria de produtos eletrônicos.

## Desenvolvimento:

1- Após garantirmos que o PHP e o Composer estavam instalados, criamos um repositório Laravel com o comando:
```bash
composer create-project --prefer-dist laravel/laravel ProjetoWebServidor
```

2- Os outros integrantes do grupo clonaram o repositório e iniciaram o projeto com o comando composer install para proceder à configuração das dependências hospedadas no arquivo composer.lock.

3- Configuramos o banco de dados Abakoos do projeto anterior no arquivo .env.

4- Criamos uma migration para a tabela products com o comando:
```bash
php artisan make:migration create_products_table --create=products
```
5- Um model para Product com:
```bash 
php artisan make:model Product
```
6- Um controller para fazer as requisições GET, POST, PUT e DELETE com:
```bash
php artisan make:controller ProductController
```
7-Instalamos o Sanctum com o comando:
```bash
composer require laravel/sanctum
```
8- Criamos a migration do Sanctum com php artisan migrate.

9- Criamos as rotas definidas no ProductController.

10- Tivemos que criar a tabela personal_access_tokens manualmente no DB

## TESTES

Os testes estão nas imagens e no repositório em Json

