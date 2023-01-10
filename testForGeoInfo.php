<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>


</head>

<body>

  <script language="Javascript">
    //var user_name = geoplugin_countryName();
    document.cookie = "country = " + geoplugin_countryName();
    document.cookie = "countryCode = " + geoplugin_countryCode();
    document.cookie = "regionName = " + geoplugin_regionName();
    document.cookie = "regionCode = " + geoplugin_regionCode();
    document.cookie = "city = " + geoplugin_city();
    document.cookie = "areaCode = " + geoplugin_areaCode();
  </script>

  <?php
  $country = $_COOKIE['country'];
  $countryCode = $_COOKIE['countryCode'];
  $regionName = $_COOKIE['regionName'];
  $regionCode = $_COOKIE['regionCode'];
  $city = $_COOKIE['city'];
  $areaCode = $_COOKIE['areaCode'];

  echo 'Country: ' . $country . '<br>';
  echo 'Country Code: ' . $countryCode . '<br>';
  echo 'Region: ' . $regionName . '<br>';
  echo 'Region Code: ' . $regionCode . '<br>';
  echo 'City: ' . $city . '<br>';
  echo 'Area Code: ' . $areaCode . '<br>';
  ?>

</body>

</html>