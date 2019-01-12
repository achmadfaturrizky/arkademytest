<!doctype html>
<html>
<title>Handshake</title>
<head>
  <script type="text/javascript">
function count_handshake() {
    var v1 = document.getElementById('orang').value;
    var i=0;
    var t=0;
    for(i;i<v1;i++){
        t +=i;
    }
   console.log(t);
    var print = document.getElementById('hasil');
    print.value = t;
}
</script>
</head>
  	<body>
   
        <form action="#">
          
            Masukkan jumlah orang : <input type="number" name="orang" id="orang" placeholder="Masukkan jumlah orang"> <br>
            Hasil: <input type="number" name="orang" id="hasil" placeholder="0" readonly>
            <input type="button" onclick="count_handshake()" value="Hasil">
        </form>
</body>
</html>