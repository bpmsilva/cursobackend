# Ferramental: Strings, Arrays, Variáveis Superglobais

## Strings

Em PHP, strings podem ser definidas usando aspas simples (`' '`) ou aspas duplas (`" "`). A diferença principal entre elas é que as aspas duplas permitem a interpretação de variáveis e caracteres especiais, enquanto as aspas simples não.

### Principais funções para manipulação de strings
- `strlen($string)`: Retorna o tamanho da string.
- `str_replace($search, $replace, $subject)`: Substitui todas as ocorrências de uma substring por outra.
- `str_ireplace($search, $replace, $subject)`: Substitui todas as ocorrências de uma substring por outra, ignorando maiúsculas e minúsculas.
- `strpos($haystack, $needle)`: Retorna a posição da primeira ocorrência de uma substring dentro de uma string.
- `substr($string, $start, $length)`: Retorna uma parte da string, começando na posição `$start` e com comprimento `$length`.
- `strtoupper($string)`: Converte a string para maiúsculas.
- `strtolower($string)`: Converte a string para minúsculas.
- `trim($string)`: Remove espaços em branco do início e do fim da string.
- `explode($delimiter, $string)`: Divide a string em um array usando o delimitador especificado.
- `implode($glue, $array)`: Junta os elementos de um array em uma string, usando o delimitador especificado.
- `str_pad($string, $length, $pad_string, $pad_type)`: Preenche a string até o comprimento especificado com a string de preenchimento fornecida.
- `str_repeat($string, $multiplier)`: Repete a string um número especificado de vezes.

### Funções específiicas para manipulação de strings
- `str_shuffle($string)`: Embaralha os caracteres da string.
- `sprintf($format, $args)`: Formata uma string de acordo com o formato especificado.
- `printf($format, $args)`: Imprime uma string formatada de acordo com o formato especificado.
- `strrev($string)`: Inverte a string.
- `str_split($string, $length)`: Divide a string em um array de strings com comprimento especificado.
- `str_word_count($string, $format, $charlist)`: Conta o número de palavras na string e pode retornar um array de palavras ou um array associativo com as posições das palavras.
- `stristr($haystack, $needle)`: Retorna a parte da string a partir da primeira ocorrência de uma substring, ignorando maiúsculas e minúsculas.

## Arrays
`TODO: Adicionar conteúdo sobre arrays.`

## Variáveis Superglobais
`TODO: Adicionar conteúdo sobre variáveis superglobais.`
