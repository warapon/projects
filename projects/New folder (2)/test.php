<input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
<img id="blah" alt="your image" width="100" height="100" />
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>