<h2 style="padding-top:10rem;text-align:center;">Create an Account</h2>
<?
  function create_image($cap) {
    unlink("./assets/image1.png");
    global $image;
    $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($image, 255, 255, 255);
    $text_color = imagecolorallocate($image, 0, 255, 255);
    $line_color = imagecolorallocate($image, 64, 64, 64);
    $pixel_color = imagecolorallocate($image, 0, 0, 255);
    imagefilledrectangle($image, 0, 0, 200, 50, $background_color);
    for ($i = 0; $i < 3; $i++) {
    imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
    }
    for ($i = 0; $i < 1000; $i++) {
    imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
    }
    $text_color = imagecolorallocate($image, 0, 0, 0);
    ImageString($image, 22, 30, 22, $cap, $text_color);
    // /************************************/
    // Create your session variable that carries the data here, you will check against this in your controller
    // Something like $_SESSION[..]=....;
    // /*************************************/

    imagepng($image, "./assets/image1.png");
  }
  create_image($data["cap"]);
  echo "<img src='/assets/image1.png' id='cap'>";
?>
<form action="/welcome/accountRecv" method="POST" style="max-width:700px;margin:auto;">
  <div class="form-group">
    <label for="captcha">Enter Captcha </label>
    <input name="captcha" type="captcha" id="captcha"  placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputName1"
    placeholder="Enter Email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input name="email" type="text" class="form-control" id="email"
    placeholder="Enter Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your emails with anyone else.</small>
  </div>
  <div class="form-group">
  <div class="form-group">
    <label>Gender:</label>
    <div class="radio">
      <label><input type="radio" name="gender" value="Male">Male</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value="Female">Female</label>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="password"
    placeholder="Enter Password">
    <small id="emailHelp" class="form-text text-muted">Your password remains private.</small>
  </div>
  <div class="form-group">
    <label for="exampleSelect">Favorite Candy</label>
    <select class="form-control" name="candy" id="exampleSelect">
      <option value="Snickers">Snickers</option>
      <option value="Goodbar">Goodbar</option>
      <option value="KindBar">Kindbar</option>
      <option value="Reeses">Reeses</option>
    </select>
  </div>
  <div class="form-group">
    <label for="receiveEmails">Would you like to receive weekly emails?</label>
    <input type="checkbox" value="yes" id="receiveEmails">Yes</input></label>
  </div>
  <div class="form-group">
  <label for="exampleInputMessage1">Have any questions for us?</label>
  <textarea name="text" type="text" class="form-control" id="exampleInputMessage1"
  placeholder="Enter Message"></textarea>
  <small id="messagehelp" class="form-text text-muted">Let us know how we're doing.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit Form</button>
  <input type="button" class="btn" value="Ajax Submit" id="ajaxbutton">
</form>
