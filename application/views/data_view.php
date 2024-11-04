<!DOCTYPE html>
<html>
<head>
    <title>Data View</title>
</head>
<body>
    <h1>Data for <?php echo ucfirst($category); ?></h1>
    <?php if (!empty($results)): ?>
        <ul>
            <?php foreach ($results as $item): ?>
                <li><?php echo $item->content; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No data found for this category.</p>
    <?php endif; ?>
</body>
</html>
