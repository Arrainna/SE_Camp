<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>This is your multiplication table</h1>
        <?php
        for ($i=1; $i <=24 ; $i++){
            $answer = $i*$myinput;
            echo "<h2>$myinput x $i = $answer</h2>";
        }
        ?>
    </body>
    <style>
        @keyframes rainbow-effect {
    0% {
        text-shadow: 0 0 10px violet;
    }
    16.666% {
        text-shadow: 0 0 10px indigo;
    }
    33.333% {
        text-shadow: 0 0 10px blue;
    }
    50% {
        text-shadow: 0 0 10px green;
    }
    66.666% {
        text-shadow: 0 0 10px yellow;
    }
    83.333% {
        text-shadow: 0 0 10px orange;
    }
    100% {
        text-shadow: 0 0 10px red;
    }
}
body{
    background-color: gray;
    margin: 0;
    padding: 0;
}
h1{
    text-align: center;
    color: #fff;
    font-family: Verdana;
    font-size: 20px;
    animation: animate 2s linear infinite;
    height: 48px;
    line-height: 48px;
    transition: transform 0.3s ease;
    animation: rainbow-effect 10s linear infinite;
}
h1:hover{
    transform: scale(1.5);
}
h2{
    text-align: center;
    transition: transform 0.3s ease;
    animation: rainbow-effect 10s linear infinite;
}
h2:hover{
    transform: scale(1.5);
}
tr{
transition: transform 0.3s ease;
animation: rainbow-effect 10s linear infinite;
}
div{
    margin-left: auto;
    margin-right: auto;
    height: 400px;
    width: 350px;
}
tr:hover{
    transform: scale(2.5);
}
table {
    font-size: 25px;
    margin-left: auto;
    margin-right: auto;
}
@keyframes animate{
    0%
    {
        color: #f00;
        box-shadow: 0 2px 10px rgba(255, 0, 0, 1);
        border: 1px solid rgba(255, 0, 0, 1);
    }
    25%
    {
        color: #ff0;
        box-shadow: 0 2px 10px rgba(255, 255, 0, 1);
        border: 1px solid rgba(255, 255, 0, 1);
    }
    50%
    {
        color: #0f0;
        box-shadow: 0 2px 10px rgba(0, 255, 0, 1);
        border: 1px solid rgba(0, 255, 0, 1);
    }
    75%
    {
        color: #00f;
        box-shadow: 0 2px 10px rgba(0, 0, 255, 1);
        border: 1px solid rgba(0, 0, 255, 1);
    }
    100%
    {
        color: #f00;
        box-shadow: 0 2px 10px rgba(255, 0, 0, 1);
        border: 1px solid rgba(255, 0, 0, 1);
    }
}
    </style>
</html>
