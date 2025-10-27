FROM python:3

RUN apt-get update -y && \
    apt-get install -y python3-pip python3-dev && \
    pip3 install --upgrade pip


WORKDIR /app

RUN pip install Flask

COPY . .

EXPOSE 5000

CMD [ "python", "./app.py"]