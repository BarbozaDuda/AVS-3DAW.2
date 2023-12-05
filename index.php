<!DOCTYPE html>
<html>
<head>
  <title>Gerenciamento de Emprestimos</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div class="header">
    <h1>Gerenciamento de Emprestimos</h1>
  </div>

  <div class="menu">
    <button id="btnListarEmprestimos">Listar Emprestimos</button>
    <button id="btnIncluirEmprestimos">Incluir Emprestimos</button>
    <button id="btnAlterarEmprestimos">Alterar Emprestimos</button>
  </div>

  <div class="content">
    <h2>Listar Emprestimos</h2>
    <div id="resultado"></div>

    <h2>Incluir Emprestimos</h2>
    <form id="formIncluirEmprestimos" action="incluiremprestimosAVS.php" method="POST">
      <label for="empres">Insira o valor do emprestimo:</label>
      <input type="number" name="sala" required><br>
      <label for="pedinte">CPF do pedinte:</label>
      <input type="text" name="pedinte" required><br>
      <label for="credor">CPF do credor:</label>
      <input type="text" name="credor" required><br>
      <input type="submit" value="Incluir Emprestimo Agora">
    </form>

    <h2>Alterar Emprestimo</h2>
    <form id="formAlterarEmprestimos" action="alteraremprestimosAVS.php" method="POST">
      <label for="cpf">CPF do Pedinte:</label>
      <input type="text" name="cpf" required><br>
      <label for="novoEmp">Insira o novo valor:</label>
      <input type="number" name="novoEmp" required><br>
      <input type="submit" value="Alterar Emprestimo Agora">
    </form>
  </div>

  <script>
    $(document).ready(function() {
      $('#btnListarEmprestimos').click(function() {
        $.ajax({
          url: 'listaremprestimosAVS.php',
          type: 'GET',
          success: function(response) {
            $('#resultado').html(response);
          }
        });
      });

      $('#formIncluirEmprestimos').submit(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'incluiremprestimosAVS.php',
          type: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            alert(response);
          }
        });
      });

      $('#formAlterarEmprestimos').submit(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'alteraremprestimosAVS.php',
          type: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            alert(response);
          }
        });
      });
    });
  </script>
</body>
</html>