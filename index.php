<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$data = json_decode($response, true);
curl_close($ch);
?>

<head>
  <meta charset="utf-8">
  <title>La próxima peícula de Marvel</title>
  <meta name="description" content="La próxima película de Marvel">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>
<main>
  <header>
    <h1>¿Cuando el la Próxima Película del UCM?</h1>
  </header>

  <body>
    <hgroup style="text-align: center;">
      <h2><?= $data["title"]; ?> se estrena en <i><?= $data["days_until"]; ?> días</i>!</h2>
      <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
      <p>Cual es la siguiente? <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
    <section>
      <img 
        src="<?= $data["poster_url"] ?>" width="300" alt="Poster de <?= $data["title"]; ?>"
        style = "border-radius: 15px;"
        >
      </section>
  </body>
</main>

<style>

  main {
    display: flex;
    flex-direction: column;
    height: 100vh;
    width: 100%;
    margin: 0;
    padding: 0;
  }
  
  header {
    height: 100px !important;
    width: 100% !important;
    text-align: center;
    background: #444;
  }

  body {
    color-scheme: light dark;
    display: grid;
    place-content: center;
  }

  section {
    display: flex;
    justify-content: center;
  }
</style>