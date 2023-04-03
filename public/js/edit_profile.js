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
    const el = document.getElementById( 'showDiv' );
    if( window.getComputedStyle( el ).display === "none" ) {
        el.style.display = "flex";
        el.style.flexDirection = "column";
    } else {
        el.style.display = "none"
    }

    const el2 = document.getElementById( 'showDiv2' );
    if( window.getComputedStyle( el2 ).display === "flex" ) {
        el.style.display = "flex";
        el.style.flexDirection = "column";
        el2.style.paddingTop = "81px";
        el2.style.paddingBottom = "81px";
    } else {
        el2.style.display = "flex"
    }
}

const editButton = document.querySelector('#readonly');
const saveChangeButton = document.querySelector('#saveChanges_Button');

editButton.addEventListener('click', () => {
    saveChangeButton.style.display = 'block';
    editButton.style.display = 'none';
});
saveChangeButton.addEventListener('click', () => {
    saveChangeButton.style.display = 'none';
    editButton.style.display = 'block';
});


$(document).ready(function() {
    $("#saveChanges_Button").click(function() {
        $("#myForm").submit();
    });
 });
