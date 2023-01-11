<?php

require_once('./config.php');

?>

<form action="view/charge.php" method="post">

    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $stripe['publishable_key']; ?>" data-description="Access for a year" data-amount="500" data-locale="auto">
    </script>

</form>