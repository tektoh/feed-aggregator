#!/bin/sh

CAKE="/vagrant/app/Console/cake.php"
APP="/vagrant/app"

COMMAND="$CAKE -app $APP user ${1:-help} $2 $3"
echo $COMMAND
php $COMMAND

