



<link href="{{ asset('css/bootstrap.min.css') }}"  rel="stylesheet">
{!!  link_to_route('product.create','Создать новый продукт')!!}
<table class="table table-striped" >
    <tr>
        <td><H4>@id</H4></td><td><H4>Наименование</H4></td><td><H4>Цена</H4></td><td><H4>Картинка</H4></td>
    </tr>
@foreach ($products as $product)
    <tr><td>{{$product->id_string}}</td>
        <td>{{$product->name}}</td>

        <td> {{$product->price}}</td>

        <td> <img src='img/{{$product->image}}' width='20%'></td>
    </tr>
@endforeach
</table>