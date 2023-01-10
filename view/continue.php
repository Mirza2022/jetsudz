<div class="modal fade" id="continue" aria-hidden="true" aria-labelledby="continueLabel" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="continueLabel">Continue</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                How do you want to continue?
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#book-now-form" data-bs-toggle="modal" data-bs-dismiss="modal">Continue as Guest</button>
                <button class="btn btn-primary" data-bs-target="#login-form" data-bs-toggle="modal" data-bs-dismiss="modal">Login</button>
            </div>
        </div>
    </div>
</div>

<?php include_once 'bookNow.php'; ?>
<?php include_once 'login.php'; ?>
<?php include_once 'shoppingCart.php'; ?>