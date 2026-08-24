<!DOCTYPE html>
<html>
<head>
<title>5.4 Web Page Communicates with Server While Typing</title>
<script>
function checkInput(value) {
    if (value.length == 0) {
        document.getElementById("output").innerHTML = "";
        return;
    }
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("output").innerHTML = xhr.responseText;
        }
    };
    xhr.open("GET", "5.4_process.php?q=" + encodeURIComponent(value), true);
    xhr.send();
}
</script>
</head>
<body>
<h2>5.4 Communicate with Server While User Types</h2>
Type something: <input type="text" onkeyup="checkInput(this.value)">
<p id="output"></p>
</body>
</html>
