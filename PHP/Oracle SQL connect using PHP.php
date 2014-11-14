<?php
      //Oracle DB connection
      $conn =  oci_connect('login', 'pass', '000.000.00.000/LIVE');
      $stid = oci_parse($conn, "select * from users");

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oracle SQL connect usign PHP extension oci8</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>

    <!-- Player with select boxes -->
      <div class="row">
        <div class="large-8 columns">
          <h1>Video</h1>
            <img src="http://placehold.it/600x400" />
        </div>

        <div class="large-4 columns">
          <h1>Sidebar</h1>
            <div class="row">
              <div class="large-12 columns">
                <h3>Select Discipline</h3>
                  <?php if($stid) {
                      $res = oci_execute($stid);
                      ?>
                        <select name="selected_even_discipline">
                          <option selected="true" disabled="disabled">Please select a discipline</option>
                          <?php
                            while ($row = oci_fetch_array($stid, OCI_ASSOC)) {
                              $row = str_replace(',','',$row);
                              echo '<option>' . $row['EVEN_DISCIPLINES'] . '</option>';
                            }
                          ?>
                        </select>
                    <?php } ?>
              </div>
            </div>
          <div class="row">
            <div class="large-12 columns">
              <h3>Select Event</h3>
                  <select>
                    <option selected="true" disabled="disabled">Please select an event</option>
                    <option value="Option A">Option A</option>
                    <option value="Option B">Option B</option>
                    <option value="Option C">Option C</option>    
                  </select>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <h3>Select Competition</h3>
                  <select>
                    <option selected="true" disabled="disabled">Please select a competition</option>
                    <option value="Option A">Option A</option>
                    <option value="Option B">Option B</option>
                    <option value="Option C">Option C</option>    
                  </select>              
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <h3>Select Club</h3>
                  <select>
                    <option selected="true" disabled="disabled">Please select an apparatus</option>
                    <option value="Option A">Option A</option>
                    <option value="Option B">Option B</option>
                    <option value="Option C">Option C</option>
                  </select>               
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <h3>Select Gymnast</h3>
                  <select>
                    <option selected="true" disabled="disabled">Please select an apparatus</option>
                    <option value="Option A">Option A</option>
                    <option value="Option B">Option B</option>
                    <option value="Option C">Option C</option>
                  </select>    
            </div>
          </div>          
        </div>
      </div>

      <?php
      /*
      if(isset($_POST)) {
        $selected_even_discipline   = $_POST[''];       // 1) Discipline
        $selected_even_name         = $_POST[''];       // 2) Event 
        $selected_scdu_competition  = $_POST[''];       // 3) Competition
        $selected_scdu_apparatus    = $_POST[''];       // 4) Apparatus
        $selected_scdu_???          = $_POST[''];       // 5) Club
        $selected_scdu_personid     = $_POST[''];       // 6) Gymnast OR Gymnast + Partnership
      }
      
      $discipline_qry = "SELECT * FROM event, scoring_dump WHERE even_disciplines = '$selected_even_discipline'";
      $event_name_qry = "SELECT * FROM event, scoring_dump WHERE even_disciplines = '$selected_even_discipline' AND even_name = '$selected_even_name'";
      $competition_qry = "SELECT * FROM event, scoring_dump WHERE even_disciplines = '$selected_even_discipline' AND even_name = '$selected_even_name' AND scdu_competition = '$selected_scdu_competition'";
      $apparatus_qry = "SELECT * FROM event, scoring_dump WHERE even_disciplines = '$selected_even_discipline' AND even_name = '$selected_even_name' AND scdu_competition = '$selected_scdu_competition' AND scdu_apparatus = '$selected_scdu_apparatus'";
      $scdu_???_qry = "SELECT * FROM event, scoring_dump WHERE even_disciplines = '$selected_even_discipline' AND even_name = '$selected_even_name' AND scdu_competition = '$selected_scdu_competition' AND scdu_apparatus = '$selected_scdu_apparatus' AND scdu_??? = 'selected_scdu_???'";
      $scdu_personid_qry = "SELECT * FROM event, scoring_dump WHERE even_disciplines = '$selected_even_discipline' AND even_name = '$selected_even_name' AND scdu_competition = '$selected_scdu_competition' AND scdu_apparatus = '$selected_scdu_apparatus' AND scdu_??? = 'selected_scdu_???' AND scdu_personid = '$selected_scdu_personid'";
      */
    ?>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
