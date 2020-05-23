

<div class="container mt-3">
			<div style=" border: 1px solid #eaedef;
				border-radius: 10px; padding: 3%">
				@foreach($comment as $u)
				<div class="media border p-3 mt-3">
					<div class="media-body">
						<h4>{{$u->users_id}}</h4> <small><i>{{$u->created_at}}</i></small>
						<p>{{$u->cmt_text}}</p>
					</div>
				</div>
				@endforeach
			</div>
			
		</div>

