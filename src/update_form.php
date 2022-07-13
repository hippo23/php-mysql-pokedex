<form class="z-30 w-2/6 md:min-w-[600px] min-w-[400px] shadow-md rounded-xl border-2 border-solid border-white bg-black px-8 pt-6 pb-8 mb-4" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div class="w-full h-full flex lg:flex-row flex-col justify-around items-center">
    <div class="">
      <div class='mb-4'>
        <label class="block text-white text-sm font-bold mb-2">
          Pokedex #
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 bg-inherit text-white mb-3 leading-tight focus:outline-none focus:shadow-outline focus:text-gray-700 focus:bg-white focus:border-blue-600 transition ease-in-out" type='number' min='1' name='pokedex_number'></input>
      </div>
      <div class='mb-4'>
        <label class="block text-white text-sm font-bold mb-2">
          Pokemon Name
        </label>
        <input class="focus:text-gray-700 focus:bg-white focus:border-blue-600 shadow appearance-none border rounded w-full py-2 px-3 bg-inherit text-white mb-3 leading-tight focus:outline-none focus:shadow-outline transition ease-in-out" type='text' min='1' name='pokemon_name'></input>
      </div>
      <div class='mb-4'>
        <label class="block text-white text-sm font-bold mb-2">
          Type 1
        </label>
        <select class="form-select form-select-sm
    appearance-none
    block
    w-full
    px-2
    py-1
    text-sm
    font-normal
    text-white
    bg-inherit bg-clip-padding bg-no-repeat
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-sm example" name='type1'>
          <option selected value=''>Select Type</option>
          <option>Normal</option>
          <option>Fire</option>
          <option>Water</option>
          <option>Grass</option>
          <option>Electric</option>
          <option>Ice</option>
          <option>Fighting</option>
          <option>Poison</option>
          <option>Ground</option>
          <option>Flying</option>
          <option>Psychic</option>
          <option>Bug</option>
          <option>Rock</option>
          <option>Ghost</option>
          <option>Dark</option>
          <option>Dragon</option>
          <option>Steel</option>
          <option>Fairy</option>
        </select>
      </div>
      <div class='mb-4'>
        <label class="block text-white text-sm font-bold mb-2">
          Type 2
        </label>
        <select class="form-select form-select-sm
    appearance-none
    block
    w-full
    px-2
    py-1
    text-sm
    font-normal
    text-white
    bg-inherit bg-clip-padding bg-no-repeat
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-sm example" name='type2'>
          <option selected value=''>Select Type</option>
          <option>Normal</option>
          <option>Fire</option>
          <option>Water</option>
          <option>Grass</option>
          <option>Electric</option>
          <option>Ice</option>
          <option>Fighting</option>
          <option>Poison</option>
          <option>Ground</option>
          <option>Flying</option>
          <option>Psychic</option>
          <option>Bug</option>
          <option>Rock</option>
          <option>Ghost</option>
          <option>Dark</option>
          <option>Dragon</option>
          <option>Steel</option>
          <option>Fairy</option>
        </select>
      </div>
      <div class='mb-4'>
        <label class="block text-white text-sm font-bold mb-2">
          HP
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 bg-inherit text-white mb-3 leading-tight focus:outline-none focus:shadow-outline focus:text-gray-700 focus:bg-white focus:border-blue-600 transition ease-in-out" type='number' min='1' name='hp'></input>
      </div>
      <div class='mb-4'>
        <label class="block text-white text-sm font-bold mb-2">
          Attack
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 bg-inherit text-white mb-3 leading-tight focus:outline-none focus:shadow-outline focus:text-gray-700 focus:bg-white focus:border-blue-600 transition ease-in-out" type='number' min='1' name='attack'></input>
      </div>
    </div>
    <div class="">
      <div class='mb-4'>
        <label class="block text-white text-sm font-bold mb-2">
          Defense
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 bg-inherit text-white mb-3 leading-tight focus:outline-none focus:shadow-outline focus:text-gray-700 focus:bg-white focus:border-blue-600 transition ease-in-out" type='number' min='1' name='defense'></input>
      </div>
      <div class='mb-4'>
        <label class="block text-white text-sm font-bold mb-2">
          Special Attack
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 bg-inherit text-white mb-3 leading-tight focus:outline-none focus:shadow-outline focus:text-gray-700 focus:bg-white focus:border-blue-600 transition ease-in-out" type='number' min='1' name='special_attack'></input>
      </div>
      <div class='mb-4'>
        <label class="block text-white text-sm font-bold mb-2">
          Special Defense
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 bg-inherit text-white mb-3 leading-tight focus:outline-none focus:shadow-outline focus:text-gray-700 focus:bg-white focus:border-blue-600 transition ease-in-out" type='number' min='1' name='special_defense'></input>
      </div>
      <div class='mb-4'>
        <label class="block text-white text-sm font-bold mb-2">
          Speed
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 bg-inherit text-white mb-3 leading-tight focus:outline-none focus:shadow-outline focus:text-gray-700 focus:bg-white focus:border-blue-600 transition ease-in-out" type='number' min='1' name='speed'></input>
      </div>
      <div class='mb-4'>
        <label class="block text-white text-sm font-bold mb-2">
          Generation
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 bg-inherit text-white mb-3 leading-tight focus:outline-none focus:shadow-outline focus:text-gray-700 focus:bg-white focus:border-blue-600 transition ease-in-out" type='number' min='7' name='generation'></input>
      </div>
      <div class='mb-4'>
        <div class="flex items-center mb-4">
          <input id="default-checkbox" type="hidden" value="0" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="legendary">
          <input id="default-checkbox" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="legendary">
          <label class="pl-2 block text-white text-sm font-bold mb-2 align-middle">
            Legendary
          </label>
        </div>
      </div>
    </div>
  </div>
  <div class='flex items-center justify-center'>
    <input type='submit' value='Update' name='submit_update' class="m-4 cursor-pointer bg-black border border-white border-solid border-2 text-white font-normal font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
    </input>
    <input type='reset' value='Clear' name='clear' class="m-4 cursor-pointer bg-black border-white border-solid border-2 border text-white font-normal font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
    </input>
  </div>
</form>
