window.onload = function(){
    let inputHome = document.getElementById('input-home');
    if (inputHome != null)
        animateInputHome(['Os melhores servicos da internet'], 100, inputHome);

    modalAboutMe();

};

function animateInputHome(arr = [], time, element){
    var tempo = time;
    var arrLetters = [];
    setTimeout(() => {
            
        for (let i = 0; i < arr.length; i++) {
            arrLetters = arr[i].split('');
            
            arrLetters.forEach((value,index) => {
                tempo+=time;
                if (index == 0) {
                    sleep(tempo).then(() => {
                        element.value = value;
                    });
                } else {
                    sleep(tempo).then(() => {
                        element.value += value;
                    });
                }
            });
        }
    }, 300);

    setInterval(() => {
        for (let i = 0; i < arr.length; i++) {
            arrLetters = arr[i].split('');
            
            arrLetters.forEach((value,index) => {
                tempo+=time;
                if (index == 0) {
                    sleep(tempo).then(() => {
                        element.value = value;
                    });
                } else {
                    sleep(tempo).then(() => {
                        element.value += value;
                    });
                }
            });
        }
    }, tempo);
}

function sleep (time) {return new Promise((resolve) => setTimeout(resolve, time));}

function openAboutMe(){
    let aboutMe = document.querySelector('.modal-aboutme');
    aboutMe.style.display = 'block';
    aboutMe.style.transform = 'scale(1)';
}

function closeAboutMe(){
    let aboutMe = document.querySelector('.modal-aboutme');
    aboutMe.style.display = 'none';
    aboutMe.style.transform = 'scale(0)';
}

function modalAboutMe(){
    let modal = document.querySelectorAll('.one');
    for (let i = 0; i < modal.length; i++) {
        modal[i].addEventListener('click',()=>{
            let modalContainer = document.getElementById('modal-container');
            modalContainer.removeAttribute('class');
            modalContainer.classList.add('one');
            document.querySelector('body').classList.add('modal-active');
        });
    }
    

    document.getElementById('modal-container').addEventListener('click',()=>{
        let item = document.getElementById('modal-container');
        item.classList.add('out');
        document.querySelector('body').classList.remove('modal-active');
    });
}

function go(elem) {    
    window.scroll({
        top: document.querySelector(elem).offsetTop,
        left: 0,
        behavior: 'smooth'
    });
}