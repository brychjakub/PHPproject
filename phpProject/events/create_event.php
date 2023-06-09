<?php include '../login/auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rezervace CMcZŠ</title>
    <link rel="stylesheet" href="../styles.css">
    
</head>
<body class="container">
<?php include '../header.php'; ?>

    <?php include '../sidebar.php'; ?>

    <h2>Vytvoř novou událost</h2>
    <form action="save_event.php" method="post" id="event-create-form-id">
        <fieldset>
            <div class="field-group">
                <label for="eventName">Jméno události</label>
                <input type="text" id="eventName" name="eventName" required>
                <div class="description">Např. 'Zápis do 1.B'.</div>
            </div>
            <div class="field-group">
                <label for="startDate">Datum začátku</label>
                <input type="date" id="startDate" name="startDate" required>
            </div>
            <div class="field-group">
                <label for="startTime">Čas začátku</label>
                <input type="text" id="startTime" name="startTime" pattern="^(?:[01]\d|2[0-3]):[0-5]\d$" title="Zadejte čas ve formátu hh:mm" required>
            </div>
            
            <div class="field-group">
                <label for="endTime">Čas konce</label>
                <input type="text" id="endTime" name="endTime" pattern="^(?:[01]\d|2[0-3]):[0-5]\d$" title="Zadejte čas ve formátu hh:mm" required>
            </div>
            <div class="field-group">
                <label for="bookingPeriod">Interval</label>
                <input type="text" id="bookingPeriod" name="bookingPeriod" pattern="\d+" title="Zadejte číslo jako interval (v minutách)" required>
                <div class="description">Interval (v minutách) určující frekvenci rezervačních oken</div>
            </div>
         <!--    <fieldset class="group">
                <legend>Otevřeno pro veřejnost?</legend>
                <div class="checkbox">
                    <input type="checkbox" name="eventOpen" id="eventOpen">
                    <label for="eventOpen"></label>
                </div>
                <div class="description">Uzavřené události se nezobrazují uživatelům a nepovolují vytvářet další rezervace</div>
            </fieldset> -->
        </fieldset>
        <div class="buttons-container">
            <div class="buttons">
                <input type="submit" value="Uložit">
               <a href="event_list.php">Zrušit</a>
            </div>
        </div>
    </form>
    <footer>
        <?php include '../footer.php'; ?>
    </footer>
</body>
</html>
