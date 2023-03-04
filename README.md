<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Executando o Projeto

Para executar esse projeto localmente, é necessária a instalação do php, composer e node-js. Partindo desses requisitos, os passos para a execução são:

- Clone esse repositório com comando `git clone` seguido do link do repositório.
- Na pasta raiz do projeto, execute os comandos `composer install` e `npm install` para instalar as dependências do projeto.
- Ainda na pasta raiz do projeto, execute o comando `php artisan migrate` para gerar a estrutura do banco de dados.
- Para a execução do projeto, execute os comandos `php artisan serve` e `npm run dev`. Por padrão o projeto será executado na em localhost:8000.

## Observações

- Implementação das funções de like e deslike pendentes.
- Models e controllers dessas funções criados, mas sem implementação na view.
