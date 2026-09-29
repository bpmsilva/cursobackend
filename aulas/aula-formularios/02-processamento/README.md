# Processamento usando PHP

Neste exemplo, é utilizado um formulário (arquivo `formulario.html`) para enviar dados para um script PHP. O formulário permite o uso dos métodos POST e GET.

O arquivo `processar.php` verifica se os dados foram enviados de acordo com o esperado, evitando erros e ajudando a proteger a aplicação contra entradas inválidas ou maliciosas. No caso, são esperados um nome, um e-mail e uma mensagem.

Apesar das validações presentes no HTML, um usuário pode manipular o formulário e enviar dados diferentes dos esperados. Por exemplo, isso pode ser simulado removendo o atributo `required` de um dos campos obrigatórios por meio das ferramentas de desenvolvimento do navegador e, em seguida, enviando o formulário sem preencher esse campo.

Por esse motivo, **não devemos confiar apenas nas validações realizadas no lado do cliente**. Os dados recebidos também devem ser validados pelo código executado no servidor.
