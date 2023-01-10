<div id="calendar">
    <div id="calendar-header">
        <button id="prev-month-btn"> &lt </button>
        <h2 id="month-year"></h2>
        <button id="next-month-btn"> &gt </button>
    </div>
    <table id="calendar-body">
        <thead>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <!-- Add additional rows for the remaining days of the month -->
        </tbody>
    </table>
    <p>Click a booked date in calendar to preview</p>
    <button id="clear-btn">Clear Preview</button>


    <table id="event-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Schedule</th>
                <th>Service Type</th>
            </tr>
        </thead>
        <tbody id="event-table-body">
        </tbody>
    </table>


</div>

<div class="row" id="custSchedule" style="display: Block;">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>All Booking</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table data-table" id="custTbl" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Type</th>
                                <th>Date Booked</th>
                                <th>Date Scheduled</th>
                                <th>Pricing</th>
                                <th>Location</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Boat Cleaning</td>
                                <td>Scheduled</td>
                                <td>2022-01-23</td>
                                <td>2022-01-28</td>
                                <td>$200</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum sed atque ipsam.</td>
                                <td>Edit | Delete</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>