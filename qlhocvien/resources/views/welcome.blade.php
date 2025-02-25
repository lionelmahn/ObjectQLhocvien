<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <style>
            .{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .welcome {
                position: relative;
                width: fit-content;
                margin: 0px auto;
            }
            .welcome h1 {
                position: relative;
                font-size: clame(2rem, 20vw, 10rem);
                font-size: 70px;
                line-height: 0.9em;
                text-transform: uppercase;
                letter-spacing: -0.01em;
                color: #8c4c35;
            }
            .welcome h1::before {
                content: attr(data-text);
                position: absolute;
                top: 0;
                left: 0;   
                width: 20%;
                height: 100%;
                color: #d9a87e;
                -webkit-text-stroke: 1px #d9a87e;
                border-right: 2px solid #d9a87e;
                overflow: hidden;
                animation: move 5s alternate ease-in-out infinite;
            }
            @keyframes move {
                0% {
                    width: 0%;
                }
                100% {
                    width: 100%;
                }
            }
            body {
                background-image: url('/images/black.jpg');
                height: 100vh;
                background-position: center;
                background-size: cover;
                overflow: hidden;
            }
            
            .button {
            padding: 1.3em 3em;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: #fff;
            background-color: #d9a87e;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
            }

            .button:hover {
            background-color: #8c4c35;
            box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
            color: #d6d1d1;
            transform: translateY(-7px);
            }

            .button:active {
            transform: translateY(-1px);
            }

            a {
                text-decoration: none;
            }
            .cn {
                text-align: center; 
            }
        </style>
    </head>
    <body>
            <div class="welcome">
                <h1 data-text="Welcome">Welcome</h1>
            </div>
            @if (Route::has('login'))
                <div class="cn">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="button">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="button">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </body>
</html>
