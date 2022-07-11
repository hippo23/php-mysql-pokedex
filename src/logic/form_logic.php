  <?php
  // Logic for searching MySQL Database
  if (isset($_POST['submit'])) {
    foreach ($_POST as $key => $value) {
      if ($value === '') {
        $_POST[$key] = null;
      }
    }

    $fields = array('pokemon_name', 'pokedex_number', 'type1', 'type2');
    $conditions = array();


    foreach ($fields as $field) {
      if (isset($_POST[$field]) && $_POST[$field] != '') {
        $conditions[] = "$field = '" . $_POST[$field] . "'";
      }
    }

    $query = "SELECT * FROM Pokemons ";

    if (count($conditions) > 0) {
      $query .= "WHERE " . implode(' AND ', $conditions);
    }

    echo $query;
    if ($query != 'SELECT * FROM Pokemons ') {
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
      }
    }
  }


  if (isset($_POST['clear'])) {
  }

  // Logic for adding to MySQL Database
  ?>
