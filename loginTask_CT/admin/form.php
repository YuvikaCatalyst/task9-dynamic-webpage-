<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/form.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
    <title>website</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label>SELECT WHICH TYPE OF DATA DO YOU WANT TO SELECT FOR THE LOGO??<BR>
    <select id="logoType">
        <option>select</option>
        <option value="text">TEXT</option>
        <option value="image">IMAGE</option>
    </select><br>

    <input type="file" class="logoFile logo" name="logoFile"><br>
    <input type="text" class="logoText  logo" placeholder="logo text"><br>

<label for="navbar">ENTER DATA FOR NAVBAR LINKS<br>
<input type="text" placeholder="enter 1st item" class="navItem1"><br>
<input type="text" placeholder="enter 2nd item" class="navItem2"><br>
<input type="text" placeholder="enter 3rd item" class="navItem3"><br>
<input type="text" placeholder="enter 4th item" class="navItem4"><br>
<input type="text" placeholder="enter 5th item" class="navItem5"><br>
<label for ="landingBackground">SELECT IMAGE FOR  BACKGROUND OF LANDING PAGE.<br>
<input type="file" class="landingBackground" id="landingBackground" name="landingBackground"><br>
<label for="gradient">ENTER DATA FOR GRADIENT HEADING ON BANNER. <br>
<input type="text" class="gradient" id="gradient"><br>
<label for="whiteHeading">ENTER DATA FOR HEADING ON BANNER. <br>
<input type="text" class="whiteHeading" id="whiteHeading"><br>
<label for="landingPara">ENTER PARAGRAPH DATA FOR BANNER. <br>
<input type="text" class="landingPara" id="landingPara"><br>
<label for="landingButton">ENTER DATA FOR BUTTON.<br>
<input type="text" class="landingButton" id="landingButton"><br>

<a href="#" class="submit" id="submit">submit</a>

</form>
</body>
</html>
