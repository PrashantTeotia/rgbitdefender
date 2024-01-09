async function fetchjson(){
	var response = await fetch("upload-file/bit.json");
	var dataget = await response.json();
	console.log(dataget);

	var page1 = document.createElement('section');
	page1.id="page1";
	page1.innerHTML ="<img class='img_page1' src='upload-images/preview.png' width='150px'height='150px'style='margin:50% 40% 65% 40%;'><h6 style='background:red;width:100%;margin:0px;'>logo</h6>";
	document.body.appendChild(page1);


		var examiner ="xxxxxxx";// document.getElementById('examiner').value;
		var casefolder ="xxxxxxx";// document.getElementById('casefolder').value;
		var fir = "xxxxxxx"//document.getElementById('fir').value;
		var destination ="xxxxxxxxx" //document.getElementById('destination').value;		 
		var date = "xxxxxxxxxxx";//document.getElementById('date').value;
		var file = "xxxxxxxxxxx";//document.getElementById('fileget').files[0];
		var file1= "xxxxxxxxxxx";//document.getElementById('file2').files[0];
		//console.log(file.name);

	var page2 = document.createElement('section');
	page2.id="page2";
	page2.innerHTML=`<div style='margin:50% 50% 55% 40%;'><img src='upload-images/preview.png'width='100px'height='100px'><table>
	<tr><td>Examiner</td>
	<td>${examiner}</td></tr>
	<tr><td>Case Folder</td>
	<td>${casefolder}</td></tr>
	<tr><td>F.I.R</td>
	<td>${fir}</td></tr>
	<tr><td>Destination</td>
	<td>${destination}</td></tr>
	<tr><td>Date Time</td>
	<td>${date}</td></tr>
	</table>
	</div><h6 style='background:red;width:100%;margin:0px;'>logo</h6>`;
	document.body.appendChild(page2);

	var page3 = document.createElement('section');
	page3.id="page3";
	page3.innerHTML=`<div style='margin:50% 40% 50% 20%;'><img src='upload-file/android.png'width='100px'height='100px'>
	<table style="font-family:arial;font-size:12px;">
						<tr><th style="word-wrap:normal;color:green;"><i>App Properties</i></th></tr>
						<tr><td class='tx'>App name</td><td class='txi'>${dataget.report.appProperties.name}</td></tr>
						<tr><td class='tx'>App Version</td><td class='txi'>${dataget.report.appProperties.version}</td></tr>
						<tr><td class='tx'>VersionCode</td><td class='txi'>${dataget.report.appProperties.versionCode}</td></tr>
						<tr><td class='tx'>packageName</td><td class='txi'>${dataget.report.appProperties.packageName}</td></tr>
						<tr><td class='tx'>platform</td><td class='txi'>${dataget.report.appProperties.platform}</td></tr>
						<tr><td class='tx'>md5</td><td class='txi'>${dataget.report.appProperties.md5}</td></tr>
						<tr><td class='tx'>sha256</td><td class='txi'>${dataget.report.appProperties.sha256}</td></tr>
						<tr><td class='tx'>packageSize</td><td class='txi'>${dataget.report.appProperties.packageSize}</td></tr>
						<tr><td class='tx'>sdkVersion</td><td class='txi'>${dataget.report.appProperties.sdkVersion}</td></tr>
						</table>
	</div><h6 style='background:red;width:100%;margin:0px;'>logo</h6>`;
	document.body.appendChild(page3);

	var page4 = document.createElement('section');
	page4.id="page4";
	page4.innerHTML=`<div style='background:whitesmoke;width:600px;height:700px;margin:10% 10% 40% 10% ;'><h3>App bio</h3><h2>${dataget.report.appProperties.name}</h2><h5>ABOUT APP</h5><p class="biopar">${dataget.report.distribution.marketData[0].description}</p></div><h6 style='background:red;width:100%;margin:0px;'>logo</h6>`;
	document.body.appendChild(page4);

			//console.log(dataget.report.androidAnalysis.usesPermission);
	// var page5 = document.createElement('section');
	// page5.id = "page5";
	// var len = dataget.report.androidAnalysis.usesPermission;
	// var hi =len.length-1;
	// for(var j=0;j<=hi;j++){
	// 	page5.innerHTML+=`<p>${dataget.report.androidAnalysis.usesPermission[j].kind}</p><i>${dataget.report.androidAnalysis.usesPermission[j].description}</i><b>${dataget.report.androidAnalysis.usesPermission[j].dangerous}</b>`;
	// 	if(j==4 || j==8 || j==12 || j==16 || j==20 || j==24){
	// 		page5.innerHTML+="<p class='section'></p>";
	// 		if(hi==j){
	// 			break;
	// 		}
	// 	}
	// 	document.body.appendChild(page5);			
	// }
	var page51=document.createElement('section');
	page51.id="page51";
	page51.innerHTML="<h1 style='font-size:41px;text-align:center;line-height:900px;'>App Permission Summary</h1>";
	document.body.appendChild(page51);

	var page5 =document.createElement('section');
	page5.id = "page5";
	for(var j=0;j<=4;j++){
		if(dataget.report.androidAnalysis.usesPermission[j].dangerous==false){
			page5.innerHTML+=`<div style='background:rgb( 252, 85, 85 );margin-top:50px;padding:10px;'><p><img src='image/ERROR/previews/preview.png'width='40px'height='40px'></p><p style='font-family:arial;font-weight:bolder;'>${dataget.report.androidAnalysis.usesPermission[j].kind}</p><i>${dataget.report.androidAnalysis.usesPermission[j].description}</i></div>`;
		}else{
			page5.innerHTML+=`<div style='background:rgb( 154, 251, 57 );margin-top:50px;padding:10px;'><p style='font-family:arial;font-weight:bolder;'>${dataget.report.androidAnalysis.usesPermission[j].kind}</p><i>${dataget.report.androidAnalysis.usesPermission[j].description}</i><p>${dataget.report.androidAnalysis.usesPermission[j].dangerous}</p></div>`;
		}
	}
	document.body.appendChild(page5);

	var page6 =document.createElement('section');
	page6.id = "page6";
	for(var j=5;j<=9;j++){
		if(dataget.report.androidAnalysis.usesPermission[j].dangerous==false){
			page6.innerHTML+=`<div style='background:rgb( 252, 85, 85 );margin-top:50px;padding:10px;'><p><img src='image/ERROR/previews/preview.png'width='40px'height='40px'></p><p style='font-family:arial;font-weight:bolder;'>${dataget.report.androidAnalysis.usesPermission[j].kind}</p><i>${dataget.report.androidAnalysis.usesPermission[j].description}</i></div>`;
		}else{
			page6.innerHTML+=`<div style='background:rgb( 154, 251, 57 );margin-top:50px;padding:10px;'><p style='font-family:arial;font-weight:bolder;'>${dataget.report.androidAnalysis.usesPermission[j].kind}</p><i>${dataget.report.androidAnalysis.usesPermission[j].description}</i><p>${dataget.report.androidAnalysis.usesPermission[j].dangerous}</p></div>`;
		}
	}
	document.body.appendChild(page6);

	var page7 =document.createElement('section');
	page7.id = "page7";
	for(var j=10;j<=14;j++){
		if(dataget.report.androidAnalysis.usesPermission[j].dangerous==false){
			page7.innerHTML+=`<div style='background:rgb( 252, 85, 85 );margin-top:50px;padding:10px;'><p><img src='image/ERROR/previews/preview.png'width='40px'height='40px'></p><p style='font-family:arial;font-weight:bolder;'>${dataget.report.androidAnalysis.usesPermission[j].kind}</p><i>${dataget.report.androidAnalysis.usesPermission[j].description}</i></div>`;
		}else{
			page7.innerHTML+=`<div style='background:rgb( 154, 251, 57 );margin-top:50px;padding:10px;'><p style='font-family:arial;font-weight:bolder;'>${dataget.report.androidAnalysis.usesPermission[j].kind}</p><i>${dataget.report.androidAnalysis.usesPermission[j].description}</i><p>${dataget.report.androidAnalysis.usesPermission[j].dangerous}</p></div>`;
		}
	}
	document.body.appendChild(page7);

	var page8 =document.createElement('section');
	page8.id = "page8";
	for(var j=15;j<=19;j++){
		if(dataget.report.androidAnalysis.usesPermission[j].dangerous==false){
			page8.innerHTML+=`<div style='background:rgb( 252, 85, 85 );margin-top:50px;padding:10px;'><p><img src='image/ERROR/previews/preview.png'width='40px'height='40px'></p><p style='font-family:arial;font-weight:bolder;'>${dataget.report.androidAnalysis.usesPermission[j].kind}</p><i>${dataget.report.androidAnalysis.usesPermission[j].description}</i></div>`;
		}else{
			page8.innerHTML+=`<div style='background:rgb( 154, 251, 57 );margin-top:50px;padding:10px;'><p style='font-family:arial;font-weight:bolder;'>${dataget.report.androidAnalysis.usesPermission[j].kind}</p><i>${dataget.report.androidAnalysis.usesPermission[j].description}</i><p>${dataget.report.androidAnalysis.usesPermission[j].dangerous}</p></div>`;
		}
	}
	document.body.appendChild(page8);

	var page9 =document.createElement('section');
	page9.id = "page9";
	for(var j=20;j<=22;j++){
		if(dataget.report.androidAnalysis.usesPermission[j].dangerous==false){
			page9.innerHTML+=`<div style='background:rgb( 252, 85, 85 );margin-top:50px;padding:10px;'><p><img src='image/ERROR/previews/preview.png'width='40px'height='40px'></p><p style='font-family:arial;font-weight:bolder;'>${dataget.report.androidAnalysis.usesPermission[j].kind}</p><i>${dataget.report.androidAnalysis.usesPermission[j].description}</i></div>`;
		}else{
			page9.innerHTML+=`<div style='background:rgb( 154, 251, 57 );margin-top:50px;padding:10px;'><p style='font-family:arial;font-weight:bolder;'>${dataget.report.androidAnalysis.usesPermission[j].kind}</p><i>${dataget.report.androidAnalysis.usesPermission[j].description}</i><p>${dataget.report.androidAnalysis.usesPermission[j].dangerous}</p></div>`;
		}
	}
	document.body.appendChild(page9);

	var ow = document.createElement('section');
	ow.id = "owasp";
	ow.innerHTML = "<h2 style='font-family:arial;font-weight:bolder;font-size:51px;line-height:900px;text-align:center;'>OWASP Summary</h2>";
	document.body.appendChild(ow);

	var ow1 = document.createElement('section');
	ow1.id = "owasp1";
	ow1.innerHTML = `<h2>OWASP Summary</h2><p>The OWASP summary contains results of the testing that was performed on the application against the OWASP Top 10 MobileCategories.</p><div class='j'><span><img src='image/shieldgreen/previews/preview.png' width='50px' height='50px'></span><span>Categories that passed the have a green shield.</span></div><div class='j'><span><img src='image/shieldred/previews/preview.png' width='50px' height='50px'></span><span>Categories that failed have a red shield.</span></div><div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M1/previews/preview.png'width='40px' height='40px'/></span><span>M1<br>Improper Platform Usage</span></div><div><h6><b class='green'>o</b>&nbsp;&nbsp;No problems found.</h6></div><div class='j'><span><img src='image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M2/previews/preview.png'width='40px' height='40px'/></span><span>M2<br>Insecure Data Storage</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;The app uses the primary external storage.</p><p><b class='red'>o</b>&nbsp;&nbsp;The content provider is not protected by signature permission and exported in the AndroidManifest.xml file. Content providers offer a structured storage mechanism that can be limited to this application or exported to allow access by other applications.</p><p><b class='red'>o</b>&nbsp;&nbsp;The application is using a database that is not encrypted. The lack of encryption could lead to PII or sensitive data leakage if stored in the database.</p></div><div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M3/previews/preview.png'width='40px' height='40px'/></span><span>M3<br>Insecure Communications</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div><div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M4/previews/preview.png'width='40px' height='40px'/></span><span>M4<br>Insecure Authentication</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div><div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M5/previews/preview.png'width='40px' height='40px'/></span><span>M5<br>Insufficient Cryptography</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>`;
	document.body.appendChild(ow1);

	var ow8 = document.createElement('section');
	ow8.id='owasp8';
	ow8.innerHTML=`<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M6/previews/preview.png'width='40px' height='40px'/></span><span>M6<br>Insecure Authorization</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div><div class='j'><span><img src='image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M7/previews/preview.png'width='40px' height='40px'/></span><span>M7<br>Insecure Authorization</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;The Android certificate failed the JAR signer verification testing.</p></div>`;
	document.body.appendChild(ow8);

	var page10 = document.createElement('section');
	page10.id='page10';
	page10.innerHTML=`<h1 style='font-family:arial;font-weight:bolder;font-size:51px;line-height:1000px;text-align:center;'>Risk Type security/privacy </h1>`;
	document.body.appendChild(page10);

	var page11 = document.createElement('section');
	page11.id='page11';
	for(var g=0;g<=1;g++){
		if(dataget.report.scanDetails[g].importance == "Low"){
			var sca = document.createElement('div');
		sca.className="sca";
		sca.style.backgroundColor="rgb( 203, 48, 252 )";
		page11.innerHTML+=`<div class='fx1'><h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		<h4>Importance</h4><p><img src='image/low/previews/preview.png' width='80px'height='80px'></p></div>`;
		}
		document.body.appendChild(page11);
	}

	var page12 = document.createElement('section');
	page12.id='page12';
	for(var g=2;g<=7;g++){
		if(dataget.report.scanDetails[g].importance == "Low"){
			var sca = document.createElement('div');
		sca.className="sca";
		sca.style.backgroundColor="rgb( 203, 48, 252 )";
		page12.innerHTML+=`<div class='fx1'><h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		<h4>Importance</h4><p><img src='image/low/previews/preview.png' width='80px'height='80px'></p></div>`;
		}
		document.body.appendChild(page12);
	}
	
	var page13 = document.createElement('section');
	page13.id='page12';
	for(var g=8;g<=8;g++){
		if(dataget.report.scanDetails[g].importance == "Low"){
			var sca = document.createElement('div');
		sca.className="sca";
		sca.style.backgroundColor="rgb( 203, 48, 252 )";
		page13.innerHTML+=`<div class='fx1' style='font-size:15px;'><h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		<h4>Importance</h4><p><img src='image/low/previews/preview.png' width='80px'height='80px'></p></div>`;
		}
		document.body.appendChild(page13);
	}

	var page14 = document.createElement('section');
	page14.id='page14';
	for(var g=9;g<=12;g++){
		if(dataget.report.scanDetails[g].importance == "Low"){
			var sca = document.createElement('div');
		sca.className="sca";
		sca.style.backgroundColor="rgb( 203, 48, 252 )";
		page14.innerHTML+=`<div class='fx1'><h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		<h4>Importance</h4><p><img src='image/low/previews/preview.png' width='80px'height='80px'></p></div>`;
		}
		document.body.appendChild(page14);
	}

	var page15 = document.createElement('section');
	page15.id='page15';
	for(var g=13;g<=14;g++){
		if(dataget.report.scanDetails[g].importance == "Low"){
			var sca = document.createElement('div');
		sca.className="sca";
		sca.style.backgroundColor="rgb( 203, 48, 252 )";
		page15.innerHTML+=`<div class='fx1'><h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		<h4>Importance</h4><p><img src='image/low/previews/preview.png' width='80px'height='80px'></p></div>`;
		}
		document.body.appendChild(page15);
	}

	var page16 = document.createElement('section');
	page16.id='page16';
	for(var g=15;g<=16;g++){
		if(dataget.report.scanDetails[g].importance == "Low"){
			var sca = document.createElement('div');
		sca.className="sca";
		sca.style.backgroundColor="rgb( 203, 48, 252 )";
		page16.innerHTML+=`<div class='fx1'><h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		<h4>Importance</h4><p><img src='image/low/previews/preview.png' width='80px'height='80px'></p></div>`;
		}
		document.body.appendChild(page16);
	}

	var page17 = document.createElement('section');
	page17.id='page17';
	for(var g=17;g<=18;g++){
		if(dataget.report.scanDetails[g].importance == "Low"){
			var sca = document.createElement('div');
		sca.className="sca";
		sca.style.backgroundColor="rgb( 203, 48, 252 )";
		page17.innerHTML+=`<div class='fx1'><h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		<h4>Importance</h4><p><img src='image/low/previews/preview.png' width='80px'height='80px'></p></div>`;
		}
		document.body.appendChild(page17);
	}

	var page18 = document.createElement('section');
	page18.id='page18';
	for(var g=19;g<=20;g++){
		if(dataget.report.scanDetails[g].importance == "Low"){
			var sca = document.createElement('div');
		sca.className="sca";
		sca.style.backgroundColor="rgb( 203, 48, 252 )";
		page18.innerHTML+=`<div class='fx1'style='font-size:15px;'><h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		<h4>location</h4><p style='font-size:11px;'>${dataget.report.scanDetails[g].location}</p>
		<h4>Importance</h4><p><img src='image/low/previews/preview.png' width='80px'height='80px'></p></div>`;
		}
		document.body.appendChild(page18);
	}

	var page19 = document.createElement('section');
	page19.id='page19';
	for(var g=21;g<=23;g++){
		if(dataget.report.scanDetails[g].importance == "Low"){
			var sca = document.createElement('div');
		sca.className="sca";
		sca.style.backgroundColor="rgb( 203, 48, 252 )";
		page19.innerHTML+=`<div class='fx1'><h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		<h4>Importance</h4><p><img src='image/low/previews/preview.png' width='80px'height='80px'></p></div>`;
		}
		document.body.appendChild(page19);
	}
	
	var page20 = document.createElement('section');
	page20.id='page20';
	for(var g=10;g<=21;g++){
		if(dataget.report.scanDetails[g].importance == "Medium"){
			var sca = document.createElement('div');
			sca.className="sca";
			sca.style.backgroundColor="rgb( 203, 48, 252 )";
			page20.innerHTML+=`<div class='fx1'><h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
			<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
			<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
			<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
			<h4>Importance</h4><p><img src='image/medium/previews/preview.png' width='80px'height='80px'></p></div>`;
		}
		document.body.appendChild(page20);
	}

	var page21 = document.createElement('section');
	page21.id='page21';
	for(var g=22;g<=23;g++){
		if(dataget.report.scanDetails[g].importance == "Medium"){
			var sca = document.createElement('div');
			sca.className="sca";
			sca.style.backgroundColor="rgb( 203, 48, 252 )";
			page21.innerHTML+=`<div class='fx1'><h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
			<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
			<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
			<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
			<h4>Importance</h4><p><img src='image/medium/previews/preview.png' width='80px'height='80px'></p></div>`;
		}
		document.body.appendChild(page21);
	}

	var page22 = document.createElement('section');
	page22.id='page22';
	for(var g=0;g<=23;g++){
		if(dataget.report.scanDetails[g].importance == "High"){
			var sca = document.createElement('div');
			sca.className="sca";
			sca.style.backgroundColor="rgb( 203, 48, 252 )";
			page22.innerHTML+=`<div class='fx1'><h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
			<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
			<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
			<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
			<h4>Importance</h4><p><img src='image/HIGH/previews/preview.png' width='80px'height='80px'></p></div>`;
		}
		document.body.appendChild(page22);
	}
	var page23 = document.createElement('section');
	page23.id='page23';
	page23.innerHTML=`<h2 style='font-family:arial;font-size:51px;font-weight:bolder;line-height:900px;text-align:center;'>CERTIFICATE</h4> `;
	document.body.appendChild(page23);

	var page24 = document.createElement('section');
	page24.id="page24";
	page24.innerHTML=`<div style='background:whitesmoke;text-align:center;margin-top:50%;padding:10px;'><h4>SHA1 fingerprint</h4><p>${dataget.report.certificate['SHA1 fingerprint']}</p>
	<h4>SHA256 fingerprint</h4><p>${dataget.report.certificate['SHA256 fingerprint']}</p>
	<h4>serial number</h4><p>${dataget.report.certificate['serialNumber']}</p>
	<h4>Valid From</h4><p>${dataget.report.certificate['validFrom']}</p>
	<h4>Valid To</h4><p>${dataget.report.certificate['validTo']}</p></div>`;
	document.body.appendChild(page24);

	var page25 = document.createElement('section');
	page25.id='page25';
	page25.innerHTML=`<h2 style='font-family:arial;font-size:51px;font-weight:bolder;text-align:center;line-height:900px;'>CERTIFICATE->OWNER</h2>`;
	document.body.appendChild(page25);

	var page26 = document.createElement('section');
	page26.id='page26';
	page26.innerHTML+=`<div class='certificateowner'><h4>certificate->owner</h4><p><b>CN</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${dataget.report.certificate.owner['CN']}</p><p><b>OU</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${dataget.report.certificate.owner['OU']}</p><p><b>O</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${dataget.report.certificate.owner['O']}</p><p><b>L</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${dataget.report.certificate.owner['L']}</p><p><b>ST</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${dataget.report.certificate.owner['ST']}</p><p><b>S</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${dataget.report.certificate.owner['C']}</p></div>`;
	document.body.appendChild(page26);

	var page227 = document.createElement('section');
	page227.id='page227';
	page227.innerHTML="<h1 style='font-size:51px;font-family:arial;font-weight:bolder;text-align:center;line-height:1000px;'>LOCAL FRAMEWORKS USED</h1>";
	document.body.appendChild(page227);

	var page27 = document.createElement('section');
	page27.id='page27';
	for(var i=0;i<=1;i++){
		page27.innerHTML+=`<div class='fw'><h4>name</h4><p style='color:red;font-weight:bolder;font-family:arial;'>${dataget.report.androidAnalysis.thirdParty[i].name}</p><h4>description</h4><p>${dataget.report.androidAnalysis.thirdParty[i].description}</p><h4>referenceURL</h4><a href='${dataget.report.androidAnalysis.thirdParty[i].referenceURL}'><p>${dataget.report.androidAnalysis.thirdParty[i].referenceURL}</p></a><h4>type</h4><p>${dataget.report.androidAnalysis.thirdParty[i].type}</p><div>`;
	}
	document.body.appendChild(page27);

	var page28 = document.createElement('section');
	page28.id='page28';
	for(var i=2;i<=3;i++){
		page28.innerHTML+=`<div class='fw'><h4>name</h4><p style='color:red;font-weight:bolder;font-family:arial;'>${dataget.report.androidAnalysis.thirdParty[i].name}</p><h4>description</h4><p>${dataget.report.androidAnalysis.thirdParty[i].description}</p><h4>referenceURL</h4><a href='${dataget.report.androidAnalysis.thirdParty[i].referenceURL}'><p>${dataget.report.androidAnalysis.thirdParty[i].referenceURL}</p></a><h4>type</h4><p>${dataget.report.androidAnalysis.thirdParty[i].type}</p><div>`;
	}
	document.body.appendChild(page28);

	var page29 = document.createElement('section');
	page29.id='page29';
	for(var i=4;i<=5;i++){
		page29.innerHTML+=`<div class='fw'><h4>name</h4><p style='color:red;font-weight:bolder;font-family:arial;'>${dataget.report.androidAnalysis.thirdParty[i].name}</p><h4>description</h4><p>${dataget.report.androidAnalysis.thirdParty[i].description}</p><h4>referenceURL</h4><a href='${dataget.report.androidAnalysis.thirdParty[i].referenceURL}'><p>${dataget.report.androidAnalysis.thirdParty[i].referenceURL}</p></a><h4>type</h4><p>${dataget.report.androidAnalysis.thirdParty[i].type}</p><div>`;
	}
	document.body.appendChild(page29);

	var page30 = document.createElement('section');
	page30.id='page30';
	for(var i=6;i<=7;i++){
		page30.innerHTML+=`<div class='fw'><h4>name</h4><p style='color:red;font-weight:bolder;font-family:arial;'>${dataget.report.androidAnalysis.thirdParty[i].name}</p><h4>description</h4><p>${dataget.report.androidAnalysis.thirdParty[i].description}</p><h4>referenceURL</h4><a href='${dataget.report.androidAnalysis.thirdParty[i].referenceURL}'><p>${dataget.report.androidAnalysis.thirdParty[i].referenceURL}</p></a><h4>type</h4><p>${dataget.report.androidAnalysis.thirdParty[i].type}</p><div>`;
	}
	document.body.appendChild(page30);

	var page31 = document.createElement('section');
	page31.id='page31';
	for(var i=8;i<=9;i++){
		page31.innerHTML+=`<div class='fw'><h4>name</h4><p style='color:red;font-weight:bolder;font-family:arial;'>${dataget.report.androidAnalysis.thirdParty[i].name}</p><h4>description</h4><p>${dataget.report.androidAnalysis.thirdParty[i].description}</p><h4>referenceURL</h4><a href='${dataget.report.androidAnalysis.thirdParty[i].referenceURL}'><p>${dataget.report.androidAnalysis.thirdParty[i].referenceURL}</p></a><h4>type</h4><p>${dataget.report.androidAnalysis.thirdParty[i].type}</p><div>`;
	}
	document.body.appendChild(page31);

	var page32 = document.createElement('section');
	page32.id='page32';
	page32.innerHTML+=`<div class='fw'><h4>name</h4><p style='color:red;font-weight:bolder;font-family:arial;'>${dataget.report.androidAnalysis.thirdParty[10].name}</p><h4>description</h4><p>${dataget.report.androidAnalysis.thirdParty[10].description}</p><h4>referenceURL</h4><a href='${dataget.report.androidAnalysis.thirdParty[10].referenceURL}'><p>${dataget.report.androidAnalysis.thirdParty[10].referenceURL}</p></a><h4>type</h4><p>${dataget.report.androidAnalysis.thirdParty[10].type}</p><div>`;
	document.body.appendChild(page32);
}
fetchjson();
