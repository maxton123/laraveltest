<link href="{{ asset('css/bootstrap.min.css') }}"  rel="stylesheet">
<div class="form-group">
    {{Form::label('@id')}}
    {{Form::text('id_string'),null,['class'=>'form-control']}}
</div>
<div class="form-group">
    {{Form::label('name')}}
    {{Form::text('name'),null,['class'=>'form-control']}}
</div>
<div class="form-group">
    {{Form::label('programId')}}
    {{Form::text('programId'),null,['class'=>'form-control']}}
</div>
<div class="form-group">
    {{Form::label('price')}}
    {{Form::text('price'),null,['class'=>'form-control']}}
</div>
<div class="form-group">
    {{Form::label('currency')}}
    {{Form::text('currency'),null,['class'=>'form-control']}}
</div>
<div class="form-group">
    {{Form::label('description')}}
    {{Form::textarea('description'),null,['class'=>'form-control']}}
</div>
<div class="form-group">
    {{Form::label('manufacturer')}}
    {{Form::text('manufacturer'),null,['class'=>'form-control']}}
</div>
<div class="form-group">
    {{Form::label('ean')}}
    {{Form::text('ean'),null,['class'=>'form-control']}}
</div>
<div class="form-group">
    {{Form::label('image')}}
    {{Form::file('image_file'),null,['class'=>'form-control']}}
</div>
<div class="form-group">
    {{Form::label('priceOld')}}
    {{Form::text('priceOld'),null,['class'=>'form-control']}}
</div>
<div class="form-group">
    {{Form::label('shippingCosts')}}
    {{Form::text('shippingCosts'),null,['class'=>'form-control']}}
</div>

<div class="form-group">
    {{Form::label('merchantCategory')}}
    {{Form::text('merchantCategory'),null,['class'=>'form-control']}}
</div>
<div class="form-group">
    {{Form::label('merchantEmail')}}
    {{Form::text('merchantEmail'),null,['class'=>'form-control']}}
</div>
<div class="form-group">

    {{Form::submit('Create'),['class'=>'btn btn-primary']}}
</div>
