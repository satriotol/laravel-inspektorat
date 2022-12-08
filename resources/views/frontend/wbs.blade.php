@extends('frontend_layouts.main')
@section('content')
    <div id="app">
        <section class="breadcrumb-area" style="">
            <div class="container text-center">
                <h1>
                    WBS
                </h1>
            </div>
        </section>
        <section id="single-service-area" class="business-planning-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                        <div class="content-box">
                            <div class="row" v-if="routeName == 'TENTANG'">
                                <div class="top-content">
                                    <div class="col-md-12">
                                        <div class="text-holder">
                                            {!! $wbsAbout->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" v-if="routeName == 'PENGADUAN'">
                                <div class="col-md-12">
                                    <div class="accordion-box">
                                        @foreach ($wbsSteps as $wbsStep)
                                            <div class="accordion accordion-block">
                                                <div class="accord-btn active">
                                                    <h4>{{ $wbsStep->number }}</h4>
                                                </div>
                                                <div class="accord-content collapsed">
                                                    {!! $wbsStep->description !!}
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="row" v-if="routeName == 'FORM'">
                                <div class="col-md-12 contact-form">
                                    <form @submit.prevent="reportInsert" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Jenis Pelanggaran</label>
                                            <select name="wbs_category_id" v-model="form.wbs_category_id"
                                                class="form-control" id="" required>
                                                <option value="">Pilih Jenis Pelanggaran</option>
                                                @foreach ($wbsCategories as $wbsCategory)
                                                    <option value="{{ $wbsCategory->id }}">{{ $wbsCategory->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pelapor</label>
                                            <input type="text" required placeholder="Masukkan Nama Pelapor"
                                                class="form-control" v-model="form.name" name="name" id="">
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input type="text" required placeholder="Alamat / Lokasi Kejadian"
                                                class="form-control" v-model="form.location" name="location" id="">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal & Waktu Kejadian</label>
                                            <input type="datetime-local" v-model="form.datetime" class="form-control"
                                                required name="datetime" id="">
                                        </div>
                                        <div class="form-group">
                                            <label>Uraian Pengaduan</label>
                                            <textarea name="description" v-model="form.description" id="" cols="20" rows="5"
                                                class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>File Lampiran</label>
                                            <input type="file" @change="onFileSelected" name="file"
                                                class="form-control" id="">
                                        </div>
                                        <div class="form-group mt-4 mb-4">
                                            <div class="captcha">
                                                <span v-html="captchaImage"></span>
                                                <button type="button" class="btn btn-danger" class="reload" id="reload"
                                                    @click="reloadCaptcha()">
                                                    &#x21bb;
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <input id="captcha" required type="text" class="form-control"
                                                placeholder="Enter Captcha" v-model="form.captcha" name="captcha">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                    type="hidden" value="">
                                                <button class="thm-btn bg-clr1" type="submit"
                                                    style="width: 100%;height: 5rem;"
                                                    data-loading-text="Please wait...">Kirim Aduan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                        <div class="left-sidebar">
                            <!--Start single sidebar-->
                            <div class="single-sidebar">
                                <ul class="page-link">
                                    <li>
                                        <a :class="{ 'active': routeName == 'TENTANG' }" @click="routeName = 'TENTANG'">
                                            Tentang WBS
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a :class="{ 'active': routeName == 'PENGADUAN' }"
                                            @click="routeName = 'PENGADUAN'">
                                            Tata Cara Pengaduan
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a :class="{ 'active': routeName == 'FORM' }" @click="routeName = 'FORM'">
                                            Form Pengaduan
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('custom-scripts')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.7/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js"
        integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const {
            createApp
        } = Vue

        createApp({
            data() {
                return {
                    routeName: "TENTANG",
                    captchaImage: '',
                    form: {
                        name: "",
                        wbs_category_id: "",
                        location: "",
                        datetime: "",
                        description: "",
                        file: "",
                        captcha: "",
                    }
                }
            },
            mounted() {
                this.reloadCaptcha();
            },
            methods: {
                reloadCaptcha() {
                    axios.get('/reload-captcha')
                        .then((res) => {
                            this.captchaImage = res.data.captcha;
                            console.log(this.captchaImage);
                        });
                },
                onFileSelected(event) {
                    this.form.file = event.target.files[0];
                },
                reportInsert() {
                    let formData = new FormData();
                    formData.set("name", this.form.name);
                    formData.set("wbs_category_id", this.form.wbs_category_id);
                    formData.set("location", this.form.location);
                    formData.set("datetime", this.form.datetime);
                    formData.set("description", this.form.description);
                    formData.set("file", this.form.file);
                    formData.set("captcha", this.form.captcha);
                    axios
                        .post('{{ route('wbsStore') }}', formData)
                        .then(() => {
                            Swal.fire({
                                title: 'Laporan Anda Berhasil Terkirim',
                                icon: 'success',
                                confirmButtonText: 'Lanjut',
                            }).then((result) => {
                                /* Read more about isConfirmed, isDenied below */
                                if (result.isConfirmed) {
                                    this.reloadCaptcha();
                                    this.form.name = "";
                                    this.form.wbs_category_id = "";
                                    this.form.location = "";
                                    this.form.datetime = "";
                                    this.form.description = "";
                                    this.form.file = "";
                                    this.form.captcha = "";
                                }
                            })
                        })
                        .catch((error) => {
                            Swal.fire({
                                title: 'Error',
                                icon: 'error',
                                text: error.response.data.message,
                                confirmButtonText: 'Ok',
                            })
                        });
                }
            },
        }).mount('#app')
    </script>
@endpush
