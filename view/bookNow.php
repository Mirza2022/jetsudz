<!-- BOOK NOW MODAL -->

<div class="modal fade" id="book-now-form" tabindex="-1" aria-labelledby="book-now-label" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="book-now-label">Book Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="" method="POST">
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
                            <input type="text" placeholder="" class="form-control" id="phone" name="phone">
                        </div>

                        <div class="col-7">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" placeholder="" class="form-control" id="email" name="email">
                        </div>
                    </div>

                    <div class="row mb-3 mx-2">
                        <div class="col2">
                            <label for="serviceType" class="form-label">Service Type</label>
                            <select id="serviceType" class="form-select" name="serviceType">
                                <option value="" selected>Select a type</option>
                                <option value="auto">Automobile</option>
                                <option value="detailing">Detailing</option>
                                <option value="marineTech">Marine Tech</option>
                                <option value="marinePlumbing">Marine Plumbing</option>
                                <option value="marineElectrical">Marine Electrical</option>
                                <option value="marinePainting">Marine Painting</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3 mx-2">
                        <div class="col-5">
                            <label for="bookingType" class="form-label">Type of Booking</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="emergency" name="bookingType" value="emergency" checked>
                                <label class="form-check-label" for="emergency">
                                    Emergency
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" name="bookingType" value="schedule">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Schedule
                                </label>
                            </div>

                        </div>

                        <div class="col-7">
                            <div class="form-group">
                                <label class="form-label" for="scheduleDate">Schedule Date </label>
                                <input type="date" class="form-control" name="scheduleDate">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 mx-2">
                        <div class="col2">
                            <label for="additionalDetail" class="form-label">Additional Request Details</label>
                            <textarea class="form-control" id="additionalDetail" rows="3" name="requestDetails"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3 mx-2 justify-content-end">
                        <div class="col-2">
                            <button class="btn btn-primary" data-bs-target="#confirm" data-bs-toggle="modal" data-bs-dismiss="modal">Book</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once 'shoppingCart.php'; ?>