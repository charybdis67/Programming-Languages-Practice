<script>

document.write("<b>Asuman Aydın PL homework</b><br><br>");
document.write("<b>Iterations</b><br><br>");

for (var i=1; i<=10; i=i+1) {

  document.write("numbers are looping yeay<br>"); 
}
var asuman = ["asuman", "aydın"];
for (var i=0; i< asuman.length; i=i+1) {

  document.write(asuman[i]); 
  document.write("<br>"); 

}
var a=0;
for (; a< asuman.length;) {

  document.write(asuman[a]); 
  document.write(" this one is created with increment inside the loop, not in statement <br>");
  a++;
}

</script>
