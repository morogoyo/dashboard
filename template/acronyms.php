
      <div class="col-sm-8">
          <div class="well">
            <!-- Display acronims  -->
          <div ng-controller='acronyms' > <h3>Acronyms</h3>
<!-- start icon  -->
          <div class="row">
          <div class="col-sm-4">
          <div><a href="forms/acronymform.php" class="col-sm-6 btn btn-info btn-xs ">
          <span class="glyphicon glyphicon-plus "></span> Add 
        </a></div>
 
          <div><a href="forms/update.php" class="col-sm-6 btn btn-info btn-xs btn-danger">
          <span class="glyphicon glyphicon-minus"></span> Remove</a>
          </div> 
        </div> 
        </div>
<!-- end of  icons --> 
           <div>  
          <input  type="text" name="acrofilter" ng-model = "acro"><button type="button" id="clearFilter" class="btn btn-danger" ng-click="clearFilter()">Clear</button>
          </div>
          <!-- acro table start -->
          <table class="table table-responsive table-condensed table-hover table-striped table-responsive table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Acronym</th>
                <th>Words</th>
               
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat ="x in acronym | filter : acro">
                <td>{{x.id}}</td>
                <td>{{x.acronym}}</td>
                <td>{{x.word}}</td>
                
              </tr>
              
            </tbody>
          </table>
          
          <!-- acro table finish -->
        </div>
         </div>
          </div>