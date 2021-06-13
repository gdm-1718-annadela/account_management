<div class="dashboard-netto-bruto">
    <h1 class="dashboard-netto-bruto__title">Payment Index</h1>
    <div class="dashboard-netto-bruto__data">
        <div class="dashboard-netto-bruto__netto">
            <h2>
                €
                @foreach($net as $value)
                    @if($loop->first)<span>{{$value}}</span>@endif
                    @if($loop->last),{{$value}} @endif
                @endforeach
{{--                <span>1.678</span>,39--}}
            </h2>
        </div>
        <div class="dashboard-netto-bruto__bruto">
            <h2>
                €
                @foreach($gross as $value)
                    @if($loop->first)<span>{{$value}}</span>@endif
                    @if($loop->last),{{$value}} @endif
                @endforeach
            </h2>
        </div>
    </div>
</div>
