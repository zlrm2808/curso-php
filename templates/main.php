<main>
  <header>
    <h1>¿Cuando el la Próxima Película del UCM?</h1>
  </header>

  <body>
    <hgroup style="text-align: center;">
      <h2><?= $title. " - " . $until_message; ?></h2>
      <p>Fecha de estreno: <?= $release_date; ?></p>
      <p>Cual es la siguiente? <?= $following_production; ?></p>
    </hgroup>
    <section>
      <img 
        src="<?= $poster_url; ?>" width="300" alt="Poster de <?= $title; ?>"
        style = "border-radius: 25px;"
        >
      </section>
  </body>
</main>