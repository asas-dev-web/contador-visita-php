<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  <title>Contador de Visitas</title>
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      padding: 1rem;
    }

    .contador {
      font-size: 2rem;
      margin: 20px 0;
    }

    nav,
    footer {
      text-align: center;
      margin: 1rem 0;
    }

    figure {
      margin: 2rem 0;
    }

    img {
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <nav class="container-fluid" style="display: flex; flex-direction: column; align-items: center; gap: 0.5rem; text-align: center;">
  <ul style="list-style: none; padding: 0; margin: 0;">
    <li><strong>Contador de Visitas PHP</strong></li>
  </ul>
  <ul style="list-style: none; padding: 0; margin: 0;">
    <li><a href="https://asasdev.com.br" target="_blank" role="button">Para mais projetos, acesse AsasDev</a></li>
  </ul>
</nav>

  <main>
    <section>
      <hgroup>
        <h2>Bem-vindo à nossa página</h2>
        <h3>Contador de Visitas</h3>
      </hgroup>
      <p class="contador">
        <?php
        // Caminho para o arquivo que armazena o contador
        $arquivoContador = "contador.txt";

        // Verificar se o arquivo existe e pode ser lido
        if (is_readable($arquivoContador)) {
          // Ler o valor atual do contador
          $contador = file_get_contents($arquivoContador);

          // Incrementar o contador
          $contador++;

          // Abrir o arquivo para escrita
          $fp = fopen($arquivoContador, "w");

          // Escrever o novo valor do contador no arquivo
          fwrite($fp, $contador);

          // Fechar o arquivo
          fclose($fp);

          // Exibir o contador de visitas
          echo "Número de visitas: " . $contador;
        } else {
          echo "O arquivo do contador não existe ou não pode ser lido.";
        }
        ?>
      </p>
      <figure>
        <img src="https://cataas.com/cat?width=400&height=300" alt="Imagem aleatória" />
        <figcaption><a href="https://cataas.com" target="_blank">Imagem do Cataas</a></figcaption>
      </figure>
      <h3>Obrigado pela sua visita!</h3>
      <p>Esperamos que aproveite sua estadia em nossa página.</p>
    </section>
  </main>

  <footer class="container">
    <small><a href="#">Política de privacidade</a> • <a href="#">Termos de uso</a></small>
  </footer>
</body>

</html>
