{{-- <section class="container py-5"> 
    <!--<h2 class="text-center mb-4">💱 Compare Exchange Rates Across Banks</h2>
    <div class="table-responsive shadow-sm border rounded p-3 bg-white">
        <table class="table table-bordered table-hover text-center align-middle">
            <thead class="table-light">
                <tr>
                    <th>Currency</th>
                     @foreach($currencies->first()?->exchangeRates as $rate) 
                        <th>
                            <img src="{{ asset('images/' . $rate->bank->logo) }}" alt="{{ $rate->bank->name }}" width="60">
                            <div class="small fw-bold mt-1">{{ $rate->bank->name }}</div>
                        </th>
                    @endforeach
                </tr>
                <tr>
                    <th></th>
                    @foreach($currencies->first()?->exchangeRates as $rate)
                        <th>Buy / Sell</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($currencies as $currency)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center justify-content-center gap-2">
                                @if($currency->flag)
                                    <img src="{{ asset('images/' . $currency->flag) }}" alt="{{ $currency->symbol }}" width="30">
                                @endif
                                <div>
                                    <div class="fw-bold">{{ $currency->symbol }}</div>
                                    <div class="text-muted small">{{ $currency->name }}</div>
                                </div>
                            </div>
                        </td>
                        @foreach($currency->exchangeRates as $rate)
                            <td>
                                <span class="text-success fw-semibold">{{ number_format($rate->buying, 2) }}</span><br>
                                <span class="text-danger fw-semibold">{{ number_format($rate->selling, 2) }}</span>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 </section>--}}



@php
    function flagEmoji($countryCode) {
        return implode('', array_map(
            fn ($char) => mb_convert_encoding('&#' . (ord($char) + 127397) . ';', 'UTF-8', 'HTML-ENTITIES'),
            strtoupper($countryCode)
        ));
    }
@endphp

<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($currencies as $currency)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
                <!-- the curr and flag -->
                <div class="bg-blue-900 text-white px-4 py-3 flex items-center gap-2">
                    <img src="{{ asset('images/' . $currency->flag) }}" 
                         alt="{{ $currency->symbol }} Flag" 
                         class="w-6 h-4 rounded-sm shadow-sm">
                    <span class="font-semibold text-lg">{{ $currency->symbol }}</span>
                </div>

                
                <div>
                    <table class="w-full table-fixed text-sm text-left">
                        <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                            <tr>
                                <th class="px-4 py-2">Bank</th>
                                <th class="px-4 py-2">Buying</th>
                                <th class="px-4 py-2">Selling</th>
                                <th class="px-4 py-2">Diff</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($currency->exchangeRates as $rate)
                                <tr class="border-b border-gray-200">
                                    <td class="px-4 py-2 font-medium break-words">{{ $rate->bank->name ?? 'Unknown Bank' }}</td>
                                    <td class="px-4 py-2 text-green-600 font-semibold">{{ $rate->buying }}</td>
                                    <td class="px-4 py-2 text-red-500 font-semibold">{{ $rate->selling }}</td>
                                    <td class="px-4 py-2 {{ ($rate->selling - $rate->buying) > 0 ? 'text-red-500' : 'text-green-600' }}">
                                        {{ number_format($rate->selling - $rate->buying, 2) }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-4 text-center text-gray-500">
                                        No exchange rates available
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
</div>
