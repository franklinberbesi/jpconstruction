window.addEventListener('DOMContentLoaded',()=>{

 const form = document.querySelector('#postulaciones__form');
 form.addEventListener('submit',(e)=>{
    e.preventDefault();
    peticion(form);
 });

 const peticion = async(form)=>{
   try{
    const load = document.querySelector('.preloader-secund-content');
    load.style.display="flex";
    document.querySelector('body').classList.add('preload');
    const formData = new FormData(form);
    const option = {
        method: 'POST',
        body: formData
    }
     const res = await fetch('postulaciones.php',option);
     const objData = await res.json();
     if(!res.ok){
        throw new Error('Error en el programa');
     }else{
        if(objData.status){
            swal.fire('Exito', objData.mensaje, 'success');
            form.reset();
        }else{
            swal.fire('Ocurrió un error', objData.mensaje, 'warning');
        }
        load.style.display = "none";
        document.querySelector('body').classList.remove('preload');
        return false;
     }
   }catch(error){
    console.log(error);
   }
 }

});