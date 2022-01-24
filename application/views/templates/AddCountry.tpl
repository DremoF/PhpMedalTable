
<body>
    <main>
        <div class="d-flex justify-content-center bg-light text-dark">
            <div class="w-50 p-3">
                <form action="" method="POST">
                    <div class="hstack gap-3 input-group mb-2">
                        <input type="text" class="form-control" name="contryName" required
                            placeholder="Введите имя страны" aria-describedby="button-addon">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon">Добавить</button>
                    </div>
                </form>
                <table class="table table-striped">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Страна</th>
                            <th scope="col">Действие</th>
                        </tr>
                    </thead>
                    {foreach $currentContry as $contry}
                    <tbody class="shadow p-3 mb-5 bg-white rounded">
                        <tr>
                            <th scope="row">{$contry.id}</th>
                                <td>
                                {$contry.name}
                                </td>
                            <td>
                            <button class="btn btn-outline-danger" onClick="deleteId('/country/{$contry.id}')" >Удалить</button>
                            </td>
                        </tr>
                    </tbody>
                    {/foreach}
                </table>
            </div>
        </div>
    </main>
</body>
