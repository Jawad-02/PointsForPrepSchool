<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link herf = "https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Point Calc</title>
</head>
<body>
    <?php 
    $err_msg='';
    if(isset($_POST['submit'])){
        $quiz = trim($_POST['Quiz']);
        $IMA = trim($_POST['IMA']);
        $TA = trim($_POST['Teacher_Assessment']);
        $EMA = trim($_POST['EMA']);
        if($quiz == '' || $IMA == '' || $TA == '' || $EMA == ''){
            $err_msg = ' خطا : الرجاء ملئ جميع الخانات';
        }else{
            $quiz *= 0.10;
            $IMA *= 0.30;
            $TA *= 0.20;
            $EMA*= 0.40;
            $Result= $quiz + $IMA + $TA + $EMA;
            $err_msg = 'You Got '. $Result . '% In This Modul which is'. ($Result * 0.2) . '% From Year';
        }

    }
    
    
    ?>
<div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">Calc Your Point</h1>
                <div class="card-text">
                    <form action="#" method="POST">
                    <div class="form-group">
                            <label for="Quiz">Quiz</label>
                            <input name="Quiz"
                            type="text"
                            class="form-control form-control-sm"
                            id="Quiz">
                        </div>
                        <div class="form-group">
                            <label for="IMA">IMA</label>
                            <input name="IMA"
                            type="text"
                            class="form-control form-control-sm"
                            id="IMA">
                        </div>
                        <div class="form-group">
                            <label for="Teacher_Assessment">Teacher Assessment</label>
                            <input name="Teacher_Assessment" 
                            type="text"
                            class="form-control form-control-sm"
                            id="Teacher_Assessment">
                        </div>
                        <div class="form-group">
                            <label for="EMA">EMA</label>
                            <input name="EMA" 
                            type="text"
                            class="form-control form-control-sm"
                            id="EMA">
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary btn-block">
                            Get Your Result 
                        </button>
                        <div class="Result text-center text-danger">
                            <p1 class="text-center">
                                <?php echo $err_msg; ?>
                            </p1>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>