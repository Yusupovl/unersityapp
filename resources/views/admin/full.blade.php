@extends('layouts.admin')

@section('main_title')
Hodimlar panel
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

@section('content')

<br><img src="storage/app/foydalanuvchi/{{$foy->pasport_rasm}}" class="img-thumbnail" width="400px" height="1000px" alt="...">

<h1 class="h3 mb-4 mt-4 text-gray-800"> F.I.O : {{$foy->ism}} {{$foy->familya}} {{$foy->sharif}}  </h1>

<li>Manzili : {{$foy->manzil}}</li>
<li>Telefon : {{$foy->tel_raqam}}</li>
<li>Tug'ilgan sana : {{$foy->sana}}</li>
<li>Qo'shimcha tel raqam : {{$foy->qosh_tel_raqam}}</li>
<li>Diplom raqami : {{$foy->diplom_raqam}}</li>
<li>Fakultet : {{$foy->fakultet}}</li>
<li>Ta'lim shakli : {{$foy->talim_shakli}}</li>
<li>mamlakat : {{$foy->mamlakat}}</li>
<li>Viloyat : {{$foy->viloyat}}</li>
<li>Manzil : {{$foy->manzil}}</li>
<li>Fuqaroligi : {{$foy->fuqaroligi}}</li>
<li>Millati : {{$foy->millati}}</li>
<li>Pasport raqami : {{$foy->pasport_raqami}}</li>
<li>Tamomlagan Maktab(litsey,kollej) : {{$foy->tamomlagani}}</li>
<li>Tamomlangan manzili maktab(litdsey,kollej) : {{$foy->tamomlagan_manzil}}</li>

<li>Maktab(litsey) tamomlagan sanasi :{{$foy->tamomlagan_sanasi}} </li>



@endsection