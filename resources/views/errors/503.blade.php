<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Victor+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Opssss.</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html,
        body {
            height: 100%;
            background: #000216;
            color: white;
            font-family: "Victor Mono", monospace;
            font-optical-sizing: auto;
            font-weight: 500;
            color: #0FF;
        }

        .maintenance {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-transform: uppercase;
            margin-bottom: 1rem;
            font-size: 3rem;
            font-weight: 700;
        }

        .container {
            display: table;
            margin: 0 auto;
            max-width: 750px;
            width: 100%;
            height: 100%;
            align-content: center;
            position: relative;
            box-sizing: border-box;
        }

        .container .what-is-up {
            position: absolute;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
            display: block;
            vertical-align: middle;
            text-align: center;
            box-sizing: border-box;
        }

        .container .what-is-up .spinny-cogs {
            display: block;
            margin-bottom: 2rem;
        }

        .container .what-is-up p {
            margin-bottom: 50px;
        }

        @-webkit-keyframes fa-spin-one {
            0% {
                -webkit-transform: translateY(-2rem) rotate(0deg);
                transform: translateY(-2rem) rotate(0deg);
            }

            100% {
                -webkit-transform: translateY(-2rem) rotate(-359deg);
                transform: translateY(-2rem) rotate(-359deg);
            }
        }

        @keyframes fa-spin-one {
            0% {
                -webkit-transform: translateY(-2rem) rotate(0deg);
                transform: translateY(-2rem) rotate(0deg);
            }

            100% {
                -webkit-transform: translateY(-2rem) rotate(-359deg);
                transform: translateY(-2rem) rotate(-359deg);
            }
        }

        .fa-spin-one,
        .container .what-is-up .spinny-cogs .fa:nth-of-type(1) {
            -webkit-animation: fa-spin-one 1s infinite linear;
            animation: fa-spin-one 1s infinite linear;
        }

        @-webkit-keyframes fa-spin-two {
            0% {
                -webkit-transform: translateY(-0.5rem) translateY(1rem) rotate(0deg);
                transform: translateY(-0.5rem) translateY(1rem) rotate(0deg);
            }

            100% {
                -webkit-transform: translateY(-0.5rem) translateY(1rem) rotate(-359deg);
                transform: translateY(-0.5rem) translateY(1rem) rotate(-359deg);
            }
        }

        @keyframes fa-spin-two {
            0% {
                -webkit-transform: translateY(-0.5rem) translateY(1rem) rotate(0deg);
                transform: translateY(-0.5rem) translateY(1rem) rotate(0deg);
            }

            100% {
                -webkit-transform: translateY(-0.5rem) translateY(1rem) rotate(-359deg);
                transform: translateY(-0.5rem) translateY(1rem) rotate(-359deg);
            }
        }

        .fa-spin-two,
        .container .what-is-up .spinny-cogs .fa:nth-of-type(3) {
            -webkit-animation: fa-spin-two 2s infinite linear;
            animation: fa-spin-two 2s infinite linear;
        }

        .made-by-me {
            position: fixed;
            text-decoration: none;
            box-sizing: border-box;
            right: 16px;
            bottom: 16px;
            width: 44px;
            height: 44px;
            display: block;
            border-radius: 100%;
            border: 2px solid white;
            box-shadow: 0 0 30px 0 rgba(0, 0, 0, .3);
            font-size: 0px;
            background: url("https://www.gravatar.com/avatar/61b642cb60dc493ddc599d90f519604d.png") no-repeat center;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="what-is-up">

            <div class="spinny-cogs">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <i class="fa fa-5x fa-cog fa-spin" aria-hidden="true"></i>
                <i class="fa fa-3x fa-cog" aria-hidden="true"></i>
            </div>
            <h1 class="maintenance">Under Maintenance</h1>
            <p>Someone has kidnapped our site. We are negotiating ransom and will resolve this issue in 24/7 hours 🤪</p>
        </div>
    </div>

    <a href="//rhrony.com" target="_blank" class="made-by-me" title="RH Rony"></a>
</body>

</html>
