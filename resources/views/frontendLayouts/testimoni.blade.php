<!-- Testimonials Section -->
<section class="testimonials-section" style="padding-top: 50px" id="testimonial">
	<div class="pattern-2 bounce-y"></div>
	<div class="auto-container">
		<div class="sec-title text-center">
			<span class="sub-title">Testimonial</span>
			<h2>Trusted by world leading <br />companies</h2>
		</div>

		@if (isset($testimoni) && $testimoni->count() > 0)
			@if ($testimoni->count() === 1)
				<!-- Tampilkan satu testimoni -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon icon-quote"></span>
						</div>
						<h5 class="name">{{ $testimoni[0]->judul_pesan }}</h5>
						<div class="text">{{ $testimoni[0]->pesan }}</div>
						<div class="founder-info">
							<div class="content">
								<h5 class="name">{{ $testimoni[0]->nama_testimoni }}</h5>
								<span class="designation">{{ $testimoni[0]->email_testimoni }}</span>
							</div>
						</div>
					</div>
				</div>
			@else
				<!-- Tampilkan banyak testimoni dalam carousel -->
				<div class="carousel-outer">
					<div class="testimonial-carousel owl-carousel owl-theme">
						@foreach ($testimoni as $item)
						<div class="testimonial-block">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon icon-quote"></span>
								</div>
								<h5 class="name">{{ $item->judul_pesan }}</h5>
								<div class="text">{{ $item->pesan }}</div>
								<div class="founder-info">
									<div class="content">
										<h5 class="name">{{ $item->nama_testimoni }}</h5>
										<span class="designation">{{ $item->email_testimoni }}</span>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			@endif
		@else
			<p class="text-center">Belum ada testimoni tersedia.</p>
		@endif
	</div>
</section>
<!-- End Testimonials Section -->
