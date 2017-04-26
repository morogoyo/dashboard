<?php 
include("include/initScript.php"); 
include('classes/class.pulse.php');
include("./classes/class.sql.php");

?>

<div><label>  Search</label>
<input type="ng-submit=" ng-model="search.release" />   </div>
<div  class="col-lg-9" ng-controller="releaseCtrl">
    
<table class=" table table-responsive table-striped table-bordered table-hover table-condensed">
    <thead>
      <tr>

        <th>RELEASE</th>
        <th>Planning Start</th>       
        <th>Planning End</th>
        <th>Sprint #1</th>
        <th>Sprint Start</th>
        <th>Sprint End</th>       
        <th>Sprint #2</th>
        <th>Sprint 1 Start</th>
        <th>Sprint 2 End</th>
        <th>END TO END TESTING Start</th>
        <th>END TO END TESTING End</th> 
          
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat=" r in release | filter:search ">
        <!-- | filter : teams -->
        <td>{{r.release}}</td>
        <td>{{r.release_planning_start}}</td>
        <td>{{r.release_planning_end}}</td>
        <td>{{r.first_sprint}}</td>
        <td>{{r.first_sprint_start}}</td>
        <td>{{r.firts_sprint_end}}</td>
        <td>{{r.second_sprint}}</td>
        <td>{{r.second_sprint_start}}</td>
        <td>{{r.second_sprit_end}}</td>
        <td>{{r.ete_start}}</td>
        <td>{{r.ete_end}}</td>
        
        
      </tr>
      
    </tbody>
  </table>
</div>
<?php
   

 include('include/footer.php');



 ?>
