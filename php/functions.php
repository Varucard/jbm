<?php

  $_SESSION['mensaje'] = '';

  /*---------- Funciones ----------*/

  /**
   * Chequea que los Strings recibidios sean apropiados.
   * Recibe un String y un String pre definido.
   * @param string $inputKey Valor a verificar
   * @param string $regex Expresióno regular - Este parametro es opcional y su valor por defecto es 'null'
   * 
   * @return string|boolean Si cumple con los parametros devuelve el mismo sin espacios y en Mayusculas, de lo contrario retorna 'false'.
   */
  function checkInputText(string $inputKey, string $regex = null) {
      
    // Verifico que este definida
    if (!isset($_POST[$inputKey])) {
      return false;
    }

    $input = $_POST[$inputKey];

    // Verifico el tipo de dato
    if (!is_string($input)) {
      return false;
    }

    // Pre formateo del valor
    $input = trim($input);

    // Comparo el texto con la expresión regular
    if (isset($regex) && !preg_match($regex, $input)) {
      return false;
    }
    
    return (strtoupper($input));
  }

  /**
   * Chequear que el Email recibido sea valido.
   * Recibe un String
   * @param string $inputKey Valor a verificar
   * 
   * @return string|boolean Si cumple con los parametros devuelve el mismo convetido a Minusculas. De lo contrario retorn 'false'
   */
  function checkInputEmail(string $inputKey) {

    $email = checkInputText($inputKey);
    $email = strtolower($email);

    // Verifico si el Mail brindado es apropiado
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
      return false;

    return $email;
  }

?>