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
                <input type="number" name="input" placeholder="Введите количество единиц">
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

<?php
if (isset($_GET['submit'])) {
    $inputValue = $_GET['input'];
    if ($_GET['dropdown'] === 'mkN' && $_GET['outdropdown'] === 'mkN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue, 3) . ' мкН</h2>';
    } elseif ($_GET['dropdown'] === 'mkN' && $_GET['outdropdown'] === 'mN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 1000, 3) . ' мН</h2>';
    } elseif ($_GET['dropdown'] === 'mkN' && $_GET['outdropdown'] === 'N') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 1000000, 3) . ' Н</h2>';
    } elseif ($_GET['dropdown'] === 'mkN' && $_GET['outdropdown'] === 'kN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 1000000000, 3) . ' кН</h2>';
    } elseif ($_GET['dropdown'] === 'mkN' && $_GET['outdropdown'] === 'MN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 1000000000000, 3) . ' МН</h2>';
    } elseif ($_GET['dropdown'] === 'mkN' && $_GET['outdropdown'] === 'kgs') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 9806650, 3) . ' кгс</h2>';
    } elseif ($_GET['dropdown'] === 'mkN' && $_GET['outdropdown'] === 'ts') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 9806650000, 3) . ' тс</h2>';
    } elseif ($_GET['dropdown'] === 'mN' && $_GET['outdropdown'] === 'mkN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 1000, 3) . ' мкН</h2>';
    } elseif ($_GET['dropdown'] === 'mN' && $_GET['outdropdown'] === 'mN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue, 3) . ' мН</h2>';
    } elseif ($_GET['dropdown'] === 'mN' && $_GET['outdropdown'] === 'N') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 1000, 3) . ' Н</h2>';
    } elseif ($_GET['dropdown'] === 'mN' && $_GET['outdropdown'] === 'kN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 1000000, 3) . ' кН</h2>';
    } elseif ($_GET['dropdown'] === 'mN' && $_GET['outdropdown'] === 'MN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 1000000000, 3) . ' МН</h2>';
    } elseif ($_GET['dropdown'] === 'mN' && $_GET['outdropdown'] === 'kgs') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 9806.65, 3) . ' кгс</h2>';
    } elseif ($_GET['dropdown'] === 'mN' && $_GET['outdropdown'] === 'ts') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 9806650, 3) . ' тс</h2>';
    } elseif ($_GET['dropdown'] === 'N' && $_GET['outdropdown'] === 'mkN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 1000000, 3) . ' мкН</h2>';
    } elseif ($_GET['dropdown'] === 'N' && $_GET['outdropdown'] === 'mN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 1000, 3) . ' мН</h2>';
    } elseif ($_GET['dropdown'] === 'N' && $_GET['outdropdown'] === 'N') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue, 3) . ' Н</h2>';
    } elseif ($_GET['dropdown'] === 'N' && $_GET['outdropdown'] === 'kN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 1000, 3) . ' кН</h2>';
    } elseif ($_GET['dropdown'] === 'N' && $_GET['outdropdown'] === 'MN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 1000000, 3) . ' МН</h2>';
    } elseif ($_GET['dropdown'] === 'N' && $_GET['outdropdown'] === 'kgs') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 9.80665, 3) . ' кгс</h2>';
    } elseif ($_GET['dropdown'] === 'N' && $_GET['outdropdown'] === 'ts') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 9806.65, 3) . ' тс</h2>';
    } elseif ($_GET['dropdown'] === 'kN' && $_GET['outdropdown'] === 'mkN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 1000000000, 3) . ' мкН</h2>';
    } elseif ($_GET['dropdown'] === 'kN' && $_GET['outdropdown'] === 'mN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 1000000, 3) . ' мН</h2>';
    } elseif ($_GET['dropdown'] === 'kN' && $_GET['outdropdown'] === 'N') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 1000, 3) . ' Н</h2>';
    } elseif ($_GET['dropdown'] === 'kN' && $_GET['outdropdown'] === 'kN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue, 3) . ' кН</h2>';
    } elseif ($_GET['dropdown'] === 'kN' && $_GET['outdropdown'] === 'MN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 1000, 3) . ' МН</h2>';
    } elseif ($_GET['dropdown'] === 'kN' && $_GET['outdropdown'] === 'kgs') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 0.00980665, 3) . ' кгс</h2>';
    } elseif ($_GET['dropdown'] === 'kN' && $_GET['outdropdown'] === 'ts') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 9.80665, 3) . ' тс</h2>';
    } elseif ($_GET['dropdown'] === 'MN' && $_GET['outdropdown'] === 'mkN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 1000000000000, 3) . ' мкН</h2>';
    } elseif ($_GET['dropdown'] === 'MN' && $_GET['outdropdown'] === 'mN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 1000000000, 3) . ' мН</h2>';
    } elseif ($_GET['dropdown'] === 'MN' && $_GET['outdropdown'] === 'N') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 1000000, 3) . ' Н</h2>';
    } elseif ($_GET['dropdown'] === 'MN' && $_GET['outdropdown'] === 'kN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 1000, 3) . ' кН</h2>';
    } elseif ($_GET['dropdown'] === 'MN' && $_GET['outdropdown'] === 'MN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue, 3) . ' МН</h2>';
    } elseif ($_GET['dropdown'] === 'MN' && $_GET['outdropdown'] === 'kgs') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 0.00000980665, 3) . ' кгс</h2>';
    } elseif ($_GET['dropdown'] === 'MN' && $_GET['outdropdown'] === 'ts') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 0.00980665, 3) . ' тс</h2>';
    } elseif ($_GET['dropdown'] === 'kgs' && $_GET['outdropdown'] === 'mkN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 9806650, 3) . ' мкН</h2>';
    } elseif ($_GET['dropdown'] === 'kgs' && $_GET['outdropdown'] === 'mN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 9806.65, 3) . ' мН</h2>';
    } elseif ($_GET['dropdown'] === 'kgs' && $_GET['outdropdown'] === 'N') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 9.80665, 3) . ' Н</h2>';
    } elseif ($_GET['dropdown'] === 'kgs' && $_GET['outdropdown'] === 'kN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 0.00980665, 3) . ' кН</h2>';
    } elseif ($_GET['dropdown'] === 'kgs' && $_GET['outdropdown'] === 'MN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 0.00000980665, 3) . ' МН</h2>';
    } elseif ($_GET['dropdown'] === 'kgs' && $_GET['outdropdown'] === 'kgs') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue, 3) . ' кгс</h2>';
    } elseif ($_GET['dropdown'] === 'kgs' && $_GET['outdropdown'] === 'ts') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue / 1000, 3) . ' тс</h2>';
    } elseif ($_GET['dropdown'] === 'ts' && $_GET['outdropdown'] === 'mkN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 9806650000, 3) . ' мкН</h2>';
    } elseif ($_GET['dropdown'] === 'ts' && $_GET['outdropdown'] === 'mN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 9806650, 3) . ' мН</h2>';
    } elseif ($_GET['dropdown'] === 'ts' && $_GET['outdropdown'] === 'N') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 9806.65, 3) . ' Н</h2>';
    } elseif ($_GET['dropdown'] === 'ts' && $_GET['outdropdown'] === 'kN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 9.80665, 3) . ' кН</h2>';
    } elseif ($_GET['dropdown'] === 'ts' && $_GET['outdropdown'] === 'MN') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 0.00980665, 3) . ' МН</h2>';
    } elseif ($_GET['dropdown'] === 'ts' && $_GET['outdropdown'] === 'kgs') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue * 1000, 3) . ' кгс</h2>';
    } elseif ($_GET['dropdown'] === 'ts' && $_GET['outdropdown'] === 'ts') {
        echo '<h2>Результат конвертации: ' . number_format($inputValue, 3) . ' тс</h2>';
    } 
} else {
    return $_SERVER['PHP_SELF'];
}
?>
