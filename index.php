<?php require('getAllLetters.php'); ?>

<!DOCTYPE html>
<html>
    <head>
    <title>Scrabblish Point Counter</title>
    <meta charset='utf-8'>
    <link href='css/style.css' rel='stylesheet'>
    </head>

    <body>
        <h1>Scrabblish Point Counter</h1>
        <img src="images/letters.jpeg" alt="picture of scrabble letters" width="300">
        <?php if(isset($scrabEntry)and (!$errors)): ?>
          <?="<div class='alert-ok'>Your word is worth ".$scrabEntry." points!</div>"?>
        <?php endif; ?>
        <?php if($errors): ?>
          <div class='alert-warning'>
            <?php foreach($errors as $error): ?>
              <?=$error?><br>
            <?php endforeach; ?>
        </div>
      <?php endif; ?>
        <form method='GET' action='index.php'>
            <label>Enter the word you played (required field):
                <input type='text' name='word' value="<?php if(isset($scrab)) echo $scrab ?>">
            </label><br>
            <fieldset class='adjustments'>
                <legend>Bonus Points</legend>
                    <label><input type='radio' name='bonus' value='none'
                      <?php if($bonus == 'none' or $bonus == '') echo 'CHECKED'?>> None</label>
                    <label><input type='radio' name='bonus' value='double'
                      <?php if($bonus == 'double') echo 'CHECKED'?>> Double Word Score</label>
                    <label><input type='radio' name='bonus' value='triple'
                      <?php if($bonus == 'triple') echo 'CHECKED'?>> Triple Word Score</label>
            </fieldset>
            <fieldset class='adjustments'>
                <legend>Include 50 point "bingo"? (word must be at least 7 letters)</legend>
                    <label><input type='checkbox' name='bingo' value='yes'
                      <?php if($bingo == 'yes') echo 'CHECKED'?>> Yes</label>

            </fieldset>
            <input type='submit' class='btm btm-primary btn-small'>

        </form>


    </body>
</html>
