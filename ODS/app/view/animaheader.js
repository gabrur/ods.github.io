window.addEventListener('scroll', function() {

    const header = document.querySelector('header');
    if (window.scrollY > 55) { 
        header.classList.add('minimized');
    } else {
        header.classList.remove('minimized');
    }
 });
 window.addEventListener("scroll", function() {
 const logoheader = document.getElementById("log");

 if (window.scrollY > 55) { 
    logoheader.classList.add("minimized");
 } else {
    logoheader.classList.remove("minimized");
 }
});