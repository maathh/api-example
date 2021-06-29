# api-example

Objetivo: Desenvolver uma api Restful com os seguintes dados

● usuário, endereço, cidade, estado Recursos:

● CRUD de usuário

● Obter endereços

● Obter endereço por id

● Obter Cidades

● Obter Cidades por id

● Obter Estados

● Obter Estado por id

● Obter total de usuários cadastrados por cidade

● Obter total de usuários cadastrados por estado

Passos para executar o programa:

git clone

composer install

configure corretamente o arquivo .env com a conexão com o banco de dados

php -S localhost:8000 -t api

exemplos de rotas:

http://localhost:8000/users

http://localhost:8000/users/1/

http://localhost:8000/users/1/addresses

http://localhost:8000/users/addresses?groupBy=state_id

http://localhost:8000/users/addresses?groupBy=city_id

http://localhost:8000/cities

http://localhost:8000/cities/1

http://localhost:8000/states

http://localhost:8000/states/1