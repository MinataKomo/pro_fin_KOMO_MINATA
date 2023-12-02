//nous
const buttons = document.querySelectorAll('button');

console.log(buttons);
const app=document.querySelector('.app');

buttons.forEach((button)=>{
    button.addEventListener("click",(e)=>{
switch(e.target.id){

    case 'btn-1':
   app.innerHTML=`

<section class='div'>
<div>
<div> <video src="video/coton.mp4" alt="" controls></div>
<div> <video src="video/coton.mp4" alt="" controls></div>
</div>
<div>
<div> <video src="video/coton.mp4" alt="" controls ></div>
<div> <video src="video/coton.mp4" alt="" controls></div>
</div>
<div>
<div> <video src="video/coton.mp4" alt="" controls></div>
<div> <video src="video/coton.mp4" alt="" controls></div>
</div>
<div>  
<div> <video src="video/coton.mp4" alt="" controls></div>
<div> <video src="video/coton.mp4" alt="" controls></div>
</div>

</section>

`


        break;


    case 'btn-2':
        app.innerHTML=`
       
                
               
                <section class='div'>
                <div>
                <div> <img src="image/fi2.jpg" alt="" ></div>
             <div> <img src="image/fi2.jpg" alt="" ></div>
             </div>
             <div>  
              <div> <img src="image/fi2.jpg" alt="" ></div>
             <div> <img src="image/fi2.jpg" alt="" ></div>
             </div>
             <div>  
              <div> <img src="image/fi2.jpg" alt="" ></div>
             <div> <img src="image/fi2.jpg" alt="" ></div>
             </div>
                </section>
              
                
        </div>
        
        `
        break;

    case 'btn-3':
        app.innerHTML=`
        <div class='div_btn3'>
                <h1>
                   vous avez clique 3     
                </h1>   
        </div>
        <div class='div_btn2'>
       
       
       
        
</div>

`
        
        
        break;
}
    });
});