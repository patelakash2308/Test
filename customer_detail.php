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
<a href="#AddEngineerModel" role="button" class="btn btn-primary" data-toggle="modal"><i class="fa fa-plus"></i> &nbsp; New Customer</a>
 
		<div class="input-group search pull-right hidden-sm hidden-xs">
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
      
      <th>Customer Name</th>
      <th>Email ID</th>
      <th>Mobile No.</th>
	  <th>Status</th>
      <th style="text-align: center;"> Edit / Detail  </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      
      <td> Akash Patel</td>
	  <td>patelakash2308@gmail.com	</td>
	  <td> 8866371774</td>
      <td><span class="label label-success tag">Active</span></td>
	   <td align="center">
          <a href="#EditEngineerModel" role="button" data-toggle="modal"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#EngDeleteModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
      </td>
    </tr>
    
     
	 <tr>
      <td>2</td>
      
      <td> Ramjaan solanki</td>
	  <td> ramjaan@gmail.com  </td>
	  <td> 88866663214 </td>
      <td><span class="label label-danger tag">De-active</span></td>
	  <td align="center">
          <a href="#EditEngineerModel" role="button" data-toggle="modal"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#EngDeleteModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
      </td>
    </tr>
   
  </tbody>
</table>


	
<!-- Edit comaplain popup -->
		<div class="modal big fade" id="AddEngineerModel" tabindex="-1" role="dialog" aria-labelledby="AddEngineerModel" aria-hidden="true">
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
									<td><label> Customer Name</label> </td>
									<td><input type="text"  class="form-control" ></td>
								  </tr>
								  <tr >
									<td><label> E-mail ID</label> </td>
									<td><input type="text"  class="form-control" ></td>
								  </tr>
									<tr>
									<td><label> Mobile No.</label> </td>  
									<td> <input type="text"  class="form-control" ></td>
								  </tr>
								  <tr>
									<td><label> Address.</label> </td>  
									<td>
									<textarea name="compDesc"  class="form-control" id="compDesc" ></textarea></td>
								  </tr>
								  <tr>
									<td><label> District</label> </td>  
									<td>
									<select name="DropDownEngID" id="DropDownEngID" class="form-control">
										  <option value="-12.0">Amol sarode</option>
										  <option value="-11.0">Ramiz Khan</option>
										  <option value="-11.0">Mubarak Bahesti</option>
										</select>		
								  </tr>
								  
								 
							  </tbody></table>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
					<button class="btn btn-primary" data-dismiss="modal">Add Customer</button>
				</div>
			  </div>
			</div>
		</div>
<!-- End Edit comaplain popup -->


	
<!-- Edit comaplain popup -->
		<div class="modal big fade" id="EditEngineerModel" tabindex="-1" role="dialog" aria-labelledby="EditEngineerModel" aria-hidden="true">
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
									<td><label> Customer Name</label> </td>
									<td><input type="text"  class="form-control" ></td>
								  </tr>
								  <tr >
									<td><label> E-mail ID</label> </td>
									<td><input type="text"  class="form-control" ></td>
								  </tr>
									<tr>
									<td><label> Mobile No.</label> </td>  
									<td> <input type="text"  class="form-control" ></td>
								  </tr>
								  <tr>
									<td><label> Address.</label> </td>  
									<td>
									<textarea name="compDesc"  class="form-control" id="compDesc" ></textarea></td>
								  </tr>
								  <tr>
									<td><label> District</label> </td>  
									<td>
									<select name="DropDownEngID" id="DropDownEngID" class="form-control">
										  <option value="-12.0">Amol sarode</option>
										  <option value="-11.0">Ramiz Khan</option>
										  <option value="-11.0">Mubarak Bahesti</option>
										</select></td>
								  </tr>
								 
								 
							  </tbody></table>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
					<button class="btn btn-primary" data-dismiss="modal">Update</button>
				</div>
			  </div>
			</div>
		</div>
<!-- End Edit comaplain popup -->




<!-- Delete comaplain popup -->
		<div class="modal small fade" id="EngDeleteModal" tabindex="-1" role="dialog" aria-labelledby="EngDeleteModal" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Delete Confirmation</h3>
				</div>
				<div class="modal-body">
					<p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the customer?<br>This cannot be undone.</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
					<button class="btn btn-danger" data-dismiss="modal">Delete</button>
				</div>
			  </div>
			</div>
		</div>
<!-- End Delete comaplain popup -->
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