#!/bin/sh

APP='website.wsgi:application'
PATH='/var/www/html/Fluffys-website'
PORT=8000
WORKERS=3

PING=$(/usr/bin/python3 -m gunicorn -w ${WORKERS} -b :$PORT --chdir $PATH $APP)
