#!/bin/sh

CAKE="/vagrant/app/Console/cake.php"
APP="/vagrant/app"

COMMAND="$CAKE -app $APP schema create App"
echo $COMMAND
php $COMMAND

