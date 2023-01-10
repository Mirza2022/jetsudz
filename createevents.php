<!DOCTYPE html>
<html lang="en">
<!-- below is internal css for buttons and form -->

<head>
  <style>
    form {
      background-color: #f2f2f2;
      border-color: black;

      align-items: center;
      font-size: small;
      font-family: Arial, Helvetica, sans-serif;
      margin: 25px 50px 75px;
      box-shadow: 10px 5px 5px #D8D8D8;
    }

    .button1 {

      background-color: #ACE1AF;
      border-color: #ACE1AF;
      width: 150px;
      border-radius: 5px;
      padding: auto;
    }

    .div2 {
      text-align: center;
    }

    input {
      height: 20px;
      width: 90%;
      border-color: black;
      border-radius: 5px;
      border-style: inset;
    }
  </style>


</head>

<body>

  <div>
    <form>
      <P style="font-size: medium; font-family: Arial, Helvetica, sans-serif; text-align: center;">CREATE AN EVENT HERE
      <p>
        <hr>
        <label for="eventname">Event Name</label><br>
        <input type="text" id="eventname" name="eventname"> <br><br>
        <label for="ev-desc">Description</label><br>
        <input type="text" id="ev-desc" name="ev-desc"><br><br>
        <label for="duration">Duration</label><br>
        <input type="text" id="duration" name="duration"><br><br>
        <label for="ev-loc">Location:</label><br>
        <input type="text" id="ev-loc" name="ev-loc"><br><br>
        <label for="date">Date</label><br>
        <input type="datetime-local" id="date" name="date"><br><br>

        <br><br><br>
      <div class="div2">
        <button class="button1"> SUBMIT</button>
        <br> <br> <br>
        <button class="button1"> CANCEL </button>
        <div>

    </form>
  </div>

</body>


</html>