
<!doctype html>
<html>
    <head>
        <title>pdf</title>
    </head>
    <body>
        <form action='pdfshow.php' method='POST' enctype="multipart/form-data">
            <label for=''>file upload</label>
            <input type='file' name='file'/>
            <button >submit</button>
        </form>
        <script>
            var examiner = "rt";
            if(examiner=="rt"){
				async function foo(){
                    var d1="upload-file/"+"<?php include 'pdfshow1.php'?>";
					const response = await fetch(d1);
					let dataget = await response.json();
					console.log(dataget);
					console.log(dataget.report.appProperties);

						// var log = document.createElement('img');
						// log.id="im";
						// log.src=`upload-images/${file1.name}`;
						// document.body.appendChild(log);
						// im.style.width="500px";
						// im.style.height="500px";

						//   logo page

						// var log1 = document.createElement('img');
						// log1.id="im2";
						// log1.src=`upload-images/${file1.name}`;
						// document.body.appendChild(log1);
						// im2.style.width="400px";
						// im2.style.height="400px";

						
						//        additional details

						// var g = document.createElement('div');
						// g.id="bio";
						// g.innerHTML=`<table id="table1">
						// <tr><td>Examiner</td>
						// <td>${examiner}</td></tr>
						// <tr><td>Case Folder</td>
						// <td>${casefolder}</td></tr>
						// <tr><td>F.I.R</td>
						// <td>${fir}</td></tr>
						// <tr><td>Destination</td>
						// <td>${destination}</td></tr>
						// <tr><td>Date Time</td>
						// <td>${date}</td></tr></table>`;
						// document.body.appendChild(g);

						//   upper line page 3

						var lineup3 = document.createElement('div');
						lineup3.id="lineup3"
						lineup3.style.width="1000px";
						lineup3.style.height="4px";
						lineup3.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(lineup3);

						//  platform image

						var log2 = document.createElement('img');
						log2.id='im3';
						log2.src='upload-file/android.png';
						document.body.appendChild(log2);

						//    appdetails

						var app = document.createElement('div');
						app.id="appProperties";
						app.innerHTML=`<table id="table2">
						<tr><th><i>App Properties</i></th></tr>
						<tr><td class='tx'>App name</td><td class='txi'>${dataget.report.appProperties.name}</td></tr>
						<tr><td class='tx'>App Version</td><td class='txi'>${dataget.report.appProperties.version}</td></tr>
						<tr><td class='tx'>VersionCode</td><td class='txi'>${dataget.report.appProperties.versionCode}</td></tr>
						<tr><td class='tx'>packageName</td><td class='txi'>${dataget.report.appProperties.packageName}</td></tr>
						<tr><td class='tx'>platform</td><td class='txi'>${dataget.report.appProperties.platform}</td></tr>
						<tr><td class='tx'>md5</td><td class='txi'>${dataget.report.appProperties.md5}</td></tr>
						<tr><td class='tx'>sha256</td><td class='txi'>${dataget.report.appProperties.sha256}</td></tr>
						<tr><td class='tx'>packageSize</td><td class='txi'>${dataget.report.appProperties.packageSize}</td></tr>
						<tr><td class='tx'>sdkVersion</td><td class='txi'>${dataget.report.appProperties.sdkVersion}</td></tr>
						</table>`;
						document.body.appendChild(app);
						//console.log(apProperties);

						// lower line page 3

						var linelo3 = document.createElement('div');
						linelo3.id="linelo3";
						linelo3.style.width="1000px";
						linelo3.style.height="2px";
						linelo3.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(linelo3);

						// upper line page 4

						var lineup4 = document.createElement('div');
						lineup4.id="lineup4";
						lineup4.style.width="1000px";
						lineup4.style.height="2px";
						lineup4.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(lineup4);

						// app bio

						var apbio = document.createElement('div');
						apbio.id='appbio';
						apbio.innerHTML=`<h3>App bio</h3><h2>${dataget.report.appProperties.name}</h2><h5>ABOUT APP</h5><p class="biopar">${dataget.report.distribution.marketData[0].description}</p>`;
						document.body.appendChild(apbio);

						// lower line page 4

						// var linelo4 = document.createElement('div');
						// linelo4.id="linelo4";
						// linelo4.style.width="1000px";
						// linelo4.style.height="2px";
						// linelo4.style.backgroundColor="rgb( 122, 120, 120 )";
						// document.body.appendChild(linelo4);

						

						//  App Permissions Summary 

						var lineup6 = document.createElement('div');
						lineup6.id="lineup6";
						lineup6.style.width="1000px";
						lineup6.style.height="2px";
						lineup6.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(lineup6);

						var headi1 = document.createElement('div');
						headi1.className='headi';
						headi1.innerHTML='<h3>App Permissions Summary</h3>';
						document.body.appendChild(headi1);

						for(var i in dataget.report.androidAnalysis.usesPermission){
							if(dataget.report.androidAnalysis.usesPermission[i].description){
								var userper = document.createElement('div');
								userper.className=`userper`;
								userper.innerHTML=`<h3>${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p>`;
								document.body.appendChild(userper);
								if(dataget.report.androidAnalysis.usesPermission[i].dangerous == false){
									var userper = document.createElement('div');
									userper.className=`userper1`;
									userper.innerHTML=`<h3 style="color:red;">${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p><p><img src="upload-images/dang.png" width="50px" height="50px"></p>`;
									document.body.appendChild(userper);
								}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == true){
									var userper = document.createElement('div');
									userper.className=`userper`;
									userper.innerHTML=`<h3 style="color:rgb( 42, 255, 4 );">${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p><p>${dataget.report.androidAnalysis.usesPermission[i].dangerous}</p>`;
									document.body.appendChild(userper);
								}else if(dataget.report.androidAnalysis.usesPermission[i].dangerous == ""){
									var userper = document.createElement('div');
									userper.className=`userper`;
									userper.innerHTML=`<h3 style="color:rgb( 42, 255, 4 );">${dataget.report.androidAnalysis.usesPermission[i].kind}</h3><p>${dataget.report.androidAnalysis.usesPermission[i].description}</p><p>${dataget.report.androidAnalysis.usesPermission[i].dangerous}</p>`;
									document.body.appendChild(userper);
								}else{
									console.log('no found dangerous');
								}
				}
							}

					// lower line page 16

						var linelo16i = document.createElement('div');
						linelo16i.id="linelo16i";
						linelo16i.style.width="1000px";
						linelo16i.style.height="2px";
						linelo16i.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(linelo16i);

					//                     OWASP Summary

					var ow = document.createElement('div');
					ow.id = "owasp";
					ow.innerHTML = "<h2>OWASP Summary</h2><p>The OWASP summary contains results of the testing that was performed on the application against the OWASP Top 10 MobileCategories.</p>";
					document.body.appendChild(ow);

					var ow1 = document.createElement('div');
					ow1.id = "owasp1";
					ow1.innerHTML = `<span><img src='image/shieldgreen/previews/preview.png' width='50px' height='50px'></span><span>Categories that passed the have a green shield.</span>`;
					document.body.appendChild(ow1);

					var ow2 = document.createElement('div');
					ow2.id = "owasp2";
					ow2.innerHTML = `<span><img src='image/shieldred/previews/preview.png' width='50px' height='50px'></span><span>Categories that failed have a red shield.</span>`;
					document.body.appendChild(ow2);

					var ow3 = document.createElement('div');
		 			ow3.id='owasp3';
		 			ow3.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M1/previews/preview.png'width='40px' height='40px'/></span><span>M1<br>Improper Platform Usage</span></div><div><h6><b class='green'>o</b>&nbsp;&nbsp;No problems found.</h6></div>";
		 			document.body.appendChild(ow3);

		 			var ow4 = document.createElement('div');
		 			ow4.id='owasp4';
		 			ow4.innerHTML="<div class='j'><span><img src='image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M2/previews/preview.png'width='40px' height='40px'/></span><span>M2<br>Insecure Data Storage</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;The app uses the primary external storage.</p><p><b class='red'>o</b>&nbsp;&nbsp;The content provider is not protected by signature permission and exported in the AndroidManifest.xml file. Content providers offer a structured storage mechanism that can be limited to this application or exported to allow access by other applications.</p><p><b class='red'>o</b>&nbsp;&nbsp;The application is using a database that is not encrypted. The lack of encryption could lead to PII or sensitive data leakage if stored in the database.</p></div>";
		 			document.body.appendChild(ow4);

		 			var ow5 = document.createElement('div');
		 			ow5.id='owasp5';
		 			ow5.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M3/previews/preview.png'width='40px' height='40px'/></span><span>M3<br>Insecure Communications</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow5);

		 			var ow6 = document.createElement('div');
		 			ow6.id='owasp6';
		 			ow6.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M4/previews/preview.png'width='40px' height='40px'/></span><span>M4<br>Insecure Authentication</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow6);

		 			var ow7 = document.createElement('div');
		 			ow7.id='owasp7';
		 			ow7.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M5/previews/preview.png'width='40px' height='40px'/></span><span>M5<br>Insufficient Cryptography</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow7);

		 			var ow8 = document.createElement('div');
		 			ow8.id='owasp8';
		 			ow8.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M6/previews/preview.png'width='40px' height='40px'/></span><span>M6<br>Insecure Authorization</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 			document.body.appendChild(ow8);

		 			var ow9 = document.createElement('div');
		 			ow9.id='owasp9';
		 			ow9.innerHTML="<div class='j'><span><img src='image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M7/previews/preview.png'width='40px' height='40px'/></span><span>M7<br>Insecure Authorization</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;The Android certificate failed the JAR signer verification testing.</p></div>";
		 			document.body.appendChild(ow9);

		 			// lower line page 17

						var linelo17i = document.createElement('div');
						linelo17i.id="linelo17i";
						linelo17i.style.width="1000px";
						linelo17i.style.height="2px";
						linelo17i.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(linelo17i);

						var ow10 = document.createElement('div');
		 				ow10.id='owasp10';
		 				ow10.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M8/previews/preview.png'width='40px' height='40px'/></span><span>M8<br>Code Tampering</span></div><div><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 				document.body.appendChild(ow10);

		 				var ow11 = document.createElement('div');
		 					ow11.id='owasp11';
		 					ow11.innerHTML="<div class='j'><span><img src='image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M9/previews/preview.png'width='40px' height='40px'/></span><span>M9<br>Reverse Engineering</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;This application exposes source level metadata symbols and fails the testing outlined by OWASP Mobile Top 10 covered under category M9: Reverse Engineering</p></div>";
		 				document.body.appendChild(ow11);

		 				var ow12 = document.createElement('div');
		 					ow12.id='owasp12';
		 					ow12.innerHTML="<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M10/previews/preview.png'width='40px' height='40px'/></span><span>M10<br>Extraneous Functionality</span></div><div><p><b class='red'>o</b>&nbsp;&nbsp;No problems found.</p></div>";
		 				document.body.appendChild(ow12);

		 				// lower line page 18

						var linelo18i = document.createElement('div');
						linelo18i.id="linelo18i";
						linelo18i.style.width="1000px";
						linelo18i.style.height="2px";
						linelo18i.style.backgroundColor="rgb( 122, 120, 120 )";
						document.body.appendChild(linelo18i);

		 				// Security Risks Summary

		 				var srs = document.createElement('div');
		 				srs.id="srs";
		 				srs.innerHTML=`<h2>Risk Type security/privacy </h2>`;
		 				document.body.appendChild(srs);

		 				var srsp = document.createElement('div');
		 				srsp.id="srsp";
		 				srsp.innerHTML="<p>The security/privacy summary focuses on risks contained in the application. These risks include (but are not limited to): risky functionality and code use, application capabilities, critical vulnerabilities and threats.</p>";
		 				document.body.appendChild(srsp);

		 				for(var g in dataget.report.scanDetails){
		 					if(dataget.report.scanDetails[g].importance == "Low"){
		 						var sca = document.createElement('div');
		 					sca.className="sca";
		 					sca.style.backgroundColor="rgb( 255, 241, 153 )";
		 					sca.innerHTML=`<h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		 					<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		 					<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		 					<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		 					<h4>Importance</h4><p><img src='image/low/previews/preview.png' width='80px'height='80px'></p>`;
		 					document.body.appendChild(sca);
		 					}else if(dataget.report.scanDetails[g].importance == "High"){
		 						var sca = document.createElement('div');
		 					sca.className="sca";
		 					sca.style.backgroundColor="rgb( 255, 209, 199 )";
		 					sca.innerHTML=`<h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		 					<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		 					<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		 					<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		 					<h4>Importance</h4><p><img src='image/HIGH/previews/preview.png' width='80px'height='80px'></p>`;
		 					document.body.appendChild(sca);
		 					}else if(dataget.report.scanDetails[g].importance == "Medium"){
		 						var sca = document.createElement('div');
		 					sca.className="sca";
		 					sca.style.backgroundColor="rgb( 238, 170, 255 )";
		 					sca.innerHTML=`<h4>Risk type</h4><p>${dataget.report.scanDetails[g].riskType}</p>
		 					<h4>Kind</h4><p>${dataget.report.scanDetails[g].kind}</p>
		 					<h4>description</h4><p>${dataget.report.scanDetails[g].description}</p>
		 					<h4>location</h4><p>${dataget.report.scanDetails[g].location}</p>
		 					<h4>Importance</h4><p><img src='image/medium/previews/preview.png' width='80px'height='80px'></p>`;
		 					document.body.appendChild(sca);
		 					}
		 					
		 				}
		 				var sha11 = document.createElement('div');
		 				sha11.className="sha11";
		 				 sha11.innerHTML=`<h2>CERTIFICATE</h4> `;
		 				 document.body.appendChild(sha11);

		 				//console.log(dataget.report.certificate['SHA1 fingerprint']);
		 				var sha1 = document.createElement('div');
		 				sha1.className="sha1";
		 				 sha1.innerHTML=`<h4>SHA1 fingerprint</h4><p>${dataget.report.certificate['SHA1 fingerprint']}</p>
		 				 <h4>SHA256 fingerprint</h4><p>${dataget.report.certificate['SHA256 fingerprint']}</p>
		 				 <h4>serial number</h4><p>${dataget.report.certificate['serialNumber']}</p>
		 				 <h4>Valid From</h4><p>${dataget.report.certificate['validFrom']}</p>
		 				 <h4>Valid To</h4><p>${dataget.report.certificate['validTo']}</p> `;
		 				 document.body.appendChild(sha1);
		 					
		 				var cer = document.createElement('div');
		 					cer.className="cer";
		 					cer.innerHTML=`<h2>CERTIFICATE->OWNER</h2>`;
		 					document.body.appendChild(cer);

		 				for(var g1 in dataget.report.certificate.owner){
		 					 console.log(g1);
		 					var cer1 = document.createElement('div');
		 					cer1.className="cer1";
		 					cer1.innerHTML=`<h4>${g1}</h4><p>${dataget.report.certificate.owner[g1]}</p>`;
		 					document.body.appendChild(cer1);
		 				}

								// local frameworks used
								var localfr=document.createElement('div');
								localfr.className='localfr';
								localfr.innerHTML="<h2>LOCAL FRAMEWORKS USED</h2>";
								document.body.appendChild(localfr);

								for(var i in dataget.report.androidAnalysis.thirdParty){
									//console.log(i,dataget.report.androidAnalysis.thirdParty[i].name);
									//console.log(i,dataget.report.androidAnalysis.thirdParty[i]);
									var lf = document.createElement('div');
									lf.className = "thirdparty";
									lf.innerHTML=`<h4>name</h4><p>${dataget.report.androidAnalysis.thirdParty[i].name}</p><h4>description</h4><p>${dataget.report.androidAnalysis.thirdParty[i].description}</p><h4>referenceURL</h4><a href='${dataget.report.androidAnalysis.thirdParty[i].referenceURL}'><p>${dataget.report.androidAnalysis.thirdParty[i].referenceURL}</p></a><h4>type</h4><p>${dataget.report.androidAnalysis.thirdParty[i].type}</p>`;
									document.body.appendChild(lf);
								}


								// lower line page 6

						 var linelorser3 = document.createElement('div');
						 linelorser3.className="linelorser3";
						 linelorser3.style.width="1000px";
						 linelorser3.style.height="2px";
						 linelorser3.style.backgroundColor="rgb( 122, 120, 120 )";
						 document.body.appendChild(linelorser3);

						 // heading network communication
						 var linentc = document.createElement('div');
								linentc.id='linentc';
								linentc.innerHTML='<h2 style="font-family:arial;font-size:51px;font-weight:bolder;line-height:1400px;">NETWORK COMMUNICATIONS SUMMARY</h2>';
								document.body.appendChild(linentc);

								var ntc = document.createElement('div');
								ntc.className="netcom";
								ntc.innerHTML=`<h2>NETWORK COMMUNICATIONS SUMMARY</h2>`;
								document.body.appendChild(ntc);

								

								 for(var server in dataget.report.communications.URI){
								 	var servercommunication = document.createElement('div');
								 	servercommunication.className="servercom";
								 	servercommunication.innerHTML=`<h4>${dataget.report.communications.URI[server].serverInfo.country}</h4><table class='sercom'>
								 	<tr>
								 	<td>city</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.city}</td>
								 	</tr>
								 	<tr>
								 	<td>ip</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.ip}</td>
								 	</tr>
								 	<tr>
								 	<td>allocatedDate</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.allocatedDate}</td>
								 	</tr>
								 	<tr>
								 	<td>ASName</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.ASName}</td>
								 	</tr>
								 	<tr>
								 	<td>ASNumber</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.ASNumber}</td>
								 	</tr>
								 	<tr>
								 	<td>latitude</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.latitude}</td>
								 	</tr>
								 	<tr>
								 	<td>longitude</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.longitude}</td>
								 	</tr>
								 	<tr>
								 	<td>bgpPrefix</td>
								 	<td>${dataget.report.communications.URI[server].serverInfo.bgpPrefix}</td>
								 	</tr>
								 	</table>`;
								 	document.body.appendChild(servercommunication);
								 	//console.log(dataget.report.communications.URI[server].serverInfo.bgpPrefix);
								 }
								//console.log(dataget.report.communications.URI);



                            
				}
                foo();
            }
        
		   
        </script>
    </body>
</html>

