# PHP M.D.

## Symptoms

* Non-developers patients should never be around code but maybe they are
qualified to modify its contents.
* Content is neither part of frontend or part of backend.
* Markup languages are not easy to understand specially when patients don't
want to learn it.
* Markdown is the state-of-art tool for writing content.
* CMS are great, but require at least a database that is not always available.

## Diagnostic

Separate content of the frontend and backend is necessary, specially if the
patient doesn't want to follow any other well-probed, but maybe more expensive,
treatments. 

Markdown is a plain text format for writing structured documents, based on
conventions used for indicating formatting in email and usenet posts. It was
developed in 2004 by John Gruber, who wrote the first Markdown-to-HTML
converter in perl, and it soon became widely used in websites.

## Treatment

### Introduction

PHP M.D. (PHP Markdown) it can be used like a very limited file-based database,
very clean for patients. Also it can be used as a parser for a markdown string.
It is useful to generate classic Markdown-to-HTML files but its real strength
is to use the object as a mapper for the content.

### Installation

#### With [Composer](https://getcomposer.org/)

```bash
composer require php-md/php-md
```

#### Without [Composer](https://getcomposer.org/)

First install Composer then

```bash
composer require php-md/php-md
```

You should really be using Composer.
