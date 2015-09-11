<html>
    <head>
        <meta charset="utf-8">
        <script type="text/javascript">
            function digitalWatch() {
                var date = new Date();
                var hours = date.getHours();
                var minutes = date.getMinutes();
                var seconds = date.getSeconds();
                if (hours < 10) hours = "0" + hours;
                if (minutes < 10) minutes = "0" + minutes;
                if (seconds < 10) seconds = "0" + seconds;
                document.getElementById("digital_watch").innerHTML = hours + ":" + minutes + ":" + seconds;
                setTimeout("digitalWatch()", 1000);
            }
        </script>
    </head>
<body onload="digitalWatch()">
<p id="digital_watch" style="color: #000; font-size: 120%; font-weight: bold;"></p>
</body>
</html>