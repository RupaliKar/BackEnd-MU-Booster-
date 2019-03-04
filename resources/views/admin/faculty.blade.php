@extends('admin.main')
@section('title')
  Faculty
@endsection
@section('content')
		<div class="header_top">
			<div class="container-fluid no_padding">
				<div class="header_left">
					<a href="#"><p>MU-Booster</p>
					</a>
				</div>
				<div class="admin_sidebar_menu">
					<div class="user_panel">
						<img src="assets/images/prof2.jpg" alt="" />
						<p>Rupa</p>
					</div>
					<div class="menu text-left">
						<ul>
							<li><a href="admin.html"><i class="fas fa-columns"></i>deshboard</a></li>
							<li><a href="faculty.html"><i class="far fa-user"></i>faculty</a></li>
							<li><a href="department.html"><i class="fab fa-accusoft"></i>department</a></li>
							<li><a href="semester.html"><i class="far fa-bookmark"></i>semester</a></li>
							<li><a href="course_component.html"><i class="fas fa-book-open"></i>course details</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="admin_area">
			<div class="container-fluid no_padding">
				<div class="header_right">
					<ul>
						<li><a href="">admin</a></li>
						<li><a href="#"><img src="assets/images/user.jpg" alt="" /><i class="fas fa-arrow-down"></i>
						</a>
							<ul>
								<li><a href="">logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="faculty_area">
					<div class="admin_body">
							<div class="search_area">
								<form action="">
									<input type="text" placeholder="search"/>
									<a href=""><i class="fas fa-search"></i></a>
								</form>
							</div>
							<div class="add_faculty">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
									Add faculty
								</button>
								<!-- Modal -->
								<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle">ADD FACULTY</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="faculty_area">
												<div class="faculty_body">
													<form action="">
														<div class="form-group">
															<label for="exampleInputName">Name</label>
															<input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Name">
														</div>
														<div class="form-group">
															<label for="exampleInputGender">gender</label>
															<select class="form-control">
																<option>gender</option>
																<option>male</option>
																<option>female</option>
															</select>
														</div>
														<div class="form-group">
															<label for="exampleInputPhone">Phone</label>
															<input type="Phone" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Phone">
														</div>
														<div class="form-group">
															<label for="exampleInputDepartment">department</label>
															<select class="form-control">
																<option>select department</option>
																<option>Cse</option>
																<option>Eee</option>
																<option>Eco</option>
																<option>Bba</option>
																<option>eng</option>
																<option>llb</option>
															</select>
														</div>
														 <div class="form-group">
															<label for="exampleFormControlFile1">Example file input</label>
															<input type="file" class="form-control-file" id="exampleFormControlFile1">
														  </div>
														<button type="submit" class="btn btn-primary">Submit</button>
													</form>
												</div>
											</div>	
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									    </div>
									</div>
								  </div>
								</div>
							</div>		
							<div class="faculty_list">
								<table class="table">
									<thead class="thead-dark">
										<tr>
										  <th scope="col">id</th>
										  <th scope="col">name</th>
										  <th scope="col">gender</th>
										  <th scope="col">Phone</th>
										  <th scope="col">department</th>
										  <th scope="col">image</th>
										  <th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
											<td>@mdo</td>
											<td>@mdo</td>
											<td>
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong1">
													View
												</button>
												<!-- Modal -->
												<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
												  <div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle1"> FACULTY PROFILE</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															  <span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="faculty_area">
																<div class="faculty_body">
																	<div class="card" style="width: 18rem;">
																	  <img src="assets/images/1.jpg" class="card-img-top" alt="...">
																	  <div class="card-body">
																		<h5 class="card_title">Naima Ahmed Fahmi</h5>
																		<p>Senior Lecturer</p>
																		<span>Metropolitan University</span>
																		<div class="social_link">
																			<ul>
																				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
																				<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
																				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
																				<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
																			</ul>
																		</div>
																	  </div>
																	</div>
																</div>
															</div>	
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														</div>
													</div>
												  </div>
												</div>
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong2">
													Edit
												</button>
												<!-- Modal -->
												<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
												  <div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle2">EDIT FACULTY</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															  <span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="faculty_area">
																<div class="faculty_body">
																	<form action="">
																		<div class="form-group">
																			<label for="exampleInputName">Name</label>
																			<input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Name">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputGender">gender</label>
																			<select class="form-control">
																				<option>gender</option>
																				<option>male</option>
																				<option>female</option>
																			</select>
																		</div>
																		<div class="form-group">
																			<label for="exampleInputPhone">Phone</label>
																			<input type="Phone" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Phone">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputDepartment">department</label>
																			<select class="form-control">
																				<option>select department</option>
																				<option>Cse</option>
																				<option>Eee</option>
																				<option>Eco</option>
																				<option>Bba</option>
																				<option>eng</option>
																				<option>llb</option>
																			</select>
																		</div>
																		 <div class="form-group">
																			<label for="exampleFormControlFile1">Example file input</label>
																			<input type="file" class="form-control-file" id="exampleFormControlFile1">
																		  </div>
																		<button type="submit" class="btn btn-primary">Submit</button>
																	</form>
																</div>
															</div>	
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														</div>
													</div>
												  </div>
												</div>
												<button type="button" class="btn btn-danger">Delete</button>
											</td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
											<td>@mdo</td>
											<td>@mdo</td>
											<td>
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong1">
													View
												</button>
												<!-- Modal -->
												<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
												  <div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle1"> FACULTY PROFILE</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															  <span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="faculty_area">
																<div class="faculty_body">
																	<div class="card" style="width: 18rem;">
																	  <img src="assets/images/1.jpg" class="card-img-top" alt="...">
																	  <div class="card-body">
																		<h5 class="card_title">Naima Ahmed Fahmi</h5>
																		<p>Senior Lecturer</p>
																		<span>Metropolitan University</span>
																		<div class="social_link">
																			<ul>
																				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
																				<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
																				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
																				<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
																			</ul>
																		</div>
																	  </div>
																	</div>
																</div>
															</div>	
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														</div>
													</div>
												  </div>
												</div>
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong2">
													Edit
												</button>
												<!-- Modal -->
												<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle2" aria-hidden="true">
												  <div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle2">EDIT FACULTY</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															  <span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="faculty_area">
																<div class="faculty_body">
																	<form action="">
																		<div class="form-group">
																			<label for="exampleInputName">Name</label>
																			<input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Name">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputGender">gender</label>
																			<select class="form-control">
																				<option>gender</option>
																				<option>male</option>
																				<option>female</option>
																			</select>
																		</div>
																		<div class="form-group">
																			<label for="exampleInputPhone">Phone</label>
																			<input type="Phone" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Phone">
																		</div>
																		<div class="form-group">
																			<label for="exampleInputDepartment">department</label>
																			<select class="form-control">
																				<option>select department</option>
																				<option>Cse</option>
																				<option>Eee</option>
																				<option>Eco</option>
																				<option>Bba</option>
																				<option>eng</option>
																				<option>llb</option>
																			</select>
																		</div>
																		 <div class="form-group">
																			<label for="exampleFormControlFile1">Example file input</label>
																			<input type="file" class="form-control-file" id="exampleFormControlFile1">
																		  </div>
																		<button type="submit" class="btn btn-primary">Submit</button>
																	</form>
																</div>
															</div>	
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														</div>
													</div>
												  </div>
												</div>
												<button type="button" class="btn btn-danger">Delete</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
				</div>
			</div>
		</div>

      @endsection