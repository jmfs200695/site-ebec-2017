<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {

   public function index()
	{
      	$this->load->view('include/header');
      	$this->load->view('index');
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
    public function en()
    {
        $this->load->view('include/headeren');
        $this->load->view('indexEn');
        $this->load->view('include/footer');
    }
    public function besten()
    {
        $this->load->view('include/headeren');
        $this->load->view('best-en');
        $this->load->view('include/footer');
    }
    public function eventen()
    {
        $this->load->view('include/headeren');
        $this->load->view('event-en');
        $this->load->view('include/footer');
    }
    public function pasteditionen()
    {
        $this->load->view('include/headeren');
        $this->load->view('past-editions-en');
        $this->load->view('include/footer');
    }

    /**
     * @return mixed
     */
    public function wannabe()
    {
        $this->load->view('include/headeren');
        $this->load->view('wannabe');
        $this->load->view('include/footer');
    }
    public function jobfairen()
    {
        $this->load->view('include/headeren');
        $this->load->view('job-fair-en');
        $this->load->view('include/footer');
    }
    public function contactsen()
    {
        $this->load->view('include/headeren');
        $this->load->view('contacts-en');
        $this->load->view('include/footer');
    }
    public function applyen()
    {
        $this->load->view('include/headeren');
        $this->load->view('apply-en');
        $this->load->view('include/footer');
    }
    public function teamen()
    {
        $this->load->view('include/headeren');
        $this->load->view('team-en');
        $this->load->view('include/footer');
    }
    public function btden()
    {
        $this->load->view('include/headeren');
        $this->load->view('btd-en');
        $this->load->view('include/footer');
    }
    public function sheduleen()
    {
        $this->load->view('include/headeren');
        $this->load->view('shedule-en');
        $this->load->view('include/footer');
    }
    public function faqsen()
    {
        $this->load->view('include/headeren');
        $this->load->view('faqs-en');
        $this->load->view('include/footer');
    }
    public function newsen()
    {
        $this->load->view('include/headeren');
        $this->load->view('news-en');
        $this->load->view('include/footer');
    }
    public function mediaen()
    {
        $this->load->view('include/headeren');
        $this->load->view('media-en');
        $this->load->view('include/footer');
    }
    public function partnersen()
    {
        $this->load->view('include/headeren');
        $this->load->view('partners-en');
        $this->load->view('include/footer');
    }
    public function newsmahle()
    {
        $this->load->view('include/header');
        $this->load->view('news_mahle');
        $this->load->view('include/footer');
    }
    public function newsmahleen()
    {
        $this->load->view('include/headeren');
        $this->load->view('news_mahle_en');
        $this->load->view('include/footer');
    }
    public function pag1()
    {
        $this->load->view('include/header');
        $this->load->view('pag1');
        $this->load->view('include/footer');
    }
}
/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
