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

	for(var i in dataget.report.androidAnalysis.usesPermission){
		if(dataget.report.androidAnalysis.usesPermission[i].description){
			var userper = document.createElement('div');
			userper.className=`userper`;
			userper.innerHTML=`<h3>${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p>`;
			//document.body.appendChild(userper);
			//console.log(dataget.report.androidAnalysis.usesPermission[i].dangerous);
			if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
				var userper = document.createElement('div');
				userper.className=`userper1`;
				userper.innerHTML=`<h3 style="color:red;">${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p><p><img src="upload-images/dang.png" width="50px" height="50px"></p>`;
				//document.body.appendChild(userper);
				//console.log(dataget.report.androidAnalysis.usesPermission[i].dangerous );
			}
		}
	}
}
fetchjson();
