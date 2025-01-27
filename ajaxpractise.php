<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax practise</title>
</head>
<body>
    <div class="demo">
        <h1>The XMLHttpRequest object</h1>
        <button type="button" onclick="loadDoc()">Change Content</button>
    </div>

    <script>
        // This is the function that gets triggered when the user clicks the "Change Content" button.
        function loadDoc(){
            // create a object which sends the http request and retrieve data asynchronous to a server
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function(){
                //  responseText property contains the text data returned by the server.

                document.getElementById("demo").innerHTML = this.responseText;
            }
            xhttp.open("GET", "ajax_info.text");
            xhttp.send();
        }
    </script>
</body>
</html>