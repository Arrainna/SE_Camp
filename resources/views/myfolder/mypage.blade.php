<div class="glowing">
    <span>M</span>
    <span>U</span>
    <span>L</span>
    <span>T</span>
    <span>I</span>
    <span>P</span>
    <span>L</span>
    <span>I</span>
    <span>C</span>
    <span>A</span>
    <span>T</span>
    <span>I</span>
    <span>O</span>
    <span>N</span>
</div>
<div class="glowing-2">
    <span class="A">T</span>
    <span>A</span>
    <span>B</span>
    <span>L</span>
    <span>E</span>
</div>
<div class="glowing-3">
    <span>C</span>
    <span>A</span>
    <span>L</span>
    <span>C</span>
    <span>U</span>
    <span>L</span>
    <span>A</span>
    <span>T</span>
    <span>O</span>
    <span>R</span>
</div>

<form method = "post" action="/my-route">
    @csrf
    <div>
    <input type="text" name="myinput" class="custom-input" placeholder="Enter value">
    </div>
    <div>
    <button type="submit" class="custom-button">Submit</button>
    </div>
</form>
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
    background-color: #262626;
    margin: 0;
    padding: 0;
}
.glowing{
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.glowing-2 {
    position: absolute;
    top: 27.5%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.glowing-3 {
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.glowing span{
    color: #fff;
    font-family: Verdana;
    font-size: 20px;
    color: #fff;
    display: inline-block;
    animation: animate 2s linear infinite;
    width: 48px;
    height: 48px;
    text-align: center;line-height: 48px;
    border: 1px solid rgba(255,255,255,.4);
    margin: 0 -2.5px;
}
.glowing-2 span{
    color: #fff;
    font-family: Verdana;
    font-size: 20px;
    color: #fff;
    display: inline-block;
    animation: animate 2s linear infinite;
    width: 48px;
    height: 48px;
    text-align: center;line-height: 48px;
    border: 1px solid rgba(255,255,255,.4);
    margin: 0 -2.5px;
}
.glowing-3 span{
    color: #fff;
    font-family: Verdana;
    font-size: 20px;
    color: #fff;
    display: inline-block;
    animation: animate 2s linear infinite;
    width: 48px;
    height: 48px;
    text-align: center;line-height: 48px;
    border: 1px solid rgba(255,255,255,.4);
    margin: 0 -2.5px;
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
.glowing span:nth-child(1)
{
    animation-delay: 0s;

}
.glowing span:nth-child(2)
{
    animation-delay: 0.1s;

}
.glowing span:nth-child(3)
{
    animation-delay: 0.2s;

}
.glowing span:nth-child(4)
{
    animation-delay: 0.3s;

}
.glowing span:nth-child(5)
{
    animation-delay: 0.4s;
}
.glowing span:nth-child(6)
{
    animation-delay: 0.5s;

}
.glowing span:nth-child(7)
{
    animation-delay: 0.6s;
}
.glowing span:nth-child(8)
{
    animation-delay: 0.7s;
}
.glowing span:nth-child(9)
{
    animation-delay: 0.8s;
}
.glowing span:nth-child(10)
{
    animation-delay: 0.9s;
}
.glowing span:nth-child(11)
{
    animation-delay: 1.0s;
}
.glowing span:nth-child(12)
{
    animation-delay: 1.1s;
}
.glowing span:nth-child(13)
{
    animation-delay: 1.2s;
}
.glowing span:nth-child(14)
{
    animation-delay: 1.3s;
}
.glowing-2 span:nth-child(1)
{
    animation-delay: 0s;

}
.glowing-2 span:nth-child(2)
{
    animation-delay: 0.1s;

}
.glowing-2 span:nth-child(3)
{
    animation-delay: 0.2s;

}
.glowing-2 span:nth-child(4)
{
    animation-delay: 0.3s;

}
.glowing-2 span:nth-child(5)
{
    animation-delay: 0.4s;
}
.glowing-3 span:nth-child(1)
{
    animation-delay: 0s;

}
.glowing-3 span:nth-child(2)
{
    animation-delay: 0.1s;

}
.glowing-3 span:nth-child(3)
{
    animation-delay: 0.2s;

}
.glowing-3 span:nth-child(4)
{
    animation-delay: 0.3s;

}
.glowing-3 span:nth-child(5)
{
    animation-delay: 0.4s;
}
.glowing-3 span:nth-child(6)
{
    animation-delay: 0.5s;

}
.glowing-3 span:nth-child(7)
{
    animation-delay: 0.6s;
}
.glowing-3 span:nth-child(8)
{
    animation-delay: 0.7s;
}
.glowing-3 span:nth-child(9)
{
    animation-delay: 0.8s;
}
.glowing-3 span:nth-child(10)
{
    animation-delay: 0.9s;
}
span{
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
h1 {
    text-align: center;
    transition: transform 0.3s ease;
    animation: glow 2s infinite alternate;
    color: #fff;
    text-shadow: 0 0 5px #fff, 0 0 10px #ff00e5, 0 0 15px #ff00e5, 0 0 20px #ff00e5, 0 0 25px #ff00e5, 0 0 30px #ff00e5, 0 0 35px #ff00e5; /* Multiple shadows create the glow effect */
}
h1:hover{
    transform: scale(1.1);
}
@keyframes glow {
    from {
        text-shadow: 0 0 5px #fff, 0 0 10px #ff00e5, 0 0 15px #ff00e5, 0 0 20px #ff00e5, 0 0 25px #ff00e5, 0 0 30px #ff00e5, 0 0 35px #ff00e5;
    }
    to {
        text-shadow: 0 0 10px #fff, 0 0 15px #ff00e5, 0 0 20px #ff00e5, 0 0 25px #ff00e5, 0 0 30px #ff00e5, 0 0 35px #ff00e5, 0 0 40px #ff00e5;
    }
}
tr{
transition: transform 0.3s ease;
animation: rainbow-effect 10s linear infinite;
}
div{
    margin-left: auto;
    margin-right: auto;
}
tr:hover{
    transform: scale(2.5);
}
table {
    font-size: 25px;
    margin-left: auto;
    margin-right: auto;
}
.custom-button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: block;
        font-size: 16px;
        margin: 20px auto;
        cursor: pointer;
        border-radius: 12px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        transition: background-color 0.3s ease;
    }

.custom-button:hover {
        background-color: #45a049;
}
.custom-input {
        width: 200px;
        padding: 10px 15px;
        margin: 10px 0;
        border: 2px solid #4CAF50;
        border-radius: 10px;
        font-size: 16px;
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%,-50%);
        transition: border-color 0.3s ease;
    }

    .custom-input:focus {
        border-color: #45a049;
        outline: none;
    }


</style>
