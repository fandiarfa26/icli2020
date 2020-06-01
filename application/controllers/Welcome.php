<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	protected $info = [
        'ordinal'   => 'fourth',
        'theme'     => 'Digital Fluency for Educators',
        'date'      => 'June 29-30, 2020',
        'venue'     => 'Online Video Call',
    ];

    protected $speakers = [
		[
            'name'      => 'Assoc. Prof. Hasegawa Shinobu',
            'cv'        => '-',
            'special'   => 'Gamification',
            'country'   => 'Japan',
			'img'       => 'speaker-hasegawa.jpg',
			'verified'  => false,
		],
		[
            'name'      => 'Assoc. Prof. Jong-Sheng Cherng',
            'cv'        => '-',
            'special'   => 'Multimedia AR/VR',
            'country'   => 'Taiwan',
			'img'       => 'speaker-cherng.jpg',
			'verified'  => false,
        ],
		[
            'name'      => 'Assist. Prof. Mazhar Javed Awan',
            'cv'        => 'University Management & Technology',
            'special'   => 'Data Science for Education',
            'country'   => 'Pakistan',
			'img'       => 'speaker-javed.png',
			'verified'  => true, 
        ],
        [
            'name'      => 'Sachin V. Gopalan',
            'cv'        => 'CEO Orbit.id',
            'special'   => 'Business & Education',
            'country'   => 'Indonesia',
			'img'       => 'speaker-sachin.jpg',
			'verified'  => true,
        ],
        
        
	];

	public function __construct()
	{
		parent::__construct();
		$this->load->model("important_date_model");
		$this->load->model("category_model");
	}
	
	public function index()
	{
		$importantDate = $this->important_date_model->getAll();
		$this->load->view('homepage', ['info' => $this->info, 'speakers' => $this->speakers, 'important_dates' => $importantDate]);
	}

	public function callForPaper()
	{
		$this->load->view('call_for_paper', ['info' => $this->info]);
	}

	public function topic()
	{
		$category = $this->category_model->getAll();
		$this->load->view('topic', ['info' => $this->info, 'categories' => $category]);
	}

	public function keynoteSpeakers()
	{
		$this->load->view('keynote_speakers', ['speakers' => $this->speakers]);
	}

	public function importantDate()
	{
		$importantDate = $this->important_date_model->getAll();
		$this->load->view('important_date', ['important_dates'=>$importantDate]);
	}

	public function venue()
	{
		$this->load->view('venue');
	}

	public function organizingCommitee()
	{
		$this->load->view('organizing_commitee');
	}

	public function advisoryCommitee()
	{
		$this->load->view('advisory_commitee');
	}

	public function scientificCommitee()
	{
		$this->load->view('scientific_commitee');
	}

	public function brochure()
	{
		return base_url('assets/guest/img/poster_icli2020.jpeg');
	}

	public function contribution()
	{
		$this->load->view('contribution');
	}
}
