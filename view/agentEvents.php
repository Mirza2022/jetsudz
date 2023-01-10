<div class="row" id="myEvents" style="display: none;">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>My Events</h3>

                <div>
                    <form>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-event">Add Event</button>
                    </form>
                </div>
                <!-- Add Event MODAL -->

                <div class="modal fade" id="add-event" tabindex="-1" aria-labelledby="add-event-label" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="add-event-label">Add Event</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <form method="" action="./services.php">
                                    <div class="row mb-3 mx-2">
                                        <div class="col-7">
                                            <label for="eventName" class="form-label">Event Name</label>
                                            <input type="text" placeholder="" class="form-control" name="eventName" id="eventName" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mx-2">
                                        <div class="col-7">
                                            <label for="eventEmail" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="eventEmail" id="eventEmail" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mx-2">
                                        <div class="col-12">
                                            <label for="eventDescription" class="form-label">Event Description</label>
                                            <textarea class="form-control" id="availability" placeholder="Can be used to promote the service..." rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mx-2">
                                        <div class="col-12">
                                            <label for="eventImage" class="form-label">Event Image (Optional)</label>
                                            <input type="file" placeholder="" class="form-control" name="eventImage" id="eventImage">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mx-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="optInUpdates" id="optInUpdates">
                                            <label class="form-check-label" for="optInUpdates">
                                                I want Opt-In Updates
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mx-2">
                                        <p>* Opt in will receive discount offer for each event from Jetusdz for future promotions with suppliers for Monthly cash discounts</p>
                                    </div>

                                    <div class="row mb-3 mx-2">
                                        <div class="col-12">
                                            <label for="eventImage" class="form-label">Time</label>
                                            <input type="time" class="form-control" name="time" value="08:00" id="time">
                                        </div>
                                    </div>

                                    <div class="row mb-3 mx-5 justify-content-end">
                                        <div class="col-2">
                                            <button type="submit" class="btn btn-outline-success" name="addEvent">Add Event</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped data-table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Type</th>
                                <th class="text-center">Booking</th>
                                <th class="text-center">Pricing</th>
                                <th class="text-center">Location</th>
                                <th class="text-center">Hours</th>
                                <th class="text-center">Promo Info</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$100</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                            <tr>
                                <td>Marine Tech</td>
                                <td>Consultation</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas accusamus sed sequi nobis! Praesentium doloribus dolorem omnis eaque?</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>10am, 2pm, 8pm</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis qui repellendus mollitia dicta exercitationem sit maxime praesentium temporibus aperiam modi iure quam eaque in laboriosam, delectus expedita aspernatur. Consequuntur.</td>

                                <td>Edit | Delete</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>