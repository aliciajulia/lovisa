<!DOCTYPE html>

<html>
    <head>
        <title>SPELA SPEL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="tarning.js"></script>


    </head>

    <body>

        <form method="POST" name="myForm">
            <input type="radio" name="radiobtn" id="1" value="1" class="radiobtn"/>
            <label for="1">1</label> <br />
            <input type="radio" name="radiobtn" id="2" value="2" class="radiobtn"/>
            <label for="2">2</label> <br />
            <input type="radio" name="radiobtn" id="3" value="3" class="radiobtn"/>
            <label for="3">3</label> <br />
            <br>
            <!--knapp-->
            <input type="submit" value="Kasta Tärningarna" name="throwDice" class="throwDice">
        </form>

        <div id="box"></div>




    </body>
</html>