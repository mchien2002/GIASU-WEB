<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/assets/css/bootstrap.min.css">
    <title>TRUNG TÂM GIA SƯ</title>
    <script type="module" src="/resources/assets/js/main.js"></script>
    <link rel="stylesheet" href="/resources/assets/css/header.css">
    <link rel="stylesheet" href="/resources/assets/css/footer.css">
    <link rel="stylesheet" href="/resources/assets/css/sidebar.css">
    <link rel="stylesheet" href="/resources/assets/css/style.css">
    <link rel="stylesheet" href="/resources/assets/css/home.css">
</head>
<body>
    <div id="wrapper">
        <?php  
            require './views/layout/header.php';
            require './views/page/home.php';
            require './views/layout/sidebar.php';
            require './views/layout/footer.php';
        ?>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="./resources/assets/js/bootstrap.min.js"></script>
</body>
</html>