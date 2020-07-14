'use strict';

{

// {
//  const menuItems = document.querySelectorAll('.menu li a');
//  const contents = document.querySelectorAll('.content');
 
//  menuItems.forEach(clickedItem => {
//    clickedItem.addEventListener('click' , e  => {
//    e.preventDefault();
   
//    menuItems.forEach(item => {
//    item.classList.remove('active');
//     });
//    clickedItem.classList.add('active');
   
//    contents.forEach(content => {
//     content.classList.remove('active');
//     });
//     document.getElementById(clickedItem.dataset.id).classList.add('active');
//    });
//   });
 
//  }
 
 
// $('.nav').fadeToggle(7000);
$('.nav').fadeIn(7000);          

$('h1').fadeOut();
$('h1').fadeIn();

}


// <ブロックは一つずつスコープで分ける→複数のスクリプトを読み込ませられる>
{
 let count= 1;
 function update(){
  // document.querySelector('target').textContent = '上の写真をクリックしてください';
  if(count % 2 === 1){
   document.getElementById('target').textContent = '上の写真をクリックしてください';
   document.getElementById('target2').textContent = '上の写真をクリックしてください';
   document.getElementById('target3').textContent = '上の写真をクリックしてください';
  }else{
   document.getElementById('target').textContent = 'お客様が探しているものにぴったりとしたご提案をします';
   document.getElementById('target2').textContent = 'お客様が探しているものにぴったりとしたご提案をします';
   document.getElementById('target3').textContent = 'お客様が探しているものにぴったりとしたご提案をします';
  }
  count++;
 }
 // setTimeout();
 setInterval(update, 3000);//（繰り返し処理）
 // setTimeout();
}

{
 const open = document.getElementById('open');
 const close = document.getElementById('close');
 const modal = document.getElementById('modal');
 const mask = document.getElementById('mask');
 
 open.addEventListener('click' , () => {
  modal.classList.remove('hidden');
  mask.classList.remove('hidden');
  });
  
 close.addEventListener('click' , () => {
  modal.classList.add('hidden');
  mask.classList.add('hidden');
  });
  
 mask.addEventListener('click' , () => {
  // modal.classList.add('hidden');
  // mask.classList.add('hidden');
  close.click();
  });
 
 }





