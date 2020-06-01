<?php $this->load->view('2019/_includes/top'); ?>


<?php
$speakers = [
    [
        'image' => 'SPismunandar.jpg',
        'name' => 'Prof. Dr. Ismunandar, PhD',
        'cv1' => 'Directorate General of Learning and Student Affairs',
        'cv2' => 'Professor in Chemistry',
        'country' => 'Indonesia'
    ],
    [
        'image' => 'SPananto.jpg',
        'name' => 'Ir. Ananto Kusuma Seta, M.Sc., Ph.D',
        'cv1' => 'Senior Advisor to the Minister on Innovation and Competitiveness at Ministry of Education and Culture',
        'cv2' => '',
        'country' => 'Indonesia'
    ],
    [
        'image' => 'SPlooi.jpg',
        'name' => 'Prof. Dr. Chee Kit Looi',
        'cv1' => 'National Institute of Education (NIE)',
        'cv2' => 'Professor in Learning Sciences & Technologies (LST)',
        'country' => 'Singapore'
    ],
    [
        'image' => 'SPwong.jpg',
        'name' => 'Prof. Wong Su Luan',
        'cv1' => 'University Putra Malaysia',
        'cv2' => 'Associate Professor in Information Technology',
        'country' => 'Malaysia'
    ],
    [
        'image' => 'SPalastair.jpg',
        'name' => 'Alastair Creelman, PhD',
        'cv1' => 'Linnaeus University',
        'cv2' => 'Specialist e-learning',
        'country' => 'Sweden'
    ],
    [
        'image' => 'SParakawa.jpg',
        'name' => 'Prof. Yutaka Arakawa',
        'cv1' => 'Kyushu University',
        'cv2' => 'Professor of HumanoPhilic Systems Lab',
        'country' => 'Japan'
    ],
    [
        'image' => 'SPsaida.jpg',
        'name' => 'Saida Ulfa, M.Edu., PhD',
        'cv1' => 'Universitas Negeri Malang',
        'cv2' => 'Assistant Professor in Learning Engineering',
        'country' => 'Indonesia'
    ],
];
?>
<!-- MAIN -->

<!-- Page Content -->
<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">ICLI 2019 Keynote Speakers
	</h1>

	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?= site_url('2019') ?>">Home</a>
		</li>
		<li class="breadcrumb-item active">Keynote Speakers</li>
	</ol>
	<h4>Keynote Speakers</h4>
	<br>
	<div class="row">
        <?php foreach($speakers as $sp) { ?>
		<div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
				<img class="card-img-top" src="<?= base_url('assets/2019/image/'.$sp['image']) ?>"
					alt="<?= $sp['name'] ?>">
				<h6 class="card-header bg-dark text-white">
					<b><?= $sp['name'] ?></b>
				</h6>
				<font size='2'>
					<ul class='list-group list-group-flush'>

						<li class='list-group-item'><b><?= $sp['cv1'] ?></b></li>
						<li class='list-group-item'><b><?= $sp['cv2'] ?></b></li>
						<li class='list-group-item'>
							<font size="5"><b><?= $sp['country'] ?></b></font>
						</li>

					</ul>
				</font>
			</div>
		</div>
		<?php } ?>
	</div>

	<!-- Pagination -->

</div>
<!-- /.container -->

<!-- Footer -->

<!-- /MAIN -->

<?php $this->load->view('2019/_includes/bottom'); ?>
