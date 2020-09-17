# Projet Fil Rouge (Univers CRM)
Projet fil rouge de la promotion YouCode Safi 2019 sur le référentiel Développeur Web et Web Mobile.



[![Open Source](https://badges.frapsoft.com/os/v1/open-source.svg?v=103)](https://opensource.org/) [![GitHub stars](https://img.shields.io/github/stars/Idoufkir/Projet-Fil-Rouge.svg)](https://github.com/Idoufkir/Projet-Fil-Rouge/stargazers) [![GitHub license](https://img.shields.io/github/license/Idoufkir/laravel-realworld-example-app.svg)](https://raw.githubusercontent.com/Idoufkir/Projet-Fil-Rouge/master/LICENSE) [![GitHub watchers](https://img.shields.io/github/watchers/badges/shields.svg?style=social&label=Watch&style=plastic)]() <br><br>
[![Twitter Follow](https://img.shields.io/twitter/follow/MustafaIdoufkir.svg?style=social)](https://twitter.com/MustafaIdoufkir) <br><br>
[![Twitter Follow](https://img.shields.io/twitter/follow/AmineBettaoui.svg?style=social)](https://twitter.com/AmineBettaoui) 

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone git@github.com:Idoufkir/Projet-Fil-Rouge.git

Switch to the repo folder

    cd Projet-Fil-Rouge
    cd PFR

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Create MySQL database. name : "univers_crm"

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

----------

**TL;DR command list**

    git clone git@github.com:Idoufkir/Projet-Fil-Rouge.git
    cd Projet-Fil-Rouge
    cd PFR
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding

**Populate the database with seed data with relationships which includes factures, failed_jobs, images, users.**

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh
    
    
## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------
## Screenshot
#### Home page

![Home page](https://user-images.githubusercontent.com/57219106/92979008-5612f000-f489-11ea-80de-55fda91a707a.jpg)
#### Home page
![Home page](https://user-images.githubusercontent.com/57219106/92979028-5ca16780-f489-11ea-9c03-84f44206124d.jpg)
#### contact
![contact](https://user-images.githubusercontent.com/57219106/92979037-60cd8500-f489-11ea-8e0e-a3c61cae82af.jpg)
#### Register
![Registre](https://user-images.githubusercontent.com/57219106/92979041-632fdf00-f489-11ea-8140-6d3ee10525f0.jpg)
#### Login
![Login](https://user-images.githubusercontent.com/57219106/92979042-64610c00-f489-11ea-937f-b4f2056a1d7a.jpg)

#### Short Description GIF ( Create Deals )

![create Deals](https://user-images.githubusercontent.com/57219106/92982519-667d9780-f496-11ea-8f9a-c1f2089bdfc3.gif)


----------

📫 Contact Us: <br>

#### IDOUFKIR Mustafa
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [Email](mustafa.idoufkir@gamil.com)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [Twitter](https://twitter.com/MustafaIdoufkir)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [LinkedIn](https://www.linkedin.com/in/idoufkir)

#### BETTAOUI Mohammed Amine
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [Email](bettapro100@gmail.com)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [Twitter](https://twitter.com/AmineBettaoui)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [LinkedIn](https://www.linkedin.com/in/mohammed-amine-bettaoui-97273a193)

----------
## License

[![License](http://img.shields.io/:License-MIT-blue.svg?style=flat-square)](http://badges.mit-license.org)

- **[MIT license](http://opensource.org/licenses/mit-license.php)**
- Copyright 2020 © <a href="https://github.com/Idoufkir" target="_blank">Idoufkir</a>.
----------
### Deployment:

![example badge](badges/succeeded.svg)
- Heroku.
----------

<!-- ACKNOWLEDGEMENTS -->
## Acknowledgements
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Img Shields](https://shields.io)
* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Pages](https://pages.github.com)
* [Animate.css](https://daneden.github.io/animate.css)
* [Loaders.css](https://connoratherton.com/loaders)
* [Slick Carousel](https://kenwheeler.github.io/slick)
* [Smooth Scroll](https://github.com/cferdinandi/smooth-scroll)
* [Sticky Kit](http://leafo.net/sticky-kit)
* [JVectorMap](http://jvectormap.com)
* [Font Awesome](https://fontawesome.com)
