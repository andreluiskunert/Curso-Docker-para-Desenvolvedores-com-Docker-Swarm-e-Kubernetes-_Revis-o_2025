FROM node:18

WORKDIR /app

# Copia todos os arquivos do projeto
COPY . .

# Instala dependências (caso exista package.json, senão ignora)
RUN if [ -f package.json ]; then npm install; fi

EXPOSE 3000

CMD ["node", "index.js"]
