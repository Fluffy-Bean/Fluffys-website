# syntax=docker/dockerfile:1
FROM alpine:latest

EXPOSE 8000
RUN apk update && apk add build-base postgresql-client \
    python3 py3-pip python3-dev --no-cache

RUN mkdir /app
WORKDIR /app

COPY requirements.txt requirements.txt
RUN pip install -r requirements.txt

COPY website .
COPY run.sh run.sh
RUN chmod +x run.sh

CMD ["./run.sh"]
