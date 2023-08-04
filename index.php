<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конвертер единиц измерения нагрузки</title>
</head>
<body>
    <section>
        <h1>Конвертер единиц измерения нагрузки</h1>
        <div>
            <form action="index.php" method="GET">
                <label for="input">Количество: </label>
                <input type="text" name="input" placeholder="Введите количество единиц">
                <label for="dropdown">Единицы измерения: </label>
                <select name="dropdown">
                    <option disabled selected>Выберите единицы измерения</option>
                    <option value="mkN">Микроньютон [мкН]</option>
                    <option value="mN">Миллиньютон [мН]</option>
                    <option value="N">Ньютон [Н]</option>
                    <option value="kN">Килоньютон [кН]</option>
                    <option value="MN">Меганьютон [МН]</option>
                    <option value="kgs">Килограмм-сила [кгс]</option>
                    <option value="ts">Тонна-сила [тс]</option>
                </select>
                <div>
                    <label for="outdropdown">Перевести в единицы: </label>
                    <select name="outdropdown">
                        <option disabled selected>Выберите единицы измерения</option>
                        <option value="mkN">Микроньютон [мкН]</option>
                        <option value="mN">Миллиньютон [мН]</option>
                        <option value="N">Ньютон [Н]</option>
                        <option value="kN">Килоньютон [кН]</option>
                        <option value="MN">Меганьютон [МН]</option>
                        <option value="kgs">Килограмм-сила [кгс]</option>
                        <option value="ts">Тонна-сила [тс]</option>
                    </select>
                </div>
                <input type="submit" value="Конвертировать" name="submit">
            </form>
        </div>
    </section>
</body>
</html>
