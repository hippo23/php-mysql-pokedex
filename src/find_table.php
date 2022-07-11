<div class="h-auto w-5/6 relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">
          Pokemon name
        </th>
        <th scope="col" class="px-6 py-3">
          Pokedex number
        </th>
        <th scope="col" class="px-6 py-3">
          Type 1
        </th>
        <th scope="col" class="px-6 py-3">
          Type 2
        </th>
        <th scope="col" class="px-6 py-3">
          Generation
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($data as $items) {
      ?>
        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
            <?php echo $items['pokemon_name']; ?>
          </th>
          <td class="px-6 py-4">
            <?php echo $items['pokedex_number']; ?>
          </td>
          <td class="px-6 py-4">
            <?php echo $items['type1']; ?>
          </td>
          <td class="px-6 py-4">
            <?php echo $items['type2']; ?>
          </td>
          <td class="px-6 py-4">
            <?php echo $items['generation']; ?>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
