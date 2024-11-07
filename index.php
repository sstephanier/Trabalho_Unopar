<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include('layouts/header.php'); ?>
</head>
<body>
  <div class="container">
    <h1 class="my-4">Descubra seu Signo do Zodíaco</h1>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Formulário para inserir a data de nascimento -->
    <form id="signo-form" method="POST" action="show_zodiac_sign.php">
      <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
      </div>
      <button type="submit" class="btn btn-primary">Verificar Signo</button>
    </form>
  </div>
</body>
</html>
