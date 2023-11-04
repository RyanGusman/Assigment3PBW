<x-app-layout>

    <!-- Ryan Gusman Yoel Banjarnahor 6706220098 -->


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Daftar Transaksi') }}
        </h2>
    </x-slot>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.yajra-datatable-transactions').DataTable({
              ajax: '{{ url("getAllTransactions") }}',
              serverSide: false,
              processing: true,
              deferRender: true,
              type: 'GET',
              destroy:true,
              columns: [
                  {data:'id', name: 'id'},
                  {data:'peminjam', name: 'peminjam'},
                  {data:'petugas', name: 'petugas'},
                  {data:'tanggalPinjam', name: 'tanggalPinjam'},
                  {data:'tanggalSelesai', name: 'tanggalSelesai'},
                  {data:'action', name: 'action', orderable: false, searchable: false}
              ]
          });
        });
      </script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-gray-800 border-b border-gray-800">
                <div class="container">
                    <table class="table table-bordered yajra-datatable-transactions">
                        <thead>
                            <tr>
                                <th>No</th>  
                                <th>Peminjam</th>  
                                <th>Petugas</th>  
                                <th>Tanggal Pinjam</th>  
                                <th>Tanggal Selesai</th>  
                                <th>Opsi</th>  
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>
