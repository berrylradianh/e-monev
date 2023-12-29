@extends('layouts.dashboard.master')
@section('container')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Pelaporan Rekam Medis</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">E Monev</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Pelaporan Rekam Medis</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div>
            <!-- end page-title -->

            <!-- Tombol Tambah Data di atas tabel -->
    <div class="row mb-3 ml-1">
        <!-- Ensure that the button triggers the modal -->
        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambahDataModal">Tambah Data</a>
    </div>

            <!-- Form Modal -->
            <div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Rekam Medis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{route('pelaporan.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="no_rm">No. Rekam Medis</label>
                                    <input type="text" class="form-control" id="no_rm" name="no_rm" required>
                                </div>
                                <div class="form-group">
                                    <label for="form1">Form 1</label>
                                    <input type="checkbox" class="ml-3 form-check-input" id="form1" name="form1">
                                </div>
                                <div class="form-group">
                                    <label for="form2">Form 2</label>
                                    <input type="checkbox" class="ml-3 form-check-input" id="form2" name="form2">
                                </div>
                                <div class="form-group">
                                    <label for="form3">Form 3</label>
                                    <input type="checkbox" class="ml-3 form-check-input" id="form3" name="form3">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="table-responsive">
                    <table class="table mb-0" id="medicalRecordsTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="text-center">No. Rekam Medis</th>
                                <th class="text-center">Form 1</th>
                                <th class="text-center">Form 2</th>
                                <th class="text-center">Form 3</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pelaporan as $index => $item)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td class="text-center">{{ $item->no_rm }}</td>
                                <td class="text-center"><input type="checkbox" {{ $item->form1 ? 'checked' : '' }}></td>
                                <td class="text-center"><input type="checkbox" {{ $item->form2 ? 'checked' : '' }}></td>
                                <td class="text-center"><input type="checkbox" {{ $item->form3 ? 'checked' : '' }}></td>
                                <td class="text-center">{{ $item->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- end row -->

            <div class="row mt-3">
                <div class="col-md-12 text-center">
                    <button class="btn btn-primary" id="saveButton">Save</button>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        updateStatus();

        $('input[type="checkbox"]').change(function() {
            updateStatus();
        });

        $('#saveButton').click(function() {
            saveData();
        });

        function updateStatus() {
            $('#medicalRecordsTable tbody tr').each(function() {
                var form1Checked = $(this).find('td:nth-child(3) input[type="checkbox"]').prop('checked');
                var form2Checked = $(this).find('td:nth-child(4) input[type="checkbox"]').prop('checked');
                var form3Checked = $(this).find('td:nth-child(5) input[type="checkbox"]').prop('checked');

                var isComplete = form1Checked && form2Checked && form3Checked;

                var statusCell = $(this).find('td:last-child');
                var statusText = isComplete ? "Lengkap" : "Tidak Lengkap";
                statusCell.text(statusText);

                statusCell.css('color', statusText === "Tidak Lengkap" ? 'red' : '');

                $(this).find('td:nth-child(n+3) small').remove();

                if (!isComplete) {
                    $(this).find('td:nth-child(n+3) input[type="checkbox"]:not(:checked)').after('<small style="color: red;">Tidak Lengkap</small>');
                }
            });
        }

        function saveData() {
            $.ajax({
                url: '{{ route("pelaporan.update") }}',
                method: 'POST',
                data: {},
                success: function(response) {
                    console.log(response);
                    alert('Data saved successfully!');
                },
                error: function(error) {
                    console.error(error);
                    alert('Error saving data!');
                }
            });
        }
    });
</script>

<style>
    table tr td:nth-child(n+3) small {
        display: block;
        margin-top: 5px;
    }
</style>

@endsection
