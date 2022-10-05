
let buttons = document.querySelectorAll(".button");

for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener("click", (e)=>{
    e.preventDefault(); 
    let overlay = document.createElement('span'); 

    overlay.classList.add("overlay"); 

    e.target.appendChild(overlay); 
    let xValue = e.clientX - e.target.offsetLeft; 

    let yValue = e.clientY - e.target.offsetTop;

     overlay.style.left = xValue + "px";

     overlay.style.top = yValue + "px"; 
});
}
