<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;500&family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="stilo.css">
</head>
<body>
    <div class='box'>
    <img src="img/logop.png" alt="Aero Copias">
<p>Atendimento</p>
<p class="saudamos"></p>

  <nav class='icoimg'>
        <img src="img/whatsapp.png" class='iconesimg' alt="whatsapp" onclick="whatAeroporto()">
        <img src="img/facebook.png" class='iconesimg' alt="facebook" onclick='facebook()'>
        <img src="img/instagram.png" class='iconesimg' alt="Instagram" onclick='instagram()'>
        <img src="img/tik-tok.png" class='iconesimg' alt="Tik Tok" onclick='tiktok()'>
        <img src="img/linkedin.png" class='iconesimg' alt="Linkedin" onclick='linkedin()'>
        <img src="img/gmail.png" class='iconesimg' alt="Gmail" onclick='gmail()'>
 </nav>
    <button class="btn-shine" onclick='whatAroeira()'><span>Whatsapp Aroeira</span></button>
    <button class="btn-shine" onclick='whatAeroporto()'><span>Whatsapp Aeroporto</span></button>
    <button class="btn-shine" onclick='site()'><span>Site</span></button>
    <button class="btn-shine" onclick='emailAroeira()'><span>E-mail Aroeira</span></button>
    <button class="btn-shine" onclick='emailAeroporto()'><span>E-mail Aeroporto</span></button>
    
    <p class='boxp'>

📍Lojas Físicas: Macaé/RJ<br>
Av. Tancredo de A. Neves, 774 - P. Aeroporto<br>
Rua Alcides Mourão, 104 - Aroeira

</p>


    </div>
    <script>
            var data = new Date();
    var hora    = data.getHours();  

    if(hora >= 6 && hora <= 11 ) {
        document.title =' Bom dia';
        document.querySelector('.saudamos').innerHTML = 'Bom dia';
    }
    else if(hora >= 12 && hora <= 17 ) {
        document.title =' Boa tarde';
        document.querySelector('.saudamos').innerHTML = 'Boa tarde';
    }
    else if(hora >= 18 && hora <= 23) {
        document.title =' Boa noite';
        document.querySelector('.saudamos').innerHTML = 'Boa noite';
    }else if(hora >= 0 && hora <= 5 ) {
        document.title =' Boa madrugada';
        document.querySelector('.saudamos').innerHTML = 'Boa madrugada';
    }

        var whatAeroporto =()=>{
            window.open('https://wa.me/message/GMZWBWNO434JN1', '_blank');
        }
        var facebook =()=>{
            window.open('https://www.facebook.com/aerocopiasmidia', '_blank');
        }
        var whatAroeira =()=>{
            window.open('https://wa.me/5522997744625', '_blank');
        }
        var site =()=>{
            window.open('https://www.aerocopias.net', '_blank');
        }
        var emailAroeira =()=>{
            window.open('mailto: aerocopiasaroeira@gmail.com', '_blank');
        }
        var emailAeroporto =()=>{
            window.open('mailto: aerocopias@gmail.com', '_blank');
        }
        var tiktok =()=>{
            window.open('https://www.tiktok.com/@aerocopias', '_blank');
        }
        var instagram =()=>{
            window.open('https://www.instagram.com/aero.copias/', '_blank');
        }
        var linkedin =()=>{
            window.open('https://www.linkedin.com/in/aero-copias-aeroporto-ba2195239/', '_blank');
        }
        var gmail =()=>{
            window.open('mailto: aerocopias@gmail.com', '_blank');
        }
    </script>
</body>
</html>