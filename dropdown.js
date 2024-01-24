var dropdwown_button=document.querySelector('.stock_management_button');
var dropdown_menu=document.querySelector('.stock_mgt');

//button listeners
dropdwown_button.addEventListener('click', function(){
    dropdown_menu.classList.toggle('active');
});