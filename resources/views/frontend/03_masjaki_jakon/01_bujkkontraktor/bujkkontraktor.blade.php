@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">
	<section class="page-banner">
		<div class="container">
			<div class="page-banner-title">
				<h3 style="color: black;">{{$title}}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->
	<section class="donate-section">
		<div class="container">
			<div class="row row-gutter-30">

				<div class="col-xxl-12 col-lg-12">
					<div class="donate-box-inner">

                        <h2>Responsive Table</h2>
                                <div class="table-wrapper">
                                    <table class="fl-table">
                                        <thead>
                                        <tr>
                                            <th>Header 1</th>
                                            <th>Header 2</th>
                                            <th>Header 3</th>
                                            <th>Header 4</th>
                                            <th>Header 5</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                            <td>Content</td>
                                        </tr>
                                        <tbody>
                                    </table>
                                </div>

                    </div><!-- donate-box-inner -->
				</div><!-- col-xl-8 col-lg-12 -->
			</div><!-- row -->
		</div><!-- container -->
        @include('frontend.00_approve.01_cssterpisah.paginator')
	</section><!-- donate-section -->


</div><!--page-wrapper-->
@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
