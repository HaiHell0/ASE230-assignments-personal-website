<?php
/*variables*/
$imgURL = ".\assets\images\photo.jpg";
$imgAttributes = 'width="400" height="300"';
$myName = "Hoang Vu Hai";
$profession = "Full stack developer";
$company = "Meta";
$email = "email@mymail.nku.edu";
$short_intro = "Compsci senior at NKU";
$plans = "Graduate, earn an income, buy a house, marry a female, have 3 kids and 9 grandchildren";
$quote = "“No man has the right to be an amateur in the matter of physical training. It is a shame for a man to grow old without seeing the beauty and strength of which his body is capable.”― Socrates";
$skill_one = "Javascript";
$skill_one_percentage = 60;
$skill_two = "Python";
$skill_two_percentage = 75;
$skill_three = "Fat percentage";
$skill_three_percentage = 22;
$fun_fact = "My favorite food is balut. Its an east asian dish and its just a duck egg but the egg is just a few days from hatching. It looks and smells bad but it is very dense in nutrition. Another dish I like is blood sausage. It is not actually exclusively an asian dish, Europeans have them too. Its very dense in iron and it tastes nice.";
?>



<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />


<body>
  <link rel="stylesheet" href="assets/css/detail.css" />

  <title>ASE 230 - <?= $myName ?></title>
  <div class="container text-center mb-5">
    <h1>This is ASE 230 - <?= $myName ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <img class="w-100" src=<?= $imgURL ?> <?= $imgAttributes ?> alt="">
        </div>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal"><?= $myName ?></h4>
          <div class="social d-flex ml-auto">
            <p class="pr-2 font-weight-normal">Follow on:</p>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-muted">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Dream profession:</span>
              <label class="media-body"><?= $profession ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Dream company: </span>
              <label class="media-body"><?= $company ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Email: </span>
              <label class="media-body"><?= $email ?></label>
            </li>
            <li><a class="btn btn-primary" href="index.php" role="button">Go back to index</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h5 class="font-weight-normal"><?= $short_intro ?></h5>
        <p><?= $plans ?></p>
        <div class="my-2 bg-light p-2">
          <p class="font-italic mb-0"><?= $quote ?></p>
        </div>
        <div class="mb-2 mt-2 pt-1">
          <h5 class="font-weight-normal">Top skills</h5>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:<?= $skill_one_percentage ?>%" aria-valuenow="<?= $skill_one_percentage ?>" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?= $skill_one ?></div>
              <span class="progress-bar-number"><?= $skill_one_percentage ?>%</span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:<?= $skill_two_percentage ?>%" aria-valuenow="<?= $skill_two_percentage ?>" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?= $skill_two ?></div>
              <span class="progress-bar-number"><?= $skill_two_percentage ?>%</span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:<?= $skill_three_percentage ?>%" aria-valuenow="<?= $skill_three_percentage ?>" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?= $skill_three ?></div>
              <span class="progress-bar-number"><?= $skill_three_percentage ?>%</span>
            </div>
          </div>
        </div>
        <h5 class="font-weight-normal">Fun fact</h5>
        <p><?= $fun_fact ?></p>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>