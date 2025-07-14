<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,height=device-height,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <title>Defend Chess</title>
    <link rel="stylesheet" type="text/css" href="defendchess.css" />
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/underscore.min.js"></script>
    <script type="text/javascript" src="./js/support.js"></script>
    <script type="text/javascript" src="./js/defendchess.js"></script>

</head>

<body>
    <header>
        <h1 id="titletext">Defend Chess</h1>
        <div id="header-content">
            <div id="header-left">
                <span id="stage">Stage 1</span>
                <a href="javascript:newgame()" id="newgamebutton">New Game</a>
                <p id="scoretext">Score : <span id="score">0</span></p>
                <span id="moveleft">2 Move Left</span>
            </div>
            <div id="header-right">
                <a id="clearscore" href="javascript:void(0);" onclick="clearScores()">清除紀錄</a>
            </div>
        </div>
    </header>
    <div id="display">
        <div id="left-of-display" class="displaydiv">
            <div id="grid-container">
                <div class="grid-cell-e" id="grid-cell-0-0" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-0-1" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-0-2" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-0-3" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-0-4" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-0-5" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-0-6" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-0-7" onclick="parentclick(this.id)"></div>

                <div class="grid-cell-o" id="grid-cell-1-0" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-1-1" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-1-2" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-1-3" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-1-4" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-1-5" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-1-6" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-1-7" onclick="parentclick(this.id)"></div>

                <div class="grid-cell-e" id="grid-cell-2-0" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-2-1" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-2-2" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-2-3" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-2-4" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-2-5" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-2-6" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-2-7" onclick="parentclick(this.id)"></div>

                <div class="grid-cell-o" id="grid-cell-3-0" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-3-1" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-3-2" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-3-3" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-3-4" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-3-5" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-3-6" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-3-7" onclick="parentclick(this.id)"></div>

                <div class="grid-cell-e" id="grid-cell-4-0" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-4-1" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-4-2" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-4-3" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-4-4" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-4-5" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-4-6" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-4-7" onclick="parentclick(this.id)"></div>

                <div class="grid-cell-o" id="grid-cell-5-0" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-5-1" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-5-2" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-5-3" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-5-4" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-5-5" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-5-6" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-5-7" onclick="parentclick(this.id)"></div>

                <div class="grid-cell-e" id="grid-cell-6-0" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-6-1" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-6-2" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-6-3" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-6-4" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-6-5" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-6-6" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-6-7" onclick="parentclick(this.id)"></div>

                <div class="grid-cell-o" id="grid-cell-7-0" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-7-1" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-7-2" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-7-3" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-7-4" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-7-5" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-o" id="grid-cell-7-6" onclick="parentclick(this.id)"></div>
                <div class="grid-cell-e" id="grid-cell-7-7" onclick="parentclick(this.id)"></div>
            </div>
        </div>
        <div id="right-of-display" class="displaydiv">
            <div id="allscore-board">
                <table id="allscore-table">
                    <tr>
                        <th>玩家</th>
                        <th>分數</th>
                        <th>排名</th>
                        <th>日期</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

</html>