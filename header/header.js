/*
if( mobile && tablet ){
     
         toggle_nav_menu();
   
}else{//desktop
    show_nav_menu(para);
}

toggle_nav_menu(){
  let isMenuShown = false;

  if( isMenuShown === false ){
    show_nav_menu(false)
  }else{
    show_nav_menu(true)
  }
}

*/

let isMenuDispalyed = false;
let counter = 0;


const WindowLoadResizeActions = () => {
    console.log(window.getComputedStyle( document.getElementById('primary-menu')).display);
        if(   document.body.clientWidth > 1023  ){//desktop
            
            show_nav_menu( 'grid','flex' );  
            
              
        }else{//mobile
            if( isMenuDispalyed ){//depend on isMenuDispalyed Nav Menu is shown on Mobile devices after the first interaction
                show_nav_menu( 'grid','flex','Close' );    
            }else{
                show_nav_menu('none','none','<i class="fa-solid fa-bars"></i> Menu');    
            }   

            if( counter == 0 ){
                //check if the value of the display property at the start of the browser and
                //stored in a variable, isMenuDispalyed
                if( window.getComputedStyle( document.getElementById('primary-menu')).display !== 'none'){
                    isMenuDispalyed = true;
                }else{
                    isMenuDispalyed = false;
                }
           }
          counter++;
        }
         
}

window.addEventListener('resize', WindowLoadResizeActions );
window.addEventListener('load',  WindowLoadResizeActions  );

const show_nav_menu = ( isPrimaryMenu, isHeaderMenu , toggleBtnCaption ) => {
    document.querySelector("#primary-menu").style.display = isPrimaryMenu;
    document.querySelector("#menu-header-menu").style.display = isHeaderMenu; 
    document.querySelector(".menu-toggle").innerHTML = toggleBtnCaption;
}


const toggle_nav_menu = () => {    
   
    if(  !isMenuDispalyed ){

        show_nav_menu( 'grid','flex' , 'Close');       
        isMenuDispalyed = true;
       
    }else{
        show_nav_menu('none','none', 'Menu');         
        isMenuDispalyed = false;
    }
}