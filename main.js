function ajaxCall() {
    const data = new FormData();
    data.append('name', document.getElementById("name").value);
    data.append('weight', document.getElementById("weight").value);
    data.append('length', document.getElementById("length").value);
    data.append('width', document.getElementById("width").value);
    data.append('height', document.getElementById("height").value);

  const page = "./includes/connect2.php"
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "page");
  xhr.onload = function () {
      console.log(this.response);
      console.log("WORKS!");
  };
  xhr.send(data);
  return false;
}







// document.getElementById("retrieve").addEventListener("click", getList);

// function getList() {
//     // return
//     // const fetch = fetch_all2.php;
//     document.getElementById("retrieve").innerHTML = "YOU CLICKED ME!";
//     console.log("WORKS!");
// }