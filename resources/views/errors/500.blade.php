<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="google" content="notranslate">
  <link rel="icon" href="{{ asset("images/content/logo/logo-company.png") }}">
  <title>Server Error</title>
</head>
<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap");

        * {
            font-family: "Rubik", sans-serif;
            font-optical-sizing: auto;
            box-sizing: border-box;
            font-weight: 700;
            margin: 0;
            padding: 0;
        }

        *::selection {
            background-color: #8232e4;
            color: white;
        }

        *,
        *:after,
        *:before {
            box-sizing: border-box;
        }

        body {
            background-image: linear-gradient(to bottom, #181333 0%, #422566 70%, #5b3e74 100%);
            padding: 0;
            margin: 0;
            cursor: none;
            user-select: none;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            overflow: hidden;
            cursor: none !important;
        }

        a,
        button,
        input,
        textarea,
        select,
        canvas,
        label {
            cursor: none !important;
        }

        .custom-cursor {
            position: fixed;
            top: 0;
            left: 0;
            width: 18px;
            height: 18px;
            border: 2px solid #c39bd3;
            background: rgba(195, 155, 211, 0.15);
            box-shadow: 0 0 15px rgba(195, 155, 211, 0.35);
            pointer-events: none;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transition:
                width 0.15s ease,
                height 0.15s ease,
                background 0.15s ease,
                transform 0.08s ease;
            -webkit-transition:
                width 0.15s ease,
                height 0.15s ease,
                background 0.15s ease,
                transform 0.08s ease;
            -moz-transition:
                width 0.15s ease,
                height 0.15s ease,
                background 0.15s ease,
                transform 0.08s ease;
            -ms-transition:
                width 0.15s ease,
                height 0.15s ease,
                background 0.15s ease,
                transform 0.08s ease;
            -o-transition:
                width 0.15s ease,
                height 0.15s ease,
                background 0.15s ease,
                transform 0.08s ease;
            z-index: 999999;
        }

        .custom-cursor.active {
            width: 34px;
            height: 34px;
            background: rgba(195, 155, 211, 0.25);
        }

        .custom-cursor.click {
            transform: translate(-50%, -50%) scale(0.8);
            -webkit-transform: translate(-50%, -50%) scale(0.8);
            -moz-transform: translate(-50%, -50%) scale(0.8);
            -ms-transform: translate(-50%, -50%) scale(0.8);
            -o-transform: translate(-50%, -50%) scale(0.8);
        }

        .cont_principal {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .cont_error {
            position: absolute;
            left: 7rem;
            width: 100%;
            height: 300px;
            top: 50%;
            margin-top: -150px;
        }

        .cont_error>h1 {
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            font-size: 150px;
            color: #fff;
            position: relative;
            left: -100%;
            transition: all 0.5s;
        }


        .cont_error>p {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            font-size: 24px;
            letter-spacing: 5px;
            color: #9294AE;
            position: relative;
            left: 100%;
            transition: all 0.5s;
            transition-delay: 0.5s;
            -webkit-transition: all 0.5s;
            -webkit-transition-delay: 0.5s;
        }

        .cont_aura_1 {
            position: absolute;
            width: 300px;
            height: 120%;
            top: 25px;
            right: -340px;
            background-color: #8A65DF;
            box-shadow: 0px 0px 60px 20px rgba(137, 100, 222, 0.5);
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
        }

        .cont_aura_2 {
            position: absolute;
            width: 100%;
            height: 300px;
            right: -10%;
            bottom: -301px;
            background-color: #8B65E4;
            box-shadow: 0px 0px 60px 10px rgba(131, 95, 214, 0.5), 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            z-index: 5;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
        }

        .cont_error_active>.cont_error>h1 {
            left: 0%;
        }

        .cont_error_active>.cont_error>p {
            left: 0%;
        }

        .cont_error_active>.cont_aura_2 {
            animation-name: animation_error_2;
            animation-duration: 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            transform: rotate(-20deg);
        }

        .cont_error_active>.cont_aura_1 {
            transform: rotate(20deg);
            right: -170px;
            animation-name: animation_error_1;
            animation-duration: 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        @-webkit-keyframes animation_error_1 {
            from {
                -webkit-transform: rotate(20deg);
                transform: rotate(20deg);
            }

            to {
                -webkit-transform: rotate(25deg);
                transform: rotate(25deg);
            }
        }

        @-o-keyframes animation_error_1 {
            from {
                -webkit-transform: rotate(20deg);
                transform: rotate(20deg);
            }

            to {
                -webkit-transform: rotate(25deg);
                transform: rotate(25deg);
            }

        }

        @-moz-keyframes animation_error_1 {
            from {
                -webkit-transform: rotate(20deg);
                transform: rotate(20deg);
            }

            to {
                -webkit-transform: rotate(25deg);
                transform: rotate(25deg);
            }

        }

        @keyframes animation_error_1 {
            from {
                -webkit-transform: rotate(20deg);
                transform: rotate(20deg);
            }

            to {
                -webkit-transform: rotate(25deg);
                transform: rotate(25deg);
            }
        }




        @-webkit-keyframes animation_error_2 {
            from {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }

            to {
                -webkit-transform: rotate(-20deg);
                transform: rotate(-20deg);
            }
        }

        @-o-keyframes animation_error_2 {
            from {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }

            to {
                -webkit-transform: rotate(-20deg);
                transform: rotate(-20deg);
            }
        }
        }

        @-moz-keyframes animation_error_2 {
            from {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }

            to {
                -webkit-transform: rotate(-20deg);
                transform: rotate(-20deg);
            }
        }

        @keyframes animation_error_2 {
            from {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }

            to {
                -webkit-transform: rotate(-20deg);
                transform: rotate(-20deg);
            }
        }
    </style>
    <div class="cont_principal">
        <div class="cont_error">

            <h1>Oops</h1>
            <p>There is a problem with the server</p>
        </div>
        <div class="cont_aura_1"></div>
        <div class="cont_aura_2"></div>
    </div>
    <div class="custom-cursor" id="customCursor"></div>
    <script>
      window.onload = function() {
        document.querySelector('.cont_principal').className = "cont_principal cont_error_active";
      }
      let cursor = document.getElementById("customCursor");
      let hoverItems = document.querySelectorAll("a, button, input, textarea, select, .hoverable, label, .moon");

      document.addEventListener("mousemove", (e) => {
        cursor.style.left = e.clientX + "px";
        cursor.style.top = e.clientY + "px";
      });

      document.addEventListener("mousedown", () => {
        cursor.classList.add("click");
      });

      document.addEventListener("mouseup", () => {
        cursor.classList.remove("click");
      });

      hoverItems.forEach((item) => {
        item.addEventListener("mouseenter", () => {
          cursor.classList.add("active");
        });
        item.addEventListener("mouseleave", () => {
          cursor.classList.remove("active");
        });
      });
    </script>

</body>

</html>
