<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <style>
        .container{
            width: 80%;
            display: flex;
            flex-direction: column; 
        }

        body{
            background-image: linear-gradient(to right, #e4afcb 0%, #b8cbb8 0%, #b8cbb8 0%, #e2c58b 30%, #c2ce9c 64%, #7edbdc 100%);
        }

        button{
            padding: 10px;
            margin: 10px;
            width: 50%;
            
        }

        a {
            width: 60rem;
            height: 7rem;
            font-size: 20px;
            text-align: center;
            line-height: 7rem;
            font-family: sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            transition: 0.3s;
            margin: 3rem;
        }

        a::before,
        a::after {
            content: '';
            position: absolute;
            width: inherit;
            height: inherit;
            top: 0;
            left: 0;
            transition: 0.3s;
        }

        a::before {
            background-color: white;
            z-index: -1;
            box-shadow: 0.2rem 0.2rem 0.5rem rgba(0, 0, 0, 0.2);
        }

        a::after {
            background-color: goldenrod;
            transform: translate(1.5rem, 1.5rem);
            z-index: -2;
        }

        a:hover {
            transform: translate(1.5rem, 1.5rem);
            color: white;
        }

        a:hover::before {
            background-color: goldenrod;
        }

        a:hover::after {
            background-color: white;
            transform: translate(-1.5rem, -1.5rem);
        }
</style>
    <body>
        <center>
                <h1>Absence Manager</h1>
                <div class="container">
                    <a href="/Info">Genie Informatique</a>
                    <a href="">Filliere 2</a>
                    <a href="">Filliere 3</a>
                    <a href="">Filliere 4</a>            
                </div>
        </center>
    </body>
</html>
