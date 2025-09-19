1. Planejamento

A ideia do site foi criar um quiz interativo em que o usuário responde perguntas e os dados das respostas são salvos em um banco de dados.
Definiu-se que seria usado PHP + MySQL no backend, e HTML + CSS + JavaScript no frontend.

2. Configuração do Banco de Dados

Criou-se um banco de dados (ex: quiz_db) no MySQL.
Dentro dele, foi criada uma tabela (provavelmente chamada quiz ou algo parecido), com colunas para armazenar:

id (chave primária)
pergunta ou resposta (dependendo da lógica)
Talvez usuario ou pontuacao.

3. Arquivo conexao.php

Esse arquivo foi criado para centralizar a conexão com o banco.
Dentro dele, foi definido:

Servidor (ex: localhost)
Usuário (ex: root)
Senha
Nome do banco de dados
Com mysqli ou PDO, o script abre a conexão e a deixa pronta para ser usada em outros arquivos.
Assim, não precisa repetir a conexão em todo o código.

4. Arquivo salvar_quiz.php

Esse arquivo é responsável por receber os dados enviados pelo formulário (via POST).
O passo a passo dele é:

Incluir o conexao.php para conectar no banco.
Pegar os dados enviados pelo formulário (ex: respostas do quiz).
Validar (garantir que não está vazio e que os dados são válidos).
Usar um INSERT INTO para salvar as respostas no banco.
Retornar uma mensagem de sucesso ou erro.

5. Arquivo HTML (frontend do quiz)

Criado um arquivo .html (provavelmente index.html ou quiz.html) que:

Mostra as perguntas do quiz.
Usa um formulário <form> com inputs (radio, checkbox, text, etc.).
Define action="salvar_quiz.php" e method="POST".
Dessa forma, quando o usuário envia o quiz, os dados vão para o salvar_quiz.php.

6. Estilização (CSS)

Um arquivo style.css foi adicionado para deixar o quiz mais bonito:

Fonte personalizada.
Cores para botões e fundo.
Layout centralizado.

7. Interatividade (JavaScript)

Um script.js foi incluído para melhorar a experiência:

Validar respostas antes de enviar.
Mostrar mensagens dinâmicas (ex: “Você acertou X de Y perguntas”).
Talvez até enviar os dados via AJAX sem recarregar a página.

8. Testes

Foram feitos testes para garantir que:

As respostas chegam corretamente no salvar_quiz.php.
O banco de dados grava sem erros.
O site funciona tanto no PC quanto no celular (responsividade).
