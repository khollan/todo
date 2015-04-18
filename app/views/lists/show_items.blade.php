@foreach($items as $item)
    <div class="col-sm-12 {{ $item->done }}" id="{{ $item->id }}" >
        <input type="checkbox" class="checkbox" data-item-id="{{ $item->id }}" {{ $item->done }}><span>{{ $item->item }}</span>
    </div>
@endforeach
