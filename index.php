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
        <img src="images/letters.jpeg" alt="picture of scrabble letters" width="300px">
        <form method='GET' action='index.php'>
            <label>Enter the word you played:
                <input type='text' name='word' value="<?php if(isset($scrab)) echo $scrab ?>">
            </label><br>
            <fieldset class='adjustments'>
                <legend>Bonus Points<br>
                    <label><input type='radio' name='bonus' value='none'
                      <?php if($bonus == 'none' or $bonus == '') echo 'CHECKED'?>> None</label>
                    <label><input type='radio' name='bonus' value='double'
                      <?php if($bonus == 'double') echo 'CHECKED'?>> Double Word Score</label>
                    <label><input type='radio' name='bonus' value='triple'
                      <?php if($bonus == 'triple') echo 'CHECKED'?>> Triple Word Score</label>
                </legend>
                <legend>Include 50 point "bingo"?<br>
                    <label><input type='checkbox' name='bingo' value='yes'
                      <?php if($bingo == 'yes') echo 'CHECKED'?>> Yes</label>
                </legend>
            </fieldset>
            <input type='submit' class='btm btm-primary btn-small'>
              <?php if($errors): ?>
                <div class='alert-warning'>
                  <?php foreach($errors as $error): ?>
                    <?=$error?><br>
                  <?php endforeach; ?>
              </div>
            <?php endif; ?>
        </form>
        <?php if(isset($scrabEntry)and (!$errors)): ?>
          <?="<div class='alert-ok'>Your score is ".$scrabEntry."</div>"?>
        <?php endif; ?>

    </body>
</html>
