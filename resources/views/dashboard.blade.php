<html>
<head>
    <title></title>
    <style>

        .game-icon{
            width: 205px;
            height: 150px;
            border-radius:5px;
        }
        .gameTable{
            margin-left: 75px;
            margin-right: 75px;
            margin-top: 20px;
        }

        .single-game-div{
            margin-right: 15px;
            margin-bottom: 5px;
            float: left;
            border:1px solid black;
        }
        .play-btn{
            padding: 2px 88px;
            text-align: center;
            background-color: #6B368C;
            color:white;
        }
        .play-btn:hover{
            background-color: #A54FDA;
        }
        span{
            margin-left:60px; 
        }
    </style>
</head>
<body>
    
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        
        </h2>
    </x-slot>
        <div class="gameTable">
            @for($i=1;$i<=10;$i++)
                @foreach(App\Models\Game::all() as $game)
                    <div class="single-game-div">
                        <img class="game-icon" src="{{$game->icon}}">
                        <span>{{$game->name}}</span><br>
                        <a class="play-btn" href="/game/{{$game->id}}">Play</a>
                    </div>
                @endforeach
            @endfor
        </div>
    </x-app-layout>
</body>
</html>
