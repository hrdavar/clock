<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ساعت آنالوگ با CSS</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .clock {
            width: 300px;
            height: 300px;
            border: 10px solid #333;
            border-radius: 50%;
            position: relative;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .center {
            width: 20px;
            height: 20px;
            background-color: #333;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        .hour-hand {
            width: 8px;
            height: 80px;
            background-color: #333;
            position: absolute;
            top: 50%;
            left: 50%;
            transform-origin: bottom center;
            transform: translate(-50%, -100%) rotate(0deg);
            border-radius: 4px;
            z-index: 5;
        }

        .minute-hand {
            width: 4px;
            height: 120px;
            background-color: #666;
            position: absolute;
            top: 50%;
            left: 50%;
            transform-origin: bottom center;
            transform: translate(-50%, -100%) rotate(0deg);
            border-radius: 2px;
            z-index: 6;
        }

        .second-hand {
            width: 2px;
            height: 140px;
            background-color: #f00;
            position: absolute;
            top: 50%;
            left: 50%;
            transform-origin: bottom center;
            transform: translate(-50%, -100%) rotate(0deg);
            z-index: 7;
        }

        .number {
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .number div {
            position: absolute;
            width: 30px;
            height: 30px;
            line-height: 30px;
        }

        /* قرار دادن اعداد در موقعیت‌های صحیح */
        .number1 { transform: rotate(30deg); }
        .number1 div { transform: rotate(-30deg); }

        .number2 { transform: rotate(60deg); }
        .number2 div { transform: rotate(-60deg); }

        .number3 { transform: rotate(90deg); }
        .number3 div { transform: rotate(-90deg); }

        .number4 { transform: rotate(120deg); }
        .number4 div { transform: rotate(-120deg); }

        .number5 { transform: rotate(150deg); }
        .number5 div { transform: rotate(-150deg); }

        .number6 { transform: rotate(180deg); }
        .number6 div { transform: rotate(-180deg); }

        .number7 { transform: rotate(210deg); }
        .number7 div { transform: rotate(-210deg); }

        .number8 { transform: rotate(240deg); }
        .number8 div { transform: rotate(-240deg); }

        .number9 { transform: rotate(270deg); }
        .number9 div { transform: rotate(-270deg); }

        .number10 { transform: rotate(300deg); }
        .number10 div { transform: rotate(-300deg); }

        .number11 { transform: rotate(330deg); }
        .number11 div { transform: rotate(-330deg); }

        .number12 { transform: rotate(0deg); }
        .number12 div { transform: rotate(0deg); }

        /* خطوط ساعت */
        .mark {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .mark div {
            position: absolute;
            width: 4px;
            height: 15px;
            background-color: #333;
            left: 50%;
            transform: translateX(-50%);
        }

        /* قرار دادن خطوط در موقعیت‌های صحیح */
        .mark1 { transform: rotate(30deg); }
        .mark1 div { transform: rotate(-30deg); }

        .mark2 { transform: rotate(60deg); }
        .mark2 div { transform: rotate(-60deg); }

        .mark3 { transform: rotate(90deg); }
        .mark3 div { transform: rotate(-90deg); }

        .mark4 { transform: rotate(120deg); }
        .mark4 div { transform: rotate(-120deg); }

        .mark5 { transform: rotate(150deg); }
        .mark5 div { transform: rotate(-150deg); }

        .mark6 { transform: rotate(180deg); }
        .mark6 div { transform: rotate(-180deg); }

        .mark7 { transform: rotate(210deg); }
        .mark7 div { transform: rotate(-210deg); }

        .mark8 { transform: rotate(240deg); }
        .mark8 div { transform: rotate(-240deg); }

        .mark9 { transform: rotate(270deg); }
        .mark9 div { transform: rotate(-270deg); }

        .mark10 { transform: rotate(300deg); }
        .mark10 div { transform: rotate(-300deg); }

        .mark11 { transform: rotate(330deg); }
        .mark11 div { transform: rotate(-330deg); }

        .mark12 { transform: rotate(0deg); }
        .mark12 div { transform: rotate(0deg); }
    </style>
</head>
<body>
<div class="clock">
    <div class="center"></div>
    <div class="hour-hand" id="hour-hand"></div>
    <div class="minute-hand" id="minute-hand"></div>
    <div class="second-hand" id="second-hand"></div>

    <div class="number">
        <div class="number1"><div>1</div></div>
        <div class="number2"><div>2</div></div>
        <div class="number3"><div>3</div></div>
        <div class="number4"><div>4</div></div>
        <div class="number5"><div>5</div></div>
        <div class="number6"><div>6</div></div>
        <div class="number7"><div>7</div></div>
        <div class="number8"><div>8</div></div>
        <div class="number9"><div>9</div></div>
        <div class="number10"><div>10</div></div>
        <div class="number11"><div>11</div></div>
        <div class="number12"><div>12</div></div>
    </div>

    <div class="mark">
        <div class="mark1"><div></div></div>
        <div class="mark2"><div></div></div>
        <div class="mark3"><div></div></div>
        <div class="mark4"><div></div></div>
        <div class="mark5"><div></div></div>
        <div class="mark6"><div></div></div>
        <div class="mark7"><div></div></div>
        <div class="mark8"><div></div></div>
        <div class="mark9"><div></div></div>
        <div class="mark10"><div></div></div>
        <div class="mark11"><div></div></div>
        <div class="mark12"><div></div></div>
    </div>
</div>

<script>
    function updateClock() {
        const now = new Date();
        const hours = now.getHours() % 12;
        const minutes = now.getMinutes();
        const seconds = now.getSeconds();

        const hourDeg = (hours * 30) + (minutes * 0.5);
        const minuteDeg = minutes * 6;
        const secondDeg = seconds * 6;

        document.getElementById('hour-hand').style.transform = translate(-50%, -100%) rotate(${hourDeg}deg);
        document.getElementById('minute-hand').style.transform = translate(-50%, -100%) rotate(${minuteDeg}deg);
        document.getElementById('second-hand').style.transform = translate(-50%, -100%) rotate(${secondDeg}deg);
    }

    setInterval(updateClock, 1000);
    updateClock();
</script>
</body>
</html>