<!DOCTYPE html>
<html>
<head>
         <title>Анализ цен на категории продуктов за месяц</title>
</head>
<body>
    <h1>Анализ цен на категории продуктов за выбранный месяц</h1>
    <h3>Получаем итоговую сумму за месяц и таблицу продуктов с суммой за месяц по каждой категории продуктов.</h3>
    <h3>Для начала анализа --> введите год и месяц.</h3>
    <form action="/month" method="post" class="form-contact">
        <p><label>Введите год!: </label> <input type="text" name="choosing_year" value="" requied />
        <p><label>Введите месяц!: </label> <input type="text" name="choosing_month" value="" requied />
        <p><input type="submit" value="Отправить" />
    </form>
    <h5> позиция posit</h5>
    <h3>стоимость продуктов за месяц choosing_month года choosing_year равна price</h3>
</body>
</html>