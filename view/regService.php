<!-- Register MODAL -->

<div class="modal fade" id="reg-service-form" tabindex="-1" aria-labelledby="reg-service-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reg-service-label">Register Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <form method="post" action="services.php">
                    <div class="col-12 text-center" style="color: white; background-color: rgb(20,188,206);">
                        <label for="personaAddress" class="form-label text-center">
                            PERSONAL INFORMATION
                        </label>
                    </div>
                    <div class="row mb-3 mx-2">
                        <div class="col">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstName" required>
                        </div>
                        <div class="col">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastName">
                        </div>
                    </div>

                    <div class="row mb-3 mx-2">
                        <div class="col-5">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" placeholder="" class="form-control" id="phone">
                        </div>

                        <div class="col-7">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" placeholder="" class="form-control" id="email">
                        </div>
                    </div>

                    <div class="row mb-3 mx-2">
                        <div class="col-4">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" required>
                        </div>
                        <div class="col-2">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip">
                        </div>
                        <div class="col-3">
                            <label for="city" class="form-label">City</label>
                            <select id="city" class="form-select" name="city">
                                <option value="none" selected>Choose...</option>
                                <option value="Georgetown">Georgetown</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="state" class="form-label">State</label>
                            <select id="state" class="form-select" name="state">
                                <option value="none" selected>Choose...</option>
                                <option value="East Bank">East Bank</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 mx-2">
                        <div class="col-12 text-center" style="color: white; background-color: rgb(20,188,206);">
                            <label for="personaAddress" class="form-label text-center">
                                BUSINESS INFORMATION
                            </label>
                        </div>

                        <div class="col-4">
                            <label for="jobTitle" class="form-label">Job Title</label>
                            <input type="text" placeholder="" class="form-control" id="jobTitle">
                        </div>
                        <div class="col-3">
                            <label for="yrsOfExperience" class="form-label">Years of Experience</label>
                            <input type="text" placeholder="" class="form-control" id="yrsOfExperience">
                        </div>
                        <div class="col-5">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" placeholder="" class="form-control" id="companyName">
                        </div>

                    </div>

                    <div class="row mb-3 mx-2">

                        <div class="col-3">
                            <label for="serviceName" class="form-label">Service Name</label>
                            <input type="text" placeholder="" class="form-control" id="serviceName">
                        </div>
                        <div class="col-6">
                            <label for="serviceType" class="form-label">Service Type (Separate with commas)</label>
                            <input type="text" placeholder="Consulting, repair, maintenance, etc." class="form-control" id="serviceType">
                        </div>
                        <div class="col-3">
                            <label for="servicePricing" class="form-label">Pricing</label>
                            <input type="text" placeholder="Exclude symbol" class="form-control" id="servicePricing">
                        </div>
                    </div>
                    <div class="row mb-3 mx-2">
                        <div class="col-4">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" required>
                        </div>
                        <div class="col-2">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip">
                        </div>
                        <div class="col-3">
                            <label for="city" class="form-label">City</label>
                            <select id="city" class="form-select" name="city">
                                <option value="none" selected>Choose...</option>
                                <option value="Georgetown">Georgetown</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="state" class="form-label">State</label>
                            <select id="state" class="form-select" name="state">
                                <option value="none" selected>Choose...</option>
                                <option value="East Bank">East Bank</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 mx-2">
                        <div class="col-6">
                            <label for="about" class="form-label">Service Description</label>
                            <textarea class="form-control" id="availability" placeholder="Can be used to promote the service..." rows="5"></textarea><br>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="about" class="form-label">Relevant Documents</label>
                                    <input type="file" placeholder="" class="form-control" id="relevantDocs">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="about" class="form-label">Business Hours</label>
                                </div>
                            </div>
                            <div id="businessHrs">
                                <div class="row">
                                    <div class="col-5 mb-2">
                                        <div><input type="time" class="form-control" name="businessHours" value="" id="businessHours"></div>
                                    </div>
                                    <div class="col-1 mb-2 mx-0 px-0">
                                        <label for="to" class="form-label">to</label>
                                    </div>
                                    <div class="col-5 mb-2">
                                        <div><input type="time" class="form-control" name="businessHours" value="" id="businessHours"></div>
                                    </div>
                                    <div class="col-1 px-0 mb-2">
                                        <button type="button" class="btn btn-success" onclick="addNewTime()">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mb-3 mx-2">
                        <div class="col-12 text-center" style="color: white; background-color: rgb(20,188,206);">
                            <label for="personaAddress" class="form-label text-center">
                                PAYMENT DETAILS
                            </label>
                        </div>
                    </div>
                    <div class="row mb-3 mx-2">
                        <div class="col-3">
                            <div class="Register-info">
                                <label for="about" class="form-label">Payment Method</label>
                                <input type="text" placeholder="Exclude symbol" class="form-control" id="servicePricing">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="Register-info">
                                <label for="about" class="form-label">Billing Frequency</label>
                                <input type="text" placeholder="Exclude symbol" class="form-control" id="servicePricing">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="Register-info">
                                <label for="about" class="form-label">Added Value Offer</label>
                                <input type="text" placeholder="Exclude symbol" class="form-control" id="servicePricing">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 mx-2 justify-content-end">
                        <div class="col-3">
                            <button type="submit" class="btn btn-success"> Register</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>