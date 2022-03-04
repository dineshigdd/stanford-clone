let isNavDisplay = false;

document.querySelector(".menu-toggle").onclick = () => {
  if( !isNavDisplay ){
    document.querySelector('#site-navigation').style.visibility = 'visible';
   /*  document.querySelector("#primary-menu").style.display = 'grid';
    document.querySelector("#menu-header-menu").style.display = 'flex'; */
    isNavDisplay = true;
}else{
  document.querySelector('#site-navigation').style.visibility = 'hidden';
  /* document.querySelector("#primary-menu").style.display = 'none';
  document.querySelector("#menu-header-menu").style.display = 'none'; */
  isNavDisplay = false;
}
};



