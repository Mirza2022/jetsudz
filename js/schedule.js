 const calendar = document.getElementById('calendar');
        const monthYear = document.getElementById('month-year');
        const prevMonthBtn = document.getElementById('prev-month-btn');
        const nextMonthBtn = document.getElementById('next-month-btn');
        const calendarBody = document.getElementById('calendar-body');

        let date = new Date();
        let year = date.getFullYear();
        let month = date.getMonth();

        const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        // Add your own events here
        const events = {
            '2023-1-1': "New Year's Day",
            '2023-2-14': "Valentine's Day",
            '2023-4-1': "April Fool's Day",
            '2023-10-31': 'Halloween'
        };

        function renderCalendar() {

            // Clear the calendar
            calendarBody.innerHTML = '<thead><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr></thead>';

            // Set the month and year in the header
            monthYear.innerText = `${months[month]} ${year}`;

            // Get the first day of the month
            const firstDay = new Date(year, month, 1);
            const firstDayOfWeek = firstDay.getDay();

            // Get the last day of the month
            const lastDay = new Date(year, month + 1, 0);
            const lastDate = lastDay.getDate();

            // Add the first row of the calendar
            let row = document.createElement('tr');

            // Add empty cells for the first week
            for (let i = 0; i < firstDayOfWeek; i++) {
                const cell = document.createElement('td');
                row.appendChild(cell);
            }

            // Add cells for each day of the month
            for (let i = 1; i <= lastDate; i++) {
                const cell = document.createElement('td');
                cell.innerText = i;

                // Add a class to today's date
                if (i === date.getDate() && month === date.getMonth() && year === date.getFullYear()) {
                    cell.classList.add('today');
                }

                // Add a class for events
                if (events[`${year}-${month + 1}-${i}`]) {
                    cell.classList.add('event');
                }

                row.appendChild(cell);

                // If it's the last day of the week, start a new row
                if (row.children.length === 7) {
                    calendarBody.appendChild(row);
                    row = document.createElement('tr');
                }
            }

            // Add empty cells for the last week
            while (row.children.length < 7) {
                const cell = document.createElement('td');
                row.appendChild(cell);
            }

            calendarBody.appendChild(row);

            let eventClicked = false;

            calendarBody.addEventListener('click', (event) => {
                if (event.target.tagName === 'TD') {
                    const date = event.target.innerText;
                    const eventName = events[`${year}-${month + 1}-${date}`];

                    if (eventName && !eventClicked) {
                        eventClicked = true;
                        setTimeout(() => {
                            eventClicked = false;
                        }, 500);

                        const eventTableBody = document.getElementById('event-table-body');
                        eventTableBody.innerHTML = ''; // Clear the table
                        const row = document.createElement('tr');
                        const dateCell = document.createElement('td');
                        dateCell.innerText = `${months[month]} ${date}, ${year}`;
                        const eventCell = document.createElement('td');
                        eventCell.innerText = eventName;
                        row.appendChild(dateCell);
                        row.appendChild(eventCell);
                        eventTableBody.appendChild(row);
                    }
                }
            });
            
        }

        renderCalendar();

        prevMonthBtn.addEventListener('click', () => {
            month--;
            if (month < 0) {
                month = 11;
                year--;
            }
            renderCalendar();
        });

        nextMonthBtn.addEventListener('click', () => {
            month++;
            if (month > 11) {
                month = 0;
                year++;
            }
            renderCalendar();
        });

        const clearBtn = document.getElementById('clear-btn');

clearBtn.addEventListener('click', () => {
  const eventTableBody = document.getElementById('event-table-body');
  eventTableBody.innerHTML = '';
});

        