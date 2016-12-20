<?php
require "header.php";
?>


    <div class="content">
        <div class="header">
            
            <h1 class="page-title">Users</h1>
                    <ul class="breadcrumb">
            <li><a href="dashboard.php">Home</a> </li>
            <li class="active">View Complain</li>
        </ul>

        </div>
        <div class="main-content">
            
<div class="btn-toolbar list-toolbar">
	<div class="input-group search pull-left hidden-sm hidden-xs">
            <div class="input-group">
			<span class="input-group-btn">
                  <button class="btn btn-primary" type="button"><i class="fa fa-search "></i></button>
              </span>
              <input type="text" class="form-control">
              
            </div>
        </div>
		
    
  <div class="btn-group">
  </div>
</div>
<table class="table">
  <thead>
    <tr> 
      <th style="width: 4.5em;">Sr.No</th>
      <th style="width: 9.5em;">Complain ID</th>
      <th>Complain Title</th>
      <th>Customer Name</th>
      <th>Eng Name</th>
	  <th>Status</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>CI_101</td>
      <td> My setup box is not working</td>
	  <td>Air Conditionar</td>
	  <td>Air Conditionar</td>
      <td><span class="label label-success tag">Open</span></td>
	  
    </tr>
     <tr>
      <td>2</td>
      <td>CI_102</td>
      <td>  Internet is very slow</td>
	  <td>Fridge</td>
	  <td>Fridge</td>
      <td><span class="label label-primary tag">Assigned</span> </td>
	  
    </tr>
     <tr>
      <td>3</td>
      <td>CI_103</td>
      <td> My setup box is not working</td>
	  <td>Air Conditionar</td>
	  <td>Air Conditionar</td>
      <td> <span class="label label-primary tag">Working</span></td>
	  
    </tr>
	 <tr>
      <td>4</td>
      <td>CI_104</td>
      <td> My setup box is not working</td>
	  <td>Air Conditionar</td>
	  <td>Air Conditionar</td>
      <td><span class="label label-danger tag">Close</span></td>
	  
    </tr>
   
  </tbody>
</table>

<ul class="pagination">
  <li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>



<?php
require "footer.php";
?>