<div style="display:flex; align-items: center">

  <h1 style="position:relative; top: -6px" >Movie Quotes APP</h1>
</div>

---

Movie Quotes app with random quote on the main page, movie page where you can view all qoutes associated with the movie and the admin panel, where you can do CRUD operations on quotes and movies

#

### Table of Contents

-   [Prerequisites](#prerequisites)
-   [Tech Stack](#tech-stack)
-   [Getting Started](#getting-started)
-   [Development](#development)
-   [Project Structure](#project-structure)
-   [Structure Of MySQL](#structure-of-mysql)
-   [Project Structure](#project-structure)
-   [Resources](#resources)

#

### Prerequisites

-   <img src="readme/assets/php.svg" width="35" style="position: relative; top: 4px" /> *PHP@7.2 and up*
-   <img src="readme/assets/mysql.png" width="35" style="position: relative; top: 4px" /> _MYSQL@8 and up_
-   <img src="readme/assets/npm.png" width="35" style="position: relative; top: 4px" /> _npm@6 and up_
-   <img src="readme/assets/composer.png" width="35" style="position: relative; top: 6px" /> _composer@2 and up_

#

### Tech Stack

-   <img src="readme/assets/laravel.png" height="18" style="position: relative; top: 4px" /> [Laravel@6.x](https://laravel.com/docs/6.x) - back-end framework
-   <img src="readme/assets/spatie.png" height="19" style="position: relative; top: 4px" /> [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation
-   <img src="readme/assets/vite.svg" height="19" style="position: relative; top: 4px" /> [Vite](https://vitejs.dev/guide/) - build tool
-   <img src="readme/assets/tailwind.png" height="19" style="position: relative; top: 4px" /> [Tailwind](https://tailwindcss.com/docs/installation) - CSS framework

#

### Getting Started

1\. First of all you need to clone Movie Quotes from github:

```sh
git clone git@https://github.com/RedberryInternship/niko-shervashidze-movie-quotes
```

2\. Next step requires you to run _composer install_ in order to install all the dependencies.

```sh
composer install
```

3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:

```sh
npm install
```

and also:

```sh
npm run dev
```

in order to build your JS/SaaS resources.

4\. Now we need to set our env file. Go to the root of your project and execute this command.

```sh
cp .env.example .env
```

And now you should provide **.env** file all the necessary environment variables:

#

**MYSQL:**

> DB_CONNECTION=mysql
> DB_HOST=127.0.0.1
> DB_PORT=3306
> DB_DATABASE=**\***
> DB_USERNAME=**\***
> DB_PASSWORD=**\***

#

5\. Now execute in the root of you project following:

```sh
  php artisan key:generate
```

Which generates auth key.

6\. If you've completed everything so far, then migrating database if fairly simple process, just execute:

```sh
php artisan migrate
```

##### Now, you should be good to go!

#

### Development

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
```

if you wish to see changes after changing styles with Tailwind CSS, execute:

```sh
  npm run dev
```

#

### Project Structure

```bash
├─── app
│   ├─── Console
│   ├─── Exceptions
│   ├─── Http
│   ├─── Models
│   ├─── Providers
├─── bootstrap
├─── config
├─── database
├─── languages
│   ├─── en
│   ├─── ka
├─── packages
├─── public
├─── resources
├─── routes
├─── scripts
├─── storage
├─── tests
- .env
- artisan
- composer.json
- package.json
- phpunit.xml
```

#

### Structure of mysql

<img src="readme/assets/drawsql.png" style="position: relative; top: 4px" />

#

### Resources

-   [Application Design](https://www.figma.com/file/IIJOKK5esgM8uK8pM3D59J/Movie-Quotes?node-id=0%3A1)
-   [Commit message naming conventions](https://redberry.gitbook.io/resources/other/git-is-semantikuri-komitebi)
-   [Project Specifications](https://redberry.gitbook.io/assignment-i-movie-quotes)
