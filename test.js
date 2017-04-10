
src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"




json_array ={"id":"1","teams":"Aquanet\/L11","work_stream":"Soc. Communications","medallion":"1","guess_compass":"1","crew_compass":"1","hardware":"0","xibiometrics":"0","xilock":"0","xiportal":"1","xireader":"0","ocean_light":"0","xisensor":"0","xiconnect":"0","xiidentity":"0","xiintel":"0","xilocate":"0","ximaximizer":"0","xiorchestrate":"0","xipersonalizer":"0","xisocial":"1","xiengage":"0","ximessaging":"0","xiship":"0","xidestination":"0","xifolio":"0","xientitlements":"0","xisynchronize":"0","xibridge":"0","xicms":"0","xicommerce":"0","xioms":"0","xidata":"0","xideploy":"0","xifulfill":"0","xiintegrate":"0","xilodging":"0","xiseating":"0","werq":"0","polar_reservations":"0","crunchtime_inventory":"0","cms-drupal":"0","hr_maps":"0","fleet_ops-neptune":"0"},{"id":"2","teams":"Archimedes","work_stream":"Medallion","medallion":"1","guess_compass":"0","crew_compass":"0","hardware":"0","xibiometrics":"0","xilock":"1","xiportal":"0","xireader":"1","ocean_light":"0","xisensor":"1","xiconnect":"0","xiidentity":"0","xiintel":"1","xilocate":"1","ximaximizer":"0","xiorchestrate":"0","xipersonalizer":"0","xisocial":"0","xiengage":"0","ximessaging":"0","xiship":"0","xidestination":"0","xifolio":"0","xientitlements":"0","xisynchronize":"0","xibridge":"0","xicms":"0","xicommerce":"0","xioms":"0","xidata":"0","xideploy":"0","xifulfill":"0","xiintegrate":"0","xilodging":"0","xiseating":"0","werq":"0","polar_reservations":"0","crunchtime_inventory":"0","cms-drupal":"0","hr_maps":"0","fleet_ops-neptune":"0"}
,{"id":"3","teams":"test","work_stream":"Soc. Communications","medallion":"1","guess_compass":"1","crew_compass":"1","hardware":"0","xibiometrics":"0","xilock":"0","xiportal":"1","xireader":"0","ocean_light":"0","xisensor":"0","xiconnect":"0","xiidentity":"0","xiintel":"0","xilocate":"0","ximaximizer":"0","xiorchestrate":"0","xipersonalizer":"0","xisocial":"1","xiengage":"0","ximessaging":"0","xiship":"0","xidestination":"0","xifolio":"0","xientitlements":"0","xisynchronize":"0","xibridge":"0","xicms":"0","xicommerce":"0","xioms":"0","xidata":"0","xideploy":"0","xifulfill":"0","xiintegrate":"0","xilodging":"0","xiseating":"0","werq":"0","polar_reservations":"0","crunchtime_inventory":"0","cms-drupal":"0","hr_maps":"0","fleet_ops-neptune":"0"},{"id":"2","teams":"Archimedes","work_stream":"Medallion","medallion":"1","guess_compass":"0","crew_compass":"0","hardware":"0","xibiometrics":"0","xilock":"1","xiportal":"0","xireader":"1","ocean_light":"0","xisensor":"1","xiconnect":"0","xiidentity":"0","xiintel":"1","xilocate":"1","ximaximizer":"0","xiorchestrate":"0","xipersonalizer":"0","xisocial":"0","xiengage":"0","ximessaging":"0","xiship":"0","xidestination":"0","xifolio":"0","xientitlements":"0","xisynchronize":"0","xibridge":"0","xicms":"0","xicommerce":"0","xioms":"0","xidata":"0","xideploy":"0","xifulfill":"0","xiintegrate":"0","xilodging":"0","xiseating":"0","werq":"0","polar_reservations":"0","crunchtime_inventory":"0","cms-drupal":"0","hr_maps":"0","fleet_ops-neptune":"0"};



  // for (var i = 0; i < json_array.length; i++) {
  // 	for (var j = i.length ; j >= 0; j++) {
  // 		console.log(j);
  // 	}
  // 	// console.log(i);
  // }

     newArray=[];

  // for( var x in json_array){
  // 	 console.log(x);
  // 	if (Object.values(json_array) == '1'){
  // 		newArray.push(json_array[x]);
  		
  // 	}
  // 	// console.log(json_array[key]);
  // }

  
 for (var key in json_array) {
  if (json_array.hasOwnProperty(key) ) {
  	 if(json_array[key] == true){
  		newArray.push(key);
  	}
    // console.log(key + " -> " + json_array[key]);
  }
}console.log(newArray);
  // console.log (json_array[0][1]);