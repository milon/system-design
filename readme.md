![Github Actions](https://github.com/milon/one-problem-a-day/actions/workflows/build-publish.yml/badge.svg)

# System Design

This is a collection of notes and resources on system design interview questions. This will not only help you to prepare for the system design interview but also help you to understand the system design concepts used in real world scenerio.

Note: This is a work in progress. I will keep adding more notes and resources.

Thus website is live in this url: [https://system-design.milon.im](https://system-design.milon.im).

## Installation

This projects uses [docsify](https://docsify.js.org/#/). To run this project locally, you need to make sure that you have `node` and `npm` already installed in your system. Then run the following command to install docsify-cli globally:

```bash
npm i docsify-cli -g
```

Then run the following command to run the project locally:

```bash
docsify serve docs
```

If you don't have node installed and you don't want to install docsify-cli globally, you can run the following command to run the project locally with php or pythons web server:

```bash
php -S localhost:3000 -t docs
```

or

```bash
python -m http.server -d docs 3000
```

## Updating the content

I am updating the content of this site on a regular basis. So, please check back later for more content.

This project is live in github pages. So any updates in the `master` branch will be automatically published in the live site. 

To get the update in your local repository, you need to pull the latest changes from the repository.

```bash
git pull origin master
```

## Author

[Nuruzzaman Milon](https://milon.im)
