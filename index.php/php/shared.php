<?php


  function getvar($var) {
    if (file_exists('.env')) {
      $file = file_get_contents('.env', true);
      $env = explode("\n", $file);

      foreach ($env as $vars) {
        if (preg_match('/^' . $var . '=/', $vars)) {
          $value = preg_replace('/^' . $var . '=/', '', $vars);
          $clean = preg_replace('/["|\'|`]/', '', $value);

          echo '<br>'.$clean;

        }
      }
    }

    return NULL;
  }

?>
