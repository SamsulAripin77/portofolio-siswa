<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>
  <div class="max-w-7xl mx-auto flex flex-wrap gap-8 flex-col lg:flex-row md:flex-row overflow-hidden sm:rounded-lg">
    @foreach ($data as $item)
    <div class="lg:w-1/5 flex-shrink rounded-lg shadow-md p-4 bg-{{$item['color'] ?? 'gray'}}-600 text-gray-100">
      <div class="flex gap-2 lg:gap-6 justify-between items-center">
        <div class="text-left">
          <div class="text-md font-bold uppercase">{{$item['label'] ?? ''}}</div>
          <table>
            <tr>
              <td class=""><h2 class="pr-4 text-md font-bold">All </h2></td>
              <td class=""><h2 class=" text-md font-bold">{{$item['count'] ?? ''}} </h2></td>
            </tr>
            <tr>
              <td class=""><h2 class="pr-4 text-md font-bold">New </h2></td>
              <td class=""><h2 class=" text-md font-bold">{{$item['today'] ?? ''}}</h2></td>
            </tr>
          </table>
        </div>
        <div>
          <span class="bg-blue-200 text-gray-600 px-4 py-3 rounded-full ">
            <i class="{{$item['icon'] ?? 'fas fa-user'}}"></i>
          </span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @if (! Auth::user()->isAdmin())
  <h2 class="pt-4 lg:pt-8 pb-2 text-left text-lg font-bold">Grafik Sertifikasi</h2>
  <div class="max-2-7xl p-8 bg-white rounded-lg">
    <canvas id="myChart" height="150"></canvas>
  </div>
  @endif
  @push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
  <script>
    let data = {!! json_encode($data) !!}
        let labels = data.map(item => item.label)
        let datas = data.map(item => item.count)
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# of Votes',
                    data: datas,
                    backgroundColor: [
                        'rgba(76, 209, 55,1.0)',
                        'rgba(72, 126, 176,1.0)',
                        'rgba(251, 197, 49,1.0)',
                        'rgba(156, 136, 255,1.0)',
                        'rgba(0, 168, 255,1.0)',
                        'rgba(232, 65, 24,1.0)',
                        'rgba(39, 60, 117,1.0)',
                        'rgba(53, 59, 72,1.0)',
                        'rgba(127, 143, 166,1.0)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                      ticks: {
                      precision: 0
                        }
                    }
                }
            }
        });
  </script>
  @endpush
</x-app-layout>