document.addEventListener("DOMContentLoaded", () => {
    const preload = document.querySelector("[data-preload]");
    setTimeout(()=>{
        preload.classList.add("loaded");
    },100) 
   
});
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('client-say-link').addEventListener('click', function (e) {
        e.preventDefault();
        window.location.href = '../../index.html#client-say';  
    });
});
