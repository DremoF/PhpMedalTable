<main>
    <div class="d-flex justify-content-center bg-light text-dark">
      <div class="w-50 p-3">
        <table class="table table-striped">
          <thead class="table-light">
            <tr>
              <th scope="col">
                <a href="main?column=nrow&order=asc" class="fas fa-sort-down"></a>
                #
                <a href="main?column=nrow&order=desc" class="fas fa-sort-up"></a>
              </th>
                <th scope="col"><a href="main?column=name&order=asc" class="fas fa-sort-down"></a>
                Страна
                <a href="main?column=name&order=desc" class="fas fa-sort-up"></a>
              </th>
              <th scope="col">
                <a href="main?column=gold&order=asc" class="fas fa-sort-down"></a>
                Золото
                <a href="main?column=gold&order=desc" class="fas fa-sort-up"></a>
              </th>
              <th scope="col">
                <a href="main?column=silver&order=asc" class="fas fa-sort-down"></a>
                Серебро
                <a href="main?column=silver&order=desc" class="fas fa-sort-up"></a>
              </th>
              <th scope="col">
                <a href="main?column=bronze&order=asc" class="fas fa-sort-down"></a>
                Бронза
                <a href="main?column=bronze&order=desc" class="fas fa-sort-up"></a>
              </th>
              <th scope="col">
                <a href="main?column=medal&order=asc" class="fas fa-sort-down"></a>
                Всё
                <a href="main?column=medal&order=desc" class="fas fa-sort-up"></a>
              </th>
            </tr>
          </thead>
          <tbody class="shadow p-3 mb-5 bg-white rounded">
          {foreach $getMedalCount as $val}
            <tr>
              <td><a class="link-dark"
                  href="/MedalStats/1/{$val.id}"</a>{$val.nrow}</td>
              <td><a class="link-dark"
                  href="/MedalStats/1/{$val.id}"</a>{$val.name}</td>
              <td><a class="link-dark"
                  href="/MedalStats/1/{$val.id}"</a>{$val.gold}</td>
              <td><a class="link-dark"
                  href="/MedalStats/2/{$val.id}"</a>{$val.silver}</td>
              <td><a class="link-dark"
                  href="/MedalStats/3/{$val.id}"</a>{$val.bronze}</td>
              <td><a class="link-dark"
                  href="/MedalStats/4/{$val.id}"</a>{$val.medal}</td>
              </tr>
              {/foreach}
            </tbody>
        </table>
      </div>
    </div>
  </main>
</body>