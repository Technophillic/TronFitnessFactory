<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tron Fittness</title>
    <?php include_once "common/bootstrap.html"?>
    <style>
        body{
            background: url("img/b3.jpg");
            background-attachment: fixed;
        }
        div.col-md-4{
            height: 400px !important;
        }
        .trans-gray{
            background-color: rgba(255,255,255,0.30);
        }
    </style>
</head>
<body>
    <?php include_once "common/header.html"?>
    <div class="container p-5">
        <div class="row p-0 text-light">
            <div class="col-md-4 trans-gray">Contact</div>
            <div class="col-md-8 trans-gray">Map</div>
        </div>
    </div>
    <?php include_once "common/footer.html"?>
    <script>
        set_page_active("cont");
    </script>
</body>
</html>