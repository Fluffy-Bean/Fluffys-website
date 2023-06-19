#!/bin/sh

APP_NAME='website.wsgi:application'
WORKERS=3
BIND=':8000'

/usr/bin/poetry run gunicorn ${APP_NAME} \
    --workers ${WORKERS} \
    --bind ${BIND}
