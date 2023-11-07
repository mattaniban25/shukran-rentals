<!DOCTYPE html>
<html>
<head>
    <style>
        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
        }

        .day {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .selected {
            background-color: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Hotel Booking Calendar</h1>
    <div class="calendar" id="calendar"></div>

    <script>
        // Define the number of days to show in the calendar
        const numDays = 30;

        // Get the current date
        const currentDate = new Date();

        // Get a reference to the calendar container
        const calendar = document.getElementById('calendar');

        // Loop to create the calendar
        for (let i = 0; i < numDays; i++) {
            const date = new Date(currentDate);
            date.setDate(currentDate.getDate() + i);
            
            const dayElement = document.createElement('div');
            dayElement.classList.add('day');
            dayElement.textContent = date.getDate();
            
            // Example: Add a click event to select the date
            dayElement.addEventListener('click', function() {
                // Remove the 'selected' class from all days
                const allDays = document.querySelectorAll('.day');
                allDays.forEach(function(day) {
                    day.classList.remove('selected');
                });

                // Add the 'selected' class to the clicked day
                dayElement.classList.add('selected');
                
                // You can implement booking functionality here or send the selected date to a server.
            });

            calendar.appendChild(dayElement);
        }
    </script>
</body>
</html>
