# System Design

This is a collection of notes and resources on system design interview questions. This will not only help you to prepare for the system design interview but also help you to understand the system design concepts used in real world scenerio.

**Note:** This is a work in progress. I will keep adding more notes and resources.

## Installation

This project uses [Laravel Jigsaw](https://jigsaw.tighten.com). So, you need to install [PHP](https://www.php.net) and [Composer](https://getcomposer.org) to run this project locally. If you are using mac, I recommend to use [Herd](https://herd.laravel.com) to manage your local development environment.

If also uses [Node.js](https://nodejs.org) and [NPM](https://www.npmjs.com) to compile the assets. So, you need to install them as well.

First you need to clone the repository.

```bash
git clone https://github.com/milon/system-design.git
```

Then install the dependencies.

```bash
cd system-design
composer install
npm install
```

Then run the following command to compile the assets.

```bash
npm run dev
```

Then run the following command to start the local development server.

```bash
./vendor/bin/jigsaw serve
```

Now you can access the site at [http://localhost:8000](http://localhost:8000).

## Updating the content

The content of this site is located in the `source` directory. You can update the content by editing the markdown files in the `source` directory.

I am updating the content of this site on a regular basis. So, please check back later for more content. To get the update, you need to pull the latest changes from the repository.

```bash
git pull origin master
```

Then you need to run the following command to compile the assets and build the site.

```bash
composer install && npm install
npm run dev
./vendor/bin/jigsaw build
```

## Contributing

If you find any error or have any suggestion, please feel free to create an issue or send a pull request.

## Author

[Nuruzzaman Milon](https://milon.im "Nuruzzaman Milon")