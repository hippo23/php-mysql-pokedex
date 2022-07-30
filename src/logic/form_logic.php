  <?php
  // Logic for searching MySQL Database
  $data = null;

  if (isset($_POST['submit'])) {
    $_SESSION['update_data'] = '';
    foreach ($_POST as $key => $value) {
      if ($value === '') {
        $_POST[$key] = null;
      }
    }

    $submit_fields = array('pokemon_name', 'pokedex_number', 'type1', 'type2');
    $conditions = array();


    foreach ($submit_fields as $field) {
      if (isset($_POST[$field]) && $_POST[$field] != '') {
        $conditions[] = "$field = '" . $_POST[$field] . "'";
      }
    }

    $query = "SELECT * FROM Pokemons ";

    if (count($conditions) > 0) {
      $_SESSION['update_data'] .= "WHERE " . implode(' AND ', $conditions);
    }

    $query .= $_SESSION['update_data'];

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
  if (isset($_POST['submit_create'])) {

    $_SESSION['update_data'] = '';
    $addErr = false;

    foreach ($_POST as $key => $value) {
      if ($value === '' && $key != 'type2') {
        $addErr = true;
      }
    }

    if (!$addErr) {
      $create_fields = array(
        'pokedex_number', 'pokemon_name', 'type1', 'type2', 'hp', 'attack', 'defense', 'special_attack',
        'special_defense', 'speed', 'generation', 'legendary'
      );
      $conditions = array();
      $conditions_forUpdate = array();

      foreach ($create_fields as $field) {
        if (isset($_POST[$field]) && $_POST[$field] != '') {
          $conditions[] = "'$_POST[$field]'";
          $conditions_forUpdate[] = "$field = '" . $_POST[$field] . "'";
        }
      }


      $query = "INSERT INTO Pokemons 
    (pokedex_number, pokemon_name, type1, type2, hp, attack, defense, special_attack, special_defense, speed, generation, legendary)
    VALUES(";

      if (count($conditions) > 0) {
        $query .= implode(",", $conditions);
        $_SESSION['update_data'] .= "WHERE " . implode(' AND ', $conditions_forUpdate);
      }

      $query .= ")";

      mysqli_query($conn, $query);

      $data = mysqli_query($conn, "SELECT * FROM Pokemons " . $_SESSION['update_data']);
    }
  }

  if (isset($_POST['submit_delete'])) {
    foreach ($_POST as $key => $value) {
      if ($value === '') {
        $_POST[$key] = null;
      }
    }

    $submit_fields = array('pokemon_name', 'pokedex_number', 'type1', 'type2');
    $conditions = array();


    foreach ($submit_fields as $field) {
      if (isset($_POST[$field]) && $_POST[$field] != '') {
        $conditions[] = "$field = '" . $_POST[$field] . "'";
      }
    }

    $query = "DELETE FROM Pokemons ";

    if (count($conditions) > 0) {
      $query .= "WHERE " . implode(' AND ', $conditions);
    }

    if ($query != 'DELETE FROM Pokemons ') {
      if (mysqli_query($conn, $query)) {
      }
    }
    $data = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM Pokemons " . $_SESSION['update_data']), MYSQLI_ASSOC);
  }

  if (isset($_POST['submit_update'])) {
    foreach ($_POST as $key => $value) {
      if ($value === '') {
        $_POST[$key] = null;
      }
    }

    $fields = array(
      'pokedex_number', 'pokemon_name', 'type1', 'type2', 'hp', 'attack', 'defense', 'special_attack',
      'special_defense', 'speed', 'generation', 'legendary'
    );
    $conditions = array();


    foreach ($fields as $field) {
      if (isset($_POST[$field]) && $_POST[$field] != '') {
        $conditions[] = "$field = '" . $_POST[$field] . "'";
      }
    }


    $query = "UPDATE Pokemons SET ";

    if (count($conditions) > 0) {
      $query .= implode(', ', $conditions);
    }

    $query .= ' ' . $_SESSION['update_data'];

    if ($query != 'UPDATE Pokemons SET ' && $_SESSION['update_data'] != '') {
      if (!mysqli_query($conn, $query)) {
        echo 'There is no matching pokemon in the database.';
      }
      $data = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM Pokemons " . $_SESSION['update_data']), MYSQLI_ASSOC);
    }
  }

  ?>
