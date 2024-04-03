<html>

<head>
    <meta charset="UTF-8">
    <title>Form Penduduk Desa Mojorejo</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('formassets/css/form.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('formassets/js/jquerydatepicker/jquery-ui.css') }}"> --}}

</head>

<body class="zf-backgroundBg">
    <!-- Change or deletion of the name attributes in the input tag will lead to empty values on record submission-->
    <div class="zf-templateWidth">
        <form action='/form-input' name='form' method='POST' accept-charset='UTF-8' enctype='multipart/form-data'
            id='form'>@csrf<input type="hidden" name="zf_referrer_name" value="">
            <!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
            <input type="hidden" name="zf_redirect_url" value="">
            <!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
            <input type="hidden" name="zc_gad" value="">
            <!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
            <div class="zf-templateWrapper">
                <!---------template Header Starts Here---------->
                <ul class="zf-tempHeadBdr">
                    <li class="zf-tempHeadContBdr">
                        <h2 class="zf-frmTitle"><em>Form Penduduk Desa Mojorejo</em></h2>
                        <p class="zf-frmDesc"></p>
                        <div class="zf-clearBoth"></div>
                    </li>
                </ul>
                <!---------template Header Ends Here---------->
                <!---------template Container Starts Here---------->
                <div class="zf-subContWrap zf-leftAlign">
                    <ul>
                        <!---------Section Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-section">
                            <h2>Data Ayah</h2>
                            <p></p>
                        </li>
                        <!---------Section Ends Here---------->
                        <!---------Single Line Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-large"><label class="zf-labelName">
                                Nama Ayah
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="text" name="NamaAyah" checktype="c1" value=""
                                        maxlength="255" fieldType=1 placeholder="" /></span>
                                <p id="SingleLine3_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Single Line Ends Here---------->
                        <!---------Date Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-date"><label class="zf-labelName">
                                Tanggal Lahir Ayah
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="date" name="TanggalLahirAyah" checktype="c4" value=""
                                        maxlength="25" placeholder="" /><label>dd-MMM-yyyy</label> </span>
                                <div class="zf-clearBoth"></div>
                                <p id="Date_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Date Ends Here---------->
                        <!---------Single Line Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-large"><label class="zf-labelName">
                                Pekerjaan Ayah
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="text" name="PekerjaanAyah" checktype="c1" value=""
                                        maxlength="255" fieldType=1 placeholder="" /></span>
                                <p id="SingleLine2_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Single Line Ends Here---------->
                        <!--address-->
                        <!---------Address Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-address zf-addrlarge "><label class="zf-labelName">
                                Alamat Ayah
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv zf-address">
                                <div class="zf-addrCont">
                                    <span class="zf-addOne"> <input type="text" maxlength="255" name="AlamatAyah"
                                            checktype="c1" placeholder="" />
                                        <label>Alamat Lengkap</label>
                                    </span>
                                    <span class="zf-flLeft zf-addtwo"> <input type="text" maxlength="255"
                                            name="RTAyah" checktype="c1" placeholder="" />
                                        <label>RT</label>
                                    </span>
                                    <span class="zf-flLeft zf-addtwo"> <input type="text" maxlength="255"
                                            name="RWAyah" checktype="c1" placeholder="" />
                                        <label>RW</label>
                                    </span>
                                    <div class="zf-clearBoth"></div>
                                    <p id="Address_error" class="zf-errorMessage" style="display:none;">Invalid value
                                    </p>
                                </div>
                            </div>
                            <div class="zf-eclearBoth"></div>
                        </li>
                        <!---------Address Ends Here---------->
                        <!---------Phone Starts Here---------->
                        {{-- <li class="zf-tempFrmWrapper zf-large"><label class="zf-labelName">
                                Phone
                            </label>
                            <div class="zf-tempContDiv zf-phonefld">
                                <div class="zf-phwrapper zf-phNumber">
                                    <span> <input type="text" compname="PhoneNumber"
                                            name="PhoneNumber_countrycode" maxlength="20" checktype="c7"
                                            value="" phoneFormat="1" isCountryCodeEnabled=false fieldType="11"
                                            id="international_PhoneNumber_countrycode" valType="number"
                                            phoneFormatType="1" placeholder="" />
                                        <label>Number</label> </span>
                                    <div class="zf-clearBoth"></div>
                                </div>
                                <p id="PhoneNumber_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li> --}}
                        <!---------Phone Ends Here---------->
                        <!---------Section Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-section">
                            <h2>Data Ibu</h2>
                            <p></p>
                        </li>
                        <!---------Section Ends Here---------->
                        <!---------Single Line Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-large"><label class="zf-labelName">
                                Nama Ibu
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="text" name="NamaIbu" checktype="c1" value=""
                                        maxlength="255" fieldType=1 placeholder="" /></span>
                                <p id="SingleLine_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Single Line Ends Here---------->
                        <!---------Date Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-date"><label class="zf-labelName">
                                Tanggal Lahir
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="date" name="TanggalLahirIbu" checktype="c4" value=""
                                        maxlength="25" placeholder="" /><label>dd-MMM-yyyy</label> </span>
                                <div class="zf-clearBoth"></div>
                                <p id="Date1_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Date Ends Here---------->
                        <!---------Single Line Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-large"><label class="zf-labelName">
                                Pekerjaan Ibu
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="text" name="PekerjaanIbu" checktype="c1" value=""
                                        maxlength="255" fieldType=1 placeholder="" /></span>
                                <p id="SingleLine4_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Single Line Ends Here---------->
                        <!--address-->
                        <!---------Address Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-address zf-addrlarge "><label class="zf-labelName">
                                Alamat Ibu
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv zf-address">
                                <div class="zf-addrCont">
                                    <span class="zf-addOne"> <input type="text" maxlength="255" name="AlamatIbu"
                                            checktype="c1" placeholder="" />
                                        <label>Alamat Lengkap</label>
                                    </span>
                                    <span class="zf-flLeft zf-addtwo"> <input type="text" maxlength="255"
                                            name="RTIbu" checktype="c1" placeholder="" />
                                        <label>RT</label>
                                    </span>
                                    <span class="zf-flLeft zf-addtwo"> <input type="text" maxlength="255"
                                            name="RWIbu" checktype="c1" placeholder="" />
                                        <label>RW</label>
                                    </span>
                                    <div class="zf-clearBoth"></div>
                                    <p id="Address1_error" class="zf-errorMessage" style="display:none;">Invalid
                                        value</p>
                                </div>
                            </div>
                            <div class="zf-eclearBoth"></div>
                        </li>
                        <!---------Address Ends Here---------->
                        <!---------Section Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-section">
                            <h2>Data Anak Pertama</h2>
                            <p></p>
                        </li>
                        <!---------Section Ends Here---------->
                        <!---------Single Line Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Nama Anak Pertama
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="text" name="NamaAnak[]" checktype="c1" value=""
                                        maxlength="255" fieldType=1 placeholder="" /></span>
                                <p id="SingleLine1_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Single Line Ends Here---------->
                        <!---------Date Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-date"><label class="zf-labelName">
                                Tanggal Lahir Anak Pertama
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="date" name="TanggalLahirAnak[]" checktype="c4" value=""
                                        maxlength="25" placeholder="" /><label>dd-MMM-yyyy</label> </span>
                                <div class="zf-clearBoth"></div>
                                <p id="Date2_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Date Ends Here---------->
                        <!---------Dropdown Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Jenis Kelamin
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="JenisKelaminAnak[]" checktype="c1">
                                    <option selected="true" value="-Select-" disabled selected>Pilih Jenis Kelamin
                                    </option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                                <p id="Dropdown1_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Dropdown Ends Here---------->
                        <!---------Dropdown Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Status Anak
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="StatusAnak[]" checktype="c1">
                                    <option selected="true" value="-Select-" disabled selected>Pilih Status Anak
                                    </option>
                                    <option value="Anak&#x20;Adopsi">Anak Adopsi</option>
                                    <option value="Anak&#x20;Kandung">Anak Kandung</option>
                                </select>
                                <p id="Dropdown_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Dropdown Ends Here---------->
                        <!---------Section Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-section">
                            <h2>Data Anak Kedua</h2>
                            <p></p>
                        </li>
                        <!---------Section Ends Here---------->
                        <!---------Single Line Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Nama Anak Kedua
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="text" name="NamaAnak[]" checktype="c1" value=""
                                        maxlength="255" fieldType=1 placeholder="" /></span>
                                <p id="SingleLine5_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Single Line Ends Here---------->
                        <!---------Date Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-date"><label class="zf-labelName">
                                Tanggal Lahir Anak Kedua
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="date" name="TanggalLahirAnak[]" checktype="c4" value=""
                                        maxlength="25" placeholder="" /><label>dd-MMM-yyyy</label>
                                </span>
                                <div class="zf-clearBoth"></div>
                                <p id="Date3_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Date Ends Here---------->
                        <!---------Dropdown Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Jenis Kelamin
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="JenisKelaminAnak[]" checktype="c1">
                                    <option selected="true" value="-Select-" disabled selected>Pilih Jenis Kelamin
                                    </option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                                <p id="Dropdown2_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Dropdown Ends Here---------->
                        <!---------Dropdown Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Status Anak
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="StatusAnak[]" checktype="c1">
                                    <option selected="true" value="-Select-" disabled selected>Pilih Status Anak
                                    </option>
                                    <option value="Anak&#x20;Adopsi">Anak Adopsi</option>
                                    <option value="Anak&#x20;Kandung">Anak Kandung</option>
                                </select>
                                <p id="Dropdown3_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Dropdown Ends Here---------->
                        <!---------Section Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-section">
                            <h2>Data Anak Ketiga</h2>
                            <p></p>
                        </li>
                        <!---------Section Ends Here---------->
                        <!---------Single Line Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-large"><label class="zf-labelName">
                                Nama Anak Ketiga
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="text" name="NamaAnak[]" checktype="c1" value=""
                                        maxlength="255" fieldType=1 placeholder="" /></span>
                                <p id="SingleLine6_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Single Line Ends Here---------->
                        <!---------Date Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-date"><label class="zf-labelName">
                                Tanggal Lahir Anak Ketiga
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="date" name="TanggalLahirAnak[]" checktype="c4" value=""
                                        maxlength="25" placeholder="" /><label>dd-MMM-yyyy</label> </span>
                                <div class="zf-clearBoth"></div>
                                <p id="Date4_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Date Ends Here---------->
                        <!---------Dropdown Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Jenis Kelamin
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="JenisKelaminAnak[]" checktype="c1">
                                    <option selected="true" value="-Select-" disabled selected>Pilih Jenis Kelamin
                                    </option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                                <p id="Dropdown5_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Dropdown Ends Here---------->
                        <!---------Dropdown Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Status Anak
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="StatusAnak[]" checktype="c1">
                                    <option selected="true" value="-Select-" disabled selected>Pilih Status Anak
                                    </option>
                                    <option value="Anak&#x20;Adopsi">Anak Adopsi</option>
                                    <option value="Anak&#x20;Kandung">Anak Kandung</option>
                                </select>
                                <p id="Dropdown4_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Dropdown Ends Here---------->
                        <!---------Section Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-section">
                            <h2>Data Anak Keempat</h2>
                            <p></p>
                        </li>
                        <!---------Section Ends Here---------->
                        <!---------Single Line Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Nama Anak Keempat
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="text" name="NamaAnak[]" checktype="c1" value=""
                                        maxlength="255" fieldType=1 placeholder="" /></span>
                                <p id="SingleLine7_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Single Line Ends Here---------->
                        <!---------Date Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-date"><label class="zf-labelName">
                                Tanggal Lahir Anak Keempat
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="date" name="TanggalLahirAnak[]" checktype="c4" value=""
                                        maxlength="25" placeholder="" /><label>dd-MMM-yyyy</label> </span>
                                <div class="zf-clearBoth"></div>
                                <p id="Date5_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Date Ends Here---------->
                        <!---------Dropdown Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Jenis Kelamin
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="JenisKelaminAnak[]" checktype="c1">
                                    <option selected="true" value="-Select-" disabled selected>Pilih Jenis Kelamin
                                    </option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                                <p id="Dropdown6_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Dropdown Ends Here---------->
                        <!---------Dropdown Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Status Anak
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="StatusAnak[]" checktype="c1">
                                    <option selected="true" value="-Select-" disabled selected>Pilih Status Anak
                                    </option>
                                    <option value="Anak&#x20;Adopsi">Anak Adopsi</option>
                                    <option value="Anak&#x20;Kandung">Anak Kandung</option>
                                </select>
                                <p id="Dropdown7_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Dropdown Ends Here---------->
                        <!---------Section Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-section">
                            <h2>Data Anak Kelima</h2>
                            <p></p>
                        </li>
                        <!---------Section Ends Here---------->
                        <!---------Single Line Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-large"><label class="zf-labelName">
                                Nama Anak Kelima
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="text" name="NamaAnak[]" checktype="c1" value=""
                                        maxlength="255" fieldType=1 placeholder="" /></span>
                                <p id="SingleLine8_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Single Line Ends Here---------->
                        <!---------Date Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-date"><label class="zf-labelName">
                                Tanggal Lahir Anak Kelima
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="date" name="TanggalLahirAnak[]" checktype="c4" value=""
                                        maxlength="25" placeholder="" /><label>dd-MMM-yyyy</label> </span>
                                <div class="zf-clearBoth"></div>
                                <p id="Date6_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Date Ends Here---------->
                        <!---------Dropdown Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Jenis Kelamin
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="JenisKelaminAnak[]" checktype="c1">
                                    <option selected="true" value="-Select-" disabled selected>Pilih Jenis Kelamin
                                    </option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                                <p id="Dropdown8_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Dropdown Ends Here---------->
                        <!---------Dropdown Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Status Anak
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="StatusAnak[]" checktype="c1">
                                    <option selected="true" value="-Select-" disabled selected>Pilih Status Anak
                                    </option>
                                    <option value="Anak&#x20;Adopsi">Anak Adopsi</option>
                                    <option value="Anak&#x20;Kandung">Anak Kandung</option>
                                </select>
                                <p id="Dropdown9_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li>
                        <!---------Dropdown Ends Here---------->
                    </ul>
                </div>
                <!---------template Container Starts Here---------->
                <ul>
                    <li class="zf-fmFooter"><button class="zf-submitColor">Submit</button></li>
                </ul>
            </div>
            <!-- 'zf-templateWrapper' ends -->
        </form>
    </div>
    <!-- 'zf-templateWidth' ends -->
    <script type="text/javascript">
        var zf_DateRegex = new RegExp(
            "^(([0][1-9])|([1-2][0-9])|([3][0-1]))[-](Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec|JAN|FEB|MAR|APR|MAY|JUN|JUL|AUG|SEP|OCT|NOV|DEC)[-](?:(?:19|20)[0-9]{2})$"
        );
        var zf_MandArray = ["SingleLine3", "Date", "SingleLine2", "Address_AddressLine1", "Address_City", "Address_Region",
            "SingleLine", "Date1", "SingleLine4", "Address1_AddressLine1", "Address1_City", "Address1_Region"
        ];
        var zf_FieldArray = ["SingleLine3", "Date", "SingleLine2", "Address_AddressLine1", "Address_City", "Address_Region",
            "PhoneNumber_countrycode", "SingleLine", "Date1", "SingleLine4", "Address1_AddressLine1", "Address1_City",
            "Address1_Region", "SingleLine1", "Date2", "Dropdown1", "Dropdown", "SingleLine5", "Date3", "Dropdown2",
            "Dropdown3", "SingleLine6", "Date4", "Dropdown5", "Dropdown4", "SingleLine7", "Date5", "Dropdown6",
            "Dropdown7", "SingleLine8", "Date6", "Dropdown8", "Dropdown9"
        ];
        var isSalesIQIntegrationEnabled = false;
        var salesIQFieldsArray = [];
    </script>
    <script src="{{ asset('formassets/js/validation.js') }}"></script>
    {{-- <script src="{{ asset('formassets/js/jquerydatepicker/external/jquery/jquery.js') }}"></script>
    <script src="{{ asset('formassets/js/jquerydatepicker/jquery-ui.js') }}"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script> --}}
</body>

</html>
