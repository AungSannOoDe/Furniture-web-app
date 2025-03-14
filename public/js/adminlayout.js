const adminbtn=document.querySelector('#navbarDropdown');
 const layout=document.querySelector('#layout');

 adminbtn.addEventListener('click',()=>{
    console.log(layout.classList.add('invisible'));
 })
