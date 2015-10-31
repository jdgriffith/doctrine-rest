doctrine-rest
=============

[![Build Status](https://travis-ci.org/jdgriffith/doctrine-rest.svg?branch=master)](https://travis-ci.org/jdgriffith/doctrine-rest)

Easy to use REST API generator simply by connecting to a database

This works great for connecting to an existing database which has good normalized structure and getting an API from 
the database quickly. 

Setup Database Parameters in app/config/parameters.yml. Your parameters will be unique to your database connection 
and database.


```bash
    app/console doctrine:mapping:import "SchemaBundle" annotation
```

```bash
    app/console orm:generate:repositories SchemaBundle
```

From this, you can now prepare to hit your first API URL.

Merely testing events.


