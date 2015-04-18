@foreach($items as $item)
    <div class="col-sm-12 item-wrapper {{ $item->done }}" id="{{ $item->id }}" >
        <input type="checkbox" class="checkbox" data-item-id="{{ $item->id }}" {{ $item->done }}><span>{{ $item->item }}</span><span class="delete" data-item-id="{{ $item->id }}">Delete</span>
    </div>
@endforeach
