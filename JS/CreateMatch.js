const formatselection = document.getElementById("format");

const wickets = document.getElementById("wickets");

const custombox = document.getElementById("customcheck");
const customfill = document.getElementById("customfill");
const customfillcontent = document.getElementById("customfillcontent");

const teamonesize = document.getElementById("teamonesize");
const teamoneaddsize = document.getElementById("teamoneaddsize");

const teamlist = document.getElementById("teamlist");

// custom button toggle.
custombox.addEventListener("change", function () {
  if (custombox.checked) {
    disableInput(formatselection);

    customfill.style.display = "block";
    customfillcontent.style.display = "block";
  } else {
    enableInput(formatselection);

    customfill.style.display = "none";
    customfillcontent.style.display = "none";
  }
});

// restricting alphabets
teamonesize.addEventListener("input", function () {
  this.value = this.value.replace(/[^0-9]/g, "");
});
wickets.addEventListener("input", function () {
  this.value = this.value.replace(/[^0-9]/g, "");
});

// adding teamone players

teamoneaddsize.addEventListener("click", function (e) {
  e.preventDefault();

  let size = parseInt(teamonesize.value);

  if (size > 100) {
    return;
  }

  renderList(listA, "labelA", "playerA", size);
});

let listA = [];
let listB = [];

// functions ---------------------------------------------------------------------------------------------------------------------------

function renderList(list, listid, playerid, size) {
  if (list.length != 0) {
    fetchList(list);
  }

  const lastindex = list.length - 1;

  if (list.length === 0) {
    for (let i = 0; i < size; i++) {
      list.push("");
    }
  } else if (list.length < size) {
    for (let i = lastindex; i < size - 1; i++) {
      list.push("");
    }
  } else if (list.length > size) {
    for (let i = lastindex; i > size - 1; i--) {
      list.pop();
    }
  }

  console.log(list.length);

  refreshList(list, listid, playerid);

  console.log(list);
}

function refreshList(list, listid, playerid) {
  while (teamlist.firstChild) {
    teamlist.removeChild(teamlist.firstChild);
  }

  for (let i = 1; i <= list.length; i++) {
    const item = createContent(list, listid, playerid, i);
    console.log("enter");
    teamlist.appendChild(item);
  }

  console.log(list);
}

function createContent(list, listid, playerid, i) {
  console.log(list);
  const item = document.createElement("li");
  const division = document.createElement("div");

  const label = document.createElement("label");
  const input = document.createElement("input");
  const removebtn = document.createElement("button");

  const labeldivision = document.createElement("div");
  const inputdivision = document.createElement("div");
  const removebtndivision = document.createElement("div");

  label.classList.add("playernumber");
  label.id = listid + i;
  label.textContent = "PLAYER " + i;

  input.classList.add("inputname", "player");
  input.id = playerid + i;
  input.value = list[i - 1];

  removebtn.classList.add("sizebutton", "remove");
  removebtn.id = i - 1;
  removebtn.textContent = "-";

  addRemoveEvent(removebtn, i - 1, list, listid, playerid);

  labeldivision.classList.add("playerlabel");
  inputdivision.classList.add("playerinput");
  removebtndivision.classList.add("removeplayer");

  labeldivision.appendChild(label);
  inputdivision.appendChild(input);
  removebtndivision.appendChild(removebtn);

  division.appendChild(labeldivision);
  division.appendChild(inputdivision);
  division.appendChild(removebtndivision);

  item.appendChild(division);

  return item;
}

function addRemoveEvent(button, index, list, listid, playerid) {
  index = parseInt(index);
  button.addEventListener("click", function (e) {
    e.preventDefault();

    fetchList(list);

    list.splice(index, 1);

    refreshList(list, listid, playerid);
  });
}

function fetchList(list) {
  let i = 1;
  console.log(list.length);
  while (i <= list.length) {
    const input = document.getElementById("playerA" + i);

    list[i - 1] = input.value;

    i++;
  }
}

function disableInput(element) {
  element.style.pointerEvents = "none";
  element.style.opacity = "0.4";
}
function enableInput(element) {
  element.style.pointerEvents = "all";
  element.style.opacity = "1";
}
