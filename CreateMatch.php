<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/CreateMatch.css">
    <title>Document</title>
</head>

<body>
    <div class="bg">
        <div class="teamentriesbg">

            <form action="">

                <div class="matchdetails">
                    <div class="heading matchdet">
                        <label for="">MATCH DETAILS</label>
                    </div>

                    <div class="fill matchdet">
                        <div class="format">
                            <label for="">FORMAT</label>
                            <select name="" id="format" class="slct">
                                <option value="" class="opt">TEST</option>
                                <option value="" class="opt">ODI</option>
                                <option value="" class="opt">T20</option>
                            </select>
                        </div>
                        <div class="customcheck" style="margin-top: 20px ;">
                            <input type="checkbox" id="customcheck">
                            <label for="" style="font-size: 13px ;">CUSTOM FORMAT</label>
                        </div>

                        <div id="customfill"
                            style=" display: none ;background: black ; margin-top: 10px; text-align: center; color: white; border: solid black 3px;">
                            <label for="">CUSTOM FILL</label>
                        </div>
                        <div class="content" id="customfillcontent" style="display: none ;">
                            <div style="border: solid black 2px ; padding: 10px ;">
                                <div class="overs">
                                    <label for="">OVERS</label>
                                    <input type="text" class="inputname overs">
                                    <label for="">(UN - Unlimited)</label>
                                </div>

                                <div class="wickets">
                                    <label for="">WICKETS</label>
                                    <input type="text" id="wickets" class="inputname wickets">
                                </div>
                            </div>

                            <div class="checks" style="margin-top: 10px; font-size: 13px ;">
                                <input type="checkbox" style="margin-top:8px ;">
                                <label for="">ADD RUN FOR EVERY WIDE BALL</label><br>
                                <input type="checkbox" style="margin-top:8px ;">
                                <label for="">ADD RUN FOR EVERY NO BALL</label><br>
                                <input type="checkbox" style="margin-top:8px ;">
                                <label for="">ENABLE FREE HIT FOR EVERY NO BALL</label><br>
                                <input type="checkbox" style="margin-top:8px ;">
                                <label for="">ALLOW LAST PLAYER BATTING</label>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="heading teamone">
                    <label for="">TEAM ONE </label>
                </div>

                <div class="fill teamone">

                    <div class="name">
                        <label for="" class="labelname">TEAM NAME</label>
                        <input type="text" class="inputname">
                    </div>

                    <div class="teamsize">
                        <label for="" class="labelname">TEAM SIZE</label>
                        <input type="number" inputmode="numeric" class="inputname tsize" id="teamonesize"
                            style="margin-left: 20px ; width: 3% ; margin-top: 20px ; padding-left: 8px; text-align: center; ; width:6%  ;">
                        <button class="sizebutton" id="teamoneaddsize"> ADD </button>
                    </div>

                    <div class="team">
                        <ul class="teamlist" id="teamlist">
                            <!-- <li>
                                <div>
                                    <div class="playerlabel">
                                        <label for="" class="playernumber">PLAYER 1</label>
                                    </div>

                                    <div class="playerinput">
                                        <input type="text" class="inputname player">
                                    </div>

                                    <div class="removeplayer">
                                        <button class="sizebutton remove">-</button>

                                    </div>
                                </div>
                            </li> -->

                        </ul>
                    </div>

                </div>

            </form>

        </div>
    </div>


    <script src="JS/CreateMatch.js">


    </script>
</body>

</html>