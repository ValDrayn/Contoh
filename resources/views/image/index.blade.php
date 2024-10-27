<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @keyframes color-change {
            /* from{
            background-color: red;
            }

            to{
            background-color: blue;
            } */

            0%{
                background-color: red;
            }
            25%{
                background-color: yellow;
            }
            50%{
                background-color: green;
            }
            75%{
                background-color: blue;
            }
            100%{
                background-color: red;
            }
        }

        body {
            animation: color-change;
            animation-duration: 5s;
            animation-iteration-count: infinite;

            /* SHORTHAND */
            /* animation: color-change: infinite; */
            /* animation: slide-right: 5s infinite; */
        }
    </style>
</head>
<body>
    <h1>IMAGE LIST</h1>

    <ul style="display: flex; align-item: center; flex-direction: column;">
        @foreach($images as $image)
            <li>
                <img src="{{ asset('images/'.$image->image_url) }}"
                style="height: 70%; width: 70%;">  
            </li>
        @endforeach
    </ul>
    
    
</body>
</html>