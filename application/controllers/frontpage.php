<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {

   public function index()
	{
      	$this->load->view('include/header');
      	$this->load->view('site');
      	$this->load->view('include/footer');
	}

	public function best()
	{
		$this->load->view('include/header');
      	$this->load->view('best');
      	$this->load->view('include/footer');
	}

	public function event()
	{
		$this->load->view('include/header');
      	$this->load->view('event');
      	$this->load->view('include/footer');
	}

	public function btd()
	{
		$this->load->view('include/header');
      	$this->load->view('btd');
      	$this->load->view('include/footer');
	}

	public function jobfair()
	{
		$this->load->view('include/header');
      	$this->load->view('job-fair');
      	$this->load->view('include/footer');
	}

	public function schedule()
	{
		$this->load->view('include/header');
      	$this->load->view('schedule');
      	$this->load->view('include/footer');
	}

	public function regulation()
	{
		$this->load->view('include/header');
      	$this->load->view('regulation');
      	$this->load->view('include/footer');
	}

	public function team()
	{
		$this->load->view('include/header');
      	$this->load->view('team');
      	$this->load->view('include/footer');
	}

	public function pasteditions()
	{
		$this->load->view('include/header');
      	$this->load->view('past-editions');
      	$this->load->view('include/footer');
	}

	public function faqs()
	{
		$this->load->view('include/header');
      	$this->load->view('faqs');
      	$this->load->view('include/footer');
	}

	public function apply()
	{
		$this->load->view('include/header');
      	$this->load->view('apply');
      	$this->load->view('include/footer');
	}

	public function news()
	{
		$this->load->view('include/header');
      	$this->load->view('news');
      	$this->load->view('include/footer');
	}

	public function media()
	{
		$this->load->view('include/header');
      	$this->load->view('media');
      	$this->load->view('include/footer');
	}

	public function partners()
	{
		$this->load->view('include/header');
      	$this->load->view('partners');
      	$this->load->view('include/footer');
	}

	public function contacts()
	{
		$this->load->view('include/header');
      	$this->load->view('contacts');
      	$this->load->view('include/footer');
	}

	public function news_btd()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_btd');
      	$this->load->view('include/footer');
	}

	public function news_job_fair()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_job_fair');
      	$this->load->view('include/footer');
	}

	public function news_ergostart()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_ergostart');
      	$this->load->view('include/footer');
	}

	public function news_bold_international()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_bold_international');
      	$this->load->view('include/footer');
	}

	public function news_itgrow()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_itgrow');
      	$this->load->view('include/footer');
	}

	public function news_uniactiva()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_uniactiva');
      	$this->load->view('include/footer');
	}

	public function news_xlm()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_xlm');
      	$this->load->view('include/footer');
	}

	public function news_the_navigator_company()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_the_navigator_company');
      	$this->load->view('include/footer');
	}

	public function news_grupo_visabeira()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_grupo_visabeira');
      	$this->load->view('include/footer');
	}
    
    public function news_inovaria()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_inovaria');
      	$this->load->view('include/footer');
	}
    public function news_caritas_aveiro()
	{
		$this->load->view('include/header');
      	$this->load->view('news/news_caritas_aveiro');
      	$this->load->view('include/footer');
	}
	public function querparceiro()
    	{
    		$this->load->view('include/header');
          	$this->load->view('querparceiro.php');
          	$this->load->view('include/footer');
    	}
    public function tradutor()
    {
        $this->load->view('include/header');
        $this->load->view('english');
        $this->load->view('include/footer');
    }



}
/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
