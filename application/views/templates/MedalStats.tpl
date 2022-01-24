<body>
    <main>
        <div class="d-flex justify-content-center bg-light text-dark">
            <div class="w-50 p-3">
                <table class="table table-striped">
                    <thead class="table-light">
                        <h3>
                            {$message}
                            {$contryName}
                        </h3>
                        <tr>
                            <th scope="col">Имя спорцмена</th>
                            <th scope="col">Вид спорта</th>
                            <th scope="col">Медаль</th>
                        </tr>
                    </thead>
                    {foreach $getMedalstats as $statts}
                    <tbody class="shadow p-3 mb-5 bg-white rounded">
                        <tr>
                            <td>{$statts.athlete}</td>
                            <td>{$statts.sports_name}</td>
                            <td>{$statts.medal_name}</td>
                        </tr>
                    </tbody>
                    {/foreach}
                </table>
            </div>
        </div>
    </main>
</body>