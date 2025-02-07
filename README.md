# API Ranking Tecnofit

Bem-vindo ao **API Ranking Tecnofit**, um sistema de ranking para levantamento de peso com autenticação baseada em tokens utilizando Laravel Sanctum.

## 🚀 Configuração do Ambiente

### **1️⃣ Instalar Dependências**

```sh
composer install
```

### **2️⃣ Gerar Chave da Aplicação**

```sh
php artisan key:generate
```

### **3️⃣ Iniciar o Servidor**

```sh
php artisan serve
```

## 📦 Configuração do Banco de Dados

### **1️⃣ Criar o Banco de Dados (MySQL)**

```sql
CREATE DATABASE ranking_db;
```

### **2️⃣ Executar as Migrações**

```sh
php artisan migrate
```

### **3️⃣ Popular o Banco com Dados Iniciais**

```sh
php artisan db:seed
```

## 🔐 Autenticação e Segurança

Esta API utiliza o **Laravel Sanctum** para autenticação baseada em tokens.

## 🛠 Testando a API

Use o **Postman** ou qualquer cliente HTTP para testar as rotas.

### **1️⃣ Registrar um Usuário**

- **Método:** `POST`
- **URL:** `http://localhost:8000/api/register`
- **Body (JSON):**

```json
{
  "email": "gabriel@tecnofit.com.br",
  "password": "12345678"
}
```

### **2️⃣ Fazer Login**

- **Método:** `POST`
- **URL:** `http://localhost:8000/api/login`
- **Body (JSON):**

```json
{
  "email": "gabriel@tecnofit.com.br",
  "password": "12345678"
}
```

### **3️⃣ Consultar Ranking**

Acessível apenas para usuários autenticados.

Insira o token de autenticação no cabeçalho `Authorization` da requisição.
- **Método:** `GET`
Key             Value
Authorization   Bearer 1|L8dU6XU68gygB9ViH1nRtUnMJFoqvrjkrHe62m98b94378fe

- **Deadlift**\
  `GET http://localhost:8000/api/ranking/1`

- **Back Squat**\
  `GET http://localhost:8000/api/ranking/2`

- **Outro Ranking**\
  `GET http://localhost:8000/api/ranking/3`

### **4️⃣ Fazer Logout**

- **Método:** `POST`
- **URL:** `http://localhost:8000/api/logout`

## 🎯 Considerações Finais

- Certifique-se de enviar o **token** no cabeçalho `Authorization` para acessar rotas protegidas.
- Utilize `Bearer <seu_token_aqui>` como formato do token.
- A API segue os padrões REST para comunicação.


