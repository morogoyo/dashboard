<div class="col-sm-8">
          <div class="well">

<div><label>  Search</label>
<input type="ng-submit=" ng-model="team" />   </div>
<div   ng-controller="teams">
    
<table class="table table-responsive table-condensed table-hover table-striped table-responsive table-bordered">
    <thead>
      <tr>

        <th>Teams</th>
        <th>Work Stream</th>       
        <th>Components</th>
        <th>Description</th>
        
          
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat=" t in teams | filter : team ">
        <!-- | filter : teams -->
        <td>{{t.teams}}</td>
        <td>{{t.work_stream}}</td>
        <td>{{t.component}}</td>
        <td>{{t.description}}</td>
        
      </tr>
      
    </tbody>
  </table>
</div>
</div>
</div>
