# cadastro-clientes
- Operadores lógicos
- Estrutura de decisão
    - if
    - switch
    - ternário
- Estrutura de repetição
    - while
    - for
- Desafios

## Operadores lógicos
- Os operadores lógicos são:
    - && (AND ou E): se apenas uma expressão for falsa o resultado será falso. Para ser verdadeiro, todas as expressões precisam ser verdadeiras.
    - || (OR ou OU): uma expressão precisa ser verdadeira para o resultado ser verdadeiro. O resultado só sera falso se todas as expressões forem falso.
    - ! (NOT ou NÃO): inverte o resultado, se for verdadeiro e você usar o NOT o resultado mudará para false, se for falso mudará para verdadeiro.
 

##  Estrutura de decisão
### IF
- Quando você precisa que seu código tome alguma decição baseado em uma ou mais condições.

#### Sintaxe 
```php
if(condição){
    resposta verdadeira
}else{
    resposta falsa
}
```

#### IF Simples
```php
if($idade>=18 && $fumante == false){
    echo "<p>Sua idade é $idade </p>";
    echo "<p>Pode entrar na festa</p>";
}
```

#### IF com ELSE
```php
if($idade>=18 && $fumante == false){
    echo "<p>Sua idade é $idade </p>";
    echo "<p>Pode entrar na festa</p>";
}else{
    echo "Você não pode entrar";
}
```

#### IF com ELSE IF
```php
if($nota >= 8){
    echo "<p>Aprovado</p>";
}else if($nota >= 5){
    echo "<p>Recuperação</p>";
}else{
    echo "<p>Reprovado</p>";
}
```

### Ternário
#### Sintaxe
```php
condição ? resposta verdadeira : resposta falsa
```
#### Exemplo
```php
echo ($idade>=18)? "pode entrar": "rejeitado";
``` 

### switch
#### Sintaxe
```php
switch(variável){
    case valor:
        código
        break;
    case valor:
        código
        break;
    default:
        código
        break;
}
```
#### Exemplo
```php
switch ($cor) {
    case 'azul':
        echo "<p>Sua cor favorita é <b>AZUL</b></p>";
        break;
    
    case 'verde':
        echo "<p>Sua cor favorita é <b>VERDE</b></p>";
        break;
    
    case 'vermelho':
        echo "<p>Sua cor favorita é <b>VERMELHO</b></p>";
        break;
        
    default:
        echo "<p>Sua cor favorita não é verde, nem azul e nem vermelho</p>";
        break;
}
```

## Estrutura de repetição
### while - enquanto
- Será executado o laço enquanto a condição for verdadeira.
#### Sintaxe
```php
while(condição){
    código
}
```

#### Exemplo
```php
  while($contador < 10){
        echo "contador while, loop número $contador <br>";
        // $contador = $contador + 1
        $contador++;
    }
```

### Operador de incremente
- `$++` é igual à `$i = $i + 1`
- o operador `++` faz com que seja atribuído +1 à variável incrementada 
- o operador `--` faz com que seja removido -1 da variável decrementada

### Array
- array é uma varável com multidimensões, isso significa que eu posso armazenar diversos valores(inclusive ) de tipos diferentes no array
- um array possui posições iguais à quantidade de elementos. Exemplo: `$clientes = ['Guto','Renato', 'João']`
-  o array clientes possui 3 posições sempre começando em 0. Para eu exibir o cliente Guto eu devo usar `$clientes[0]`, para exibir o cliente João devo usar `$clientes[2]`.
- o comando `count()` exibe a quantidade de posições de um array. Exmeplo: `count($clientes)`

### for - para
#### Sintaxe
```php
for(inicialização da variável ; condição ; incremento){
    bloco de código
}
```
#### Exemplo
```php
for($i=1 ; $i <= 10; $i++){
    echo $i;
}
```

#### Exemplo
```php
for ($i=0; $i < count($clientes); $i++) { 
    echo "$clientes[$i]<br>";
}
```

## Arquivo texto
### Criando um arquivo
- `fopen` : indicar o nome do arquivo e a maneira como esse arquivo será aberto. Exemplo: `fopen("clientes.txt","w");` o nome do arquivo é "clientes.txt" e a maneira como arquivo será aberto é "w", que significa escrita.
- `fwrite` : indicar o nome do arquivo e o conteúdo que será inserido nesse arquivo. Exemplo: `fwrite($arquivo,"Renata");` o nome do arquivo é "clientes.txt" e o conteúdo que será inserido no arquivo é "Renata"
- `fclose` : indicar qual arquivo será fechado. Exemplo: `fclose($arquivo);`.

```php
$arquivo = fopen("clientes.txt","w");
fwrite($arquivo, "Renata");
fclose($arquivo);
```

> Tabela com os modos de abertura de arquivos: https://eufacoprogramas.com/como-manipular-arquivos-em-php/
### Lendo um arquivo
- `fopen`: o modo de abertura é o "r" que indica leitura do arquivo. Exemplo: `fopen("clientes.txt", "r");`
- `fread` : indicar o arquivo que será lido e o tamanho das informações que seram lidas, nesse caso, como normalmente queremos o arquivo inteiro utilizamos o comando `filesize` que retorna o tamanho de um arquivo. Exemplo: `fread($arquivo, filesize("clientes.txt"));`

```php
$arquivo = fopen(clientes.txt,"r");
echo fread($arquivo,filesize(clientes.txt));
fclose($arquivo);
```