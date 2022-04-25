let main_form = document.getElementById('main_form');

function signup(){
    main_form.classList.add('shift');
}
function signin(){
    main_form.classList.remove('shift');
}


//admin log in

document.getElementById('asign_up_button').addEventListener('click', function(){
    var aname = document.getElementById('asin1').value;
    var apassword = document.getElementById('asin2').value;

    if(aname == 'admin' && apassword == 'admin123'){
        alert("login as volentier succesful");
    }
    else{
        alert('log in failed');
    }
})


//volentier log in

document.getElementById('vsign_up_button').addEventListener('click', function(){
    var vname = document.getElementById('vsin1').value;
    var vpassword = document.getElementById('vsin2').value;

    if(vname == 'volentier' && vpassword == 'vol123'){
        alert("login as volentier succesful");
    }
    else{
        alert('log in failed');
    }
})