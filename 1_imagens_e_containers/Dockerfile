FROM node:14

# Define diretório de trabalho
WORKDIR /src

# Copia apenas os arquivos de dependência
COPY package*.json ./

# Instala as dependências
RUN npm install

# Copia o restante da aplicação
COPY . .

# Expõe a porta usada pela aplicação
EXPOSE 3000

# Comando de inicialização
CMD ["node", "app.js"]
