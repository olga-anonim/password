<html>
<head>
    <title>
        Форма генерации
    </title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="">Длина</label>
        <input type="text" name="length">
    </div>

    <div>
        <label for="">Маленькие буквы</label>
        <input name="complexity[]" type="checkbox" value="0">
    </div>
    <div>
        <label for="">Большие буквы</label>
        <input name="complexity[]" type="checkbox" value="1">
    </div>
    <div>
        <label for="">Числа</label>
        <input name="complexity[]" type="checkbox" value="2">
    </div>
    <div>
        <label for="">Спец символы</label>
        <input name="complexity[]" type="checkbox" value="3">
    </div>
    <div>
        <input type="submit" value="Generate">
    </div>
</form>
</body>
</html>
