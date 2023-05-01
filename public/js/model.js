window.onload = function () {

    //получаем идентификатор элемента
    var a = document.getElementById('reg');
    
    //вешаем на него событие
    a.onclick = function() {
        window.location.href = 'register';
        
        

        //производим какие-то действия
        
    };
    var b = document.getElementById('log');
    
    //вешаем на него событие
    b.onclick = function() {
        window.location.href = 'login';
        
        

        //производим какие-то действия
        
    };
    // var c = document.getElementById('logaut');
    
    // //вешаем на него соыбытие
    // c.onclick = function() {
    //     window.location.href = 'logout';
        
        

    //     //производим какие-то действия
        
    // };
}
function alerted(){

    window.location.href = 'logout';
}


function showDiv() {
document.getElementById('text_block').style.display = "flex";
}

function clouse() {
    document.getElementById('text_block').style.display = "none";
    
    }
