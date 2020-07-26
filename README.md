# Aplicação Quiz

![Imagem da Aplicação](https://amazingbits.com.br/imagens/print_quiz.jpg)

## O projeto

Trata-se de uma aplicação onde há uma simulação de um pequeno quiz que é
armazenado em banco de dados.

## Como funciona?

O projeto foi feito com PHP puro utilizando a arquitetura MVC.

Há um pequeno cadastro que já é pré definido em banco de dados
e carregado assim que a aplicação inicia.

A aplicação trabalha basicamente com quatro páginas:

* Home

Esta é a página inicial do projeto.

* Início

A página onde o quiz inicia. Nesta página há todas as questões de um determinado quiz,
o usuário seleciona as respostas e clica em "enviar" para finalizar o quiz.

* Sucesso

Esta página é apresentada assim que o usuário termina o quiz. É apresentado o número de
questões que ele acertou.

* Error

Esta página captura qualquer erro que haja na aplicação, retornando seu código ao usuário.

## Tecnologias

Para o back-end, foi utilizado o PHP como linguagem. No front utilizei HTML + CSS + JavaScript. Nenhum
framework foi utilizado no front-end, apenas a biblioteca JQuery. Para armazenar os dados da aplicação
eu utilizei o MySQL.

Foi utilizado PHP puro nesta aplicação seguindo as devidas PSRs.

## Como testar?

Para testar esta aplicação você deverá ter instalado em seu PC um servidor Web (apache, por exemplo) e
um gerenciador de banco de dados MySQL (Workbench, por exemplo).

Primeiramente, execute em seu gerenciador o script que se encontra na pasta raíz da aplicação: "database.sql".

Com o banco de dados criado, basta configurar a aplicação. Acesse o arquivo: "../source/Boot/Config.php" e
edite as linhas necessárias para rodar. Neste arquivo estão definidos basicamente as configurações de
banco de dados, caminho de template e urls base.
