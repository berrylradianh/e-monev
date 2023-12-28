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
                            <tr>
                                <th scope="row">1</th>
                                <td class="text-center">RM.123</td>
                                <td class="text-center"><input type="checkbox" checked></td>
                                <td class="text-center"><input type="checkbox" checked></td>
                                <td class="text-center"><input type="checkbox" checked></td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td class="text-center">RM.345</td>
                                <td class="text-center"><input type="checkbox"></td>
                                <td class="text-center"><input type="checkbox"></td>
                                <td class="text-center"><input type="checkbox"></td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td class="text-center">RM.678</td>
                                <td class="text-center"><input type="checkbox" checked></td>
                                <td class="text-center"><input type="checkbox" checked></td>
                                <td class="text-center"><input type="checkbox" checked></td>
                                <td class="text-center"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- content -->
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        updateStatus();

        // Attach a change event listener to the checkboxes
        $('input[type="checkbox"]').change(function() {
            updateStatus();
        });

        function updateStatus() {
            // Loop through each table row
            $('#medicalRecordsTable tbody tr').each(function() {
                var form1Checked = $(this).find('td:nth-child(3) input[type="checkbox"]').prop('checked');
                var form2Checked = $(this).find('td:nth-child(4) input[type="checkbox"]').prop('checked');
                var form3Checked = $(this).find('td:nth-child(5) input[type="checkbox"]').prop('checked');

                // Generate the status string based on checkbox states
                var statusString = "";
                statusString += form1Checked ? "Form 1: Lengkap, " : "Form 1: Tidak Lengkap, ";
                statusString += form2Checked ? "Form 2: Lengkap, " : "Form 2: Tidak Lengkap, ";
                statusString += form3Checked ? "Form 3: Lengkap." : "Form 3: Tidak Lengkap.";

                // Update the status column with the generated status string
                $(this).find('td:last-child').text(statusString);
            });
        }
    });
</script>
@endsection
