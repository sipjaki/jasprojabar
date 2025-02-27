@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

<div class="page-wrapper">
	<section class="page-banner" style="background-image: url('/assets/approve/image/bg/page-banner.png')">
		<div class="container">
			<div class="page-breadcrumbs">
				<ul class="list-unstyled">
					{{-- <li><a href="index.html">Home</a></li> --}}
					{{-- <li>Document-details</li> --}}
				</ul><!-- list-unstyled -->
			</div><!-- page-breadcrumbs -->
			<div class="page-banner-title">
				<h3 style="color: black; font-size:25px;">{{ $title }}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->
	<section class="department-details-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-4 col-xl-4">
					<div class="sidebar">
						<div class="sidebar-widget-list-inner">
							<ul>

                                {{-- @include('frontend.00_approve.01_cssterpisah.peraturanjasakonstruksi') --}}
                                <li><a href="javascript:history.back()"><i class="fa-solid fa-arrow-left-long"></i>Kembali Ke Data Toko Bangunan</a></li>
                                <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>Toko Bangunan : {{$data->namatokobangunan}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>Kecamatan : {{$data->kecamatanblora->kecamatanblora}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>Pemilik : {{$data->pemilik}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>Alamat : {{$data->alamat}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>No Telepon : {{$data->notelepon}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>Email : {{$data->email}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i>Jenis Toko : {{$data->jenisprodukbangunan}}</a></li>
							</ul><!-- ul -->
						</div><!-- sidebar-widget-list-inner -->
						<div class="sidebar-widget sidebar-widget-card">
							<div class="sidebar-widget-card-icon">
								<i class="flaticon-question"></i>
							</div><!-- sidebar-widget-card-icon -->
							<div class="sidebar-widget-card-content">
                                <h3><a href="https://wa.me/6281321455855" target="_blank">Butuh Bantuan? Klik </a></h3>
								<p>
                                    Kami siap membantu! Klik di atas  untuk terhubung langsung dengan tim kami.</p>
							</div><!-- sidebar-widget-card-content -->
						</div><!-- sidebar-widget sidebar-widget-card -->
					</div><!--sidebar-->
				</div><!--col-12 col-lg-4 col-xl-4-->
				<div class="col-lg-8">

                    <div class="department-details-imgbox">
                        <iframe src="{{ asset('storage/' . $data->fototokobangunan) }}" width="100%" height="750" style="border: none;"></iframe>
                        {{-- <a href="assets/pdf/sample.pdf" target="_blank"></a> --}}
                    </div><!-- department-details-imgbox -->

                    <div class="department-details-content-box">
						<h4 class="department-details-title">{{ $data->namatokobangunan}}</h4>
					</div><!-- department-details-content-box -->
                    <div class="department-details-content-box">
						<h6 class="department-details-title">{{ $data->keterangan}}</h6>
					</div><!-- department-details-content-box -->

                </div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- department-details-section -->

    <section class="department-details-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-12 col-xl-12">

				</div><!--col-12 col-lg-4 col-xl-4-->
				<div class="col-lg-12">

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto labore doloribus hic id voluptatem soluta libero? Dolore animi, at perferendis dolorem dolores et minus corrupti commodi fugit maxime excepturi exercitationem sit. Consequuntur, ipsa, aspernatur maiores, soluta harum architecto ipsam beatae accusamus aliquam asperiores amet? Minus eum dolorum fugiat illo libero quasi pariatur cum labore, modi nam officiis, natus iusto! Explicabo voluptate, sunt saepe dolores quisquam quia dignissimos non quasi ratione nemo fugiat. Non magnam earum, asperiores veritatis dignissimos est id repellendus? Nostrum aliquam quod doloribus deserunt debitis, architecto eum laborum iste necessitatibus. Rem suscipit distinctio sint repudiandae voluptatum quae veritatis beatae placeat inventore, sed necessitatibus, odit molestias nisi fugit vitae praesentium nostrum. Officiis, id? Excepturi consequatur numquam blanditiis accusantium iure, doloremque totam aliquam, mollitia repellat ratione rem quia quisquam odit. Quisquam impedit, laudantium adipisci repellendus in similique corrupti facilis ipsa officia qui saepe beatae iste modi veritatis architecto tempora. Quis, magni doloremque voluptate, molestiae eaque, quaerat exercitationem mollitia facere eius iure consectetur quae distinctio aperiam officia. Veritatis dolorem, aperiam expedita doloremque consequatur omnis ut quia! Molestias eius quae eaque ipsum natus quaerat laboriosam quasi omnis ducimus, eligendi neque tempore iste illo dignissimos quia quam placeat eveniet aperiam exercitationem maiores. Accusantium modi suscipit ratione voluptates quos quasi explicabo, deleniti officia rem eaque adipisci exercitationem, ipsum, in at omnis quibusdam maxime facilis placeat nostrum excepturi? Qui vero quo commodi beatae quas et itaque aspernatur quam deserunt cumque quisquam atque nostrum, neque sit, odit, vitae possimus tenetur illum nulla alias harum cupiditate porro quibusdam? Beatae consectetur iste eveniet totam minus. Velit similique dolore consectetur enim modi illo maxime voluptatum assumenda sequi eos! Excepturi perspiciatis eos molestiae voluptatum! Velit ducimus adipisci quam sunt laboriosam corporis? Distinctio quia ducimus velit doloremque ipsum expedita? Repellat labore amet quia repudiandae iure quidem consectetur minima explicabo molestiae. Commodi magnam corrupti eos, repellendus doloribus ratione eligendi voluptatem magni perferendis accusantium ducimus architecto perspiciatis sequi dolorum error deserunt? Earum, cupiditate dolorum quisquam a ex explicabo, qui delectus deserunt necessitatibus odio accusamus praesentium illum suscipit repellendus libero. Ad at dignissimos voluptatem consequuntur assumenda nesciunt mollitia placeat aperiam ullam nostrum. Perspiciatis voluptatem, expedita, pariatur neque numquam illum ipsam laboriosam dolor voluptates sapiente modi est nam voluptas nobis. Dolor mollitia, voluptatum officiis unde nihil corrupti dicta, enim dolore velit inventore iste hic magni. Repellendus officiis, laudantium necessitatibus recusandae praesentium eveniet eius optio. Ad quibusdam quae blanditiis est architecto! Totam hic voluptates, pariatur repellat consequatur voluptatum culpa nam numquam facilis molestiae provident tempora dicta repudiandae! Nisi delectus voluptatum ducimus inventore repellat vero sapiente facere. Eos, recusandae ratione. Exercitationem et vel magni necessitatibus, architecto itaque non doloremque placeat quasi laboriosam sapiente voluptatibus aliquam! Autem, corporis architecto nemo eligendi magni aperiam ipsa, magnam praesentium voluptate, necessitatibus maxime hic tempora quos recusandae dolor libero. Vero quae voluptate provident modi ea est rerum quod officiis temporibus! A, quod necessitatibus. Earum dolor error eveniet, dolore sequi, aut temporibus praesentium fuga fugit voluptatem, omnis voluptatum impedit tenetur atque sint repellendus exercitationem voluptate voluptas unde pariatur. Facere ab perspiciatis officiis provident ducimus facilis magni totam, illo mollitia perferendis harum vitae expedita earum blanditiis non distinctio dolores voluptatum ipsum! Placeat deleniti provident quos, asperiores minus debitis at corrupti quidem voluptates laudantium? Maxime quod, architecto, praesentium, tempore optio accusantium tempora minus dolore officiis eveniet itaque quaerat reprehenderit? Alias explicabo quis esse placeat voluptas laboriosam, iste dolorem hic cum unde, modi vero nesciunt molestias omnis fuga facilis, laudantium natus voluptatum repudiandae. Labore fuga, excepturi, vitae odio itaque obcaecati cumque, eum in at adipisci quia aut. Consectetur, magni dolores. Molestiae porro exercitationem eum, necessitatibus in voluptate ducimus ut aliquam. Laboriosam natus exercitationem praesentium veniam reiciendis nemo illum corporis nostrum ad officiis excepturi aut reprehenderit quos repellendus, alias sequi ea vero nihil odio, et soluta, sit officia magnam culpa? Excepturi cum quasi pariatur reprehenderit quod facere numquam illo harum iusto velit, repellendus facilis aliquam cupiditate saepe consectetur tenetur odit earum accusantium! Nam, pariatur? Voluptas perferendis officia expedita nostrum voluptatibus. Quis laudantium soluta impedit atque officiis possimus ipsa illum mollitia vel eveniet adipisci architecto, sed ut recusandae molestias in ex et provident enim nobis. Eaque nisi aliquam adipisci ullam repellendus eligendi blanditiis, nostrum tempore dolor deserunt, in modi excepturi sit. At nemo odio fuga, reprehenderit eius placeat similique unde! Nulla debitis ad ullam reiciendis eveniet. Earum doloribus cumque porro asperiores iste eum omnis repudiandae, obcaecati dolorem, ad aperiam rem officia tenetur id nihil eius mollitia laudantium voluptatum architecto maxime quos officiis ut nam incidunt? Porro iste repellat repudiandae omnis nesciunt architecto obcaecati quas assumenda, natus, ex nobis illum et! Tempora tempore, recusandae esse voluptatum at excepturi mollitia praesentium eum aut repudiandae sunt pariatur, minus delectus minima iure vero. Dolores, quis tempora quaerat ea eaque sed voluptatum nisi aperiam corrupti esse voluptates, cupiditate qui odio alias vel distinctio asperiores soluta ullam. Sequi quod odio cum provident atque adipisci obcaecati eligendi nulla error tenetur, quibusdam eos, consectetur sunt numquam nihil exercitationem quam doloribus expedita aperiam natus delectus rerum? Deleniti ex unde quis. Necessitatibus quia voluptates, cumque debitis dolore, dolorum quo, quaerat fuga eligendi eveniet nobis quas? Earum ea quos pariatur praesentium quasi fugiat iste odio reprehenderit, veniam consequuntur eligendi rerum quo corporis est assumenda hic blanditiis deleniti nihil cupiditate a, repellendus, impedit adipisci eum repellat. Possimus ab ex nostrum, dolor eos aliquid provident mollitia ullam deleniti suscipit corporis repellat quis modi iusto debitis eum placeat expedita! Labore rerum est asperiores, esse adipisci blanditiis id totam tenetur beatae vitae, porro maiores, aliquam tempora veniam. Mollitia harum sapiente, aliquam amet nihil pariatur, reprehenderit eaque, expedita laboriosam sint quos maiores in. Quaerat dolor modi facilis similique eius illo maiores, aperiam voluptate saepe molestiae eos deserunt dolores ab sed facere nam perferendis. Minima labore assumenda illum, nulla necessitatibus, vel unde natus beatae tempora quia, dolor veniam animi distinctio? Eum iusto aliquid ipsum assumenda commodi necessitatibus exercitationem totam sunt deleniti fugiat, fugit est excepturi recusandae maxime laudantium, earum similique. Quas qui inventore temporibus ut officiis alias sequi! Harum natus minus id repellat vel incidunt dolorum voluptas exercitationem beatae, necessitatibus, placeat autem unde ad! Similique.</p>

                </div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- department-details-section -->
</div><!--page-wrapper-->


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
