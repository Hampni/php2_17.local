<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>тестовая страница</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>Товары</h1>

    <table class="table table-striped">
        <tr>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Вес</th>
        </tr>
        <?php foreach ($this->products as $product) : ?>
        <tr>
            <th><?php echo $product->name ?></th>
            <th><?php echo $product->price ?></th>
            <th><?php echo $product->weight?></th>
        </tr>
        <?php endforeach;?>

    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

