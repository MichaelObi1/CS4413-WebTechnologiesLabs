
function getDataFromForm() {
  var fname = document.querySelector('input[name="fname"]').value;
  var lname = document.querySelector('input[name="lname"]').value;

  runAjax(fname,lname);
}

function runAjax(fname, lname) {
  var xhr = new XMLHttpRequest();

  xhr.open("GET", "./ajax.php?fname=" + fname + "&lname=" + lname, true);

  xhr.onload = function() {
    if(xhr.status === 200) {
      document.getElementById("responseString").textContent = xhr.responseText;
    }
  };

  xhr.send();
}
