api-example 

API example using the framework laravel 

Objetivo: Desenvolver uma api Restful com os seguintes dados


● usuário, endereço, cidade, estado
Recursos:

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

cd api-example

./vendor/bin/sail up

configure corretamente o arquivo .env com a conexão com o banco de dados

php artisan key:generate

php artisan migrate

php artisan db:seed



exemplos de rotas:
http://localhost/api/users

http://localhost/api/users/1/

http://localhost/api/users/1/addresses

http://localhost/api/users/addresses?groupBy=state_id

http://localhost/api/users/addresses?groupBy=city_id



http://localhost/api/cities

http://localhost/api/cities/1


http://localhost/api/states

http://localhost/api/states/1




