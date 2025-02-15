<!--Input Testimoni Details Start-->
	   <section class="contact-details" id="contact">
        <div class="container pb-70">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">Beri Kami Testimoni!</span>
                        <h2>Saran & Kritik</h2>
                    </div>
                    <!-- Input Form -->
                    <form id="contact_form" name="contact_form" class="" action="{{ route('testimoni.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="nama_testimoni" class="form-control" type="text" placeholder="Masukkan Nama Anda">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="email_testimoni" class="form-control required email" type="email" placeholder="Masukkan Email Anda">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="judul_pesan" class="form-control" type="text" placeholder="Judul Pesan">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <textarea name="pesan" class="form-control required" rows="7" placeholder="Masukkan Pesan"></textarea>
                        </div>
                        <div class="mb-5">
                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                        </div>
                    </form>
                    <!-- Input Testimoni Form Validation-->
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">Butuh Bantuan?</span>
                            <h2>Tentang Kami</h2>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">Memiliki pertanyaan?</h6>
                                    <a href="tel:980089850"><span>Free</span> +628976701110</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">Kirim email</h6>
                                    <a href="https://html.kodesolution.com/cdn-cgi/l/email-protection#78161d1d1c101d1408381b171508191601561b1715"><span class="__cf_email__" data-cfemail="1f717a7a7b777a736f5f7c70726f7e7166317c7072">Transfox@gmail.com</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">Kunjungi kapanpun</h6>
                                    <span>SMKN 1 GARUT</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Input Testimoni Details End-->