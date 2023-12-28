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
                url: '/saveData',
                method: 'POST',
                data: {
                },
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
