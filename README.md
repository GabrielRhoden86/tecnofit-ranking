# API Ranking Tecnofit

**API Ranking Tecnofit** é um sistema de ranking de atividades fisicas.

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

Insira o token de autenticação no cabeçalho `Authorization` da requisição.<br>

<table>
  <tr>
    <th>Key</th>
    <th>Value</th>
  </tr>
  <tr>
    <td>Authorization</td>
    <td>Bearer 1| &lt;seu_token_aqui&gt;</td>
  </tr>
</table>


- **Deadlift**\
  `GET http://localhost:8000/api/ranking/1`

- **Back Squat**\
  `GET http://localhost:8000/api/ranking/2`

- **Outro Ranking**\
  `GET http://localhost:8000/api/ranking/3`

### **4️⃣ Fazer Logout**

- **Método:** `POST`
- **URL:** `http://localhost:8000/api/logout`
- **Obs:** Para realizar o logout utilize o mesmo token  utilizado no login:
<table>
  <tr>
    <td><strong>Execute o comando:</strong></td>
    <td><code>curl -X POST http://localhost:8000/api/logout -H "Authorization: Bearer &lt;token_login_aqui&gt;"</code></td>
  </tr>
</table>

## 🎯 Considerações 
- Obs enviar o **token** no cabeçalho `Authorization` para acessar as rotas.
- Utilize `Bearer <seu_token_aqui>` como formato do token.
- A API segue os padrões REST.


