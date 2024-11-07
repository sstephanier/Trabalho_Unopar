<?php
include('layouts/header.php'); 



// Captura a data de nascimento do formulário anterior
$data_nascimento = $_POST['data_nascimento'];
$signos = simplexml_load_file("signos.xml");

// Função para converter data no formato "dd/mm" para "Y-m-d"
function converterDataSigno($data, $ano) {
    $partes = explode("/", $data);
    return date("Y-m-d", strtotime("$ano-{$partes[1]}-{$partes[0]}"));
}

// Determina o signo baseado na data de nascimento
$ano = date("Y", strtotime($data_nascimento));
$signoEncontrado = null;

foreach ($signos->signo as $signo) {
    $dataInicio = converterDataSigno((string)$signo->dataInicio, $ano);
    $dataFim = converterDataSigno((string)$signo->dataFim, $ano);

    // Caso o intervalo inclua o período de nascimento
    if ($data_nascimento >= $dataInicio && $data_nascimento <= $dataFim) {
        $signoEncontrado = $signo;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php include('layouts/header.php'); ?>
<body>
  <div class="container my-4">
    <?php if ($signoEncontrado): ?>
      <h2>Seu Signo é: <?php echo $signoEncontrado->signoNome; ?></h2>
      <p><?php echo $signoEncontrado->descricao; ?></p>
    <?php else: ?>
      <h2>Signo não encontrado</h2>
      <p>Por favor, verifique a data inserida.</p>
    <?php endif; ?>
    <link rel="stylesheet" href="assets/css/style.css">
    <a href="index.php" class="btn btn-secondary mt-3">Voltar</a>
  </div>
</body>
</html>
