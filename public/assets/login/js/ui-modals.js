"use strict";!function(){const t=document.querySelector("#youTubeModal"),e=t.querySelector("iframe");t.addEventListener("hidden.bs.modal",(function(){e.setAttribute("src","")}));[].slice.call(document.querySelectorAll('[data-bs-toggle="modal"]')).map((function(t){t.onclick=function(){const t=this.getAttribute("data-bs-target"),e=`${this.getAttribute("data-theVideo")}?autoplay=1`,o=document.querySelector(`${t} iframe`);o&&o.setAttribute("src",e)}}))}();