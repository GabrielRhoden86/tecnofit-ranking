# API Ranking Tecnofit

**API Ranking Tecnofit** é um sistema de ranking de atividades fisicas.

## 🚀 Configuração do Ambiente

### **1️⃣ Clonar projeto**
```sh
git clone https://github.com/GabrielRhoden86/tecnofit-ranking.git
```

### **2️⃣ Instalar Dependências**

```sh
composer install
```
### **3️⃣ Gerar Chave da Aplicação**

```sh
windows:copy .env.example .env
linux:cp .env.example .env
```

### **4️⃣ Gerar Chave da Aplicação**

```sh
php artisan key:generate
```

### **5️⃣ Iniciar o Servidor**

```sh
php artisan serve
```

## 📦 Configuração do Banco de Dados

### **1️⃣ Criar o Banco de Dados (MySQL)**

```sql
CREATE DATABASE ranking_db;
```

### **2️⃣ Credenciais do Banco de Dados**

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ranking_db
DB_USERNAME=root
DB_PASSWORD=
```

### **3️⃣ Executar as Migrações**

```sh
php artisan migrate
```

### **4️⃣ Popular o Banco com Dados Iniciais**

```sh
php artisan db:seed
```

## 🔐 Autenticação e Segurança

Esta API utiliza o **Laravel Sanctum** para autenticação baseada em tokens.

## 🛠 Testando a API

Use o **Insomnia** ou qualquer cliente HTTP para testar as rotas.

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
    <td>Bearer &lt;seu_token_aqui&gt;</td>
  </tr>
</table>


- **Deadlift**\
  `GET http://localhost:8000/api/ranking/1`

- **Back Squat**\
  `GET http://localhost:8000/api/ranking/2`

- **Bench Press**\
  `GET http://localhost:8000/api/ranking/3`

### **4️⃣ Fazer Logout**

- **Método:** `POST`
- **URL:** `http://localhost:8000/api/logout`
- **Obs:** Para realizar o logout utilize o mesmo token  utilizado no login:
<table>
  <tr>
    <td><strong>Baerer</strong></td>
    <td><code>&lt;token_login_aqui&gt;"</code></td>
  </tr>
</table>

## 🎯 Considerações 
- A API segue os padrões REST.
- A API utiliza o padrão de autenticação Sanctum.


