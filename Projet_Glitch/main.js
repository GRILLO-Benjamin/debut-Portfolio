let mousetarget = document.querySelector('.title')
let background = document.getElementById('container')
let count = 20
for(let i = 0; i < count; i++){
    let glitchBox = document.createElement('div')
        glitchBox.className = 'box';
        background.appendChild(glitchBox);
}
let intervalGlitch= null
mousetarget.addEventListener('mouseenter',()=>{
    if (intervalGlitch == null) {
        
        intervalGlitch = setInterval(function(){
            let glitch = document.getElementsByClassName('box');
            for(let i = 0; i < glitch.length; i++){
                glitch[i].style.left = Math.floor(Math.random()*100) + 'vw';
                glitch[i].style.top = Math.floor(Math.random()*100) + 'vh';
                glitch[i].style.width = Math.floor(Math.random()*400) + 'px';
                glitch[i].style.height = Math.floor(Math.random()*100) + 'px';
                glitch[i].style.backgroundPosition = Math.floor(Math.random()*100) + 'px';
            }
        },200)
    }
    document.querySelector('.warning').style.opacity = 1;
    document.querySelector('.title').style.opacity = 0;

})

mousetarget.style.pointerEvents = 'none';
setTimeout(function() 
    {
        mousetarget.style.pointerEvents = 'auto';
    }, 5000);