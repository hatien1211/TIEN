<div class="col-3"> 
			<div class="accordion" id="accordionExample" style="width: 100%">
			  	<div class="card">
			  		<div class="card-header">
			  			<h5 align="center" style="color: green">
                        DANH MỤC QUẢN LÝ
                        </h5></div>
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          PHÒNG
				        </button>
				      </h2>
				    </div>

				    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        <ul class="list-group list-group-flush" style="width: 100%">
						  <li class="list-group-item">First item</li>
						  <li class="list-group-item">Second item</li>
						</ul>
				      </div>
				    </div>
			 	</div>


				<div class="card">
				    <div class="card-header" id="headingTwo">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          USERS
				        </button>
				      </h2>
				    </div>

				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					    <div class="card-body">
					        <ul class="list-group list-group-flush" style="width: 100%">
							  <li class="list-group-item" ><a href="{{route('lists')}}">Danh Sách</a></li>
							  <li class="list-group-item"><a href="{{route('show_addusers')}}">Thêm</a></li>
							</ul> 
					    </div>
				 	</div>
				</div>


			 	<div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          DỊCH VỤ
				        </button>
				      </h2>
				    </div>
				    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
				      <div class="card-body">
				        <ul class="list-group list-group-flush" style="width: 100%">
						  <li class="list-group-item" ><a href="{{route('listsDichvu')}}">Danh Sách</a></li>
						  <li class="list-group-item"><a href="{{route('show_adddichvu')}}">Thêm</a></li>
						</ul>
				      </div>
				    </div>		
				</div>



				<div class="card">
				    <div class="card-header" id="headingFive">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				          SLIDE
				        </button>
				      </h2>
				    </div>

				    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
					    <div class="card-body">
					        <ul class="list-group list-group-flush" style="width: 100%">
							  <li class="list-group-item" ><a href="{{route('listsSlide')}}">Danh Sách</a></li>
						  <li class="list-group-item"><a href="{{route('show_addslide')}}">Thêm</a></li>
							</ul> 
					    </div>
				 	</div>
				</div>


			 	<div class="card">
				    <div class="card-header" id="headingSix">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
				          COMMENT
				        </button>
				      </h2>
				    </div>
				    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
				      <div class="card-body">
				        <ul class="list-group list-group-flush" style="width: 100%">
						  <li class="list-group-item" ><a href="">Danh Sách</a></li>
						 
						</ul>
				      </div>
				    </div>		
				</div>


				<div class="card">
				    <div class="card-header" id="headingSix">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
				          ĐƠN ĐẶT
				        </button>
				      </h2>
				    </div>
				    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
				      <div class="card-body">
				        <ul class="list-group list-group-flush" style="width: 100%">
						  <li class="list-group-item">First item</li>
						  <li class="list-group-item">Second item</li>
						  <li class="list-group-item">Third item</li>
						</ul>
				      </div>
				    </div>		
				</div>


			</div>
		</div>