<div class="bar__module">
	<div class="modal-instance pull-right">
		<a class="modal-trigger menu-toggle" href="#" style="background-color:#3A3594 !important;">
				<i class="stack-interface stack-menu"></i>
			</a>
		<div class="modal-container menu-fullscreen">
			<div class="modal-content" data-width="100%" data-height="100%">
				<div class="pos-vertical-center pos-asbolute text-center">
					<ul class="menu-vertical" id="main_menu_items">
						@php
							$main_menu_items = \App\Models\MenuItem::with('sub_menu')->where('menu_id',1)->get();
						@endphp
						@foreach ($main_menu_items as $item)
							<li class="h2 pt-3"> 
								<a href="{{ $item->link }}" id="{{ $item->custom_class_name }}" class="main_menu_item_btn">
									{{ $item->title }}
									@if($item->link != '' && $item->link == '#')
										<i class="fas fa-arrow-right" style="color:#fff;"></i>
									@endif
								</a> 
							</li>
						@endforeach
					</ul>
					@foreach ($main_menu_items as $item)
						<ul class="menu-vertical {{ $item->custom_class_name }}" style="display:none">
							<li class="h2 pt-3"> 
								<a href="#" class="back_to_main_menu_items">
									<i class="fas fa-arrow-left" style="color:#fff;"></i>
								</a> 
							</li>
							@foreach ($item->sub_menu as $sub_item)
								<li class="h2 pt-3"> 
									<a href="{{ $sub_item->link }}">
										{{ $sub_item->title }}
									</a> 
								</li>
							@endforeach
						</ul>
					@endforeach
				</div>
				<div class="pos-absolute pos-bottom text-center">
					<p class="type--fine-print">© Copyright 2022 - Made by MergedMedia</p>
				</div>
			</div>
		</div>
	</div>
</div>