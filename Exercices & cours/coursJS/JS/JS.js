//alert('Hello world');
    let update=function() {
    let nom=document.forms[0].nom.value;
    let prenom=document.forms[0].prenom.value;
    let nomComplet= `${nom} ${prenom}`;
    document.getElementById('btValidation').innerHTML=nomComplet;
        return false;
    };
    //document.getElementById('userForm').addEventListener('keyup', update()) ;

let randomNumber=Math.floor(10*Math,random()+1);