FROM python:3

RUN apt-get update -y && \
    apt-get install -y python3-pip python3-dev

WORKDIR /app

COPY . .

RUN pip install Flask requests flask_mysqldb

EXPOSE 5000

CMD ["python", "app.py"]
