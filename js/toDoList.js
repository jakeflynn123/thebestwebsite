// document.addEventListener('DOMContentLoaded', function(){ 
//     newToDo();
// }, false);
var myList = document.getElementsByTagName("LI");
for (var i = 0; i < myList.length; i++) {

}

function newToDo() {
    var li = document.createElement("li");
    var Input = document.getElementById("toDo").value;
    var text = document.createTextNode(Input);
    li.appendChild(text);
    console.log(text);
    document.getElementById("myList").appendChild(li);
    document.getElementById("toDo").value = "";
}