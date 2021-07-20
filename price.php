<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tron Fittness</title>
    <style>
        .lr-half{
            height: 300px;
            widht: 100%;
        }
        p{
        color:white;
        }
    </style>
    <?php include_once "common/bootstrap.html"?>
</head>
<body>
    <?php include_once "common/header.html"?>
    <div class="p-2"></div>
    <!-- Basic Fittness -->
    <div class="container">
        <div class="row" >
            <div class="col-sm-6 p-0"><img class="lr-half" src="img/b0.jpg" alt=""></div>
            <div class="col-sm-6 p-0">
                <h3 class="p-4 text-center bg-dark text-light">Basic Fitness</h3>
                <p class="badge badge-info color:red;">Rs. 9999 / year</p>
                <p>Access to all fitness equipment</p>
                <p>No trainer access</p>
                <p>No Cardio Workout</p>
                <p>No Dietician</p>
            </div>
        </div>
        <div class="row">    
        <div class="col-sm-6 p-0"><img class="lr-half" src="img/b1.jpg" alt=""></div>
            <div class="col-sm-6 p-0">
                <h3 class="p-4 text-center bg-dark text-light">Pro Fitness</h3>
                <p class="badge badge-info">Rs. 15999 / year</p>
                <p>Access to all Fitness equipment</p>
                <p>Trainer access</p>
                <p>Cardio Workout</p>
                <p>Basic Diet Plan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 p-0"><img  class="lr-half" src="img/b3.jpg" alt=""></div>
            <div class="col-sm-6 p-0">
                <h3 class="p-4 text-center bg-dark text-light">Premium Fitness</h3>
                <p class="badge badge-info">Rs. 19999 / year</p>
                <p>Access to all Fitness equipment</p>
                <p>Personal Trainer</p>
                <p>Cardio Workout</p>
                <p>Advanced Diet Plan</p>
            </div>
        </div>
    </div>
    <!-- -->
    <div class="p-2"></div>
    <?php include_once "common/footer.html"?>
    <script>
        set_page_active("pric");
    </script>
</body>
</html>