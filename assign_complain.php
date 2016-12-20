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
   
    <a href="#AddcomplainModel" role="button" class="btn btn-primary" data-toggle="modal"><i class="fa fa-plus"></i> &nbsp;New Complain</a>
 

  <div class="btn-group">
  </div>
</div>
<table class="table">
  <thead>
    <tr> 
      <th style="width: 4.5em;">Sr.No</th>
      <th style="width: 9.5em;">Complain ID</th>
      <th>Complain Title</th>
      <th>Equipment Type</th>
	  <th>Status</th>
      <th style="width: 3.5em;"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>CI_101</td>
      <td> My setup box is not working</td>
	  <td>Air Conditionar</td>
      <td><span class="label label-success tag">Open</span></td>
	  <td>
          <a href="#MyEditModel" role="button" data-toggle="modal"><i class="fa fa-pencil"></i></a>
          <a href="#myDeleteModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
      </td>
    </tr>
     <tr>
      <td>2</td>
      <td>CI_102</td>
      <td>  Internet is very slow</td>
	  <td>Fridge</td>
      <td><span class="label label-primary tag">Assigned</span> </td>
	  <td>
          <a href="#MyEditModel" role="button" data-toggle="modal"><i class="fa fa-pencil"></i></a>
          <a href="#myDeleteModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
      </td>
    </tr>
     <tr>
      <td>3</td>
      <td>CI_103</td>
      <td> My setup box is not working</td>
	  <td>Air Conditionar</td>
      <td> <span class="label label-primary tag">Working</span></td>
	  <td>
          <a href="#MyEditModel" role="button" data-toggle="modal"><i class="fa fa-pencil"></i></a>
          <a href="#myDeleteModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
      </td>
    </tr>
	 <tr>
      <td>4</td>
      <td>CI_104</td>
      <td> My setup box is not working</td>
	  <td>Air Conditionar</td>
      <td><span class="label label-danger tag">Close</span></td>
	  <td>
          <a href="#MyEditModel" role="button" data-toggle="modal"><i class="fa fa-pencil"></i></a>
          <a href="#myDeleteModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
      </td>
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

<!-- Delete comaplain popup -->
		<div class="modal small fade" id="myDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Delete Confirmation</h3>
				</div>
				<div class="modal-body">
					<p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the complain?<br>This cannot be undone.</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
					<button class="btn btn-danger" data-dismiss="modal">Delete</button>
				</div>
			  </div>
			</div>
		</div>
<!-- End Delete comaplain popup -->

<!-- Edit comaplain popup -->
		<div class="modal big fade" id="MyEditModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button>
					<h4 id="myModalLabel">Assign Complain</h4>
				</div>
				<div class="modal-body">
					<table width="100%" border="0" cellpadding="2" cellspacing="1" class="table">
								  <tbody>
								  <input type="hidden" name="compId" value="11">
								  <tr >
									<td><label>Complainer Name</label> </td>
									<td><input type="text" value="Akash Patel" class="form-control" readonly="readonly"></td>
								  </tr>
								  <tr >
									<td><label>Complainer Title</label> </td>
									<td><input type="text" value="problem in installation" class="form-control" readonly="readonly"></td>
								  </tr>

								  <tr>
									<td><label>Complainer Description</label> </td>  
									<td>
									<textarea name="compDesc"  class="form-control" id="compDesc" readonly="readonly">Facing problem in installation of WLAN. Pls assist.</textarea></td>
								  </tr>
								  <tr>
									<td><label>Complain Status</label> </td>  
									<td ><span class="label label-primary tag">Working</span></td>
								  </tr>
								  <tr>
									<td> <label>Date Of Creation</label> </td>
									<td >2013-11-29 09:48:32 </td>
								  </tr>
								  
								  <tr>
									<td > <label> Assign Complain To </label></td>
									<td >
									<select name="DropDownEngID" id="DropDownEngID" class="form-control">
										  <option value="-12.0">Amol sarode</option>
										  <option value="-11.0">Ramiz Khan</option>
										  <option value="-11.0">Mubarak Bahesti</option>
										</select>			</td>
								  </tr>
							  
								 
							  </tbody></table>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
					<button class="btn btn-danger" data-dismiss="modal">Assign Complain</button>
				</div>
			  </div>
			</div>
		</div>
<!-- End Edit comaplain popup -->
<!-- Add engineer popup -->
		<div class="modal big fade" id="AddcomplainModel" tabindex="-1" role="dialog" aria-labelledby="AddcomplainModel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button>
					<h4 id="myModalLabel">Add New Complain</h4>
				</div>
				<div class="modal-body">
					<table width="100%" border="0" cellpadding="2" cellspacing="1" class="table">
								  <tbody>
								  <input type="hidden" name="compId" value="11">
								  <tr >
									<td><label>Complainer Name</label> </td>
									<td><input type="text" value="Akash Patel" class="form-control" ></td>
								  </tr>
								   <tr >
									<td><label>Complainer Mobile No.</label> </td>
									<td><input type="text" value="Akash Patel" class="form-control" ></td>
								  </tr>
								   <tr >
									<td><label>Complainer Address</label> </td>
									<td><textarea name="compDesc"  class="form-control" id="compDesc" >Facing problem in installation of WLAN. Pls assist.</textarea></td>
								  </tr>
								  <tr>
									  <td >complain type </td>
									  <td ><select name="txttype" class="form-control"> 
									  <option> Hardware Failure  </option>
									  <option> Hardware Replacement  </option>
									  <option> Software Installation /Upgradation </option>
									  <option> Network / LAN / Internet Problem</option> 
									  
									  </select></td>
									</tr>
								  <tr >
									<td><label>Complain Title</label> </td>
									<td><input type="text" value="problem in installation" class="form-control" ></td>
								  </tr>

								  <tr>
									<td><label>Complain Description</label> </td>  
									<td>
									<textarea name="compDesc"  class="form-control" id="compDesc" >Facing problem in installation of WLAN. Pls assist.</textarea></td>
								  </tr>
								  <tr>
									<td><label>Complain Type</label> </td>  
								  <td >
									<select name="DropDownEngID" id="DropDownEngID" class="form-control">
										  <option value="Warranty">Warranty</option>
										  <option value="Paid">Paid</option>
										  <option value="New Installation">New Installation</option>
										  <option value="Free Service">Free Service</option>
										</select>			</td></tr>
							  </tbody></table>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
					<button class="btn btn-primary" data-dismiss="modal">Add Complain</button>
				</div>
			  </div>
			</div>
		</div>
<!-- End Add engineer popup -->
<?php
require "footer.php";
?>