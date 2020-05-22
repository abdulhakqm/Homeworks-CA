<?php

if(!empty($_SESSION["quiz"])) {
    $iniFile = 'answers.ini';
    $iniArray = parse_ini_file("answers.ini");
    $results = [];
    foreach ($iniArray as $key => $value) {
        if (isset($_SESSION["quiz"][$key])) {
            $results[$key] = array ("user_answers" => $_SESSION["quiz"][$key], "correct_answers" => $value);
        } 
    }
  }
session_destroy();
?>

<h4 style="text-align: center" > Your result is: </h4>
<table class="table">
  <thead>
    <tr>
      <th >Question</th>
      <th >Your answer</th>
      <th >Correct answer</th>
    </tr>
  </thead>
  <tbody id="tbody">
      <?php foreach($results as $key => $value) {   ?>   
        <tr>
          <td id="question"><?php echo $key; ?></td>
          <td id="user_answers"><?php echo $value["user_answers"]; ?></td>
          <td id="correct_answers"><?php echo $value["correct_answers"]; ?></td>
        </tr>
      <?php } ?>

  </tbody>
</table>
