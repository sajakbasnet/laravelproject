@component('mail::message')

 Yor New Car 
 Name: {{$cars->carname}}<br>
 Model:{{$cars->model}}<br>
 Color: {{$cars->color}}

@component('mail::button', ['url' =>url('/cars/' .$cars->id)])

View Project

@endcomponent

Thanks,<br>

Sajak

@endcomponent

