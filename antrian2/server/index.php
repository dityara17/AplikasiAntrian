<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Monitoring : Queue</title>
	<link href="../assert/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assert/css/website.css" rel="stylesheet">
	<script src="../assert/js/jquery.min.js"></script>
	<script src="../assert/js/moment.js"></script>
	
</head>
<body>
	<div class="navbar">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<h3>BANK RAKYAT INDONESIA <br> CABANG PATI</h3>
				</div>
				<div class="col-xs-6 text-right">
					<div id="page">
						<div id="date" style="float: left;"></div> 
						<div id="clock" style="float: left;"></div>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		// Clock
		document.getElementById('date').innerHTML = moment().format('MMMM D YYYY') + '&nbsp;&nbsp; | &nbsp;&nbsp; ';

		setInterval(function(){document.getElementById('clock').innerHTML = moment().format('h:mm:ss A');}, 1000);
	</script>
	<div class="container">
		<div class="row">
			<div class="col-xs-5">
				<!-- <img src="../assert/img/logobri.png"> -->
				<!-- <h3>BANK RAKYAT INDONESIA <br> CABANG PATI</h3> -->
				
				<div class="video">
					<video muted loop autoplay> <source src="../video/vid.MP4" type="video/mp4"></video> 
					</div>
					<br> 
					<h3>Info Kurs</h3>
					<div style="height: 50px;">
					<?php  
					$ch = curl_init ("https://eform.bri.co.id/info/kurs");

					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$page = curl_exec($ch);

					preg_match('#<table[^>]*>(.+?)</table>#is', $page, $matches);
					foreach ($matches as &$match) {
						$match = $match;
					}
					echo '<marquee style="height: 100px;" direction = "up" scrolldelay="200"><table class="table table-bordered">';
					echo $matches[1];
					echo '</table style="height: 100px;"></marquee>';
					?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="loket">

					</div>
				</div>
				<div class="col-sm-3">
					<div class="panel-sukubunga">
						<h4>Update Suku Bunga</h4>
						<h3><b>SIMPANAN</b></h3>
						<img src="../assert/img/deposito.jpg" style="width: 100%;margin-top: 10px;">
						<div class="wrap-sukubunga">
							<div class="row">
								<div class="col-xs-6">> 1 Milyar</div>
								<div class="col-xs-6"></div>
							</div>
							<div class="row">
								<div class="col-xs-6">01 Bulan</div>
								<div class="col-xs-6 text-right"><span>4.25</span></div>
							</div>
							<div class="row">
								<div class="col-xs-6">02 Bulan</div>
								<div class="col-xs-6 text-right"><span>4.25</span></div>
							</div>
							<div class="row">
								<div class="col-xs-6">03 Bulan</div>
								<div class="col-xs-6 text-right"><span>4.25</span></div>
							</div>
							<div class="row">
								<div class="col-xs-6">04 Bulan</div>
								<div class="col-xs-6 text-right"><span>4.25</span></div>
							</div>
							<div class="row">
								<div class="col-xs-6">12 Bulan</div>
								<div class="col-xs-6 text-right"><span>4.25</span></div>
							</div>
							<div class="row">
								<div class="col-xs-6">18 Bulan</div>
								<div class="col-xs-6 text-right"><span>4.25</span></div>
							</div>
							<div class="row">
								<div class="col-xs-6">24 Bulan</div>
								<div class="col-xs-6 text-right"><span>4.25</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="audio">
				<audio id="in" src="../audio/new/in.wav"></audio>
				<audio id="out" src="../audio/new/out.wav"></audio>
				<audio id="suarabel" src="../audio/new/Airport_Bell.mp3"></audio>
				<audio id="suarabelnomorurut" src="../audio/new/nomor-urut.MP3"></audio> 
				<audio id="suarabelsuarabelloket" src="../audio/new/konter.MP3"></audio> 
				<audio id="belas" src="../audio/new/belas.MP3"></audio> 
				<audio id="sebelas" src="../audio/new/sebelas.MP3"></audio> 
				<audio id="puluh" src="../audio/new/puluh.MP3"></audio> 
				<audio id="sepuluh" src="../audio/new/sepuluh.MP3"></audio> 
				<audio id="ratus" src="../audio/new/ratus.MP3"></audio> 
				<audio id="seratus" src="../audio/new/seratus.MP3"></audio> 
				<audio id="suarabelloket1" src="../audio/new/1.MP3"></audio> 
				<audio id="suarabelloket2" src="../audio/new/2.MP3"></audio> 
				<audio id="suarabelloket3" src="../audio/new/3.MP3"></audio> 
				<audio id="suarabelloket4" src="../audio/new/4.MP3"></audio> 
				<audio id="suarabelloket5" src="../audio/new/5.MP3"></audio> 
				<audio id="suarabelloket6" src="../audio/new/6.MP3"></audio> 
				<audio id="suarabelloket7" src="../audio/new/7.MP3"></audio> 
				<audio id="suarabelloket8" src="../audio/new/8.MP3"></audio> 
				<audio id="suarabelloket9" src="../audio/new/9.MP3"></audio> 
				<audio id="suarabelloket10" src="../audio/new/sepuluh.MP3"></audio> 
				<audio id="loket" src="../audio/new/loket.MP3"></audio> 
			</div>
			<footer class="footer">
				<center><p>&copy; Nama Instantsi <?php echo date("Y");?></p></center>
			</footer> 
		</div>
	</body>
	<script type="text/javascript">
		$("document").ready(function(){
			var tmp_loket=0;
			setInterval(function() {
				$.post("../apps/monitoring-daemon.php", function( data ){
					if(tmp_loket!=data['jumlah_loket']){
						$(".col-md-4").remove();
						tmp_loket=0;
					}
					if (tmp_loket==0) {
						for (var i = 1; i<= data['jumlah_loket']; i++) {
							var ket = "";
							if(i == 1){
								ket = '<h3 class="text-center">TELLER</h3>';
								 // console.log(ket);
								} else if(i == 5){
									ket = '<h3 class="text-center">CUSTOMER SERVICE</h3>';
								}
								loket = 
								ket +
								'<div class="col-md-6">'+
								'<div class="'+ i  +
								' jumbotron" style="padding-top:20px;padding-bottom:20px;">'+
								'<h1> '+data["init_counter"][i]+' </h1>'+
								'<p class="notify danger"><span class="glyphicon glyphicon-credit-card">&nbsp;</span>LOKET '+ i +'</p>'+
								'</div>'+
								'</div>';
								$(".loket").append(loket);
							}

							tmp_loket = data['jumlah_loket'];
						}
						for (var i = 1; i <= data['jumlah_loket']; i++) { 					
							if (data["counter"]==i) {
								$("."+i+" h1").html(data["next"]);
							}
						}
						if (data["next"]) {
							var angka = data["next"];
							for (var i = 0 ; i < angka.toString().length; i++) {
								$(".audio").append('<audio id="suarabel'+i+'" src="../audio/new/'+angka.toString().substr(i,1)+'.MP3" ></audio>');
							};
							mulai(data["next"],data["counter"]);
						}else{
							for (var i = 1; i <= data['jumlah_loket']; i++) { 					
								if (data["counter"]==i) {
									$("."+i+" h1").html(data["next"]);
								}
							}
						};

					}, "json"); 
			}, 1000);
		//change
	});

		function mulai(urut, loket){
			var totalwaktu = 8568.163;
			document.getElementById('in').pause();
			document.getElementById('in').currentTime=0;
			document.getElementById('in').play();
			totalwaktu=document.getElementById('in').duration*1000;	
			setTimeout(function() {
				document.getElementById('suarabelnomorurut').pause();
				document.getElementById('suarabelnomorurut').currentTime=0;
				document.getElementById('suarabelnomorurut').play();
			}, totalwaktu);
			totalwaktu=totalwaktu+1000;
			if(urut<10){
				setTimeout(function() {
					document.getElementById('suarabel0').pause();
					document.getElementById('suarabel0').currentTime=0;
					document.getElementById('suarabel0').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if(urut==10){
				setTimeout(function() {
					document.getElementById('sepuluh').pause();
					document.getElementById('sepuluh').currentTime=0;
					document.getElementById('sepuluh').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if(urut ==11){
				setTimeout(function() {
					document.getElementById('sebelas').pause();
					document.getElementById('sebelas').currentTime=0;
					document.getElementById('sebelas').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if(urut < 20){
				setTimeout(function() {
					document.getElementById('suarabel1').pause();
					document.getElementById('suarabel1').currentTime=0;
					document.getElementById('suarabel1').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('belas').pause();
					document.getElementById('belas').currentTime=0;
					document.getElementById('belas').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if(urut < 100){
				setTimeout(function() {
					document.getElementById('suarabel0').pause();
					document.getElementById('suarabel0').currentTime=0;
					document.getElementById('suarabel0').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('puluh').pause();
					document.getElementById('puluh').currentTime=0;
					document.getElementById('puluh').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabel1').pause();
					document.getElementById('suarabel1').currentTime=0;
					document.getElementById('suarabel1').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if(urut==100){
				setTimeout(function() {
					document.getElementById('seratus').pause();
					document.getElementById('seratus').currentTime=0;
					document.getElementById('seratus').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if (urut < 110) {
				setTimeout(function() {
					document.getElementById('seratus').pause();
					document.getElementById('seratus').currentTime=0;
					document.getElementById('seratus').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabel2').pause();
					document.getElementById('suarabel2').currentTime=0;
					document.getElementById('suarabel2').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if (urut == 110) {
				setTimeout(function() {
					document.getElementById('seratus').pause();
					document.getElementById('seratus').currentTime=0;
					document.getElementById('seratus').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('sepuluh').pause();
					document.getElementById('sepuluh').currentTime=0;
					document.getElementById('sepuluh').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if (urut == 111) {
				setTimeout(function() {
					document.getElementById('seratus').pause();
					document.getElementById('seratus').currentTime=0;
					document.getElementById('seratus').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('sebelas').pause();
					document.getElementById('sebelas').currentTime=0;
					document.getElementById('sebelas').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if (urut < 120) {
				setTimeout(function() {
					document.getElementById('seratus').pause();
					document.getElementById('seratus').currentTime=0;
					document.getElementById('seratus').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabel2').pause();
					document.getElementById('suarabel2').currentTime=0;
					document.getElementById('suarabel2').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('belas').pause();
					document.getElementById('belas').currentTime=0;
					document.getElementById('belas').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if (urut == 120) {
				setTimeout(function() {
					document.getElementById('seratus').pause();
					document.getElementById('seratus').currentTime=0;
					document.getElementById('seratus').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabel1').pause();
					document.getElementById('suarabel1').currentTime=0;
					document.getElementById('suarabel1').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('puluh').pause();
					document.getElementById('puluh').currentTime=0;
					document.getElementById('puluh').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if (urut < 200) {
				setTimeout(function() {
					document.getElementById('seratus').pause();
					document.getElementById('seratus').currentTime=0;
					document.getElementById('seratus').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabel1').pause();
					document.getElementById('suarabel1').currentTime=0;
					document.getElementById('suarabel1').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('puluh').pause();
					document.getElementById('puluh').currentTime=0;
					document.getElementById('puluh').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;

				if (urut%10!=0) {
					setTimeout(function() {
						document.getElementById('suarabel2').pause();
						document.getElementById('suarabel2').currentTime=0;
						document.getElementById('suarabel2').play();
					}, totalwaktu);
					totalwaktu=totalwaktu+1000;
				}

				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if (urut == 200) {
				setTimeout(function() {
					document.getElementById('suarabel0').pause();
					document.getElementById('suarabel0').currentTime=0;
					document.getElementById('suarabel0').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('ratus').pause();
					document.getElementById('ratus').currentTime=0;
					document.getElementById('ratus').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}else if(urut < 999){
				setTimeout(function() {
					document.getElementById('suarabel0').pause();
					document.getElementById('suarabel0').currentTime=0;
					document.getElementById('suarabel0').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				if (urut.toString().substr(1,1) == 0 && urut.toString().substr(2,1)==0) { // 200 300 400 ..
					setTimeout(function() {
						document.getElementById('ratus').pause();
						document.getElementById('ratus').currentTime=0;
						document.getElementById('ratus').play();
					}, totalwaktu);
					totalwaktu=totalwaktu+1000;
				} else if(urut.toString().substr(1,1) == 0 && urut.toString().substr(2,1)!=0){ // 201 304 405 506
					setTimeout(function() {
						document.getElementById('ratus').pause();
						document.getElementById('ratus').currentTime=0;
						document.getElementById('ratus').play();
					}, totalwaktu);
					totalwaktu=totalwaktu+1000;
					setTimeout(function() {
						document.getElementById('suarabel2').pause();
						document.getElementById('suarabel2').currentTime=0;
						document.getElementById('suarabel2').play();
					}, totalwaktu);
					totalwaktu=totalwaktu+1000;
				}else if(urut.toString().substr(1,1) != 0 && urut.toString().substr(2,1)==0){ //210 250 230
					if(urut.toString().substr(1,1) == 1){ //210
						setTimeout(function() {
							document.getElementById('ratus').pause();
							document.getElementById('ratus').currentTime=0;
							document.getElementById('ratus').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
							document.getElementById('sepuluh').pause();
							document.getElementById('sepuluh').currentTime=0;
							document.getElementById('sepuluh').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
					}else{
						setTimeout(function() {
							document.getElementById('ratus').pause();
							document.getElementById('ratus').currentTime=0;
							document.getElementById('ratus').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
							document.getElementById('suarabel1').pause();
							document.getElementById('suarabel1').currentTime=0;
							document.getElementById('suarabel1').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
							document.getElementById('puluh').pause();
							document.getElementById('puluh').currentTime=0;
							document.getElementById('puluh').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
					}
				}else if(urut.toString().substr(1,1) != 0 && urut.toString().substr(2,1)!=0){
					if (urut.toString().substr(1,1)==1) {
						if (urut.toString().substr(2,1)==1) { // 211 311 411 511
							setTimeout(function() {
								document.getElementById('ratus').pause();
								document.getElementById('ratus').currentTime=0;
								document.getElementById('ratus').play();
							}, totalwaktu);
							totalwaktu=totalwaktu+1000;
							setTimeout(function() {
								document.getElementById('sebelas').pause();
								document.getElementById('sebelas').currentTime=0;
								document.getElementById('sebelas').play();
							}, totalwaktu);
							totalwaktu=totalwaktu+1000;
						}else{ //212 215 219
							setTimeout(function() {
								document.getElementById('ratus').pause();
								document.getElementById('ratus').currentTime=0;
								document.getElementById('ratus').play();
							}, totalwaktu);
							totalwaktu=totalwaktu+1000;
							setTimeout(function() {
								document.getElementById('suarabel2').pause();
								document.getElementById('suarabel2').currentTime=0;
								document.getElementById('suarabel2').play();
							}, totalwaktu);
							totalwaktu=totalwaktu+1000;
							setTimeout(function() {
								document.getElementById('belas').pause();
								document.getElementById('belas').currentTime=0;
								document.getElementById('belas').play();
							}, totalwaktu);
							totalwaktu=totalwaktu+1000;
						}
					}else{
						setTimeout(function() {
							document.getElementById('ratus').pause();
							document.getElementById('ratus').currentTime=0;
							document.getElementById('ratus').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
							document.getElementById('suarabel1').pause();
							document.getElementById('suarabel1').currentTime=0;
							document.getElementById('suarabel1').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
							document.getElementById('puluh').pause();
							document.getElementById('puluh').currentTime=0;
							document.getElementById('puluh').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						if (urut%10!=0) {
							setTimeout(function() {
								document.getElementById('suarabel2').pause();
								document.getElementById('suarabel2').currentTime=0;
								document.getElementById('suarabel2').play();
							}, totalwaktu);
							totalwaktu=totalwaktu+1000;
						}
					}
				}

				setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
			}

			setTimeout(function(){
				document.getElementById('out').pause();
				document.getElementById('out').currentTime=0;
				document.getElementById('out').play();
			}, totalwaktu);
			totalwaktu=totalwaktu+1000;
			setTimeout(function() {
				$.post("../apps/monitoring-daemon-result.php", { id : urut }, function(data){
					if (!data.status) {
						console.log(data.status);		
					}
				}, 'json');
			}, totalwaktu);
			totalwaktu=totalwaktu+1000;
		}
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	</html>

