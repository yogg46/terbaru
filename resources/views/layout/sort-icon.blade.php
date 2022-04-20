@if ($sortBy !== $field)
<i  class=" text-muted "></i>
@elseif ($sortDirection == 'asc')
<i class="las la-angle-up"></i>
@else
<i class="las la-angle-down"></i>
@endif
