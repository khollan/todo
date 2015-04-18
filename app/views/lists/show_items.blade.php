@foreach($items as $item)
    <div class="col-sm-12" id="item-container">
        {{ $item->item }}
    </div>
@endforeach
