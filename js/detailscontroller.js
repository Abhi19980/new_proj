// window.addEventListener("load", bindEvents);

// function bindEvents() {
//    printTable();
    
// }

// function printTable() {
//   document.getElementById("itemtable").innerHTML = "";
//   // console.log("details is", name, mail, pd);
//   itemOperations.itemList.forEach((itemObject) => printRecord(itemObject));
//   // console.log("details is", name, mail, pd);
// }

window.addEventListener("load", bindEvents);

function bindEvents() {
  fetchLocal();
  
}

function fetchLocal() {
  if (window.localStorage) {
    if (localStorage.myitemslist) {
      itemOperations.itemList = JSON.parse(localStorage.myitemslist);
      printTable();
    }
    else {
      alert("Nothing to Load...");
    }
  }
  else {
    alert("Ur Browser Doesn't Support LocalStorage...");
  }

}

const printId = () => document.getElementById("itemno").innerHTML = itemOperations.id;

function updateItem() {
  itemObjectEdit.id = document.getElementById("id").value;
  itemObjectEdit.descr = document.getElementById("descr").value;
  itemObjectEdit.itemdate = document.getElementById("quantity").value;
  itemObjectEdit.color = document.getElementById("amount").value;
  printTable();
}

function deleteItem() {
  itemOperations.deleteItem();
  printTable();
}

function markForDelete(event) {
  var tr = event.srcElement.parentNode.parentNode;
  tr.classList.toggle("redrow");
  var id = event.srcElement.getAttribute("item-id");
  itemOperations.markRecordDelete(id);
  printTotalRecords();
  //alert("Delete Call.... "+id);
}

function printIcon(path, cls, fn, id) {
  var image = document.createElement("img");
  image.src = path;
  image.className = cls;
  image.setAttribute("item-id", id);
  image.addEventListener("click", fn);
  return image;


}
function printTable() {
  document.getElementById("itemtable").innerHTML = "";
  itemOperations.itemList.forEach((itemObject) => printRecord(itemObject));
}

function printRecord(itemObject) {

  var tbody = document.getElementById("itemtable");
  var tr = tbody.insertRow();
  var index = 0;
  for (let key in itemObject) {
    if (key == 'markForDelete') {
      continue;
    }
    tr.insertCell(index).innerHTML = itemObject[key];
    index++;
  }
}
