<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="google" content="notranslate">
  <link rel="icon" href="{{ asset('images/content/logo/logo-company.png') }}">
  <title>403</title>
</head>
<body>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Bungee");

    * {
      margin: 0;
      box-sizing: border-box;
    }

    html,
    body {
      height: 100vh;
    }

    body {
      background: radial-gradient(circle at top,
          rgba(181, 140, 255, 0.15),
          transparent 40%), #020018;
      color: #f5f5f5;
      font-family: "Bungee", cursive;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
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

    svg {
      width: 50vw;
    }

    .lightblue {
      fill: #5d16b5;
    }

    .eye {
      cx: calc(115px + 30px * var(--mouse-x));
      cy: calc(50px + 30px * var(--mouse-y));
    }

    #eye-wrap {
      overflow: hidden;
    }

    .error-text {
      font-size: 120px;
    }

    .alarm {
      animation: alarmOn 0.5s infinite;
    }

    @keyframes alarmOn {
      to {
        fill: #ff6d6d;
      }
    }
  </style>
  <div class="custom-cursor" id="customCursor"></div>
  <div class="draw">
    <svg xmlns="http://www.w3.org/2000/svg" id="robot-error" viewBox="0 0 260 118.9" role="img">
      <title xml:lang="en">403 Error</title>
      <defs>
        <clipPath id="white-clip">
          <circle id="white-eye" fill="#c39bd3" cx="130" cy="65" r="20" />
        </clipPath>
        <text id="text-s" class="error-text" y="106">
          403
        </text>
      </defs>
      <path class="alarm" fill="#fc4343" d="M120.9 19.6V9.1c0-5 4.1-9.1 9.1-9.1h0c5 0 9.1 4.1 9.1 9.1v10.6" />
      <use xlink:href="#text-s" x="-0.5px" y="-1px" fill="#020018"></use>
      <use xlink:href="#text-s" fill="#5d16b5"></use>
      <g id="robot">
        <g id="eye-wrap">
          <use xlink:href="#white-eye"></use>
          <circle id="eyef" class="eye" clip-path="url(#white-clip)" fill="#020018" stroke="#8968c7"
            stroke-width="2" stroke-miterlimit="10" cx="130" cy="65" r="11" />
          <ellipse id="white-eye" fill="#5d16b5" cx="130" cy="40" rx="18" ry="12" />
        </g>
        <circle class="lightblue" cx="105" cy="32" r="2.5" id="tornillo" />
        <use xlink:href="#tornillo" x="50"></use>
        <use xlink:href="#tornillo" x="50" y="60"></use>
        <use xlink:href="#tornillo" y="60"></use>
      </g>
    </svg>
    <h1>You are not allowed to enter here</h1>
    <h2>
      Go
      <a target="_blank" href="https://www.youtube.com/watch?v=JccW-mLdNe0">
        Home!
      </a>
    </h2>
  </div>
  <script>
    var root = document.documentElement;
    var eyef = document.getElementById('eyef');
    var cx = document.getElementById("eyef").getAttribute("cx");
    var cy = document.getElementById("eyef").getAttribute("cy");
    document.addEventListener("mousemove", evt => {
      let x = evt.clientX / innerWidth;
      let y = evt.clientY / innerHeight;
      root.style.setProperty("--mouse-x", x);
      root.style.setProperty("--mouse-y", y);
      cx = 115 + 30 * x;
      cy = 50 + 30 * y;
      eyef.setAttribute("cx", cx);
      eyef.setAttribute("cy", cy);
    });
    document.addEventListener("touchmove", touchHandler => {
      let x = touchHandler.touches[0].clientX / innerWidth;
      let y = touchHandler.touches[0].clientY / innerHeight;
      root.style.setProperty("--mouse-x", x);
      root.style.setProperty("--mouse-y", y);
    });
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
