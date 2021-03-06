@extends('home')

@section('page-title')
    {{ trans('pages/event.create.page_title') }}
@endsection

@section('page-content')
@include('layouts.breadcrum', ['title' => trans('pages/event.create.breadcrumb')])

<div class="container-fluid">
	{!! Form::open(['route' => ['event.store'], 'class' => 'form-horizontal', 'files' => true]) !!}
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">{{ trans('pages/event.create.form_header') }}</h4>
					<div class="form-group row">
						<label for="identification" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/event.fields.identification') }}</label>
						<div class="col-sm-7">
							{!! Form::text('identification', old('identification'), ['class' => $errors->first('identification') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/event.fields.identification'), 'required' => true]) !!}
							@error('identification')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/event.fields.name') }}</label>
						<div class="col-sm-7">
							{!! Form::text('name', old('name'), ['class' => $errors->first('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/event.fields.name'), 'required' => true]) !!}
							@error('name')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/event.fields.email') }}</label>
						<div class="col-sm-7">
							{!! Form::email('email', old('email'), ['class' => $errors->first('email') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/event.fields.email'), 'required' => true]) !!}
							@error('email')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="address" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/event.fields.address') }}</label>
						<div class="col-sm-7">
							{{ Form::textarea("address", null, ['class' => $errors->first('address') ? 'form-control is-invalid' : 'form-control', "placeholder" => trans('pages/event.fields.address'), 'required' => true, 'rows' => 3]) }}
							@error('address')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="start_date" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/event.fields.start_date') }}</label>
						<div class="col-sm-7">
							{!! Form::text('start_date', old('start_date'), ['class' => $errors->first('start_date') ? 'form-control datetimepicker is-invalid' : 'form-control datetimepicker', 'placeholder' => trans('pages/event.fields.start_date'), 'required' => true]) !!}
							@error('start_date')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="end_date" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/event.fields.end_date') }}</label>
						<div class="col-sm-7">
							{!! Form::text('end_date', old('end_date'), ['class' => $errors->first('end_date') ? 'form-control datetimepicker is-invalid' : 'form-control datetimepicker', 'placeholder' => trans('pages/event.fields.end_date'), 'required' => true]) !!}
							@error('end_date')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="client" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/event.fields.client') }}</label>
						<div class="col-sm-7">
							{!! Form::text('client', old('client'), ['class' => $errors->first('client') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/event.fields.client'), 'required' => true]) !!}
							@error('client')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="phone" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/event.fields.phone') }}</label>
						<div class="col-sm-7">
							{!! Form::text('phone', old('phone'), ['class' => $errors->first('phone') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/event.fields.phone'), 'required' => true]) !!}
							@error('phone')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="payment_method" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/event.fields.payment_method') }}</label>
						<div class="col-sm-7">
							{!! Form::select('payment_method', ['' => __("select"), 'pago_movil' => "Pago movil", 'transferencia' => "Transferencia"],  old('payment_method'), ['class' => 'form-control select2 hidden-search']) !!}
							@error('payment_method')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="reference_code" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/event.fields.reference_code') }}</label>
						<div class="col-sm-7">
							{!! Form::text('reference_code', old('reference_code'), ['class' => $errors->first('reference_code') ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('pages/event.fields.reference_code'), 'required' => true]) !!}
							@error('reference_code')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="observations" class="col-sm-3 text-right control-label col-form-label">{{ trans('pages/event.fields.observations') }}</label>
						<div class="col-sm-7">
							{{ Form::textarea("observations", old('observations'), ['class' => $errors->first('observations') ? 'form-control is-invalid' : 'form-control', "placeholder" => trans('pages/event.fields.observations'), 'rows' => 3]) }}
							@error('observations')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			@if(!empty($availability = $availability ?? session()->get('availability')))
			<div class="alert alert-danger" role="alert">
				<h4 class="alert-heading">Cantidad de productos disponible del listado</h4>
				<hr>
				<ul>
				@foreach($availability as $key => $value)
				<li><p class="mb-0">{{ $key }}: {{ $value['available']  }}</p></li>
				@endforeach
				</ul>
			</div>
			@endif
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">{{ trans('pages/event.create.table_header') }}</h4>
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
								{!! Form::select('product', ['' => __("select")] + $products,  old('product'), ['class' => 'form-control select2 hidden-search']) !!}
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								{!! Form::input('number', 'quantity', old('quantity'), ['class' => 'form-control', 'placeholder' => trans('pages/inventory.fields.quantity'), 'min' => '1']) !!}
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								{!! Form::button('<i class="fa fa-plus"></i>', ['class' => 'btn btn-success btn--icon add_product', 'title' => __('add')]) !!}
							</div>
						</div>
					</div>
				</div>
				<table class="table products_table">
					<thead>
						<tr>
							<th scope="col">{{ trans('pages/event.fields.product') }}</th>
							<th scope="col">{{ trans('pages/event.fields.quantity') }}</th>
							<th scope="col">{{ trans('pages/event.fields.unit_price') }}</th>
							<th scope="col">{{ trans('pages/event.fields.total_price') }}</th>
							<th scope="col">{{ trans('pages/event.index.columns.actions') }}</th>
						</tr>
					</thead>
					<tbody>
						@if(old('products') && old('quantities'))
						@foreach(old('products') as $key => $value)
						<tr>
							<td><input type="hidden" name="products[]" value="{{ old('products')[$key] }}" />{{ old('products')[$key] }}</td>
							<td><input type="hidden" name="quantities[]" value="{{ old('quantities')[$key] }}" /><span>{{ old('quantities')[$key] }}</span></td>
							<td><input type="hidden" name="prices[]" value="{{ old('prices')[$key] }}" />{{ old('prices')[$key] }}</td>
							<td><input type="hidden" name="totals[]" value="{{ old('totals')[$key] }}" />{{ old('totals')[$key] }}</td>
							<td>
								<button class="btn btn-danger btn--icon remove_product" title="{{ __('remove') }}" type="button">
									<i class="fa fa-minus"></i>
								</button>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="border-top">
					<div class="card-body">
						<a href="{{ route('event.index') }}" class="btn btn-secondary">{{ trans('pages/event.fields.submit.cancel') }}</a>
						{!! Form::submit(trans('pages/event.fields.submit.save'), ['class' => 'btn btn-primary float-right']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
</div>

@endsection

@section('styles')
@endsection

@section('scripts')

	<script type="text/javascript">
		$('.datetimepicker').flatpickr({
			enableTime: true,
            dateFormat: "d/m/Y h:i K",
            locale: "es"
		});

		$(document).on("click", ".add_product", function(e){
			e.preventDefault();
			let product_val = $("select[name=product]").val(),
			product_text = $("select[name=product] option:selected").text(),
			quantity = $("input[name=quantity]").val(),
			htmlTags, price;

			if(!product_val || !quantity){
				toastr.error('', '{{ __('Product and quantity are required') }}');
			}
			else{
				$.ajax({
					url: "{{ route('product.find_data') }}",
					data: {
						"_token": "{{ csrf_token() }}",
						name: product_val
					},
					type: 'POST',
					success: function(response) {
						if(quantity > response.balance){
							toastr.error('', '{{ __('Not enough quantity in inventory') }}' + ' (Balance: ' + response.balance + ')');
						} else {
							price = response.product.price;
							htmlTags = '<tr>'+
							'<td><input type="hidden" name="products[]" value="'+product_val+'" />' + product_text + '</td>'+
							'<td><input type="hidden" name="quantities[]" value="'+quantity+'" /><span>' + quantity + '</span></td>'+
							'<td><input type="hidden" name="prices[]" value="'+price+'" />'+ price +'</td>'+
							'<td><input type="hidden" name="totals[]" value="'+(parseFloat(quantity) * parseFloat(price))+'" />'+parseFloat(quantity) * parseFloat(price)+'</td>'+
							'<td><button class="btn btn-danger btn--icon remove_product" title="{{ __('remove') }}" type="button"><i class="fa fa-minus"></button></td>'+
							'</tr>';

							$('.products_table tbody').append(htmlTags);
							$("select[name=product]").find("option[value='"+product_val+"']").prop("disabled",true);
							$('select[name=product]').prop('selectedIndex',0);
							$("select[name=product]").select2();
							$("input[name=quantity]").val("");
						}
					},
					error: function ( jqXHR, textStatus, errorThrown ) {
						console.log({jqXHR, textStatus, errorThrown});
					},
				});
			}
		});

        $(document).on("click", ".remove_product", function(e){
            $(this).parent().parent().remove();
            $("select[name=product] option:contains("+$(this).parent().prev().prev().text()+")").prop("disabled",false);
            $("select[name=product]").select2();
        });

        @if(old('products') && old('quantities'))
        @foreach(old('products') as $key => $value)
        $("select[name=product]").find('option:contains({{ __(strtolower(old('products')[$key])) }})').prop("disabled",true);
        @endforeach
        $('select[name=product]').prop('selectedIndex',0);
        $("select[name=product]").select2();
        @endif
	</script>

@endsection
