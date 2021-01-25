<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="logoicon.ico" />
    <title>Analysis</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/analysisstyle.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600;1,700&family=Oxygen:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

    <?php include "includes/header.php";?>

    </section>
    <!---- start Select section -->
    <section>
        <form action="" method="post">
            <h2 class="titleText" align="center">Please Select kind of analysis</h2>
            <select id="analysis" class="form-control input-lg">
                <option value="">Select analysis</option>
            </select>
            <br />
            <select id="sub-analysis" class="form-control input-lg second">
                <option value="">Select sub-analysis</option>
            </select>
            <br />
            
            <button type="submit" name="submit">Submit</button>
        </form>
    </section>

    <?php
    if(isset($_POST['submit'])){
        $sub_analysis = $_POST['sub-analysis'];
        echo $sub_analysis;
    }
    ?>
    <!---- end Select section -->

    <!-- start details section-->
    <section class="detailsSection">
        <!--The hidden div that contain the selected option-->
        <div id="selected" class="d-none"></div>
        <!--Div contain the header and the form-->
        <div class="name" id="formDetails">
            <h2 class="titleText fill" >Please fill the following</h2>
            <form class="formApp" action=""  method="POST">
                <div>Select your gender</div>
                <input type="radio" id="male" name="sex"><label for="male"> Male</label>
                <input type="radio" id="female" name="sex"><label for="female"> Female</label>
                <div>Enter your age</div>
                <input type="text" id="oldage" placeholder="Enter your age" /><span class="mu">Year</span>
                <div>Enter your result</div>
                <input type="text" id="valueofresult" placeholder="Enter the result" name="valueofresult" /><span
                    class="mu">U/L</span>
                <div><button type="submit" class="submitbtn">Submit</button>
            </form>
        </div>
    </section>
    <!-- end details section-->


    <!--Start footer-->
    <?php  include "includes/footer.php"; ?>
