<?php
if (!defined('ABSPATH')) {
  exit();
}
// Funzione per elaborare lo shortcode chiamato ...
// questa funzione viene richiamata automaticamente da wordpress
function my_shortcode_xcloud_services($options,$content=null) 
{

  // Preparazione variabile con URL del video
  $parametro_1 = array();
  $opzioni_estratte = get_option('xcloud_services_option');
  $parametro_1 = $opzioni_estratte['param1'];

  // Creazione codice HTML per inserire un video youtube
  $HTML = $parametro_1;

  // Se si vuole in qualche maniera tenere conto del contenuto
  // indicato nella modalità estesa e quindi del testo HTML
  // presente tra apertura e chiusura shortcode ricordate che
  // trovate tutta la stringa nella variabile $content

  if (!is_null($content)) {}

  // Ritorno il codice finale HTML dello shortcode
  return $HTML;
}

// Associazione shortcode alla funzione PHP
add_shortcode('xcloud-services','my_shortcode_xcloud_services');

?>