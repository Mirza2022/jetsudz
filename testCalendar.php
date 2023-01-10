<!DOCTYPE html>
<html>

<head>
    <style>
        /* Style the calendar table */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>Events Calendar</h2>

    <table>
        <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <script type="text/javascript">
        // Get the table element
        const table = document.querySelector('table');

        // Create an array of events
        const events = [{
                date: 'January 1',
                event: 'New YearDay',
                location: 'Online'
            },
            {
                date: 'January 20',
                event: 'Martin Luther King Jr. Day',
                location: 'Online'
            },
            {
                date: 'February 14',
                event: 'ValentineDay',
                location: 'Online'
            }
        ];

        // Sort the events by date
        events.sort((a, b) => {
            const dateA = new Date(a.date);
            const dateB = new Date(b.date);
            return dateA - dateB;
        });

        // Find the first day of the month
        const firstDayOfMonth = new Date(events[0].date).getDay();

        // Insert the events into the calendar
        for (const event of events) {
            const date = new Date(event.date);
            const dayOfWeek = date.getDay();
            const row = table.rows[Math.floor((dayOfWeek + firstDayOfMonth - 1) / 7) + 1];
            const cell = row.cells[(dayOfWeek + firstDayOfMonth - 1) % 7];
            cell.innerHTML = `${event.event}<br><i>${event.location}</i>`;
        }
    </script>
</body>

</html>