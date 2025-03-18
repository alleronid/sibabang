@extends('layouts.auth')

@push('addon-style')
<style>
    .error-message {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .input-error {
            border-color: #ef4444 !important;
        }

        .spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid #f3f3f3;
            border-top: 2px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        @keyframes spin {
            0% {
                transform: translateY(-50%) rotate(0deg);
            }

            100% {
                transform: translateY(-50%) rotate(360deg);
            }
        }
</style>
@endpush

@section('aside')
    <div class="login-aside d-flex flex-column flex-row-auto">
        <!--begin::Aside Top-->
        <div class="d-flex flex-column-auto flex-column pt-15 px-30">
            <!--begin::Aside header-->
            <a href="#" class="login-logo py-6">
                <img src="{{asset('sibabang-logo.png')}}" width="450" alt="">
            </a>
            <!--end::Aside header-->
            <!--begin: Wizard Nav-->
            <div class="wizard-nav pt-5 pt-lg-30">
                <!--begin::Wizard Steps-->
                <div class="wizard-steps">
                    <!--begin::Wizard Step 1 Nav-->
                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                        <div class="wizard-wrapper">
                            <div class="wizard-icon">
                                <i class="wizard-check ki ki-check"></i>
                                <span class="wizard-number">2</span>
                            </div>
                            <div class="wizard-label">
                                <h3 class="wizard-title">Detail Permohonan</h3>
                            </div>
                        </div>
                    </div>
                    <!--end::Wizard Step 1 Nav-->
                </div>
                <!--end::Wizard Steps-->
            </div>
            <!--end: Wizard Nav-->
        </div>
        <!--end::Aside Top-->
        <!--begin::Aside Bottom-->
        <div class="aside-img-wizard d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center pt-2 pt-lg-5"
            style="background-position-y: calc(100% + 3rem); background-image: url({{asset('assets/media/svg/illustrations/features.svg')}})">
        </div>
        <!--end::Aside Bottom-->
    </div>
@endsection

@section('content')
    <div class="login-content flex-column-fluid d-flex flex-column p-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-row-fluid flex-center">
            <!--begin::Signin-->
            <div class="login-form login-form-signup">
                <!--begin::Form-->
                <form action="{{route('register.save')}}" class="form" novalidate="novalidate" id="registrationForm" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h4 class="font-weight">Informasi</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-sm font-weight-bolder text-dark">Nama Lengkap <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap"
                                            name="fullname" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="text-sm font-weight-bolder text-dark">Email <span
                                                class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Email" name="email"
                                                required />
                                            <div class="spinner" id="email-spinner"></div>
                                        </div>
                                        <div class="error-message" id="email-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-sm font-weight-bolder text-dark">Nama Usaha <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Nama Usaha"
                                            name="merchant_name" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-sm font-weight-bolder text-dark">No KTP<span
                                                class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control" placeholder="No KTP" name="nationality_id"
                                                oninput="if(this.value.length > 16) this.value = this.value.slice(0, 16);"
                                                onkeypress="return this.value.length < 16" required />
                                            <div class="spinner" id="ktp-spinner"></div>
                                        </div>
                                        <div class="error-message" id="ktp-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-sm font-weight-bolder text-dark">KTP<span
                                                class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="file_ktp"
                                            required />
                                    </div>
                                    <div class="form-group">
                                        <label class="text-sm font-weight-bolder text-dark">No. HP<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="No Telepon" name="phone_number"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-sm font-weight-bolder text-dark">Jenis Usaha <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" name="business_type" required>
                                            <option value="">Pilih Jenis</option>
                                            <option value="1">Perorangan</option>
                                            <option value="2">PT</option>
                                            <option value="3">CV</option>
                                            <option value="4">Koperasi</option>
                                            <option value="5">Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-sm font-weight-bolder text-dark">Password<span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Password"
                                            name="password" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="text-sm font-weight-bolder text-dark">NPWP<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="NPWP"
                                            name="tax_number" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-sm font-weight-bolder text-dark">Alamat Sesuai KTP<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" name="address" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-sm font-weight-bolder text-dark">Akta Pendirian <span
                                                class="text-danger">*</span></label>
                                        <input type="file" class="form-control" placeholder="Akta Pendirian" name="akta" hidden/>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-sm font-weight-bolder text-dark">NIB/SIUP/TDP<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="NIB" name="nib" hidden/>
                                    </div>

                                </div>
                            </div>
                            {{-- @include('components.term-condition') --}}
                            <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Signin-->
        </div>
        <!--end::Wrapper-->
    </div>
@endsection

@push('addon-script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    let ktpTimeout = null;
    let emailTimeout = null;
    let ktpHasError = false;
    let emailHasError = false;

    const businessTypeSelect = document.querySelector('select[name="business_type"]');
    // const siupInput = document.querySelector('input[name="siup"]');
    const nibInput = document.querySelector('input[name="nib"]');
    const aktaInput = document.querySelector('input[name="akta"]');
    // const siupFormGroup = siupInput.closest('.form-group');
    const nibFormGroup = nibInput.closest('.form-group');
    const aktaFormGroup = aktaInput.closest('.form-group');

    const ktpInput = document.querySelector('input[name="nationality_id"]');
    const emailInput = document.querySelector('input[name="email"]');
    const registrationForm = document.getElementById('registrationForm');
    const ktpSpinner = document.getElementById('ktp-spinner');
    const emailSpinner = document.getElementById('email-spinner');

    function validateKTP(input) {
        if (!input) return false;

        const ktpError = document.getElementById('ktp-error');
        if (!ktpError) return false;

        const value = input.value;

        if (value.length !== 16) {
            ktpError.textContent = 'Nomor KTP harus 16 digit';
            input.classList.add('input-error');
            ktpHasError = true;
            return false;
        }

        ktpError.textContent = '';
        input.classList.remove('input-error');
        ktpHasError = false;
        return true;
    }

    function checkKTPAvailability(ktp) {
        if (!ktpSpinner) return;

        ktpSpinner.style.display = 'block';

        fetch(`/check-ktp/${ktp}`)
            .then(response => response.json())
            .then(data => {
                const ktpError = document.getElementById('ktp-error');
                if (!ktpError || !ktpInput) return;

                if (data.exists) {
                    ktpError.textContent = 'Nomor KTP sudah terdaftar';
                    ktpInput.classList.add('input-error');
                    ktpHasError = true;
                } else {
                    ktpError.textContent = '';
                    ktpInput.classList.remove('input-error');
                    ktpHasError = false;
                }
            })
            .catch(error => {
                console.error('Error:', error);

                if (ktpSpinner) ktpSpinner.style.display = 'none';
            })
            .finally(() => {

                if (ktpSpinner) ktpSpinner.style.display = 'none';
            });
    }

    function checkEmailAvailability(email) {
        if (!emailSpinner) return;

        // Only show spinner during actual validation
        emailSpinner.style.display = 'block';

        fetch(`/check-email/${encodeURIComponent(email)}`)
            .then(response => response.json())
            .then(data => {
                const emailError = document.getElementById('email-error');
                if (!emailError || !emailInput) return;

                if (data.exists) {
                    emailError.textContent = 'Email sudah terdaftar';
                    emailInput.classList.add('input-error');
                    emailHasError = true;
                } else {
                    // Only clear error message if this specific check passed
                    emailError.textContent = '';
                    emailInput.classList.remove('input-error');
                    emailHasError = false;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // In case of error, hide the spinner
                if (emailSpinner) emailSpinner.style.display = 'none';
            })
            .finally(() => {
                // Always hide spinner when done
                if (emailSpinner) emailSpinner.style.display = 'none';
            });
    }

    function toggleBusinessFields() {
        const selectedValue = businessTypeSelect.value;
        console.log(selectedValue);
        const shouldHide = selectedValue === '1' || selectedValue === '';

        if (shouldHide) {
            // siupInput.closest('.form-group').style.display = 'none';
            nibInput.closest('.form-group').style.display = 'none';
            aktaInput.closest('.form-group').style.display = 'none';

            // siupInput.value = '';
            nibInput.value = '';
            aktaInput.value = '';
            // siupInput.setAttribute('hidden', 'true');
            nibInput.setAttribute('hidden', 'true');
            aktaInput.setAttribute('hidden', 'true');
        } else {
            // siupInput.closest('.form-group').style.display = 'block';
            nibInput.closest('.form-group').style.display = 'block';
            aktaInput.closest('.form-group').style.display = 'block';

            // siupInput.removeAttribute('hidden');
            nibInput.removeAttribute('hidden');
            aktaInput.removeAttribute('hidden');
        }
    }

    if (ktpInput) {
        ktpInput.addEventListener('input', function() {
            const isValid = validateKTP(this);


            if (ktpTimeout) {
                clearTimeout(ktpTimeout);
            }

            if (this.value.length === 16 && isValid) {
                ktpTimeout = setTimeout(() => {
                    checkKTPAvailability(this.value);
                }, 500);
            } else if (ktpSpinner) {

                ktpSpinner.style.display = 'none';
            }
        });
    }

    if (emailInput) {
        emailInput.addEventListener('input', function() {
            const email = this.value;

            if (emailTimeout) {
                clearTimeout(emailTimeout);
            }

            if (email && email.includes('@') && email.includes('.')) {
                emailTimeout = setTimeout(() => {
                    checkEmailAvailability(email);
                }, 500);
            } else if (emailSpinner) {
                emailSpinner.style.display = 'none';
            }
        });
    }

    if (registrationForm) {
        registrationForm.addEventListener('submit', function(event) {
            const ktpError = document.getElementById('ktp-error');
            const emailError = document.getElementById('email-error');

            let isKtpValid = true;
            if (ktpInput) {
                isKtpValid = validateKTP(ktpInput);
            }
            const hasKtpError = ktpError && ktpError.textContent;
            const hasEmailError = emailError && emailError.textContent;

            if (!isKtpValid || hasKtpError || hasEmailError) {
                event.preventDefault();
                alert('Mohon perbaiki error yang ada sebelum melanjutkan pendaftaran.');
            }
        });
    }


    if (ktpSpinner) ktpSpinner.style.display = 'none';
    if (emailSpinner) emailSpinner.style.display = 'none';

    toggleBusinessFields();

    businessTypeSelect.addEventListener('change', toggleBusinessFields);
});
</script>
@endpush
