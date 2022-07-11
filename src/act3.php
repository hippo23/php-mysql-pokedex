<?php include './database.php'; ?>

<!DOCTYPE HTML>
<html class='h-auto w-full bg-white'>

<head>
  <meta charset="UTF-8">
  <title>Pokedex</title>
  <style>
    <?php include "../dist/output.css" ?><?php include "./logic/form_logic.php" ?>
  </style>

</head>

<body class='w-full h-auto m-0 p-0 text-base border-none'>
  <div class='w-full h-screen h-screen flex lg:flex-row flex-col items-center justify-around bg-white'>
    <?php include './masthead.php'; ?>
  </div>
  <div class='z-30 w-full h-[80vh] flex lg:flex-row flex-col items-center justify-center bg-black min-w-full pt-6 pb-6'>
    <div class='font-bold text-white drop-shadow-[0_5px_3px_rgba(0,0,0,0.4)] p-12 text-center justify-center flex-col'>
      <h1 class='mb-6 text-4xl xl:text-5xl'>
        <span class='underline-offset-8 decoration-1 underline'>Find</span> your pokemon.
      </h1>
    </div>
    <?php include './find_form.php'; ?>
  </div>
  <div class='h-auto min-h-[50vh] z-30 w-full flex lg:flex-row flex-col text-base items-center justify-center bg-white min-w-full p-12'>
    <?php include './find_table.php'; ?>
  </div>
  <div class='z-30 w-full h-auto min-h-[80vh] flex 2xl:flex-row flex-col items-center justify-center bg-black min-w-full pt-24 pb-24'>
    <?php include './create_form.php'; ?>
    <div class='font-bold text-white drop-shadow-[0_5px_3px_rgba(0,0,0,0.4)] pt-12 text-center justify-center flex-col 2xl:pl-12'>
      <h1 class='mb-6 text-4xl xl:text-5xl'>
        <span class='underline underline-offset-8 decoration-1'>Create</span> your pokemon.
      </h1>
    </div>
</body>

</html>
