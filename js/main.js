document .addEventListener('DOMContentLoaded' , ()=>{
    const elementos=document.querySelectorAll(" .carousel");
    
    M.Carousel.init(elementos,{
        duration:150,
        padding: -8,
        dist: 0,
    });
    });