<?php
if($_POST["message"]) {
    mail("sarain3d@gmail.address", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>

<!DOCTYPE HTML>
<html lang="en">
    <body>
<form method="POST" action="contact.php">
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="name" hidden>Name: </label>
                  <input class="form-control form-control-sm" type="text" placeholder="Name" id="name" name="name">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email" hidden>Email </label>
                  <input class="form-control form-control-sm" type="email" placeholder="Email" id="email" name="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="subject" hidden>Subject</label>
                <input class="form-control form-control-sm" type="text" placeholder="Subject" id="subject" name="subject"/>
              </div>
              <div class="form-group">
                <label for="message" hidden>Message</label>
                <textarea class="form-control" placeholder="I just wanted to say..." name="message" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Submit </button>
            </form>
</body>
</html?