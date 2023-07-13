# php-laravel-Todo
Product TODO APP
In this app, you will be able to -

Create your own Todo (By inputting a name of your Todo, description)
Show a list of Todos you’ve created
Edit a Todo — change a value (Either name or description or both)
Delete a Todo — Remove a Todo from the database
SETUP DATABASE
Most applications require a database. We will use this to store records of our Todos.

Open localhost/phpmyadmin/. Login using root as username and an empty password (Leave it blank) — “ ”
Once opened, click on New, input the database name as todos_app and click Create
Open your project and navigate to .env file. Set -
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todos_app
DB_USERNAME=root
DB_PASSWORD=

MODEL -> VIEW -> CONTROLLER (MVC)
Model-View-Controller (MVC) is an architectural pattern used by Laravel that separates an application into three main logical components: the model, the view, and the controller.

On each html that we are going to be writing that requires these set of codes, we will be extending this app.blade.php.

DISPLAY ALL TODOS VIEW

This will be our first view when you visit the website’s homepage. It basically shows a list of al ltodos you’ve created.

Head over to resources/views
Delete the welcome.blade.php. We don't need that anymore
Right click on views -> Create a new PHP file, name it index.blade.php
