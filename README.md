Funcionalidade do site do Quiz

1. Página inicial do quiz (frontend)
  O usuário acessa a página do quiz.
  Nela aparecem as perguntas com opções de resposta (múltipla escolha, texto, ou verdadeiro/falso, dependendo de como foi feito).
  O usuário preenche as respostas e clica em "Enviar".

2. Envio das respostas (formulário HTML)
  Quando o usuário envia, os dados do formulário são enviados pelo método POST para o arquivo salvar_quiz.php.
  Exemplo: se a pessoa marcou a resposta "B" na primeira pergunta, essa informação vai junto no POST.

3. Processamento no salvar_quiz.php (backend em PHP)
  O arquivo recebe os dados enviados.
  Ele inclui o conexao.php para abrir conexão com o banco de dados.

  Em seguida:

  Valida as informações recebidas (ex: se não está vazio).
  Insere no banco os dados do quiz, usando INSERT INTO.
  Se tudo der certo, retorna uma mensagem de sucesso (ex: "Respostas salvas com sucesso!").
  Se der erro, mostra uma mensagem de falha (ex: "Erro ao salvar respostas.").

4. Armazenamento no banco de dados
  Todas as respostas ficam guardadas em uma tabela MySQL.
  Isso permite que depois você possa:

  Consultar quem respondeu.
  Contar quantos acertaram determinada pergunta.
  Calcular notas ou estatísticas.
  Resultado para o usuário

5. Dependendo de como foi configurado:
  O site apenas confirma que as respostas foram salvas.
  Ou pode exibir um resultado imediato (ex: "Você acertou 7/10 perguntas").
  Também pode redirecionar o usuário para outra página de resultado.

Foi utilizado ferramentas como IA (CHAT GPT E GEMINI) e outros auxiliadores (BOOTSTRAP e GOOGLE).
