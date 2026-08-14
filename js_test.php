<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<body>
    
    <div id="data_js">
        Hello
    </div>

    <button onclick="data_change()">
        Click
    </button>

    <script>
        function data_change(){
            var str = document.getElementById('data_js').innerText;
            //document.write(str + "from JS");
            
            var data = document.getElementById('data_js');
            data.innerHTML = "<h1>Hello this is New Data</h1>";
        }
    </script>
</body>
</html>