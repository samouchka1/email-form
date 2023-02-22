<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body style="
    text-align: center; 
    background-color: #ccc; 
    font-family: 'Roboto', sans-serif;
">
    <div style="background-color: #fff; padding: 16px 0;">
        <h2 style="font-family: 'Ubuntu', sans-serif;">Landing Page</h2>
        <div>
            <div>
                <img style="
                    width: 300px; 
                    border-radius: 4px;
                " src="/public/daily-quote.png" alt="daily quote">
            </div>
            <div>
                <p>This is a descriptive text!</p>
            </div>
        </div>

        <?php include('./components/form.php'); ?>
        <?php echo getForm() ?>

    </div>
</body>
<script src="/js/form.js"></script>
</html>