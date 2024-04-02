<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verefer</title>
    <link rel="icon" href="../asets/img/logo.png">
    <link rel="stylesheet" href="../asets/css/styles.css">
    <script src="../asets/js/script.js"></script>
</head>
<body>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<content>
        <div id="content"><?php include 'includes/content.php'; ?></div>
        <div id="about" class="hidden"><?php include 'includes/about.php'; ?></div>
        <div id="contact" class="hidden"><?php include 'includes/contact.php'; ?></div>
</content>

<div id="clear"></div>
<?php include 'includes/footer.php'; ?>

</body>
</html>

