const menuOpen = document.getElementById('header_menu_burger');
const menuClose = document.getElementById('header_menu_x');
const mobileNav = document.getElementById('header_mobile_nav');
const headerMobileNav = document.getElementById('header_mobile_nav');
let headerMobileNavLi = headerMobileNav.children[0].children[0].children;
let headerMobileNavLiHasChildren = [];
//headerMobileNavLi = headerMobileNavLi.filter((li)=>{return(li.classList.includes("menu-item-has-children"))});

//Getting menu items that have children
for(let li in headerMobileNavLi){
    for(let className in headerMobileNavLi[li].classList ) {
        if(headerMobileNavLi[li].classList[className] == "menu-item-has-children"){
            headerMobileNavLiHasChildren.push(headerMobileNavLi[li])
        }
    }
}

//Render buttons for submenus
for(let li in headerMobileNavLiHasChildren){
    const newButton = document.createElement('button');
    newButton.className = 'header-show-submenu-button';
    headerMobileNavLiHasChildren[li].insertBefore(newButton,headerMobileNavLiHasChildren[li].childNodes[1]);
}
const showSubmenuButtons  = document.getElementsByClassName('header-show-submenu-button');
const buttons = [...showSubmenuButtons];

buttons.forEach((item) => {
    item.addEventListener("click", function () {
     item.nextElementSibling.style.display == 'none' || !item.nextElementSibling.style.display ? item.nextElementSibling.style.display = 'block': item.nextElementSibling.style.display = 'none';
     if(item.style.transform == 'rotate(180deg) translateY(-0.3rem)' || !item.style.transform){
        item.style.transform = 'rotate(0) translateY(0.1rem)'
     }else{
        item.style.transform = 'rotate(180deg) translateY(-0.3rem)'
     }
    });
  });

menuOpen.addEventListener('click',()=>{
    menuOpen.style.display = 'none';
    menuClose.style.display = 'block';
    mobileNav.style.transform = 'translateY(8rem)';
   
})
document.addEventListener('click',(event)=>{
    if(mobileNav.contains(event.target) || event.target == menuOpen || menuOpen.contains(event.target))return;
    menuClose.style.display = 'none';
    menuOpen.style.display = 'flex';
    mobileNav.style.transform = 'translateY(-50rem)';
})

document.querySelector('.header_search-button').addEventListener('click',()=>{
    const searchButton = document.querySelector('.header_search-button')
    const searchForm = document.querySelector('.header_searchform_container');
    searchButton.classList.toggle('active')
    if(searchButton.classList.contains('active')){
        searchForm.classList.add('active')
        document.querySelector(".header_searchform_container.active > form > label > input").focus()
    }else{
        searchForm.classList.remove('active')
    }

})
document.addEventListener('click',(event)=>{
    const searchButton = document.querySelector('.header_search-button')
    const searchForm = document.querySelector('.header_searchform_container');

    if(searchForm.contains(event.target) || event.target == searchButton || searchButton.contains(event.target))return;
    searchForm.classList.remove('active')
    searchButton.classList.remove('active')
})
