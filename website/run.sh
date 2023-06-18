#!/bin/sh

# Wait for database to start
until pg_isready -d $POSTGRES_DB -h db -U $POSTGRES_USER
do
    echo "Waiting for database to start... (5s)"
    sleep 5
done

echo "Database is ready!"

# Check if there are any changes to the database
#python3 manage.py showmigrations
if (python3 manage.py showmigrations | grep "\[ \]" > /dev/null);
then
    echo "Database changes detected! Migrating..."
    python3 manage.py makemigrations
    python3 manage.py migrate
fi

# Start server!!!!
echo "Starting server..."
gunicorn --bind :8000 website.wsgi:application

