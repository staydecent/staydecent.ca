
<script>
var trees = document.querySelectorAll(".tree");
var treesCount = trees.length;
var randTreeIndices = randsort(treesCount);

for (var x = 0; x < treesCount; x++) {
  growTree(x);
}

function growTree(idx) {
  var elm = trees.item(x);
  setTimeout(function() {
    elm.className = elm.className + ' grow';    
  }, randTreeIndices[idx]*10)
}

function randsort(c) {
  var o = [];
  for (var i = 0; i < c; i++) {
    var n = Math.floor(Math.random()*c);
    if (o.indexOf(n) > -1) --i;
    else o.push(n);
  }
  return o;
}
</script>
</body>
</html>
