silver-telegram
==============

# Installation

add `symfony.localhost` in your `/etc/hosts` file.

Then, run:

```bash
$ make init
```

You are done, you can visit your Symfony application on the following URL: go to [http://symfony.localhost](http://symfony.localhost)

_Note :_ you can rebuild all Docker images by running:

```bash
$ make ps
```

# Read logs

You can access Nginx and Symfony application logs in the following directories on your host machine:

* `logs/nginx`
* `logs/symfony`

# sentry ; 

go to [http://localhost:880](http://localhost:880)

create a project

in setting, take the client keys DSN  (http://localhost:880/settings/sentry/projects/PROJECT-NAME/keys/)

and put this in `symfony_folder/src/Controller/JsErrorController.php` and `symfony_folder/config/packages/sentry.yaml`