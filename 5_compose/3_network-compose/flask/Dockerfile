# Imagem base do Python
FROM python:3.11-slim

# Definir diretório de trabalho
WORKDIR /app

# Copiar os arquivos da aplicação para dentro do container
COPY . .

# Instalar dependências
RUN pip install --no-cache-dir flask

# Expor a porta usada pelo Flask
EXPOSE 5000

# Comando para rodar a aplicação
CMD ["python", "app.py"]
