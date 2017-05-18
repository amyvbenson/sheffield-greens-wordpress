# Getting set up locally

You can use Docker to run a container with WordPress and its dependencies locally.

## Pre-requisites

* [Docker for Mac](https://www.docker.com/docker-mac) / insert own operating system here
* [Docker Compose](https://docs.docker.com/compose/install/) - this is already included with Docker for Mac
* Grunt CLI `npm install -g grunt-cli`
* Sass `gem install sass` (requires Ruby)

## Installing

1. Create a directory for the site
```
mkdir sgp-wordpress
```

2. Go in to that directory
```
cd sgp-wordpress
```

3. Create a file called docker-compose.yml and put the following in it
```
version: '2'

services:
   db:
     image: mysql:5.7
     volumes:
       - db_data:/var/lib/mysql
     restart: always
     environment:
       MYSQL_ROOT_PASSWORD: wordpress
       MYSQL_DATABASE: wordpress
       MYSQL_USER: wordpress
       MYSQL_PASSWORD: wordpress

   wordpress:
     depends_on:
       - db
     image: wordpress:latest
     ports:
       - "8000:80"
     restart: always
     environment:
       WORDPRESS_DB_HOST: db:3306
       WORDPRESS_DB_PASSWORD: wordpress
     working_dir: /var/www/html
     volumes:
       - ./wordpress/:/var/www/html/wp-content
volumes:
    db_data:
```

4. Run `docker-compose up`, this should create a local wordpress site in sgp-wordpress/wordpress. The first time you this it'll take a while as will be downloading and installing apache, php etc. It's not obvious when it's finished, but I think it's after `Command line: 'apache2 -D FOREGROUND'`

5. Once it's finished you can access wordpress locally at http://127.0.0.1:8000/

6. Go through the WordPress setup form and install

7. Clone the SGP theme into the themes folder (open a new terminal tab and leave docker running in the other one)
```
cd wordpress/themes
git clone git@github.com:amyvbenson/sheffield-greens-wordpress.git
```

8. Enable the theme, go to http://127.0.0.1:8000/wp-admin/themes.php and active the Sheffield Greens theme

9. Set the home page
* Create a new page - Pages > Add New
* It doesn't need any content, just a title
* Settings > Reading > Front page displays > a static page > select the page you just created as Front page > Save

10. Create the main navigation
* Appearance > Menus
* Create a menu called 'Main Menu'
* Set its display location to 'Main Navigation'
* Add some pages to it (there'll be a sample page already or you can add some pages first)

11. Visit the homepage at http://127.0.0.1:8000/

12. Profit!

## Deploying to production

### Git Remote

In the SGP theme folder (sgp-wordpress/wordpress/themes/sheffield-greens-wordpress), set up the git remote
```
git remote add production sgpadmin@sheffieldgreenparty.org.uk:themes/SheffieldGreenPartyResponsive.git
```

### Deploy!

* Commit your changes - if you've made CSS changes make sure to run `grunt dist` first, see [frontend.md](frontend.md)
* Push to origin `git push origin master`
* Push to production `git push production master`
