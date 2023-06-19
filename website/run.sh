#!/bin/sh

until pg_isready -d $POSTGRES_DB -h db -U $POSTGRES_USER
do
    echo "Waiting for database to start... (5s)"
    sleep 5
done

echo "Database is ready!"

if (python3 manage.py showmigrations | grep "\[ \]" > /dev/null);
then
    echo "Database changes detected! Migrating..."
    python3 manage.py makemigrations
    python3 manage.py migrate
fi

# echo "Collecting static files..."
# python3 manage.py collectstatic --noinput

echo "Starting server..."
gunicorn --bind :8000 website.wsgi:application

