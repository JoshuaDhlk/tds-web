
//alert('Hello world');
    let update=function() {
    let nom=document.forms[0].nom.value;
    let prenom=document.forms[0].prenom.value;
    let nomComplet= `${nom} ${prenom}`;
    document.getElementById('btValidation').innerHTML = nomComplet;
        return false;
    };

    let randomNumber=Math.floor(10*Math,random()+1);

    let update=function() {};
    document.getElementById('btValidation').addEventListener('click', function(){ ;
    let msg='Mauvaise rép, ré-essayez';
        let pValue=document.getElementById('nombre').value;
        if (pValue==randomNumber){
            msg='Bravo, vous avez trouvé';
            color='green'
        }
        console.log(randomNumber);
        let repDiv=document.getElementById('reponse');
        repDiv.innerHTML=msg;
        repDiv.style.color=color;
    });
