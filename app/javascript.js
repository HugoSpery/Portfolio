const voile = document.querySelector(".voile");
const page = document.querySelector(".accueil-container");
function delay(time) {
    return new Promise(resolve => setTimeout(resolve, time));
}
async function loading(){
    voile.style.transform="translate(2000px,0)";
    page.style.display="block"
    await delay(20)
    page.style.transform="translate(0,0)";
    await delay(500);
    voile.style.display="none";
}
setTimeout(()=>{
    loading();
},2000)



