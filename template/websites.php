 <div class="col-sm-8">
          <div class="well">
          <div ng-controller='sites' > 
          <h3 >Web Resources</h3>
<!-- start icon  -->
          <div class="row">
          <div class="col-sm-4">
          <div><a href="forms/webform.php" class="col-sm-6 btn btn-info btn-xs ">
          <span class="glyphicon glyphicon-plus "></span> Add 
        </a></div>
 
          <div><a href="forms/update.php" class="col-sm-6 btn btn-info btn-xs btn-danger">
          <span class="glyphicon glyphicon-minus"></span> Remove
        </a></div> 
        </div> 
        </div>
<!-- end of  icons --> 
            <input type="text" name="websitefilter" ng-model = "web"><input type="button" id="clearFilter" value="clear" 
            class="btn btn-danger"  ng-click = 'clearFilter()'>
            <!-- this is a directive to show a form on the front end -->
            <!-- <test></test> -->
            <!-- web table start -->
            <table class="table table-responsive table-condensed table-hover table-striped table-responsive table-bordered">
              <thead>
                <tr>
                  <th>ID </th>
                  <th>NAME/ADDRESS</th>
                  <th>ASSET TYPE</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat ="x in sites | orderBy:'name' | filter : web">
                  <td>{{x.id }}</td>
                  <td><a href="{{x.address}}" target="_blank">{{x.name }}</a></td>
                  <td>{{x.type}}</td>
                 
                </tr>
                
              </tbody>
            </table>
            <!-- web table end -->
            
          </div>
          </div>
        </div>