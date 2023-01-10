<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="modal fade" id="confirm" tabindex="-1" aria-labelledby="confirm-label" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirm-label">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row mb-3 mx-2">
                        <div class="col-12">

                            <div class="table-responsive">
                                <h5>Confirm Booking Request</h5>
                                <table class="table table-striped mt-3">

                                    <tr>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                        <td>Car Detailing</td>
                                        <td>1</td>
                                        <td>$10.00</td>
                                        <td>$10.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Tax</td>
                                        <td>$4.50</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><b>Total</b></td>
                                        <td><b>$14.50</b></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 mx-2">

                        <div class="col-2">
                            <form action="view/charge.php" method="post">

                                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $stripe['publishable_key']; ?>" data-description="Confirm Email and Card Info" data-amount="5000" data-locale="auto">
                                </script>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
<!-- BOOK NOW MODAL -->