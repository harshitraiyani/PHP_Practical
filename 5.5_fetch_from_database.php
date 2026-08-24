<!DOCTYPE html>
<html>
<head>
<title>5.5 Fetch Information from Database with AJAX</title>
<script>
function getUsers() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("output").innerHTML = xhr.responseText;
        }
    };
    xhr.open("GET", "5.5_fetch_users.php", true);
    xhr.send();
}
</script>
</head>
<body>
<h2>5.5 How a Web Page Can Fetch Information from a Database with AJAX</h2>
<button onclick="getUsers()">Load Users from Database</button>
<div id="output"></div>
</body>
</html>
