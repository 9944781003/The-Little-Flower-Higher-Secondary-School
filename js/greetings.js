// container = document.getElementById("container");
// container.style.width = "100%";
// container.style.height = "900px";
// container.style.background = "orange";
// container.innerHTML = "Sir";

//box container
box = document.createElement("div");
box.style.position = "absolute";
/*box.style.top = "25%";
box.style.left = "1%";
box.style.width = "90%";
box.style.zIndex="100"	   */
box.style.top = "5%";

box.style.left = "5%";

box.style.width = "90%";
box.style.height="150%";
box.style.zIndex="100";
box.style.backgroundColor = "#2E4053";
box.style.opacity="0.9"




//image card
card = document.createElement("img");
card.setAttribute(
  "src",
  "http://lfhss-salem.com/img/lightbox/90years.JPG",

);
card.style.width="95%" ;
card.style.top="3%"	;
card.style.left="2.5%" ;
card.setAttribute("alt", "na");
card.setAttribute("width", "100%");
card.style.position = "absolute";

//close button
closeBtn = document.createElement("button");
closeBtn.style.width = "20px";
closeBtn.style.height = "20px";
closeBtn.style.position = "absolute";
closeBtn.style.style = "none";
closeBtn.style.background = "none";
closeBtn.style.border = "none";
closeBtn.style.right = "13px";
closeBtn.style.top = "3px";
closeBtn.innerHTML = "X";
closeBtn.style.color = "red";
closeBtn.style.fontSize = "20px";
closeBtn.style.fontWeight = "600";

box.appendChild(card);
box.appendChild(closeBtn);

closeBtn.addEventListener(
  "click",
  function() {
    box.style.display = "none";
  },
  false
);

function displayCard() {
  document.body.appendChild(box);
}


window.addEventListener(
  "load",
  () => {
    dateTime = new Date();
    sessionStorage.setItem("dateTime", dateTime);
    sessionStorage.removeItem("dateTime");
    if (sessionStorage.getItem("dateTime") === null) {
      displayCard();
    }

    console.log(sessionStorage.getItem("dateTime") !== null);
  },
  false
);