@extends('layouts.master')
@section('title')
    LogIn
@endsection
@section('content')
		<!-- Start Bannere Area -->
		<section class="banner_area programmes_bg margin-40">
			<div class="container">
				<div class="banner_content p-250 text-left">
					<p><a href="index.html">home<i class="fas fa-angle-right"></i></a>department<i class="fas fa-angle-right"></i>CSE</a></p>
				</div>
			</div>
		</section> 
		<!-- End Bannere Area -->

		<!-- Start Courses_top Area -->
		<div class="course_top_area margin-bottom-100">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="c_top_left">
							<img src="assets/images/cse1.jpg" alt="" />
							<p>Department of Computer Science & Engineering</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="c_top_right">
							<ul>
								<li>Duration : <span>4 Years</span></li>
								<li>Total Credits : <span> 150</span></li>
								<li>Availability : <span>Day/Evening</span></li>
								<li>Entry Time : <span>January/ May/ September</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Courses_top Area -->
		
		<div class="course_title_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="semester-tab" data-toggle="tab" href="#semester" role="tab" aria-controls="semester" aria-selected="true">All semester</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="faculty-tab" data-toggle="tab" href="#faculty" role="tab" aria-controls="faculty" aria-selected="false">Faculty</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="semester" role="tabpanel" aria-labelledby="semester-tab">
								<div class="row">
									<div class="col-3">
										<div class="semester_menu">
											<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											  <a class="nav-link active" id="v-pills-first-tab" data-toggle="pill" href="#v-pills-first" role="tab" aria-controls="v-pills-first" aria-selected="true">1st semester</a>
											  <a class="nav-link" id="v-pills-second-tab" data-toggle="pill" href="#v-pills-second" role="tab" aria-controls="v-pills-second" aria-selected="false">2nd semester</a>
											  <a class="nav-link" id="v-pills-third-tab" data-toggle="pill" href="#v-pills-third" role="tab" aria-controls="v-pills-third" aria-selected="false">3rd semester</a>
											  <a class="nav-link" id="v-pills-forth-tab" data-toggle="pill" href="#v-pills-forth" role="tab" aria-controls="v-pills-forth" aria-selected="false">4th semester</a>
											  <a class="nav-link" id="v-pills-five-tab" data-toggle="pill" href="#v-pills-five" role="tab" aria-controls="v-pills-five" aria-selected="false">5th semester</a>
											  <a class="nav-link" id="v-pills-six-tab" data-toggle="pill" href="#v-pills-six" role="tab" aria-controls="v-pills-six" aria-selected="false">6th semester</a>
											  <a class="nav-link" id="v-pills-seven-tab" data-toggle="pill" href="#v-pills-seven" role="tab" aria-controls="v-pills-seven" aria-selected="false">7th semester</a>
											  <a class="nav-link" id="v-pills-eight-tab" data-toggle="pill" href="#v-pills-eight" role="tab" aria-controls="v-pills-eight" aria-selected="false">8th semester</a>
											  <a class="nav-link" id="v-pills-nine-tab" data-toggle="pill" href="#v-pills-nine" role="tab" aria-controls="v-pills-nine" aria-selected="false">9th semester</a>
											  <a class="nav-link" id="v-pills-ten-tab" data-toggle="pill" href="#v-pills-ten" role="tab" aria-controls="v-pills-ten" aria-selected="false">10th semester</a>
											  <a class="nav-link" id="v-pills-eleven-tab" data-toggle="pill" href="#v-pills-eleven" role="tab" aria-controls="v-pills-eleven" aria-selected="false">11th semester</a>
											  <a class="nav-link" id="v-pills-twelve-tab" data-toggle="pill" href="#v-pills-twelve" role="tab" aria-controls="v-pills-twelve" aria-selected="false">12th semester</a>
											</div>
										</div>
									</div>
									<div class="col-9">
										<div class="s_cou_area">
											<div class="row">
												<div class="col-md-6">
													<form action="">
														<input type="text" placeholder="search courses" />
														<a href=""><i class="fas fa-search"></i></a>
													</form>
												</div>
											</div>
										</div>
										<div class="semester_details">
											<div class="tab-content" id="v-pills-tabContent">
											  <div class="tab-pane fade show active" id="v-pills-first" role="tabpanel" aria-labelledby="v-pills-first-tab">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">List of Courses</th>
														  <th scope="col">code</th>
														  <th scope="col">credit</th>
														</tr>
													</thead>
													<tbody>
														<tr>
														  <td>
															<div class="accordion" id="accordionExample">
																<div class="card">
																	<div class="card-header" id="headingOne">
																		<div class="single_course">
																		  <h2 class="mb-0">
																			<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
																			  <p>computer techonology</p>
																			  <i class="fas fa-plus "></i>
																			  <i class="fas fa-minus "></i>
																			</button>
																		  </h2>
																		</div>
																	</div>

																	<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
																	  <div class="card-body">
																		<table class="table">
																			<thead class="table_body">
																				<tr>
																				  <th scope="col">book name</th>
																				  <th scope="col">pdf link</th>
																				  <th scope="col">slide</th>
																				  <th scope="col">softwware download</th>
																				</tr>
																			</thead>
																			<tbody>
																				<tr>
																				  <th scope="row">comuter techonology</th>
																				  <td><a href="https://www.okcareertech.org/educators/assessments-and-testing/testing/study-guides/study-guides-ok-works-2015-2016/ComputerTechSG.pdf" target="_blank"> pdf</a></td>
																				  <td></td>
																				  <td><a href="http://www.codeblocks.org/downloads" target="_blank"><i class="fas fa-code"></i></a></td>
																				</tr>
																			</tbody>
																		</table>
																	  </div>
																	</div>
																</div>
															</div>
															</td>
															<td>CSE 111</td>
															<td>3</td>
														</tr>
														<tr>
															<td>
																<div class="accordion" id="accordionExample1">
																	<div class="card">
																		<div class="card-header" id="headingTwo">
																			<div class="single_course">
																			  <h2 class="mb-0">
																				<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
																					<p>Physics I</p> 
																					<i class="fas fa-plus "></i>
																					<i class="fas fa-minus "></i>
																				</button>
																			  </h2>
																			</div>
																		</div>

																		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample1">
																		  <div class="card-body">
																			<table class="table">
																				<thead class="table_body">
																					<tr>
																					  <th scope="col">book name</th>
																					  <th scope="col">pdf link</th>
																					  <th scope="col">slide</th>
																					  <th scope="col">softwware download</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <th scope="row">comuter techonology</th>
																					  <td><a href="https://www.okcareertech.org/educators/assessments-and-testing/testing/study-guides/study-guides-ok-works-2015-2016/ComputerTechSG.pdf" target="_blank"> pdf</a></td>
																					  <td></td>
																					  <td><a href="http://www.codeblocks.org/downloads" target="_blank"><i class="fas fa-code"></i></a>codeblocks</td>
																					</tr>
																				</tbody>
																			</table>
																		  </div>
																		</div>
																	</div>
																</div>
															</td>
														  <td>PHY 111</td>
														  <td>3</td>
														</tr>
													</tbody>
												</table>
											  </div>
											  <div class="tab-pane fade" id="v-pills-second" role="tabpanel" aria-labelledby="v-pills-second-tab">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">List of Courses</th>
														  <th scope="col">code</th>
														  <th scope="col">credit</th>
														</tr>
													</thead>
													<tbody>
														<tr>
														  <th scope="row">1</th>
														  <td>Mark</td>
														  <td>Otto</td>
														</tr>
													</tbody>
												</table>
											  </div>
											  <div class="tab-pane fade" id="v-pills-third" role="tabpanel" aria-labelledby="v-pills-third-tab">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">List of Courses</th>
														  <th scope="col">code</th>
														  <th scope="col">credit</th>
														</tr>
													</thead>
													<tbody>
														<tr>
														  <th scope="row">1</th>
														  <td>Mark</td>
														  <td>Otto</td>
														</tr>
													</tbody>
												</table>
											  </div>
											  <div class="tab-pane fade" id="v-pills-forth" role="tabpanel" aria-labelledby="v-pills-forth-tab">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">List of Courses</th>
														  <th scope="col">code</th>
														  <th scope="col">credit</th>
														</tr>
													</thead>
													<tbody>
														<tr>
														  <th scope="row">1</th>
														  <td>Mark</td>
														  <td>Otto</td>
														</tr>
													</tbody>
												</table>
											  </div>
											   <div class="tab-pane fade" id="v-pills-five" role="tabpanel" aria-labelledby="v-pills-five-tab">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">List of Courses</th>
														  <th scope="col">code</th>
														  <th scope="col">credit</th>
														</tr>
													</thead>
													<tbody>
														<tr>
														  <th scope="row">1</th>
														  <td>Mark</td>
														  <td>Otto</td>
														</tr>
													</tbody>
												</table>
											  </div>
											  <div class="tab-pane fade" id="v-pills-six" role="tabpanel" aria-labelledby="v-pills-six-tab">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">List of Courses</th>
														  <th scope="col">code</th>
														  <th scope="col">credit</th>
														</tr>
													</thead>
													<tbody>
														<tr>
														  <th scope="row">1</th>
														  <td>Mark</td>
														  <td>Otto</td>
														</tr>
													</tbody>
												</table>
											  </div>
											  <div class="tab-pane fade" id="v-pills-seven" role="tabpanel" aria-labelledby="v-pills-seven-tab">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">List of Courses</th>
														  <th scope="col">code</th>
														  <th scope="col">credit</th>
														</tr>
													</thead>
													<tbody>
														<tr>
														  <th scope="row">1</th>
														  <td>Mark</td>
														  <td>Otto</td>
														</tr>
													</tbody>
												</table>
											  </div>
											  <div class="tab-pane fade" id="v-pills-eight" role="tabpanel" aria-labelledby="v-pills-eight-tab">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">List of Courses</th>
														  <th scope="col">code</th>
														  <th scope="col">credit</th>
														</tr>
													</thead>
													<tbody>
														<tr>
														  <th scope="row">1</th>
														  <td>Mark</td>
														  <td>Otto</td>
														</tr>
													</tbody>
												</table>
											  </div>
											  <div class="tab-pane fade" id="v-pills-nine" role="tabpanel" aria-labelledby="v-pills-nine-tab">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">List of Courses</th>
														  <th scope="col">code</th>
														  <th scope="col">credit</th>
														</tr>
													</thead>
													<tbody>
														<tr>
														  <th scope="row">1</th>
														  <td>Mark</td>
														  <td>Otto</td>
														</tr>
													</tbody>
												</table>
											  </div>
											  <div class="tab-pane fade" id="v-pills-ten" role="tabpanel" aria-labelledby="v-pills-ten-tab">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">List of Courses</th>
														  <th scope="col">code</th>
														  <th scope="col">credit</th>
														</tr>
													</thead>
													<tbody>
														<tr>
														  <th scope="row">1</th>
														  <td>Mark</td>
														  <td>Otto</td>
														</tr>
													</tbody>
												</table>
											  </div>
											  <div class="tab-pane fade" id="v-pills-eleven" role="tabpanel" aria-labelledby="v-pills-eleven-tab">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">List of Courses</th>
														  <th scope="col">code</th>
														  <th scope="col">credit</th>
														</tr>
													</thead>
													<tbody>
														<tr>
														  <th scope="row">1</th>
														  <td>Mark</td>
														  <td>Otto</td>
														</tr>
													</tbody>
												</table>
											  </div>
											  <div class="tab-pane fade" id="v-pills-twelve" role="tabpanel" aria-labelledby="v-pills-twelve-tab">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">List of Courses</th>
														  <th scope="col">code</th>
														  <th scope="col">credit</th>
														</tr>
													</thead>
													<tbody>
														<tr>
														  <th scope="row">1</th>
														  <td>Mark</td>
														  <td>Otto</td>
														</tr>
													</tbody>
												</table>
											  </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="faculty" role="tabpanel" aria-labelledby="faculty-tab">
								<div class="s_cou_area">
									<div class="row">
										<div class="col-md-6">
											<form action="">
												<input type="text" placeholder="search teachers" />
												<a href=""><i class="fas fa-search"></i></a>
											</form>
										</div>
									</div>
								</div>
								<div class="cse_faculty_members">
									<div class="container">
										<div class="row">
											<div class="col-md-3">
												<div class="single_faculty">
													<img src="assets/images/cse_f2.png" alt="" />
													<p>Professor Dr. Md. Nazrul Haque Chowdhury</p>
													<ul>
														<li><a href=""><i class="fab fa-facebook-f"></i>
														</a></li>
														<li><a href=""><i class="fab fa-linkedin-in"></i>
														</a></li>
														<li><a href=""><i class="fab fa-twitter"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="col-md-3">
												<div class="single_faculty">
													<img src="assets/images/cse_f1.png" alt="" />
													<p>Choudhury M. Mukammel Wahid</p>
													<ul>
														<li><a href=""><i class="fab fa-facebook-f"></i>
														</a></li>
														<li><a href=""><i class="fab fa-linkedin-in"></i>
														</a></li>
														<li><a href=""><i class="fab fa-twitter"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="col-md-3">
												<div class="single_faculty">
													<img src="assets/images/cse_f1.png" alt="" />
													<p>Choudhury M. Mukammel Wahid</p>
													<ul>
														<li><a href=""><i class="fab fa-facebook-f"></i>
														</a></li>
														<li><a href=""><i class="fab fa-linkedin-in"></i>
														</a></li>
														<li><a href=""><i class="fab fa-twitter"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="col-md-3">
												<div class="single_faculty">
													<img src="assets/images/cse_f1.png" alt="" />
													<p>Choudhury M. Mukammel Wahid</p>
													<ul>
														<li><a href=""><i class="fab fa-facebook-f"></i>
														</a></li>
														<li><a href=""><i class="fab fa-linkedin-in"></i>
														</a></li>
														<li><a href=""><i class="fab fa-twitter"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="col-md-3">
												<div class="single_faculty">
													<img src="assets/images/cse_f1.png" alt="" />
													<p>Choudhury M. Mukammel Wahid</p>
													<ul>
														<li><a href=""><i class="fab fa-facebook-f"></i>
														</a></li>
														<li><a href=""><i class="fab fa-linkedin-in"></i>
														</a></li>
														<li><a href=""><i class="fab fa-twitter"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="col-md-3">
												<div class="single_faculty">
													<img src="assets/images/cse_f1.png" alt="" />
													<p>Choudhury M. Mukammel Wahid</p>
													<ul>
														<li><a href=""><i class="fab fa-facebook-f"></i>
														</a></li>
														<li><a href=""><i class="fab fa-linkedin-in"></i>
														</a></li>
														<li><a href=""><i class="fab fa-twitter"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<!--  Start Course details Area  -->
	
	
		
		 @endsection