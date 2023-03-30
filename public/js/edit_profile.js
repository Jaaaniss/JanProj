$(document).ready(function()
{
 $('#readonly').click(function()
 {
   $("input[name='name']").removeAttr("readonly");
   $("input[name='email']").removeAttr("readonly");
   $("input[name='password']").removeAttr("readonly");
   $("input[name='foot_size_cm']").removeAttr("readonly");
 });

 });

 function showDiv() {
    const el = document.getElementById( 'showdiv' );
    if( window.getComputedStyle( el ).display === "none" ) {
        el.style.display = "flex";
        el.style.justifyContent = "flex-end";
    } else {
        el.style.display = "none"
    }
}
