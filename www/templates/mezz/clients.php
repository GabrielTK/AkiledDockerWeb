﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

    <head>
        <title><?= $config['hotelName'] ?>: Hotel</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        		
		<script type="text/javascript">
		
				function cerrarpvpradio() {
				var elem = document.getElementById('pvpradio');
				elem.parentNode.removeChild(elem);
				return false;
		}
            var roomId =0;
        </script>

    <link rel="stylesheet" href="./css/main.css">
	<script src="/themes/<?= $config['skin'] ?>/client/js/client.js?<?=$hotel['cache'];?>" type="text/javascript"></script>
    <script src="<?= $config['hotelUrl'] ?>/AkiledSockets/jquery1.7.4.js"></script>
	<link rel="shortcut icon" href="<?= $config['hotelUrl'] ?>/templates/<?= $config['skin'] ?>/favicon.ico"type="image/vnd.microsoft.icon">
	<link rel="shortcut icon" type="img/png" href="/templates/<?= $config['skin'] ?>/app/assets/img/favicon.png"><link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu:regular,bold&amp;subset=Latin">

	<link rel="stylesheet" href="/templates/<?= $config['skin'] ?>/client/css/client.css?<?=$hotel['cache'];?>" type="text/css">
	<link rel="stylesheet" href="/templates/<?= $config['skin'] ?>/client/css/radio.css?<?=$hotel['cache'];?>" type="text/css">
	<link rel="stylesheet" href="/templates/<?= $config['skin'] ?>/client/css/tipped.css?<?=$hotel['cache'];?>" type="text/css">

    </head>
	
	<style>
  body{
    background:url(/templates/<?= $config['skin'] ?>/assets/images/fondo2.png);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    width:100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, Helvetica, sans-serif;
}
p{
    color: initial !important;
}
.container{
    width:95%;
    margin: auto;
}

#flash-container{
    display: flex;
    
    justify-content: center;
    align-items: center;
}
.client_row{
    display: grid;
    grid-template-columns: repeat(3,33%);
    grid-gap: 20px;
    width:80%;
    margin: auto;
}
.client_row .info_box{
    background:rgb(255, 255, 255);
    width:100%;
   height: 600px;

}

.info_box .header{

    line-height:40px;
    background:linear-gradient(to right,rgb(82, 21, 196),rgb(255, 70, 70));
    color:#fff;
    text-align: center;
    padding: 1rem;
    margin:0;
 
}
.info_box .text{
    color: #000 !important;
}

.info_box .text a{
  color:blueviolet !important;
}

.info_box section h4{
    color: grey;
    text-transform: uppercase;
}
.GetFlash{
    display: block;
    width: 100%;
    padding: 1rem;
    outline-color: blue;
    border: 0;
    background-color: blueviolet;
    color: white;
    text-align: center;

}
.Gethionix{
    display: block;
    width: 100%;
    padding: 1rem;
    outline-color: blue;
    border: 0;
    background-color: blueviolet;
    color: white;
    text-align: center;
    text-decoration: none !important;
}


.tuto_btn{
    position: absolute;
    z-index: 1000;
    top: auto;
}

.backdrop{
    position: fixed;
    top:0;
    left:0;
    background-color: rgba(0,0,0,.3);
    width:100%;
    height: 100vh;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
}
.backdrop[open="true"]{
    visibility: visible;
    opacity: 1;
}
.modal_hionix{
    position: absolute;
    top:-50%;
    left:50%;
    transform: translate(-50%,-50%);
    width:90%;
    max-width: 700px;
    background: #fff;
    box-shadow:  0 6px  10px rgba(0,0,0,.5);
    padding: 1rem;
    z-index: 2000;
    border-radius: 10px;
    transition: top .4s ease;


}
.modal_hionix .close_btn {
    color: #706e6e;
    height: 20px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    font-size: 1.6rem;

}
.modal_hionix  #close_btn {
    cursor: pointer;
}
.modal_hionix.open{
    top:50%;
}
.modal_hionix .tabbar_hionix{
    display: flex;
    justify-content: space-around;
    align-items: center;
    border-bottom: 1px solid #eee;

}
.modal_hionix .tabbar_hionix .tab{
    line-height: 70px;
}
.modal_hionix .tabbar_hionix .tab.active{
    color:blueviolet;
}
.modal_hionix .body_hionix{
    height: 500px;
    overflow-y: auto;
    padding: 1rem 0;
}
@media screen and (max-width:998px){
    .client_row{
     
        grid-template-columns: repeat(1,auto);
        height: 90vh;
        overflow-y: auto;
    
    }
    .client_row .info_box{

        height: 700px;
    }
    .client_row::-webkit-scrollbar{
        display: none;
    }
}

*,
:after,
:before {
  box-sizing: border-box;
}
</style>

<script type="text/javascript">
			$(document).ready(function(e) {
				$.ajaxSetup({
					cache:true
				});
				setInterval(function() {
					$('#alertcms').load('/alertclientcms');
				}, 30000);
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(e) {
				$.ajaxSetup({
					cache:true
				});
				setInterval(function() {
					$('#alerton').load('/alertoncms');
					
				}, 30000);
			});
		
 
</script>
	

<body>


			

	<div id="area_player">
			<div id="player" class="draggable ui-widget-content" style="left: 0%;z-index: 1000; top: 0%; position: absolute;">
				<div class="player_min">
					<div class="guy"></div>
					<div class="txt"><?=$lang["ClientRdio2"];?></div>
					<div class="handle ui-draggable-handle"></div>
					<div class="open o-c tip"></div>
				</div>
				<div class="player">
					<div class="chair tip"> <img src="<?=$config['lookUrl'];?><?= User::userData('look') ?>&headonly=1" style="margin-left: 5px;margin-top: -10px; width:50px;height: auto;" >
						
						
					</div>
					<div id="demo">
						<audio id="audio" src="<?=$hotel['RadioClient']?>" autoplay=""></audio>
					</div>
					<div class="btn" onclick="Player.toggleP();">
						<div class="play pause"  style="margin-left: 13px;margin-top: 4px;" ></div>
					</div>
					<div class="separa"></div>
					<div class="info music">: <?=$lang["ClientRdio1"];?></div>
					
					
					<div class="close o-c tip" title="<?=$lang["ClientRdio3"];?>"></div>
					<div class="handle ui-draggable-handle"></div>
				</div>
			</div>
		</div>
	
	<script src="/templates/<?= $config['skin'] ?>/client/js/tipped.js?<?=$hotel['cache'];?>" type="text/javascript"></script>
	<script src="/templates/<?= $config['skin'] ?>/client/js/player.js?<?=$hotel['cache'];?>" type="text/javascript"></script>	

			
    
	

   <div id="flash-container">

        <div class="client_row">

                    <div class="info_box" style="margin-left: 1px" >
                <h3 class="header">DESCARGAR APLICACION DE HIONIX</h3>
                <div class="container">
                    <p>
                        Hemos desarrollado una aplicacion de escritorio en la cual podran jugar Hionix, sin la necesidad de tener que activar Flash, cada vez que tengan que entrar.
                        <br />
                        <br />
                        Esta aplicacion podran jugar Hionix de manera mas fluida y sin lag, ademas que tiene herramientas muy utiles para una mejor experiencia de Juego.
                    </p>


                    <section>
                        <h4>Requerimientos del Sistema:</h4>
                        <p>1. Desde Windows 8 a Windows 10.</p>
                        <p>2. Sistema operativo de 64 Bits o 32 Bits.</p>
                        <p>3. Espacio minimo de Almacenamiento para la instalacion de 300MB.</p>
                    </section>


                    <center><img src="/images/habblu/logohionix.png" alt="" width="50%" /></center>

                    <br />

                    <a href="https://phworld.online/apps/index.html" class="Gethionix" target="_blank">Descargar Aplicacion</a>

                </div>

                </div>
            <div class="info_box" style="margin-left: 1px ">

                <h3 class="header">Descarga Nuetra Radio Para Android</h3>
                <div class="container">
    <p>
𝐑𝐚𝐝𝐢𝐨 𝟐𝟒 / 𝟕 𝐝𝐞 𝐏 & 𝐇 𝐂𝐨𝐦𝐦𝐮𝐧𝐢𝐭𝐲    </p>
                    <p>

⭒Variedad de géneros musicales, canciones actualizadas. level_slidermicrophone2</p>
<p>
⭒Minimiza la aplicación, la música no dejará de sonar! llamando</p>
<p>
♬ ⭒Modo sueño: Elige cuanto tiempo quieres que siga encendida la radio mientras duermes. sparkleslast_quarter_moon_with_face</p>
<p>
⭒Conecta tu teléfono / ordenador por Bluetooth para un altavoz, y que empiece la fiesta! dancer_tone1man_dancing_tone2</p>
<p>
® 𝐏 & 𝐇 𝐂𝐨𝐦𝐦𝐮𝐧𝐢𝐭y
                        
                    </p>
                  
                    </p>
                    <img src="/templates/<?= $config['skin'] ?>/assets/images/phradio.png" alt="" width="100%" />
                    <br />
                    <br />
                    <a href="https://play.google.com/store/apps/details?id=com.radio.hionix" class="Gethionix" target="_blank">
                        Descargar P&H Radio</a>
                </div>


            </div>

            
    </div>
 </div>
 
 
        <div id="client-ui">
            <fullscreen></fullscreen>

            <infobulle></infobulle>

            <notiftop></notiftop>

            <rpstats></rpstats>
            <rpbox-buyitems></rpbox-buyitems>
            <rpbox-inventory>
                <rpbox-inventory-troc></rpbox-inventory-troc>
            </rpbox-inventory>
            <rpbox-inventory-choice></rpbox-inventory-choice>
            <rpchoose></rpchoose>

            <room-options></room-options>
            <settings-box></settings-box>

            <notifalert></notifalert>

            <youtube-box>
                <youtube-player></youtube-player>
                <youtube-edit></youtube-edit>
            </youtube-box>

            <hionixtool>
                <hionixtool-hotelalert></hionixtool-hotelalert>
                <hionixtool-chatlogpub></hionixtool-chatlogpub>
            </hionixtool>

        </div>
		

			


		
						<script type="text/javascript">
			$(document).ready(function() {
				setTimeout(function() {
					$("div.ads").fadeOut(55000, function () {
						$("div.ads").remove();
					});
				}, 20000);

				setTimeout(function() {
					$("div.ads").fadeOut(55000, function () {
						$("div.ads").remove();
					});
				}, 60000);
				
				setInterval(function(){
					$(".ads2").slideDown("slow2");
				}, 300000);
				
				$('#area_player').css('width', 'calc(100% - 500px)');
			});

			$(document).ready(function() {
				setTimeout(function() {
					$("div.ads").fadeOut(55000, function () {
						$("div.ads").remove();
					});
				}, 20000);

				setTimeout(function() {
					$("div.ads").fadeOut(55000, function () {
						$("div.ads").remove();
					});
				}, 60000);
				
				setInterval(function(){
					$(".ads2").slideDown("slow2");
				}, 300000);
				
				$('#area_player').css('width', 'calc(100% - 500px)');
			});
			
		$(".play").click(function(){
			$(".play").toggleClass("pause");
		});

		var Player = {
			toggleP:function(){
				if ($('#audio').hasClass('pause') === true){
					$("#demo").html();
					$("#demo").html('<audio id="audio" src="<?=$hotel['RadioClient']?>" autoplay></audio>');
					$("#audio").trigger('play');
				}else{
					$("#audio").trigger("pause");
					$("#audio").addClass('pause');
				}
			}
		}

		var audio = document.getElementById('audio');
		audio.volume = 0.5;
</script>

 
    <div class="playerhabpvp-alert" hidden="" style="z-index: 9999999999999999999"></div>     
	<script>
            let currentPage = 0;


            const tabs = [...document.querySelectorAll('.modal_hionix .tabbar_hionix .tab')];
            const pages = [...document.querySelectorAll('.modal_hionix .body_hionix .page')];

            const update = () => {

                if (currentPage != 0) {
                    video_player_hionix.pause();
                }
                pages.map((page) => page.style.display = 'none');

                tabs.map((tab) => tab.classList.remove('active'));

                tabs[currentPage].classList.add('active');

                pages[currentPage].style.display = 'block';
            }

            const showBackDrop = (open = false) => {
                backdrop.setAttribute('open', open ? 'true' : 'false')
            }
            const showModal = () => {
                showBackDrop(true)
                modal_hionix.classList.add('open')
                video_player_hionix.play();
            }

            const closeModal = () => {
                showBackDrop(false)
                modal_hionix.classList.remove('open');
                video_player_hionix.pause()

            }
            tuto_btn.onclick = () => {
                showModal()
                currentPage = 0;
                update()
            };
            backdrop.onclick = closeModal;
            close_btn.onclick = closeModal;


            const handlerClick = index => {
                currentPage = index;
                update()
            }
            tabs.map((tab, index) => tab.addEventListener('click', () => handlerClick(index)))
            update()
        </script>
		
		
		</body>
</div>
</html>