

<?php
$database=json_decode(file_get_contents('./database.json'),true);
//import functions
require __DIR__.'/functions.php';
//function to display one card
function card($i,$person){
    echo('
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="advisor_thumb"><a href="detail.php?index='.$i.'"><img src="'.$person['intro']["imgURL"].'" alt="" width="400px" height="300px"></a>

            <div class="social-info"><a href="detail.php?index='.$i.'"><i class="fa fa-facebook"></i></a><a href="detail.php"><i class="fa fa-twitter"></i></a><a href="detail.php"><i class="fa fa-linkedin"></i></a></div>
            </div>

            <div class="single_advisor_details_info">
            <h6>'.$person['intro']["name"].'</h6>
            <p class="designation">'.$person['intro']["designation1"].'</p>
            <p class="designation">'.$person['intro']["designation2"].'</p>
        

    ');
    echo '<p class="designation">';
    for($j=0;$j<$person["intro"]["year"];$j++){echo "&#9824";};
    echo '</p>';


    $birth = $person['intro']['birth'];
    echo('<p class="designation">'.calc_Age($birth,todays_Date())." years old</p>");
    $time_diff = calc_Time_Diff($birth,todays_Date()) ;
    echo('<p class="designation">'."Born ".$time_diff[0]." years,".$time_diff[1]." months,".$time_diff[2]." days ago</p>");
    
    echo('
            
            </div>
        </div>
    </div>'
    );
        
} 


?>


<!doctype html>
<html lang="en">

<head>
    <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <title>ASE 230 - class of Spring/Fall/Summer 20XX</title>
</head>

<body>
    <div class="container text-center">
        <h1>This is ASE 230 - class of Spring/Fall/Summer 20XX</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3>Our Creative <span> Team</span></h3>
                    <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row">


       
        <?php
			$i=0;
			foreach($database as $person){
				card($i,$person);
				$i++;
			}
		
		?>
        




          
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>