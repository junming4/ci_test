<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<ul>

    <?php foreach ($news as $item):?>
    <li><?php echo $item['title'];?></li>
    <?php endforeach;?>
</ul>
</body>
</html>