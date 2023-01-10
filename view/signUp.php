<!-- CONTACT MODAL -->

<div class="modal fade" id="register-form" tabindex="-1" aria-labelledby="register-label" aria-hidden="true">
    <div class="modal-dialog modal-md">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="register-label">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <form method="post" action="inc/signUp.php">

                    <div class="row mb-3 mx-2">
                        <div class="col">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="firstname" required>
                        </div>
                        <div class="col">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="lastname" required>
                        </div>
                    </div>

                    <div class="row mb-3 mx-2">
                        <div class="col-5">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" placeholder="" class="form-control" name="phoneNumber" id="phone">
                        </div>

                        <div class="col-7">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" placeholder="" class="form-control" name="email" id="email">
                        </div>
                    </div>

                    <div class="row mb-3 mx-2">
                        <div class="col">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" required>
                        </div>
                    </div>
                    <div class="row mb-3 mx-2">
                        <div class="col">
                            <label for="address2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" name="address2" id="address2">
                        </div>
                    </div>

                    <div class="row mb-3 mx-2">
                        <div class="col-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip">
                        </div>
                        <div class="col-5">
                            <label for="city" class="form-label">City</label>
                            <select id="city" class="form-select" name="city">
                                <option value="none" selected>Choose...</option>
                                <option value="Georgetown">Georgetown</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="state" class="form-label">State</label>
                            <select id="state" class="form-select" name="state">
                                <option value="none" selected>Choose...</option>
                                <option value="East Bank">East Bank</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3 mx-2">
                        <div class="col-8">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="pwd" required>
                        </div>
                    </div>

                    <div class="row mb-5 mx-2">
                        <div class="col-8">
                            <label for="confirm password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm password" name="confirmPwd" required>
                        </div>
                    </div>

                    <div class="row mb-3 mx-2 justify-content-center">
                        <div class="col-3">
                            <button type="Sign-up" class="btn btn-success" name="signUp">Sign Up</button>
                        </div>
                    </div>

                    <div class="text-center">
                        <p><a href="signupGoogle">Sign Up with Google</a></p>
                        <p><a href="signup">Terms and Conditions</a></p>
                        <p><a href="signup">Help</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>