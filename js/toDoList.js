function newToDo() {
    var li = document.createElement("li");
    var Input = document.getElementById("toDo").value;
    var userInput = document.createTextNode(Input);
    var span = document.createElement("SPAN");
    var text = document.createTextNode("\u00D7");
    span.className = "close";
    span.appendChild(text);
    li.appendChild(userInput);
    li.appendChild(span)

    if (Input.trim().length == 0) {
        alert('please enter something');
        console.log(Input.trim.length);
    } else {
        document.getElementById("myList").appendChild(li);
    }
    document.getElementById("toDo").value = "";

var button = document.getElementsByClassName("close");
for (var i = 0; i < button.length; i++) {
  button[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
  var list = document.querySelector('ul');
  list.addEventListener('click', function(ev) {
    if (ev.target.tagName === 'LI') {
      ev.target.classList.toggle('checked');
    }
  }, false);
}
}
