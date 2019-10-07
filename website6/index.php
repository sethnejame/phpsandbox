<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & AJAX</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cerulean/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <h1>PHP & AJAX - Search Users</h1>
      <div class="form-group">
        <label for="name">Search User</label>
        <input type="text" class="form-control" onkeyup="showSuggestion(this.value)" placeholder="Search. . .">
      </div>
    </form>
    <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
  </div>
  <script>
    function showSuggestion(string) {
      if(string.length === 0) {
        document.querySelector('#output').innerHTML = '';
      } else {
        // AJAX Request
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if(this.readyState === 4 && this.status === 200){
            document.querySelector('#output').innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "suggest.php?q="+string, true);
        xmlhttp.send();
      }
    }
  </script>
</body>
</html>