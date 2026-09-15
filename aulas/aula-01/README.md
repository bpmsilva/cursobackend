# Aula 01

## Introdução

Nesta disciplina nós iremos focar no desenvolvimento back-end, ou seja, a parte das aplicações Web executada no servidor. Diversas linguagens de programação se mostram adequadas para o desenvolvimento back-end, como Python, Ruby, Java, C#, entre outras. No entanto, nesta disciplina, iremos utilizar a linguagem PHP.

## Ambiente de desenvolvimento no Laboratório de Informática

O ambiente de desenvolvimento será o Windows, VS Code, XAMPP e navegador Google Chrome. O XAMPP é um pacote que facilita a instalação e configuração do ambiente de desenvolvimento e inclui o Apache (servidor web), PHP (linguagem de programação que será utilizada nesta disciplina) e MariaDB (banco de dados). No momento em que este documento foi redigido, o XAMPP estava disponível para download em [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).

## Requisições e respostas HTTP

Para exemplificar o conceito de requisição, iremos usar o programa *curl*. Usuários do Windows podem realizar a prática utilizando o Google Chrome e o Dev Tools do navegador (ferramentas do desenvolvedor -> aba Network).

No Linux:

```bash
curl -v https://www.pudim.com.br/
```

A saída do comando acima será algo parecido com o seguinte:

```
bpmsilva-linux@dell-bernardo:~$ curl -v https://www.pudim.com.br/
* Host www.pudim.com.br:443 was resolved.
...
> GET / HTTP/2
> Host: www.pudim.com.br
> User-Agent: curl/8.5.0
> Accept: */*
>
...
< HTTP/2 200
...
<html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    ...
</body>
</html>
* Connection #0 to host www.pudim.com.br left intact
```

Hoje navegadores podem usar HTTP/2 ou HTTP/3. É possível forçar o uso de uma versão HTTP/1.1 através da flag `--http1.1` com o comando `curl -v --http1.1 https://www.pudim.com.br/`.

E se colocarmos uma URL que não existe, como por exemplo `https://www.pudim.com.br/naoexiste`?

Outros programas que podem ser usados para exemplificar o conceito de requisição são *ncat* e *telnet*.

## Dev Tools

Podemos usar o Dev Tools do navegador para inspecionar as requisições HTTP. Utilize a opção "```Ferramentas do Desenvolvedor```" e vá para a aba ```Network``` e recarregue a página. Você verá uma lista de todas as requisições feitas pelo navegador, incluindo informações como o método HTTP, o status da resposta e os cabeçalhos.

### Valores importantes:

#### Códigos de status HTTP
- 200: OK
- 404: Not Found
- 500: Internal Server Error

#### Portas:
- 80: Porta padrão para requisições HTTP
- 443: Porta padrão para requisições HTTPS

## Ambiente de desenvolvimento nos seus computadores

### Windows

O ambiente de desenvolvimento poderá ser o mesmo utilizado no laboratório de informática, ou seja, Windows, VS Code, XAMPP ([https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)) e navegador Google Chrome.

### Linux

Algumas distribuições Linux já vêm com o PHP instalado. Para verificar se o PHP está instalado, abra um terminal e digite o seguinte comando:

```bash
php -v
```

Caso alguma ferramenta não esteja instalada no Linux, vocês podem instalá-las através dos gerenciadores de pacotes da sua distribuição. Por exemplo, no Ubuntu, algumas das ferramentas que vocês podem instalar são o *php*, o *curl*, o *ncat* e o *telnet*. Por exemplo, para instalar o *curl* no Linux, você pode utilizar o seguinte comando:

```bash
sudo apt install curl
```

PHP:

```bash
sudo apt install php
```

*ncat*:

```bash
sudo apt install ncat
```

*telnet*:

```bash
sudo apt install telnet
```

## Conclusões

A disciplina de Desenvolvimento Web II tem como objetivo ensinar os conceitos de desenvolvimento back-end utilizando a linguagem PHP. O ambiente de desenvolvimento será configurado utilizando o XAMPP no Windows, mas também é possível configurar o ambiente em distribuições Linux. Além disso, foram abordados conceitos importantes sobre requisições e respostas HTTP, bem como o uso do Dev Tools do navegador para inspecionar essas requisições.
