<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background-image: linear-gradient(to right, #e4afcb 0%, #b8cbb8 0%, #b8cbb8 0%, #e2c58b 30%, #c2ce9c 64%, #7edbdc 100%);
}   

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
    box-shadow: 0px 0px 30px 10px rgba(0,0,0,0.75);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.fl-table td {
    text-align: center;
    padding: 8px;
    border-right: 1px solid #000000;
    font-size: 12px;
}

.fl-table tr:nth-child(even) {
    background: #eee;
}

thead{
    background-color: black;
    color : white;
}
    </style>
</head>
<body>
    <center>
            <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Full Name</td>
                            <td>Score</td>
                            <td>Modify</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studs as $studs)
                        <tr>
                            <td>{{$studs -> id}}</td>
                            <td>{{$studs -> name}}</td>
                            <td id="score">{{$studs -> score}}</td>
                        <td>
                            <form method="POST" action="{{action('StudentController@incrementScore')}}" accept-charset="UTF-8"><button>+</button></form>
                            <form method="POST" action="{{action('StudentController@decrementScore')}}" accept-charset="UTF-8"><button>-</button></form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
    </center>
</body>
</html>