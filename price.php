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
            width: 100%;
        }
        p.p-4{
            text-align: center;
        }
        p.p-4:hover{
            border-color: #999 !important;
        }
        p.text-light{
            font-weight: bolder;
        }
    </style>
    <?php include_once "common/bootstrap.html"?>
</head>
<body>
    <?php include_once "common/header.html"?>
    <div class="p-2"></div>
    <!-- Basic Fittness -->
    <div class="container">
        <div class="row mb-5 border" >
            <div class="col-sm-6 p-0"><img class="lr-half" src="img/b0.jpg" alt=""></div>
            <div class="col-sm-6 p-0">
                <h3 class="p-4 m-0 text-center bg-primary text-light">Basic Fitness</h3>
                <p class="p-4 bg-secondary text-light m-0">Rs. 9999 / year</p>
                <p class="p-4 bg-light text-dark m-0 border">Access to all fitness equipment</p>
                <p class="p-4 bg-light text-dark m-0 border">No trainer access</p>
                <p class="p-4 bg-light text-dark m-0 border">No Cardio Workout</p>
                <p class="p-4 bg-light text-dark m-0 border">No Dietician</p>
            </div>
        </div>
        <div class="row mb-5 border">
            <div class="col-sm-6 p-0">
                <h3 class="p-4 text-center bg-success text-light m-0">Pro Fitness</h3>
                <p class="p-4 bg-secondary text-light m-0">Rs. 15999 / year</p>
                <p class="p-4 bg-light text-dark m-0 border">Access to all Fitness equipment</p>
                <p class="p-4 bg-light text-dark m-0 border">Trainer access</p>
                <p class="p-4 bg-light text-dark m-0 border">Cardio Workout</p>
                <p class="p-4 bg-light text-dark m-0 border">Basic Diet Plan</p>
            </div>
            <div class="col-sm-6 p-0"><img class="lr-half" src="img/b1.jpg" alt=""></div>
        </div>
        <div class="row mb-5 border">
            <div class="col-sm-6 p-0"><img  class="lr-half" src="img/b3.jpg" alt=""></div>
            <div class="col-sm-6 p-0">
                <h3 class="p-4 text-center bg-danger text-light m-0">Premium Fitness</h3>
                <p class="p-4 bg-secondary text-light m-0">Rs. 19999 / year</p>
                <p class="p-4 bg-light text-dark m-0 border">Access to all Fitness equipment</p>
                <p class="p-4 bg-light text-dark m-0 border">Personal Trainer</p>
                <p class="p-4 bg-light text-dark m-0 border">Cardio Workout</p>
                <p class="p-4 bg-light text-dark m-0 border">Advanced Diet Plan</p>
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