My little Django website + blog

## Installation
Clone this repo and cd into it

### Install dependencies
```bash
poetry update
```

### First time setup

```bash
poetry run python3 manage.py createsuperuser
```

### Running
```bash
poetry run gunicorn -w 4 -b :6969 --chdir /var/www/html/Fluffys-website website.wsgi:application
```

ok bye!
