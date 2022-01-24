
<body>
    <main>
        <div class="d-flex justify-content-center bg-light text-dark">
            <div class="w-50 p-3">
                <form action="" method="POST">
                    <div class="form-group">
                        <div class="mb-1">
                            <select class="form-select form-select-sm" name="medal"
                                aria-label=".form-select-sm example">
                                <option required disabled selected>Выбор медали</option>
                                    {foreach $currentMedalType as $medal}
                                <option value="{$medal.id}">
                                    {$medal.name}
                                </option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="mb-1">
                            <select class="form-select form-select-sm" name="country"
                                aria-label=".form-select-sm example">
                                <option disabled selected>Выбор страны</option>
                                    {foreach $currentContry as $contry}
                                <option value="{$contry.id}">
                                    {$contry.name}
                                </option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="mb-1">
                            <select class="form-select form-select-sm" name="sport"
                                aria-label=".form-select-sm example">
                                <option disabled selected>Выбор вида спорта</option>
                                    {foreach $currentSport as $sport}
                                <option value="{$sport.id}">
                                    {$sport.name}
                                </option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="mb-1">
                            <select class="form-select form-select-sm" required name="athlete[]"
                                aria-label=".form-select-sm example">
                                <option disabled selected>Выбор cпорцмена</option>
                                    {foreach $currentAthlete as $athlete}
                                <option value="{$athlete.id}">
                                    {$athlete.name}
                                </option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="mb-1">
                            <select class="form-select form-select-sm" name="athlete[]"
                                aria-label=".form-select-sm example">
                                <option disabled selected>Выбор cпорцмена(команда)</option>
                                    {foreach $currentAthlete as $athlete}
                                <option value="{$athlete.id}">
                                    {$athlete.name}
                                </option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="mb-1">
                            <select class="form-select form-select-sm" name="athlete[]"
                                aria-label=".form-select-sm example">
                                <option disabled selected>Выбор cпорцмена(команда)</option>
                                    {foreach $currentAthlete as $athlete}
                                <option value="{$athlete.id}">
                                    {$athlete.name}
                                </option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="mb-1">
                            <select class="form-select form-select-sm" name="athlete[]"
                                aria-label=".form-select-sm example">
                                <option disabled selected>Выбор cпорцмена(команда)</option>
                                    {foreach $currentAthlete as $athlete}
                                <option value="{$athlete.id}">
                                    {$athlete.name}
                                </option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="mb-1">
                            <select class="form-select form-select-sm" name="athlete[]"
                                aria-label=".form-select-sm example">
                                <option disabled selected>Выбор cпорцмена(команда)</option>
                                    {foreach $currentAthlete as $athlete}
                                <option value="{$athlete.id}">
                                    {$athlete.name}
                                </option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="row g-1 mb-2">
                            <button type="submit" class="btn btn-outline-secondary">Добавить</button>
                        </div>
                    </div>
                </form>
                <table class="table table-striped">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Название страны</th>
                            <th scope="col">Вид спорта</th>
                            <th scope="col">Имя спорцена</th>
                            <th scope="col">Тип медали</th>
                            <th scope="col">Действие</th>
                        </tr>
                    </thead>
                        {foreach $currentMedalStats as $medal}
                    <tbody class="shadow p-3 mb-5 bg-white rounded">
                        <tr>
                            <th> {$medal.countries_name}</th>
                            <th> {$medal.sports_name}</th>
                            <th> {$medal.athlete_name}</th>
                            <td> {$medal.medal_name}</td>
                            <td>
                            <button class="btn btn-outline-danger" onClick="deleteId('/medal/{$medal.medals_id}')">Удалить</button>
                            </td>
                        </tr>
                    </tbody>
                    {/foreach}
                </table>
            </div>
        </div>
    </main>
</body>
