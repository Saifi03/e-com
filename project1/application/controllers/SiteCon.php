<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteCon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		$this->load->model('SiteModel');
	}
    
	public function index()
	{
        $data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		$this->load->view('site/index',$data);
	}

    public function shop()
    {
        $data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		$this->load->view('site/shop',$data);
    }

    public function cart()
    {
        $data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		$this->load->view('site/cart',$data);
    }

	public function categoryProduct($url)
    {
        $data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		$data['categoryData'] = $this->SiteModel->getCategoryByUrl($url);
		// print_r($data['categoryData']); die;
		// $data['productData'] = $this->SiteModel->getProductByCatId($data['categoryData']->category_id);




		// $config['base_url']        = base_url().'SiteCon/categoryProduct/'.$url;
        // $config['total_rows']      = $this->SiteModel->getProductByCatIdCount($data['categoryData']->category_id);
		// // print_r($config['total_rows']); die;
        // $config['per_page']        = 2;
        // $config["full_tag_open"]   = '<ul class="pagination">';
        // $config["full_tag_close"]  = '</ul>';
        // $config["first_tag_open"]  = '<li class="page-item page-link">';
        // $config["first_tag_close"] = '</li>';
        // $config["last_tag_open"]   = '<li class="page-item page-link">';
        // $config["last_tag_close"]  = '</li>';
        // $config["next_tag_open"]   = '<li class="page-item"><span aria-hidden="true">';
        // $config["next_tag_close"]  = '</span></li>';
        // $config["prev_tag_open"]   = '<li class="page-item"> <span aria-hidden="true">';
        // $config["prev_tag_close"]  = '</span></li>';
        // $config["num_tag_open"]    = '<li class="page-item ">';
        // $config["num_tag_close"]   = '</li>';
        // $config["cur_tag_open"]    = '<li class="page-item active"> <a>';
        // $config["cur_tag_close"]   = '</a></li>';
        // $config['first_link']      = "Previous";
        // $config['last_link']       = "Next";
        // $this->pagination->initialize($config);
        // $limitstart  = $this->uri->segment(1) ? $this->uri->segment(1) : 0;
        // $data["link"] = $this->pagination->create_links();
        // $data["productData"]  = $this->SiteModel->getProductByCatId($data['categoryData']->category_id,$limitstart,$config['per_page']);
		
		
		
		
		// $this->load->library('pagination');
		$config['base_url'] =  base_url().'SiteCon/categoryProduct/'.$url;
		$config['total_rows'] =  $this->SiteModel->getProductByCatIdCount($data['categoryData']->category_id);
		$config['per_page'] = 2;
		$config['enable_query_strings'] = TRUE;
		$config['page_query_string'] = TRUE;
		// integrate bootstrap pagination
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '<';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		// $page = $this->uri->segment(3);
		$page = $this->input->get('per_page');
		$data['page'] = $page;
		$data['productData']=$this->SiteModel->getProductByCatId($config["per_page"],$page,$data['categoryData']->category_id);
		// $data["productData"]  = $this->SiteModel->getProductByCatId($data['categoryData']->category_id,$limitstart,$config['per_page']);
		//print_r($data['product_list']); die;
		$data['link']=$this->pagination->create_links();
		$this->load->view('site/category_product',$data);
    }

    public function productDetail($url)
    {
        $data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		$data['productData'] =$this->SiteModel->getProductData($url);
		// $data['categoryProduct'] = $this->SiteModel->getProductDataById($data['productData']);
		// print_r($data['productData']); die;
		$this->load->view('site/product',$data);
    }

	public function	search()
	{
		$data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		
		$data['categoryProduct'] = $this->SiteModel->getProductBySearch();
		// print_r($data['productData']); die;
		$this->load->view('site/search',$data);
	}

	public function addToCart()
	{
		$data['product_data'] =$this->SiteModel->getProductDataByID($this->uri->segment(3));
		// print_r($data['productData'] ); die;
		$data = array(
				'id'      => $data['product_data']->product_id,
				'qty'     => 1,
				'price'   => $data['product_data']->product_price,
				'name'    => $data['product_data']->product_name
		);
		$this->cart->insert($data);
		// print_r($this->cart->contents()); die;
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function updateCart()
	{
		$data = array(
				'rowid' => $this->input->post('rowid'),
				'qty'   => $this->input->post('quantity')
		);
		$this->cart->update($data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function deletecartItem()
	{
		$data = array(
				'rowid' => $this->uri->segment('3'),
				'qty'   => 0
		);
		$this->cart->update($data);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function login()
	{
		$data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		$this->load->view('site/login',$data);
	}

	public function submitLogin()
	{
		$this->form_validation->set_rules('mobile_no', 'mobile_no', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('site/login');
                }
                else
                {
                        $dbData = $this->SiteModel->insertUserLogin();
						if(!empty($dbData)){
							$otp = rand(1000,9999);

							$this->SiteModel->insertOTP($otp);
							// third party upi space
							$this->session->set_flashdata('error_msg', 'Your OTP Send');

							$data['meta_title']="";
							$data['meta_description']="";
							$data['meta_keyword']="";
							$data['url']=base_url();
							$this->load->view('site/otp',$data);
						}else{
							$this->session->set_flashdata('error_msg', 'Your Account not found!!');
							$this->load->view('site/login');
						}
                }
	}

	public function submitOTP()
	{
		$this->form_validation->set_rules('mobile_no', 'Mobile No', 'trim|required|xss_clean');
		$this->form_validation->set_rules('otp', 'OTP', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('site/otp');
                }
                else{
					$checkOTP = $this->SiteModel->checkOtpWithMobile();
					if(count($checkOTP) > 0){
						$this->SiteModel->updateOTP();
						$dbData = $this->SiteModel->insertUserLogin();
						$addSession = array(
							'id' => $dbData->id,
							'mobile_no' => $dbData->mobile_no
						);
						$this->session->set_userdata('user_logged-in',$addSession);
						redirect(base_url('dashboard.html'));
					}else{
						$this->session->set_flashdata('error_msg', 'Your OTP is Wrong!!');
						$data['meta_title']="";
						$data['meta_description']="";
						$data['meta_keyword']="";
						$data['url']=base_url();
						$this->load->view('site/otp',$data);
					}
				}
	}

	public function dashboard()
	{
        $data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		$data['orderData']=$this->SiteModel->getOrderByUser();
		$this->load->view('site/dashboard',$data);
	}

	public function checkOut()
	{
        $data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		$this->load->view('site/checkout',$data);
	}

	public function logOut()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function orderNow()
	{
		$orderid=$this->SiteModel->insertOrder();
		if($this->input->post('payment_type') == 0){
			$data['meta_title']="";
			$data['meta_description']="";
			$data['meta_keyword']="";
			$data['url']=base_url();
			$this->load->view('site/cod-success',$data);
		}else{
			$data['title'] = 'Checkout Payment | Ecom';
	        $data['getOrderData']=$this->SiteModel->getOrderData($orderid);
	        $data['order_id']=$orderid;
	        $data['order_amount_with_tax']=$data['getOrderData']->order_amount;
	        $data['order_firstname']=$data['getOrderData']->order_name;
	        $data['order_email']=$data['getOrderData']->order_email;
	        $data['order_phone']=$data['getOrderData']->order_phone;
	        $data['productinfo']=$data['getOrderData']->order_unique_id;
	        $data['return_url'] = site_url().'/payment-success.html';
	        $data['surl'] = site_url().'/payment-success.html';;
	        $data['furl'] = site_url().'/SiteCon/paymentFailure';;
	        $data['currency_code'] = 'INR';
			$data['meta_title']="";
			$data['meta_description']="";
			$data['meta_keyword']="";
			$data['url']=base_url();
	        $this->load->view('site/payment/razorpay',$data);
		}
	}

	public function paymentsuccess()
	{
		$this->db->set('order_payment_status',1);
		$this->db->where('order_id',$_POST['merchant_order_id']);
		$this->db->update('order');

		$this->SiteModel->insertPayment();

		$data['orderData']=$this->db->where('order_id',$_POST['merchant_order_id'])->get('order')->row();
		$data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		$this->load->view('site/payment/payment-successful',$data);
	}

	public function paymentFailure()
	{
		$data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		$this->load->view('site/payment/payment-failed',$data);
	}

	public function OrderCancel()
	{
		$this->db->set('order_status',2);
		$this->db->where('order_id',$this->uri->segment(3));
		$this->db->update('order');

		$data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		$data['orderData']=$this->SiteModel->getOrderByUser();
		$this->load->view('site/dashboard',$data);
	}

	public function blog()
	{
		$data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		$data['bloglist'] = $this->SiteModel->getBlogList();
		$this->load->view('site/blog',$data);
	}

	public function blogDetail()
	{
		$data['meta_title']="";
		$data['meta_description']="";
		$data['meta_keyword']="";
		$data['url']=base_url();
		// $data['bloglist'] = $this->SiteModel->getBlogList();
		$this->load->view('site/blog-detail',$data);
	}




}


