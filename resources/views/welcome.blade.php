<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Ranking TecnoFit</title>
</head>
<body>
    <h1>API Ranking TecnoFit</h1>
    <h2>Configuração</h2>
    <p>Execute os seguintes comandos de configuração:</p>
    <pre>
        <code>
            composer install
            php artisan key:generate
            php artisan serve
        </code>
    </pre>
    <h2>Executar as Migrações</h2>
    <p>Crie o banco de dados e execute as migrações:</p>
    <pre>
        <code>
            create database ranking_db; (comando SQL)
            php artisan migrate
            php artisan db:seed
        </code>
    </pre>
    <h2>Segurança</h2>
    <p>Utilizado Sanctum pacote para autenticação de API e autenticação baseada em tokens.</p>
    <h2>Teste a API com o Postman ou outro cliente HTTP</h2>
    <h3>Registro</h3>
    <p>POST</p>
    <p>URL: <code>http://localhost/api/register</code></p>
    <p>Body:</p>
    <pre>
        <code>
            {
              "email": "gabriel@tecnofit.com.br",
              "password": "12345678"
            }
        </code>
    </pre>
    <h3>Login</h3>
    <p>POST</p>
    <p>URL: <code>http://localhost/api/login</code></p>
    <p>Body:</p>
    <pre>
        <code>
            {
              "email": "gabriel@tecnofit.com.br",
              "password": "12345678"
            }
        </code>
    </pre>
    <h2>Ranking TecnoFit</h2>
    <p>Acesse os rankings:</p>
    <ul>
        <li>Deadlift: <a href="http://localhost:8000/api/ranking/1">http://localhost:8000/api/ranking/1</a></li>
        <li>Back Squat: <a href="http://localhost:8000/api/ranking/2">http://localhost:8000/api/ranking/2</a></li>
        <li>Outro: <a href="http://localhost:8000/api/ranking/3">http://localhost:8000/api/ranking/3</a></li>
    </ul>
    <h2>Logout</h2>
    <p>POST</p>
    <p>URL: <code>http://localhost/api/logout</code></p>
</body>
</html>
