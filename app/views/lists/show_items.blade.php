@foreach($items as $item)
    <div class="col-xs-12 item-wrapper {{ $item->done }}" id="{{ $item->id }}" >
        <input type="checkbox" class="checkbox col-xs-1" data-item-id="{{ $item->id }}" {{ $item->done }}>
        <span class="col-xs-10 title">{{ $item->item }}</span>
        <span class="delete glyphicon glyphicon-remove col-xs-1" data-item-id="{{ $item->id }}"></span>
    </div>
@endforeach
