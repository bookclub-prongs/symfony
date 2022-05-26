# Arithmatic Calculator
## _This is a demo, project by Muhammad Zahidur Rahman_

Powered by [![N|Solid](https://symfony.com/images/logos/header-logo.svg)](https://symfony.com/)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)
This document is created using https://dillinger.io/.

This project is built with lando docker orchestration using Symfony 5 recipe.
- This is targated to provide a simple solution for a simple problem.
- There are couple of issues that were not resolved in this project.
- ✨Select element and options tag element can not hold anything other than string as valaue. ✨

## Features
- Create a simple form that will be reactive on value change.
- Three input elements, left (text-field), operator (select-field) and right (text-field)
- Result is shown on the third inpute field result.
- On change based on the operator selected resulting value will be displayed on the element Result.
- For options icons need to be used (4 font-awesome icons)

### Tools
- Symfony/Laravel Backend
- utilize bootstrap/jquery for front end.
### Disclaimer from the developer
> Due to limited scope development took longer.
> I will demosntrate a step by step regarding my
> approach to develop the requirements and any issues
> that I have faced while developing.

## Tech

Arithmatic Calculator uses a number of open source projects to work properly:

- [Symfony5] - Symfony 5.4 a PHP MVC based framework!
- [VS Code] - Visual Studio Code
- [Twitter Bootstrap] - great UI boilerplate for modern web apps
- [node.js] - evented I/O for the backend
- [Yarn] - yarn package manager
- [jQuery] - jQuery and jQuery validator plugin

Here is my personal profile [public repository][zahid] on GitHub.

## Installation

This application requires [Lando](https://lando.dev/) v3.6.4 to run.
In addition reviewer needs to have [Docker](https://www.docker.com/) v20+ installed.
_**Please note Docker is not supported on Windows Home versions. It requires at least Pro version if windows machine is used.**_

Install the dependencies, move to the desired folder and clone the repository.
```sh
~ % git clone git@github.com:bookclub-prongs/symfony.git
~ % git checkout zahid-lando
```
This will pull in the finished branch where the code is finalised. The branch is not merged yet. I may have other practice projects added in later.
```sh
cd symfony
lando start
```
Once completed it will show the links we can utilize.
```sh
Here are some vitals:
 NAME            demo                                      
 LOCATION        /Users/mzahidur/Projects/bookclub/symfony 
 SERVICES        appserver, database                       
 APPSERVER URLS  https://localhost:51821                   
                 http://localhost:51822                    
                 http://demo.lndo.site/                    
                 https://demo.lndo.site/      
```
For secured site lando requires its local certificates to be added in explicitly. To do that do the following.
```sh
# Add the Lando CA
sudo security add-trusted-cert -d -r trustRoot -k /Library/Keychains/System.keychain ~/.lando/certs/lndo.site.pem
# Remove Lando CA
sudo security delete-certificate -c "Lando Local CA"
```
## References

| Resource | README |
| ------ | ------ |
| Symfony5 | (https://symfony.com/doc/5.4/index.html) [SymfonyDoc] |
| Lando | (https://docs.lando.dev/symfony/) [Lando] |

## Development

Following commands helps if css/js changed any where in the project.
```sh
yarn watch
```
Build dev public assets
```sh
gulp dev
```

#### Building for source (Approach)
1. Setup lando
2. Setup symfony project by using `lando composer create-project symfony/website-skeleton tmp && cp -r tmp/. . && rm -rf tmp `
3. Add required packages `lando composer require annotations asset encore form maker security stof/doctrine-extensions-bundle twig validator var-dumper`
4. Added .htaccess file to make sure url do not have `index.php` in it
5. Using make extension skeleton of the project is built up, controller/entity/form/formtype/templates.
6. Gradually step by step different aspects of the requirements are developed. For fullt details please review commit log [here](https://github.com/bookclub-prongs/symfony/commits/zahid-lando).
7. A [pull request](https://github.com/bookclub-prongs/symfony/pull/1) is also created for code review. 

## License

MIT

**Free Software, Hell Yeah!**

[//]: # (This is a line break)

   [zahid]: <https://github.com/mzahidur>
   [git-repo-url]: <https://github.com/bookclub-prongs/symfony/tree/zahid-lando>
   [VS Code]: <https://code.visualstudio.com/>
   [node.js]: <http://nodejs.org>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>
   [Lando]: <https://lando.dev/>
   [Symfony5]: <https://symfony.com/>
   [Yarn]: <https://yarnpkg.com/>

   [ACh]: <https://github.com/bookclub-prongs/symfony/blob/zahid-lando/README.md>
   [SymfonyDoc]: <https://symfony.com/doc/5.4/index.html>