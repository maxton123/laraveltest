<h1>Новый продукт</h1>
{{Form::open(['route'=>'product.store','role'=>'form','enctype'=>'multipart/form-data'])}}
   @if(count($errors)>0)
       @foreach($errors->all() as $error)
           {{$error}}
           @endforeach
   @endif
   @include('_form')
{{Form::close()}}