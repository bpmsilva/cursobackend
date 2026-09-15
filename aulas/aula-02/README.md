# Linguagem PHP

## Introdução

- PHP:
  - PHP Hypertext Preprocessor;
  - Linguagem de programação utilizada principalmente para desenvolvimento Web no lado do servidor;

- Apache2:
  - Servidor web;
  - Recebe requisições HTTP;
  - Capaz de encaminhar arquivos PHP para interpretação e devolver o resultado ao cliente;
  
- MariaDB:
  - Sistema Gerenciador de Banco de Dados (SGBD);
  - Permite armazenar e gerenciar dados de forma estruturada;

- SQL:
  - Structured Query Language;
  - Linguagem utilizada para consultar e manipular dados em bancos de dados relacionais;
  - Exemplo utilizando o MySQL Workbench:
    ```sql
    SELECT * FROM tabela;
    ```

## Páginas dinâmicas

PHP é uma linguagem de programação voltada para o desenvolvimento web. Diferente do HTML, que é uma linguagem de marcação, o PHP permite a criação de páginas dinâmicas, ou seja, páginas que podem gerar conteúdo diferente a cada acesso. Veja isso no exemplo ```02-horas.php```, que exibe a hora atual a cada vez que a página é carregada.

## Execução do Apache2 e MariaDB

Utilizando o XAMPP é suficiente iniciar o painel de controle e clicar em "Start" para iniciar o Apache2 e o MariaDB.

No Linux, podemos iniciar o Apache2 e o MariaDB utilizando os seguintes comandos no terminal:
```bash
sudo service apache2 start
sudo service mariadb start
```

## Execução do PHP

Podemos executar o PHP de duas formas.
No próprio terminal, utilizando o comando
```bash
php NOME_DO_ARQUIVO.php
```

Ou, utilizando o servidor web embutido do PHP:
```bash
php -S localhost:8000
```

## Mesclando PHP com HTML

É possível mesclar PHP com HTML para criar páginas dinâmicas. O PHP pode ser usado para gerar conteúdo que será inserido em um documento HTML. Por exemplo, podemos usar o PHP para exibir a hora atual em uma página HTML:
```php
...
<body>
    <h1>Bem-vindo ao meu site!</h1>
    <p>A hora atual é: <?php echo date('H:i:s'); ?></p>
</body>
...
```

## Conclusão

O PHP permite a criação de páginas dinâmicas e interativas na web. Combinado com servidores web como Apache2 e bancos de dados como MariaDB, o PHP oferece uma solução completa para o desenvolvimento de sites, sendo possível, inclusive, mesclar código PHP com HTML para gerar conteúdo dinâmico.
