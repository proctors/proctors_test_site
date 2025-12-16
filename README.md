# Contents

* [Introduction](#introduction)
* [Prerequisites](#prerequisites)
* [Getting Started](#getting-started)
* [The Test](#the-test)
* [Submitting the Test](#submitting)

<a name="introduction"></a>
# Introduction

This project consists of a basic Drupal website and database. The website forms part of the recruitment process for web developers at Proctor + Stevenson.

This project includes .ddev configuration to help get it up and running quickly. You can of course use your local WAMP or MAMP installation instead if you wish.

<a name="prerequisites"></a>
# Prerequisites

DDEV is required to run the website locally:

[https://ddev.com/get-started/](https://ddev.com/get-started/)

We suggest SequelAce is used to browser/import data:

[https://sequel-ace.com/](https://sequel-ace.com/)


<a name="getting-started"></a>
# Getting Started

Once you've installed the necessary prerequisites, you should be able to navigate to the root directory and run:

```
ddev start
```

This will download the necessary docker images and build the containers and then start outputting log files. In a new window, at the root of the project, run:

```
ddev sequelace
```

This will open up sequelace and allow import of the database into the default db `db`. The database can be found in the root of the project:

```
/database.sql
```

# The Test

The instructions for the test are located in the project directory at

```
/instructions
```

There are instructions depending on whether you want to do the Drupal or Non-Drupal test. Which test you do is entirely up to you. **You don't have to do both.**

**Also, if you are applying for the senior developer role, there are additional instructions.**

# Drush

You can run drush in the docker container if you wish:

```
ddev drush status
```

<a name="submitting"></a>
# Submitting the Test

We will need all the source code back to review your application. You can submit the via email attached as a zip file or download link and send to [recruitment@proctors.co.uk](mailto:recruitment@proctors.co.uk).

Ideally we should be able to download and unpack your files and then run `docker-compose up` and `docker/bin/mysqlimport` to see your code working.

**Please also submit your CV, ensuring you list your name and the role you are applying for in the subject line.**
