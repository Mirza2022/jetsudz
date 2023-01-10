<?php
include_once '../index.php';
?>

<div class="container-fluid" style="position: absolute; top: 15%">
    <div class="row">
        <div class="col-4 mr-auto ml-auto mb-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title; text-center mb-3"">
                            Payment Form
                        </h5>
                        <div class=" card-text">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="cname" class="form-label">Name (Registered on Card)</label>
                                <input type="text" class="form-control" name="cname" id="cname" required>
                            </div>
                            <div class="mb-3">
                                <label for="cnumber" class="form-label">Card Number</label>
                                <input type="number" class="form-control" name="cnumber" id="cnumber" required>
                            </div>
                            <div class="mb-3">
                                <label for="cexpdate" class="form-label">Expiry Date</label>
                                <input type="date" class="form-control" name="cexpdate" id="cexpdate" required>
                            </div>
                            <div class="mb-3">
                                <label for="csecnumber" class="form-label">Security Code</label>
                                <input type="number" class="form-control" name="csecnumber" id="csecnumber" min="000" max="999" required>
                            </div>
                            <div class="mb-3">
                                <label for="cpaymenttype" class="form-label">Payment Type</label>
                                <select class="form-control" name="cpaymenttype" id="cpaymenttype" required>
                                    <option label="Select payment option..." value=""></option>
                                    <option label="Paypal" value="Paypal"></option>
                                    <option label="Stripe" value="Stripe"></option>
                                </select>
                            </div>
                            <div class="text-center mb-3">
                                <button type="button" class="btn btn-outline-danger">Cancel</button>
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>