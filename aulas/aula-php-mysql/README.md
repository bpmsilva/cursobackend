# MySQL e PHP

## Introdução

Esta aula apresenta os conceitos básicos do MySQL e sua integração com o PHP.

## Ambiente de Desenvolvimento

Vamos utilizar o XAMPP (Windows), o LAMP (Linux) ou o MAMP (Mac) para configurar o ambiente de desenvolvimento. Certifique-se de que o MySQL e o Apache estão em execução.

## phpMyAdmin

O phpMyAdmin é uma ferramenta web que permite gerenciar bancos de dados MySQL de forma visual. Ele geralmente vem incluído no XAMPP, LAMP e MAMP. Podemos, por exemplo, criar bancos de dados, tabelas, inserir dados e executar consultas SQL diretamente pelo navegador.

## Comandos Básicos do MySQL

Vamos assumir estar disponível o banco de dados disponível na pasta `dados/loja-informatica.sql`. Este arquivo contém dados fictícios para fins de aprendizado.

- Selecionar o banco de dados:
```sql
USE loja_informatica;
```

- Selecionar um campo ou mais campos de uma tabela:
```sql
SELECT nome FROM funcionarios;
```
```sql
SELECT nome, sobrenome, email FROM funcionarios;
```

- Selecionar todos os campos de uma tabela:
```sql
SELECT * FROM funcionarios;
```

- Filtrar resultados com `WHERE`:
```sql
SELECT * FROM funcionarios WHERE email = 'ana@example.com';
```
```sql
SELECT * FROM produtos WHERE estoque < 10;
```

- Combinar condições com `AND` e `OR`:
```sql
SELECT * FROM produtos WHERE estoque < 10 AND preco > 100;
```

## Comandos Intermediários do MySQL

// TODO
