<?php require "form_validation.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tyrones form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container w-50 pt-3">
      <form name="tyrones_form" class=""
            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
            method="post" >

        <div class="form-group">
            <label for="name">Name*</label>
            <div class="error"><?php echo $nameErr;?></div>
            <input type="text" name="name" id="name" class="form-control" required value="<?php echo $name; ?>">
        </div>


        <div class="form-group">
          <label for="surname">Surname*</label>
          <div class="error"><?php echo $surnameErr;?></div>
          <input type="text" name="surname" id="surname" class="form-control" required value="<?php echo $surname; ?>">
        </div>

        <div class="form-group">
          <label for="age">Age*</label>
          <div class="error"><?php echo $ageErr;?></div>
          <input type="text" name="age" class="form-control" required value="<?php echo $age; ?>">
        </div>

        <div class="form-group">
          <label for="age">Email*</label>
          <div class="error"><?php echo $emailErr;?></div>
          <input type="text" name="email" class="form-control" required value="<?php echo $email; ?>">
        </div>

        <div class="form-group">
          <label for="comment">Comment*</label>
          <div class="error"><?php echo $commentErr;?></div>
          <textarea type="text" name="comment" id="comment" class="form-control"><?php echo $comment; ?></textarea>
        </div>

        <div class="error"><?php echo $genderErr;?></div>
        Female: <input type="radio" name="gender" value="female"><br>
        Male: <input type="radio" name="gender" value="male"><br>
        Other: <input type="radio" name="gender" value="other"><br><br>

        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </form>
    </div>

  </body>
</html>
