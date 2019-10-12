# Syscoin-2019
Repositório de um serviço web para recebimento de uma requisição GET. Feito como teste de conhecimentos para o processo seletivo da Syscoin.

# Para executar
Para executar de forma local é necessário ter o [php](https://www.php.net) instalado.
Após instalar basta iniciar um server local dentro do diretório deste repositório:
```
php -S localhost:5000
```
A porta 5000 pode ser substituída por outro valor que não esteja em utilização.

# Para testar
Para testar basta abrir o localhost:5000. Caso sejam passadas as credenciais user="syscoin" e password="meEscolhe" da seguinte forma: 
```
http://localhost:5000/?user="syscoin"&password="meEscolhe"
```
será retornado um Json com uma mensagem informando meu nome. Caso as credenciais não estejam presentes ou as credenciais não estejam corretas será retornada uma mensagem de erro por meio de um Json.