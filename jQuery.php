<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $(".paragHide").hide();
    });
});
</script>
</head>
<body>

<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<p id="p1">This is another paragraph with ID.</p>
<p class ="paragHide">This is another paragraph.</p>
<p class ="paragHide">This is another paragraph.</p>
<button>Click me to hide paragraphs</button>

</body>
</html>