const btnprofile=document.querySelector('.btnprofile');
    const profile=document.querySelector('.profile')
 const btnCart=document.querySelector('.btnCart');
 const cart=document.querySelector('.cart');
 const remove=document.querySelector('#remove');
 const removeprofile=document.querySelector('#removeprofile');
 const adminbtn=document.querySelector('#adminbtn');
 const layout=docuemnt.querySelector('.toggle');
 adminbtn.addEventListener('mouseover',()=>{
    console.log(layout.classList.remove('invisible'));
 })
  btnCart.addEventListener('mouseover',()=>{
   console.log(cart.classList.remove('invisible'));
  })
  btnprofile.addEventListener('mouseover',()=>{
    console.log(profile.classList.remove('invisible'));
  })
  removeprofile.addEventListener('click',()=>{
    profile.classList.add('invisible');
  })
  remove.addEventListener('click',()=>{
    cart.classList.add('invisible');
  })
