Midi-ChloriansPHPSkeletonApplication
====================================

Introduction
------------
This is a simple, skeleton application using the Midi-ChloriansPHP Framework

Installation
------------

Using Composer (recommended)
----------------------------
The recommended way to get a working copy of this project is to clone the repository
and use `composer` to install dependencies using the `create-project` command:

    curl -s https://getcomposer.org/installer | php --
    php composer.phar create-project -sdev --repository-url="https://github.com/dreadlokeur/Midi-ChloriansPHPSkeletonApplication/blob/master/packages.json" dreadlokeur/midi-chlorians-php-skeleton-application path/to/install

Alternately, clone the repository and manually invoke `composer` using the shipped
`composer.phar`:

    cd my/project/dir
    git clone git://github.com/dreadlokeur/Midi-ChloriansPHPSkeletonApplication.git
    cd Midi-ChloriansPHPSkeletonApplication
    php composer.phar self-update
    php composer.phar install

(The `self-update` directive is to ensure you have an up-to-date `composer.phar`
available.)

Using Bower for loading Template (default) dependencies
----------------------------------------------------
    npm install -g bower
    cd my/project/dir/application/views/default/assets/
    bower install