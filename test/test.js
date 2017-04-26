
src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"




json_array =[
{"id":"1","teams":"Aquanet\/L11","work_stream":"Soc. Communications","medallion":"1","guess_compass":"1","crew_compass":"1","hardware":"0","xibiometrics":"0","xilock":"0","xiportal":"1","xireader":"0","ocean_light":"0","xisensor":"0","xiconnect":"0","xiidentity":"0","xiintel":"0","xilocate":"0","ximaximizer":"0","xiorchestrate":"0","xipersonalizer":"0","xisocial":"1","xiengage":"0","ximessaging":"0","xiship":"0","xidestination":"0","xifolio":"0","xientitlements":"0","xisynchronize":"0","xibridge":"0","xicms":"0","xicommerce":"0","xioms":"0","xidata":"0","xideploy":"0","xifulfill":"0","xiintegrate":"0","xilodging":"0","xiseating":"0","werq":"0","polar_reservations":"0","crunchtime_inventory":"0","cms-drupal":"0","hr_maps":"0","fleet_ops-neptune":"0"}
,{"id":"2","teams":"Archimedes","work_stream":"Medallion","medallion":"1","guess_compass":"0","crew_compass":"0","hardware":"0","xibiometrics":"0","xilock":"1","xiportal":"0","xireader":"1","ocean_light":"0","xisensor":"1","xiconnect":"0","xiidentity":"0","xiintel":"1","xilocate":"1","ximaximizer":"0","xiorchestrate":"0","xipersonalizer":"0","xisocial":"0","xiengage":"0","ximessaging":"0","xiship":"0","xidestination":"0","xifolio":"0","xientitlements":"0","xisynchronize":"0","xibridge":"0","xicms":"0","xicommerce":"0","xioms":"0","xidata":"0","xideploy":"0","xifulfill":"0","xiintegrate":"0","xilodging":"0","xiseating":"0","werq":"0","polar_reservations":"0","crunchtime_inventory":"0","cms-drupal":"0","hr_maps":"0","fleet_ops-neptune":"0"}
,{"id":"3","teams":"test","work_stream":"Soc. Communications","medallion":"1","guess_compass":"1","crew_compass":"1","hardware":"0","xibiometrics":"0","xilock":"0","xiportal":"1","xireader":"0","ocean_light":"0","xisensor":"0","xiconnect":"0","xiidentity":"0","xiintel":"0","xilocate":"0","ximaximizer":"0","xiorchestrate":"0","xipersonalizer":"0","xisocial":"1","xiengage":"0","ximessaging":"0","xiship":"0","xidestination":"0","xifolio":"0","xientitlements":"0","xisynchronize":"0","xibridge":"0","xicms":"0","xicommerce":"0","xioms":"0","xidata":"0","xideploy":"0","xifulfill":"0","xiintegrate":"0","xilodging":"0","xiseating":"0","werq":"0","polar_reservations":"0","crunchtime_inventory":"0","cms-drupal":"0","hr_maps":"0","fleet_ops-neptune":"0"}
,{"id":"4","teams":"Archimedes","work_stream":"Medallion","medallion":"1","guess_compass":"0","crew_compass":"0","hardware":"0","xibiometrics":"0","xilock":"1","xiportal":"0","xireader":"1","ocean_light":"0","xisensor":"1","xiconnect":"0","xiidentity":"0","xiintel":"1","xilocate":"1","ximaximizer":"0","xiorchestrate":"0","xipersonalizer":"0","xisocial":"0","xiengage":"0","ximessaging":"0","xiship":"0","xidestination":"0","xifolio":"0","xientitlements":"0","xisynchronize":"0","xibridge":"0","xicms":"0","xicommerce":"0","xioms":"0","xidata":"0","xideploy":"0","xifulfill":"0","xiintegrate":"0","xilodging":"0","xiseating":"0","werq":"0","polar_reservations":"0","crunchtime_inventory":"0","cms-drupal":"0","hr_maps":"0","fleet_ops-neptune":"0"}];
// ];

json_array2={};
// console.log(json_array[key][value])
 var testval=["medallion","guess_compass","crew_compass","hardware","xibiometrics","xilock","xiportal","xireader","ocean_light","xisensor","xiconnect","xiidentity","xiintel","xilocate","ximaximizer","xiorchestrate","xipersonalizer","xisocial","xiengage","ximessaging","xiship","xidestination","xifolio","xientitlements","xisynchronize","xibridge","xicms","xicommerce","xioms","xidata","xideploy","xifulfill","xiintegrate","xilodging","xiseating","werq","polar_reservations","crunchtime_inventory","cms-drupal","hr_maps","fleet_ops-neptune"];

  //    for(var i =0 ; i < json_array.length; i++){
  //            for (var j = 2; j < testval.length; j++) { //start at index 2 
  //              if(json_array[i][testval[j]] == '1'){
  //                   json_array2.push(json_array[i]['teams']);
  //                   json_array2.push(json_array[i]['work_stream']);
  //                   json_array2.push(testval[j]);
  //              }
  //            }
  //          }   
  //           var json = json_array.to
  // console.log(json_array2); 


  // <!--   <?php 
  //           $arr = ["medallion","guess_compass","crew_compass","hardware","xibiometrics","xilock","xiportal","xireader","ocean_light","xisensor","xiconnect","xiidentity","xiintel","xilocate","ximaximizer","xiorchestrate","xipersonalizer","xisocial","xiengage","ximessaging","xiship","xidestination","xifolio","xientitlements","xisynchronize","xibridge","xicms","xicommerce","xioms","xidata","xideploy","xifulfill","xiintegrate","xilodging","xiseating","werq","polar_reservations","crunchtime_inventory","cms-drupal","hr_maps","fleet_ops-neptune"];
  //           $count = count($arr);
  //           $team_display=[];

  //             // echo "{{t.".$arr[0]."}}";

  //             for ($j=0; $j < $count; $j++) { 
  //               echo $jsvar="{{t.".$arr[$j]."}}";
  //               if(in_array($jsvar ,$arr)){
  //                   echo "test";
  //                   array_push($team_display,"{{t.".$arr[$j]."}}  ");   
  //                 }   
  //               } 

          //  for($i = 0; $i < $count; $i++) {
          //      for ($j=0; $j < $count; $j++) { 
          //      if(in_array('{{t.'.$arr[$i].'}}' ,$arr)){
          //          echo "test";
          //          array_push($team_display,"{{t.".$arr[$i]."}}  ");   
          //        }     
          //      }

          // }
          //  $team_count= count($team_display);
          //   for ( $t = 0; $t <= $team_count; $t ++) {
          //       echo $team_display[$t].'<br>';
          //   }
          ?> -->


  for(var i =0 ; i < json_array.length; i++){
             for (var j = 0; j < testval.length; j++) { //start at index 2 

                    
               if(json_array[i][testval[j]] == '1'){
                    json_array[i][testval[j]] = testval[j];                
                      }else{
                        delete json_array[i][testval[j]];
                      }
             }
           }   
            // var json = json_array.to
  console.log(json_array); 
    

// json_array[i][testval[j]] =  testval[j]; 
 
 // var test = json_array[0][testval[5]] = testval[5]
 // console.log(test)