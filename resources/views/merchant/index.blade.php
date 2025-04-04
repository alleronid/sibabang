@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List Merchants</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">

                @if(Auth::user()->isAdmin())
                    <div class="row">
                        <div class="form-group mb-0"> {{-- Adjusted margin for better alignment --}}
                            <label for="filterCompany">Filter by Company:</label>
                            <select id="filterCompany" class="form-control form-control-sm"> {{-- Added form-control-sm --}}
                                <option value="">All Companies</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->company_id }}">{{ $company->merchant_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @endif

                <div class="text-right">
                    <a href="{{ route('merchant.create') }}" class="btn btn-sm btn-primary"> {{-- Removed mb-3 for better alignment --}}
                        <i class="flaticon-plus"></i> {{-- Consider using Font Awesome or Bootstrap Icons if flaticon isn't globally available --}}
                        Add Merchant
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Merchant</th> {{-- Corrected typo: Mechant -> Merchant --}}
                                <th>Status</th>
                                <th>Nama Perusahaan</th>
                                <th>Environment</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->merchant_name }}</td>
                                    <td>{{ $item->status }}</td>
                                    {{-- Make sure the relationship 'company' is loaded or handle potential null --}}
                                    <td>{{ $item->company->merchant_name ?? 'N/A' }}</td>
                                    <td>{{ $item->env }}</td>
                                    <td class="text-center"> {{-- Added text-center for consistency --}}
                                        <a href="javascript:void(0)" onclick="editMerchant({{ $item->merchant_id }})"
                                            class="btn btn-sm btn-primary mr-1">Edit</a> {{-- Added margin --}}
                                        <a href="javascript:void(0)" onclick="getMerchant({{ $item->merchant_id }})"
                                            class="btn btn-sm btn-info">View</a> {{-- Changed color for distinction --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Detail Merchant Modal --}}
    <div class="modal fade" id="detailMerchant" tabindex="-1" role="dialog" aria-labelledby="detailMerchantLabel"
                                                                            aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailMerchantLabel">Detail Merchant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span> {{-- Use span for better practice --}}
                    </button>
                </div>
                <div class="modal-body">
                    {{-- Replicated structure from edit modal with readonly/disabled --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Merchant</label>
                                <input type="text" class="form-control" id="merchantNameDetail" readonly />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Vendor</label>
                                <input type="text" class="form-control" id="vendorDetail" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" id="addressDetail" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><label>Status</label><input type="text" class="form-control" id="statusDetail" readonly /></div>
                            <div class="form-group"><label>Token</label><input type="text" id="tokenDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>Environment</label>
                                <select id="envDetail" class="form-control" disabled>
                                    <option value="PRODUCTION">PRODUCTION</option>
                                    <option value="SANDBOX">SANDBOX</option>
                                </select>
                            </div>
                            <div class="form-group"><label>API Key (Prod)</label><input type="text" id="api_key_prodDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>CB Key (Prod)</label><input type="text" id="cb_key_prodDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>API Key (SB)</label><input type="text" id="api_key_sbDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>CB Key (SB)</label><input type="text" id="cb_key_sbDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>Public Key</label><textarea id="public_keyDetail" class="form-control" readonly></textarea></div>
                            <div class="form-group"><label>Private Key</label><textarea id="private_keyDetail" class="form-control" readonly></textarea></div>
                            <div class="form-group"><label>External ID</label><textarea id="external_idDetail" class="form-control" readonly></textarea></div>
                            <div class="form-group"><label>API Key External</label><textarea id="api_key_extDetail" class="form-control" readonly></textarea></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label>Soundbox</label>
                                <select id="soundboxDetail" class="form-control" disabled>
                                    <option value="0">Tidak</option>
                                    <option value="1">Ya</option>
                                </select>
                            </div>
                            <div class="form-group"><label>NMID</label><input type="text" id="nmidDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>API Key SB Vendor</label><input type="text" id="api_key_sb_vendorDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>Secret Key SB Vendor</label><input type="text" id="secret_key_sb_vendorDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>API Key Vendor</label><input type="text" id="api_key_vendorDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>Secret Key Vendor</label><input type="text" id="secret_key_vendorDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>NMID QRIS</label><input type="text" id="nmid_qrisDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>MID QRIS</label><input type="text" id="mid_qrisDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>MID Dana</label><input type="text" id="mid_danaDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>MDR Rate</label><input type="number" step="0.01" id="mdr_rateDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>Amount Fee</label><input type="number" step="0.01" id="amount_feeDetail" class="form-control" readonly></div>
                            <div class="form-group"><label>Link Payment</label><textarea id="link_paymentDetail" class="form-control" readonly></textarea></div>
                            <div class="form-group"><label>Link Callback</label><textarea id="link_callbackDetail" class="form-control" readonly></textarea></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit Merchant Modal --}}
    <div class="modal fade" id="editMerchant" tabindex="-1" role="dialog" aria-labelledby="editMerchantLabel"
                                                                          aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMerchantLabel">Edit Merchant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- Added novalidate to prevent browser validation interfering with JS handling --}}
                    <form id="editForm" novalidate>
                        {{-- Important: Add name="merchant_id" to the hidden input --}}
                        <input type="hidden" name="merchant_id" id="merchantIdEdit" />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Merchant</label>
                                    {{-- Added name attribute --}}
                                    <input type="text" class="form-control" name="merchant_name" id="merchantNameEdit" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vendor</label>
                                    {{-- Added name attribute and id --}}
                                    <input type="text" class="form-control" name="vendor_name" id="vendorEdit" readonly />
                                    {{-- Maybe keep a hidden input for vendor_id if needed for update --}}
                                    {{-- <input type="hidden" name="vendor_id" id="vendorIdEdit" /> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    {{-- Added name attribute --}}
                                    <input type="text" class="form-control" name="address" id="addressEdit">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                {{-- Added name and id attributes to all inputs/selects/textareas --}}
                                <div class="form-group"><label>Status</label>
                                    <select name="status" id="statusEdit" class="form-control" required>
                                        <option value="ACTIVE">ACTIVE</option>
                                        <option value="DEACTIVE">DEACTIVE</option>
                                        <option value="PENDING">PENDING</option>
                                    </select>
                                </div>
                                <div class="form-group"><label>Token</label><input type="text" name="token" id="tokenEdit" class="form-control"></div>
                                <div class="form-group"><label>Environment</label>
                                    <select name="env" id="envEdit" class="form-control">
                                        <option value="PRODUCTION">PRODUCTION</option>
                                        <option value="SANDBOX">SANDBOX</option>
                                    </select>
                                </div>
                                <div class="form-group"><label>API Key (Prod)</label><input type="text" id="api_key_prodEdit" name="api_key_prod" class="form-control"></div>
                                <div class="form-group"><label>CB Key (Prod)</label><input type="text" id="cb_key_prodEdit" name="cb_key_prod" class="form-control"></div>
                                <div class="form-group"><label>API Key (SB)</label><input type="text" id="api_key_sbEdit" name="api_key_sb" class="form-control"></div>
                                <div class="form-group"><label>CB Key (SB)</label><input type="text" id="cb_key_sbEdit" name="cb_key_sb" class="form-control"></div>
                                <div class="form-group"><label>Public Key</label><textarea name="public_key" id="public_keyEdit" class="form-control"></textarea></div>
                                <div class="form-group"><label>Private Key</label><textarea name="private_key" id="private_keyEdit" class="form-control"></textarea></div>
                                <div class="form-group"><label>External ID</label><textarea name="external_id" id="external_idEdit" class="form-control"></textarea></div>
                                <div class="form-group"><label>API Key External</label><textarea name="api_key_ext" id="api_key_extEdit" class="form-control"></textarea></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label>Soundbox</label>
                                    <select name="soundbox" id="soundboxEdit" class="form-control">
                                        <option value="0">Tidak</option>
                                        <option value="1">Ya</option>
                                    </select>
                                </div>
                                <div class="form-group"><label>NMID</label><input type="text" name="nmid" id="nmidEdit" class="form-control"></div>
                                <div class="form-group"><label>API Key SB Vendor</label><input type="text" name="api_key_sb_vendor" id="api_key_sb_vendorEdit" class="form-control"></div>
                                <div class="form-group"><label>Secret Key SB Vendor</label><input type="text" name="secret_key_sb_vendor" id="secret_key_sb_vendorEdit" class="form-control"></div>
                                <div class="form-group"><label>API Key Vendor</label><input type="text" name="api_key_vendor" id="api_key_vendorEdit" class="form-control"></div>
                                <div class="form-group"><label>Secret Key Vendor</label><input type="text" name="secret_key_vendor" id="secret_key_vendorEdit" class="form-control"></div>
                                <div class="form-group"><label>NMID QRIS</label><input type="text" name="nmid_qris" id="nmid_qrisEdit" class="form-control"></div>
                                <div class="form-group"><label>MID QRIS</label><input type="text" name="mid_qris" id="mid_qrisEdit" class="form-control"></div>
                                <div class="form-group"><label>MID Dana</label><input type="text" name="mid_dana" id="mid_danaEdit" class="form-control"></div>
                                <div class="form-group"><label>MDR Rate</label><input type="number" step="0.01" name="mdr_rate" id="mdr_rateEdit" class="form-control"></div>
                                <div class="form-group"><label>Amount Fee</label><input type="number" step="0.01" name="amount_fee" id="amount_feeEdit" class="form-control"></div>
                                <div class="form-group"><label>Link Payment</label><textarea name="link_payment" id="link_paymentEdit" class="form-control"></textarea></div>
                                <div class="form-group"><label>Link Callback</label><textarea name="link_callback" id="link_callbackEdit" class="form-control"></textarea></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            {{-- Moved buttons inside the form --}}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                    </form> {{-- </form> tag moved after footer --}}
                </div>
                {{-- Removed duplicate modal-footer --}}
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    {{-- Include jQuery, Bootstrap JS, DataTable JS, SweetAlert2 JS if not already included in layout --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> {{-- Example SweetAlert include --}}

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            var table = $('#dataTable').DataTable();

            // Check if the user is admin (ensure Auth::user()->isAdmin() returns true/false correctly)
            var isAdmin = @json(Auth::user()->isAdmin());

            if (isAdmin) {
                $('#filterCompany').change(function() {
                    var selectedCompany = $('#filterCompany :selected').text(); // Get text of selected option
                    var companyId = $(this).val(); // Get value (company_id)

                    // Filter logic based on 'Nama Perusahaan' column (index 3)
                    // If 'All Companies' selected (value is empty), clear the search
                    if (companyId === '') {
                        table.column(3).search('').draw();
                    } else {
                        // Search for the exact company name in the 4th column (index 3)
                        // Use regex for exact match (^...$)
                        table.column(3).search('^' + selectedCompany + '$', true, false).draw();
                    }
                });
            }
        });

        function getMerchant(id) {
            // Show loading state if desired
            $.get('/app/merchant/show/' + id, function(data) {
                // Populate Detail Modal Fields based on DDL
                $("#merchantNameDetail").val(data.merchant_name); // varchar
                $("#statusDetail").val(data.status);           // enum (display as text)
                $("#vendorDetail").val(data.vendor ? data.vendor.vendor_name : 'N/A'); // From related vendor object
                $("#addressDetail").val(data.address);          // text
                $("#tokenDetail").val(data.token);             // varchar
                $("#envDetail").val(data.env);               // enum (set select value)
                $("#api_key_prodDetail").val(data.api_key_prod); // varchar
                $("#cb_key_prodDetail").val(data.cb_key_prod);   // varchar
                $("#api_key_sbDetail").val(data.api_key_sb);     // varchar
                $("#cb_key_sbDetail").val(data.cb_key_sb);       // varchar
                $("#public_keyDetail").val(data.public_key);     // text
                $("#private_keyDetail").val(data.private_key);   // text
                $("#external_idDetail").val(data.external_id);   // text
                $("#api_key_extDetail").val(data.api_key_ext);   // text
                $("#soundboxDetail").val(data.soundbox);       // tinyint (0 or 1) -> sets select value
                $("#nmidDetail").val(data.nmid);               // varchar
                $("#api_key_sb_vendorDetail").val(data.api_key_sb_vendor); // varchar
                $("#secret_key_sb_vendorDetail").val(data.secret_key_sb_vendor); // varchar
                $("#api_key_vendorDetail").val(data.api_key_vendor);       // varchar
                $("#secret_key_vendorDetail").val(data.secret_key_vendor); // varchar
                $("#nmid_qrisDetail").val(data.nmid_qris);         // varchar
                $("#mid_qrisDetail").val(data.mid_qris);           // varchar
                $("#mid_danaDetail").val(data.mid_dana);           // varchar
                $("#mdr_rateDetail").val(data.mdr_rate);         // decimal
                $("#amount_feeDetail").val(data.amount_fee);       // decimal
                $("#link_paymentDetail").val(data.link_payment);     // text
                $("#link_callbackDetail").val(data.link_callback);   // text

                $('#detailMerchant').modal("show"); // Use "show" for clarity
            }).fail(function(jqXHR, textStatus, errorThrown) {
                // Handle AJAX errors
                console.error("Error fetching merchant details:", textStatus, errorThrown);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Failed to load merchant details. Please try again later.',
                });
            });
        }

        function editMerchant(id) {
            // Show loading state if desired
            $.get('/app/merchant/show/' + id, function(data) {
                $("#merchantIdEdit").val(data.merchant_id);      // bigint (hidden input)
                $("#merchantNameEdit").val(data.merchant_name); // varchar
                $("#statusEdit").val(data.status);            // enum (set select value) - REQUIRES HTML UPDATE
                $("#vendorEdit").val(data.vendor ? data.vendor.vendor_name : 'N/A'); // From related vendor object (display only)
                // $("#vendorIdEdit").val(data.vendor_id); // If you need vendor ID for update, ensure it's in response and you have a hidden input
                $("#addressEdit").val(data.address);           // text
                $("#tokenEdit").val(data.token);              // varchar
                $("#envEdit").val(data.env);                // enum (set select value)
                $("#api_key_prodEdit").val(data.api_key_prod);  // varchar
                $("#cb_key_prodEdit").val(data.cb_key_prod);    // varchar
                $("#api_key_sbEdit").val(data.api_key_sb);      // varchar
                $("#cb_key_sbEdit").val(data.cb_key_sb);        // varchar
                $("#public_keyEdit").val(data.public_key);      // text
                $("#private_keyEdit").val(data.private_key);    // text
                $("#external_idEdit").val(data.external_id);    // text
                $("#api_key_extEdit").val(data.api_key_ext);    // text
                $("#soundboxEdit").val(data.soundbox);        // tinyint (0 or 1) -> sets select value
                $("#nmidEdit").val(data.nmid);                // varchar
                $("#api_key_sb_vendorEdit").val(data.api_key_sb_vendor); // varchar
                $("#secret_key_sb_vendorEdit").val(data.secret_key_sb_vendor); // varchar
                $("#api_key_vendorEdit").val(data.api_key_vendor);       // varchar
                $("#secret_key_vendorEdit").val(data.secret_key_vendor); // varchar
                $("#nmid_qrisEdit").val(data.nmid_qris);          // varchar
                $("#mid_qrisEdit").val(data.mid_qris);            // varchar
                $("#mid_danaEdit").val(data.mid_dana);            // varchar
                $("#mdr_rateEdit").val(data.mdr_rate);          // decimal
                $("#amount_feeEdit").val(data.amount_fee);        // decimal
                $("#link_paymentEdit").val(data.link_payment);      // text
                $("#link_callbackEdit").val(data.link_callback);    // text

                $('#editMerchant').modal("show"); // Use "show"
            }).fail(function(jqXHR, textStatus, errorThrown) {
                // Handle AJAX errors
                console.error("Error fetching merchant data for edit:", textStatus, errorThrown);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Failed to load merchant data for editing. Please try again later.',
                });
            });
        }

        // Handle Edit Form Submission
        $('#editForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            // Optional: Add client-side validation here if needed

            // Serialize form data
            var formData = $(this).serialize();

            // Add CSRF token to the serialized data (alternative to hidden input, though hidden input is common)
            // formData += '&_token=' + '{{ csrf_token() }}'; // No, CSRF token should be sent as header or part of data object usually handled by Laravel automatically or explicitly in $.ajax setup

            // Disable submit button to prevent multiple clicks
            $(this).find('button[type="submit"]').prop('disabled', true).text('Saving...');


            $.ajax({
                url: "{{ route('merchant.update') }}", // Ensure this route correctly points to your update method and expects POST/PUT
                type: "POST", // Or PUT, depending on your route definition (use POST with _method='PUT' if needed)
                data: formData + "&_token={{ csrf_token() }}", // Append CSRF token to serialized data
                // If using PUT, uncomment below and adjust route definition
                // data: formData + "&_method=PUT&_token={{ csrf_token() }}",
                // type: "POST", // Laravel uses POST for PUT/PATCH via _method field

                success: function(res) {
                    $('#editMerchant').modal('hide'); // Hide modal on success
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: res.message || "Merchant updated successfully!", // Use response message or default
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => { // Use .then() for actions after the alert closes
                        location.reload(); // Reload the page to see changes
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle AJAX submission errors
                    console.error("Error updating merchant:", textStatus, errorThrown, jqXHR.responseJSON);
                    var errorMessage = "An error occurred while saving. Please try again.";
                    if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                        errorMessage = jqXHR.responseJSON.message;
                        // Potentially display validation errors from responseJSON.errors
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Update Failed',
                        text: errorMessage,
                    });
                    // Re-enable submit button
                    $('#editForm').find('button[type="submit"]').prop('disabled', false).text('Save changes');
                },
                // complete: function() {
                //    // This block executes regardless of success or error
                //    // Re-enable submit button - redundant if handled in success/error, but can be a fallback
                //    $('#editForm').find('button[type="submit"]').prop('disabled', false).text('Save changes');
                // }
            });
        });
    </script>
@endpush
