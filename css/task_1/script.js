let up = document.getElementsByClassName("up")[0];

onscroll = function () {
  if (scrollY >= 1100) {
    up.style.display = "block";
  } else {
    up.style.display = "none";
  }
}


up.onclick = function () {
  scroll({
    left: 0,
    top: 0,
    behavior: "smooth"
  })
}

let email = document.querySelector("input[type=email]");
let form = document.querySelector("form");

email.onfocus = function () {
  form.style.outline = "1px solid #0fa";
}

email.onblur = function () {
  form.style.outline = "none";
}

let iconMenu = document.querySelector("header.nav #menu-nav");
let iconExit = document.querySelector("aside #exit-nav");
let aside = document.querySelector("aside");

iconMenu.onclick = function () {
    aside.style.display = "flex";
}

iconExit.onclick = function () {
    aside.style.display = "none";
}

onresize = function () {
  aside.style.display= "none";
}

// 
// fa-solid fa-caret-right


function details () {
  let details = document.querySelectorAll("details");
  let summary = document.querySelectorAll("details summary");
  let details_i = document.querySelectorAll("details summary i");


  for(let i = 0; i < details.length; i++) {

    summary[i].onclick = function () {

      if (!details[i].hasAttribute("open")) {

        console.log("true");
        details_i[i].classList.value = "fa-solid fa-sort-down" 

      } else {

        details_i[i].classList.value = "fa-solid fa-caret-right" 
        console.log("false")
      }
    }
  }
}

details();

