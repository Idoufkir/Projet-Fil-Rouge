# Projet Fil Rouge (Univers CRM)
Projet fil rouge de la promotion YouCode Safi 2019 sur le référentiel Développeur Web et Web Mobile.



[![Build Status](https://img.shields.io/travis/gothinkster/laravel-realworld-example-app/master.svg)](https://travis-ci.org/gothinkster/laravel-realworld-example-app) [![Gitter](https://img.shields.io/gitter/room/realworld-dev/laravel.svg)](https://gitter.im/realworld-dev/laravel) [![GitHub stars](https://img.shields.io/github/stars/Idoufkir/laravel-realworld-example-app.svg)](https://github.com/Idoufkir/Projet-Fil-Rouge/stargazers) [![GitHub license](https://img.shields.io/github/license/Idoufkir/laravel-realworld-example-app.svg)](https://raw.githubusercontent.com/Idoufkir/Projet-Fil-Rouge/master/LICENSE)

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone git@github.com:gothinkster/laravel-realworld-example-app.git

Switch to the repo folder

    cd laravel-realworld-example-app

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
