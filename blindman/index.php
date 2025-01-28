<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
    <style>
        body {
            font-family: sans-serif;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="date"], input[type="time"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Veranstaltung eintragen:</h1>
    <form action="add_event.php" method="post">
        <label for="event_day">Day:</label>
        <select name="event_day" id="event_day">
            <option value="Fr.">Fr.</option>
            <option value="Sa.">Sa.</option>
            <option value="So.">So.</option>
            <option value="Mo.">Mo.</option>
            <option value="Di.">Di.</option>
            <option value="Mi.">Mi.</option>
            <option value="Do.">Do.</option>
        </select><br>

        <label for="event_date">Datum:</label>
        <input type="date" name="event_date" id="event_date" required><br>

        <label for="event_time">Startzeit:</label>
        <input type="time" name="event_time" id="event_time" required><br>

        <label for="event_location">Veranstaltung + Ort:</label>
        <input type="text" name="event_location" id="event_location" required><br>

        <input type="submit" value="Eintragen">
    </form>
</body>
</html>