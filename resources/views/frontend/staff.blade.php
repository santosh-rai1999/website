<x-frontendlayout>
<div class="section">
   @foreach ($staffs as $staff)
   <h1>{{$staff->name}}</h1>
   @endforeach
</div>

</x-frontendlayout>
