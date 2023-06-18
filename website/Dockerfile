# syntax=docker/dockerfile:1
FROM alpine:latest

EXPOSE 8000
WORKDIR /website

COPY requirements.txt requirements.txt
COPY ./website ./website

RUN apk update && apk add python3 py3-pip
RUN pip install -r requirements.txt

CMD ["python3", "manage.py", "runserver", ""]
