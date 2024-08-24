// select elements
let myForm = document.forms[0],
  inputText = document.querySelector("form input"),
  submitBtn = document.querySelector("form input");

let conText = document.querySelector(".con-text"),
card = document.querySelectorAll(".card");

let i = 0;
for (;i < localStorage.length; i++) {
  $(".con-text").append(`
    <div class=card id="${localStorage.key(i)}">
      <div class="the-text">${localStorage.getItem(`${localStorage.key(i)}`)}</div>
      <button onclick='deleteText("${localStorage.key(i)}", "${localStorage.key(i)}")'>delete</button>
    </div>
  `)
};

myForm.onsubmit = function (event) {

  event.preventDefault()
  if (inputText.value === "") {
    alert("you have to type in field");
  } else {
    // i لو الرقم موجود هتزود ال
    while (localStorage.getItem(`text${i}`)) {
      i++;
    }
    localStorage.setItem(`text${i}`, inputText.value)
    $(".con-text").append(`
      <div class=card id="text${i}">
        <div>${localStorage.getItem(`text${i}`)}</div>
        <button onclick='deleteText("text${i}", "text${i}")'>delete</button>
      </div>
    `)
      
    inputText.value = "";
    i++
  }
}

card = document.querySelectorAll(".card");

function deleteText(id, text) {
  card.forEach(e => {
    if (e.id == id) {
      console.log(id);
      e.remove()
    } else {
    }
  });
  console.log(text)
  localStorage.removeItem(text)
}
// ليه مش شغاله
// conText.append(`
//   <div class='card'>
//     <div class="the-text">${inputText.value}</div>
//     <button onclick=delete(${i++})>delete</button>
//   </div>
// `)