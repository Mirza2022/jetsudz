<!DOCTYPE html>
<html lang="en">

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
      height: 40px;
      width: 95%;
      border-color: whitesmoke;
      border-radius: 5px;
      border-style: outset;
    }

    label {
      text-align: left;
    }
  </style>

</head>
<!-- to add header -->

<!--form starts here -->
<div>
  <form>
    <h style="font-family: Arial, Helvetica, sans-serif;font-size: medium;">PERSONAL INFORMATION<h>
        <hr>
        <label for="prp"> Select a Profile Picture from Gallery</label><br>
        <input type="file" id="pfp" name="pfp" onchange="readURL(this)" accept="Image/*"> <br><br>
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="e-address">Email Address:</label><br>
        <input type="text" id="e-address" name="e-address"><br><br>
        <label for="address">Home Address:</label><br>
        <input type="text" id="address" name="address"><br><br>
        <label for="phonenum">Phone Number:</label><br>
        <input type="text" id="phonenum" name="phonenum"><br><br>

        <label for="stakeholdertype">Stakeholder Type:</label>
        <select name="stakeholders" id="stakeholders">
          <option value="internal">Internal</option>
          <option value="external">External</option>
        </select>
        <br><br><br>
        <!--buttons are here-->
        <div class="div2">
          <button class="button1">SUBMIT</button>
          <br> <br>
          <button class="button1">BACK </button>
        </div>
  </form>

</div>


</html>