<?php

  declare(strict_types = 1);

  function render_template(string $template, array $data = []){
    extract($data);
    require_once("templates/$template.php");
  }

  function get_data(string $url): array {
    $result = file_get_contents($url);
    $data = json_decode($result, associative: true);
    return $data; 
  }

  function get_until_message(int $days): string {
    return match(true){
      $days === 0 => "Hoy se estrena!!! 🥳",
      $days === 1 => "Mañana se estrena! 🚀",
      $days < 7   => "Se estrena en menos de una semana! 🙀",
      $days < 30  => "Se estrena en menos de un mes! 📆",
      default     => "$days días para el estreno! 📅",
    };
  }