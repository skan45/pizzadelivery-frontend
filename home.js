function imgSlider(anything){
    document.querySelector('.pizza').src=anything;
}
function changeCircleColor(color){
    const circle=document.querySelector('.circle');
    const word=document.querySelector('.rapid');
    circle.style.background=color;
    word.style.color=color;
    const button=document.querySelector('.content .textbox a');
    button.style.background=color;
}
function changeautomatique(){
    const circle=document.querySelector('.circle');
    const word=document.querySelector('.rapid');
    const button=document.querySelector('.content .textbox a');
    const colors=['#FCA510','#183215','#dfbdc3']
    let index =0;
    const frame=document.querySelector('.pizza');
    const pizzas=["images/9-pizza-png-image.png","images/19-pizza-png-image.png","images/29-pizza-png-image.png" ];
setInterval(()=>{
   circle.style.background=colors[index];
   button.style.background=colors[index];
    word.style.color=colors[index];
    frame.src=pizzas[index];
       index = (index + 1) % colors.length;
    },3000);
}