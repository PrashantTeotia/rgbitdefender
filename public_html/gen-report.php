<!doctype html>
<html>
    <head>
        <title>report</title>
        <style>
            section{width:1000px;height:1460px;border:2px solid grey;margin}
            section::before{content:'rgbitdefender';position: relative;top:10px;float:right;padding-right:10px;}
            .f1{background-color:rgb(234, 215, 215);padding:10px 40px;margin-top:60px;margin-right:10px;margin-left:10px;border-radius:5px;font-family:arial;}
            #app_properties_d{background-color:rgb(223, 223, 223);border-radius:5px;position: relative;top:500px;margin:0px 50px 0px 50px;padding:20px;}
            #app-bio{background-color:rgb(191, 238, 178);padding:20px;position: relative;top:300px;margin-left:30px;margin-right:30px;border-radius:5px;}
            .about{text-decoration:underline;}
            .leftside{color:rgb(187, 43, 28);font-family:arial;font-weight:bolder;}
            .rightside{color:rgb(27, 102, 32);font-family:arial;padding-left:69px;}
            .app_p_head{font-family:arial;font-size:54px;position: relative;top:540px;left:300px;}
            
            .li{background:rgb(184, 211, 238);}
            #n1{margin-top:10px;}
            .j{margin-top:10px;background-color:rgb(224, 153, 225);margin-left:30px;margin-right:30px;padding:5px 10px;box-sizing:border-box;border-top-left-radius:4px;border-top-right-radius:4px;}
            .j1{background-color:rgb(249, 168, 251);margin-left:30px;margin-right:30px;padding:5px 10px;box-sizing:border-box;}
            .sec{margin-left:30px;margin-right:30px;margin-top:80px;}
            .s_1{background-color: rgb(240, 240, 240);margin-left: 20px;margin-right: 20px;padding: 10px;margin-top: 60px;border-radius: 10px;}
            .kind{font-family:arial;font-weight:bolder; padding-left:30px;color:rgb(12,12,12);}
        </style>
    </head>
    <body>
        <input type="file" id="file3"/>
        <button id="button" onclick="gpdf()">GENERATE PDF</button>
        <script>
            async function gpdf(){
                var filename = document.getElementById('file3').value;
               // console.log(filename.substr(12));
                let response = await fetch("upload-file/"+filename.substr(12));
                let getdata = await response.json();
                console.log(getdata);

                var report_details = document.createElement('section');
                report_details.id="report_details";
                report_details.innerHTML=`<div class='report_details' style='position:relative;top:200px;'><img src='upload-images/android.png'width='200px' height='200px'/><table><tr><td>Examiner</td><td>xxxxx</td></tr><tr><td>Case Type</td><td>xxxxx</td></tr><tr><td>F.I.R</td><td>xxxxx</td></tr><tr><td>Evidence Description</td><td>xxxxx</td></tr><tr><td>Address</td><td>xxxxx</td></tr></table></div>`; 
                document.body.appendChild(report_details);

                var app_properties = document.createElement('section');
                app_properties.id='app_properties';
                app_properties.innerHTML=`<div id='app_properties_d'><table><tr><td class='leftside'>Name</td><td class='rightside'>${getdata.report.appProperties.name}<td></tr><tr><td class='leftside'>Version Code</td><td class='rightside'>${getdata.report.appProperties.version}<td></tr><tr><td class='leftside'>Version</td><td class='rightside'>${getdata.report.appProperties.versionCode}<td></tr><tr><td class='leftside'>Package Name</td><td class='rightside'>${getdata.report.appProperties.packageName}<td></tr><tr><td class='leftside'>Platform</td><td class='rightside'>${getdata.report.appProperties.platform}<td></tr><tr><td class='leftside'>md5</td><td class='rightside'>${getdata.report.appProperties.md5}<td></tr><tr><td class='leftside'>Version</td><td class='rightside'>${getdata.report.appProperties.sha1}<td></tr><tr><td class='leftside'>sha256</td><td class='rightside'>${getdata.report.appProperties.sha256}<td></tr><tr><td class='leftside'>Package Size</td><td class='rightside'>${getdata.report.appProperties.packageSize}<td></tr><tr><td class='leftside'>Scan Date-Time</td><td class='rightside'>${getdata.report.scanVersion.scanDateTime}<td></tr></table></div>`;
                document.body.appendChild(app_properties);

                var app_bio = document.createElement('section');
                app_bio.id='app_bio';
                app_bio.innerHTML=`<div id='app-bio'><h4>App Bio</h4><h2>${getdata.report.distribution.marketData[0].appName}</h2><i class='about'>About</i><p>${getdata.report.distribution.marketData[0].description}</p></div>`;
                document.body.appendChild(app_bio);

                var app_permission_head = document.createElement('section');
                app_permission_head.id='app_per_head';
                app_permission_head.innerHTML=`<h1 class='app_p_head'>App Permission</h1>`;
                document.body.appendChild(app_permission_head);
                var len_permission = getdata.report.androidAnalysis.usesPermission;
                console.log(len_permission.length);
                var app_permission = document.createElement('section');
                app_permission.id="app_permission";                
                var app_permission1 = document.createElement('section');
                var app_permission2 = document.createElement('section');
                var app_permission3 = document.createElement('section');
                var app_permission4 = document.createElement('section');
                var app_permission5 = document.createElement('section');
                var app_permission6 = document.createElement('section');
                var app_permission7 = document.createElement('section');
                var app_permission8 = document.createElement('section');
                var app_permission9 = document.createElement('section');
                var app_permission10 = document.createElement('section');
                var app_permission11 = document.createElement('section');
                var app_permission12 = document.createElement('section');
                var app_permission13 = document.createElement('section');
                var app_permission14 = document.createElement('section');
                var app_permission15 = document.createElement('section');
                var app_permission16 = document.createElement('section');
                var app_permission17 = document.createElement('section');
                var app_permission18 = document.createElement('section');
                var app_permission19 = document.createElement('section');



                for(var ay=0;ay<=len_permission.length;ay++){
                    if(ay==0 || ay==1 || ay==2 || ay==3 || ay==4){
                        app_permission.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`; 
                        document.body.appendChild(app_permission);
                     }else if(ay==5 || ay==6 || ay==7 || ay==8 || ay==9){
                         app_permission1.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                         document.body.appendChild(app_permission1);
                     }else if(ay==10 || ay==11 || ay==12 || ay==13 || ay==14){
                         app_permission2.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                         document.body.appendChild(app_permission2);
                     }else if(ay==15 || ay==16 || ay==17 || ay==18 || ay==19){
                         app_permission3.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                         document.body.appendChild(app_permission3);
                     }else if(ay==20 || ay==21 || ay==22 || ay!=23 ){
                         app_permission4.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                         document.body.appendChild(app_permission4);
                     }else if(ay==25 || ay==26 || ay==27 || ay==28 || ay==29){
                         app_permission5.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                         document.body.appendChild(app_permission5);
                     }else if(ay==30 || ay==31 || ay==32 || ay==33 || ay==34){
                         app_permission6.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                         document.body.appendChild(app_permission6);
                     }else if(ay==35 || ay==36 || ay==37 || ay==38 || ay==39){
                         app_permission7.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                         document.body.appendChild(app_permission7);
                     }else if(ay==40 || ay==41 || ay==42 || ay==43 || ay==44){
                         app_permission8.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                         document.body.appendChild(app_permission8);
                     }else if(ay==45 || ay==46 || ay==47 || ay==48 || ay==49){
                         app_permission9.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                         document.body.appendChild(app_permission9);
                     }else if(ay==50 || ay==51 || ay==52 || ay==53 || ay==54){
                         app_permission10.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                         document.body.appendChild(app_permission10);
                     }else if(ay==55 || ay==56 || ay==57 || ay==58 || ay==59){
                        app_permission11.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                        document.body.appendChild(app_permission11);
                     }else if(ay==60 || ay==61 || ay==62 || ay==63 || ay==64){
                        app_permission12.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                        document.body.appendChild(app_permission12);
                     }else if(ay==65 || ay==66 || ay==67 || ay==68 || ay==69){
                        app_permission13.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                        document.body.appendChild(app_permission13);
                     }else if(ay==70 || ay==71 || ay==72 || ay==73 || ay==74){
                        app_permission14.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                        document.body.appendChild(app_permission14);
                     }else if(ay==75 || ay==76 || ay==77 || ay==78 || ay==79){
                        app_permission15.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                        document.body.appendChild(app_permission15);
                     }else if(ay==80 || ay==81 || ay==82 || ay==83 || ay==84){
                        app_permission16.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                        document.body.appendChild(app_permission16);
                     }else if(ay==85 || ay==86 || ay==87 || ay==88 || ay==89){
                        app_permission17.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                        document.body.appendChild(app_permission17);
                     }else if(ay==90 || ay==91 || ay==92 || ay==93 || ay==94){
                        app_permission18.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                        document.body.appendChild(app_permission18);
                     }else if(ay==95 || ay==96 || ay==97 || ay==98 || ay==99){
                        app_permission19.innerHTML+=`<div class='f1'><h3>${getdata.report.androidAnalysis.usesPermission[ay].kind}</h3><p>${getdata.report.androidAnalysis.usesPermission[ay].description}</p></div>`;
                        document.body.appendChild(app_permission19);
                     }else{
                        console.log('permission limit complete error...');
                     }
                }

                var owasp = document.createElement('section');
                owasp.id='owasp';
                owasp.innerHTML=`<h1 class='app_p_head'>OWASP Summary</h1>`;
                document.body.appendChild(owasp);

                var owasp1 = document.createElement('section');
                owasp1.id='owasp1';
                owasp1.innerHTML=`<h2 style='margin-left:30px;padding-top:30px;'>OWASP Summary</h2><p>The OWASP summary contains results of the testing that was performed on the application against the OWASP Top 10 MobileCategories.</p>`;
                owasp1.innerHTML+=`<span><img src='image/shieldgreen/previews/preview.png' width='50px' height='50px'></span><span>Categories that passed the have a green shield.</span>`;
                owasp1.innerHTML+=`<span><img src='image/shieldred/previews/preview.png' width='50px' height='50px'></span><span>Categories that failed have a red shield.</span>`;
                owasp1.innerHTML+=`<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M1/previews/preview.png'width='40px' height='40px'/></span><span>M1<br>Improper Platform Usage</span></div><div class='j1'><h6><b class='green'>o</b>&nbsp;&nbsp;No problems found.</h6></div>`;
                owasp1.innerHTML+=`<div class='j'><span><img src='image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M2/previews/preview.png'width='40px' height='40px'/></span><span>M2<br>Insecure Data Storage</span></div><div class='j1'><p><b class='red'>o</b>&nbsp;&nbsp;The app uses the primary external storage.</p><p><b class='red'>o</b>&nbsp;&nbsp;The content provider is not protected by signature permission and exported in the AndroidManifest.xml file. Content providers offer a structured storage mechanism that can be limited to this application or exported to allow access by other applications.</p><p><b class='red'>o</b>&nbsp;&nbsp;The application is using a database that is not encrypted. The lack of encryption could lead to PII or sensitive data leakage if stored in the database.</p></div>`;
                owasp1.innerHTML+=`<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M3/previews/preview.png'width='40px' height='40px'/></span><span>M3<br>Insecure Communications</span></div><div class='j1'><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>`;
                owasp1.innerHTML+=`<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M4/previews/preview.png'width='40px' height='40px'/></span><span>M4<br>Insecure Authentication</span></div><div class='j1'><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>`;
                owasp1.innerHTML+=`<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M5/previews/preview.png'width='40px' height='40px'/></span><span>M5<br>Insufficient Cryptography</span></div><div class='j1'><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>`;
                owasp1.innerHTML+=`<div class='j'><span><img src='image/shieldgreen/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M6/previews/preview.png'width='40px' height='40px'/></span><span>M6<br>Insecure Authorization</span></div><div class='j1'><p><b class='green'>o</b>&nbsp;&nbsp;No problems found.</p></div>`;
                owasp1.innerHTML+=`<div class='j'><span><img src='image/shieldred/previews/preview.png'width='40px' height='40px'/></span><span><img src='image/M7/previews/preview.png'width='40px' height='40px'/></span><span>M7<br>Insecure Authorization</span></div><div class='j1'><p><b class='red'>o</b>&nbsp;&nbsp;The Android certificate failed the JAR signer verification testing.</p></div>`;
                document.body.appendChild(owasp1);


                var security_len = getdata.report.scanDetails;
                console.log(security_len.length);
                var security = document.createElement('section');
                var security1 = document.createElement('section');
                var security2 = document.createElement('section');
                var security3 = document.createElement('section');
                var security4 = document.createElement('section');
                var security5 = document.createElement('section');
                var security6 = document.createElement('section');
                var security7 = document.createElement('section');
                var security8 = document.createElement('section');
                var security9 = document.createElement('section');
                var security10 = document.createElement('section');
                var security11 = document.createElement('section');
                var security12 = document.createElement('section');
                var security13 = document.createElement('section');
                var security14 = document.createElement('section');
                var security15 = document.createElement('section');
                var security16 = document.createElement('section');
                var security17 = document.createElement('section');
                var security18 = document.createElement('section');
                var security19 = document.createElement('section');
                var security20 = document.createElement('section');
                var security21 = document.createElement('section');
                var security22 = document.createElement('section');
                var security23 = document.createElement('section');
                var security24 = document.createElement('section');

                security.id='security';
                security.innerHTML=`<div class='sec'><h4>Security/Privacy Risks Summary</h4><p>The security/Privacy summary focuses on risks contained in the application. These risks include (but are not limited to): risky functionality and code use, application capabilities, critical vulnerabilities and threats.</p>`;
                for(var s=0;s<=security_len.length-1;s++){
                    if(s==0 || s==1 || s==2 || s==3){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==4 || s==5 || s==6 || s==7){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security1.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security1);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security1.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security1);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security1.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security1);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==8 || s==9 || s==10 || s==11){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security2.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security2);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security2.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security2);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security2.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security2);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==12 || s==13 || s==14 || s==15){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security3.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security3);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security3.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security3);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security3.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security3);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==16 || s==17 || s==18 || s==19){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security4.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security4);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security4.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security4);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security4.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security4);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==20 || s==21 || s==22 || s==23){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security5.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security5);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security5.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security5);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security5.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security5);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==24 || s==25 || s==26 || s==27){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security6.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security6);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security6.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security6);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security6.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security6);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==28 || s==29 || s==30 || s==31){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security7.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security7);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security7.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security7);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security7.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security7);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==32 || s==33 || s==34 || s==35){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security8.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security8);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security8.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security8);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security8.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security8);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==36 || s==37 || s==38 || s==39){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security9.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security9);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security9.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security9);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security9.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security9);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==40 || s==41 || s==42 || s==43){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security10.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security10);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security10.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security10);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security10.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security10);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==44 || s==45 || s==46 || s==47){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security11.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security11);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security11.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security11);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security11.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security11);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==48 || s==49 || s==50 || s==51){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security12.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security12);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security12.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security12);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security12.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security12);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==52 || s==53 || s==54 || s==55){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security13.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security13);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security13.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security13);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security13.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security13);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==56 || s==57 || s==58 || s==59){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security14.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security14);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security14.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security14);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security14.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security14);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==60 || s==61 || s==62 || s==63){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security15.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security15);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security15.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security15);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security15.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security15);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==64 || s==65 || s==66 || s==67){
                        //console.log(getdata.report.scanDetails[66].importance);
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security16.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security16);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security16.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security16);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security16.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security16);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s==68 || s==69 || s==70 || s==71 ){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security17.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security17);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security17.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security17);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security17.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security17);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s>=76 && s<=79){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security18.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security18);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security18.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security18);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security18.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security18);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s>=80 && s<=83){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security19.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security19);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security19.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security19);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security19.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security19);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s>=84 && s<=87){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security20.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security20);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security20.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security20);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security20.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security20);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s>=88 && s<=91){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security21.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security21);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security21.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security21);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security21.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security21);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s>=92 && s<=95){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security22.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security22);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security22.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security22);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security22.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security22);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s>=96 && a<=99){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security23.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security23);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security23.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security23);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security23.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security23);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else if(s>=100 && s<=103){
                        if(getdata.report.scanDetails[s].importance == 'Low'){
                            security24.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security24);
                        }else if(getdata.report.scanDetails[s].importance == 'Medium'){
                            security24.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security24);
                        }else if(getdata.report.scanDetails[s].importance == 'High'){
                            security24.innerHTML+=`<div class='s_1'><span>${getdata.report.scanDetails[s].importance}</span><span class='kind'>${getdata.report.scanDetails[s].kind}</span><h6>Description</h6><p>${getdata.report.scanDetails[s].description}</p></div>`;
                            document.body.appendChild(security24);
                        }else{
                            console.log('scanDetails error');
                        }
                    }else{
                        console.log('complete');
                    }
                }

                var analysis = document.createElement('section');
                var analysis1 = document.createElement('section');
                var analysis2 = document.createElement('section');
                var analysis3 = document.createElement('section');
                var analysis4 = document.createElement('section');
                var analysis5 = document.createElement('section');
                var analysis6 = document.createElement('section');
                var analysis7 = document.createElement('section');
                
                analysis.id='analysis';
                analysis.innerHTML=`<h1 class='app_p_head'>Analysis</h1>`;
                document.body.appendChild(analysis);   
                
                analysis1.innerHTML+=`<div class='anal'><span><span>${getdata.report.scanDetails[backup].importance}<span>${getdata.report.scanDetails[backup].description}</span><div>`;
                
            }  
        </script>
    </body>
</html>