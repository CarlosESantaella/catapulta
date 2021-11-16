document.addEventListener('DOMContentLoaded', () => {
    var menuIcon = document.querySelector('.menu-icon');
    var navBar = document.querySelector('.navbar');
    var fadeEffect = null;
    navBar.style.display = 'none';
    function fadeOutEffect(){
        fadeEffect = setInterval(() => {
            if(!navBar.style.opacity){
                navBar.style.opacity = 1;
            }
            if(navBar.style.opacity > 0){
                let opacity = navBar.style.opacity;
                opacity = parseFloat(opacity, 10);
                navBar.style.opacity = (opacity - 0.1);
            }else{
                clearInterval(fadeEffect);
            }
        }, 20);
        
    }
    function fadeInEffect(){
        fadeEffect = setInterval(() => {
            if(!navBar.style.opacity){
                navBar.style.opacity = 0;
            }
            if(navBar.style.opacity < 1){
                let opacity = navBar.style.opacity;
                opacity = parseFloat(opacity, 10);
                navBar.style.opacity = (opacity + 0.1);
            }else{
                clearInterval(fadeEffect);
            }
        }, 20);
    }

    menuIcon.addEventListener('click', (e) => {
        e.stopPropagation();
        clearInterval(fadeEffect);
        navBar.classList.toggle('show');
        if(navBar.classList.contains('show')){
            document.body.style.overflowY = 'hidden';
            navBar.style.display = 'block';
            
            fadeInEffect();
        }else{
            fadeOutEffect();
            setTimeout(() => {

                navBar.style.display = 'none';
            },600);
            document.body.style.overflowY = 'scroll';

        }
    })

    
});