<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		$this->load->model('AdminModel');
	}

	public function checkSession()
	{
		$sessionData = $this->session->userdata('loged-in');
		if(empty($sessionData)){
			redirect(base_url('AdminCon'));
		}
	}

	public function index()
	{
		$this->load->view('admin/index');
	}

    public function AdminLogin()
    {
        $this->form_validation->set_rules('email_id', 'Email ID', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('AdminCon/index');
                }
                else
                {
                        $dbData = $this->AdminModel->checkAdminLogin();
						
						if(!empty($dbData)){
							
							if($dbData->password == $this->input->post('password')){
								// print_r($dbData); die;
									$addSession = array( 
										'id' => $dbData->id,
										'email_id' => $dbData->email_id,
									);
									$this->session->set_userdata('loged-in',$addSession);
									redirect(base_url('AdminCon/dashboard'));
							}else{
								$this->session->set_flashdata('error_msg','Your Password Is Wrong!!!!');
								$this->load->view('admin/index');
							}
							
						}else{
							$this->session->set_flashdata('error_msg', 'Your Account Not Found!!');
							$this->load->view('admin/index');
						}

                }
    }

	public function forgetPassword()
	{
		$this->load->view('admin/forget-pass');
	}
	
	public function submitforgetPassword()
	{
		$this->form_validation->set_rules('email_id', 'Email Id', 'trim|required|xss_clean');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('admin/forget-pass');
			}
			else
			{
				$dbData = $this->AdminModel->checkAdminLogin();
				if(!empty($dbData)){
					$password = rand(1000,9999);
					// $mdPassword = md5($password);
					$this->AdminModel->updatePassword($password);
					$this->session->set_flashdata('error_msg', 'Your Password Send');
					redirect(base_url('Admincon/index'));
				}else{
					$this->session->set_flashdata('error_msg', 'Your Account Not Found');
					$this->load->view('admin/forget-pass');
				}
			}
	}
	
	// public function submitForgetPassword()
	// {
	//     $this->load->library('form_validation');
	//     $this->form_validation->set_error_delimiters('<div class="text-danger" style="font-size:13px;font-style: italic;margin-top:-5px;margin-bottom:10px;">', '</div>');
	//     $this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean');
	//     if($this->form_validation->run() == FALSE){
	//         $message = array('message'=>'<span class="text-success">Please Enter Your Registered email address</span>');
	// 		$this->session->set_userdata($message);
	//         redirect(base_url('forget-password.html'));
	//     }else{
	//         $data['userEmail']=$this->Site_Model->forgetPasswordEmail();
	//         @$dbEmail=$data['userEmail']->user_email;
	//         $enterEmail=$this->input->post('email');
	//         if($dbEmail  == $enterEmail){
	//             $to=$data['userEmail']->user_email;
	//             $name=$data['userEmail']->user_name;
	//             $mobileNum=$data['userEmail']->user_mobile;
	//             $user_id=$data['userEmail']->user_id;
	//             //$password=$data['userEmail']->user_password_text;
	            
	//             $password = rand(99999,999999);
	//             $mdPassword = md5($password);
	            
	     
	//             $this->db->set("user_password",$mdPassword);
 	// 	        $this->db->set("user_password_text",$password);
	//             $this->db->where('user_id',$user_id);
	//             $this->db->update('kh_user_list');
	       
    // 			$message = array('forgetmessage'=>'<span class="text-success">Your change password has been sent to your registered mobile number and email id.</span>');
	// 		    $this->session->set_userdata($message);
	// 		    //redirect(base_url('forget-password.html'));
	// 		    redirect(base_url('user-login.html'));
	//         }else{
	//             $message = array('message'=>'<span class="text-success">We cannot find an account with that email address</span>');
	// 		    $this->session->set_userdata($message);
	// 		    redirect(base_url('forget-password.html')); 
	//         }
	//       }
	// }

	public function dashboard()
	{
		$this->checkSession();
		$this->load->view('admin/dashboard');
	}

	public function logOut()
	{
		$this->session->sess_destroy();
		redirect(base_url('AdminCon'));
	}

	public function userList()
	{
		$this->checkSession();
		$data['userList'] = $this->AdminModel->getUserList();
		$this->load->view('admin/user/userList',$data);
	}

// ------------------------------------category-----------------------------------------------------

	public function categoryList()
	{
		$this->checkSession();
		$data['categorylist'] = $this->AdminModel->getCategoryList();
		$this->load->view('admin/category/categoryList',$data);
	}

	public function addCategory()
	{
		$this->checkSession();
		$data['parentCategorylist'] = $this->AdminModel->getparentCategoryList();
		$this->load->view('admin/category/addCategory',$data);
	}

	public function submitCategory()
	{
		$this->checkSession();
		$this->form_validation->set_rules('category_name', 'category_name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('category_parent_id', 'category_parent_id', 'trim|required|xss_clean');
		$this->form_validation->set_rules('category_description', 'category_description', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE)
                {
						$data['parentCategorylist'] = $this->AdminModel->getparentCategoryList();
                        $this->load->view('admin/category/addCategory',$data);
                }
                else
                {
                        $this->AdminModel->insertCategoory();
						$this->session->set_flashdata('error_msg','Your Category Add SuccessFully');
						redirect(base_url('AdminCon/categoryList'));
                }
	}

	public function statusCategory($id,$status)
	{
		$this->AdminModel->categoryStatusUpdate($id,$status);
		$this->session->set_flashdata('error_msg','Your Category Status Update SuccessFully');
		redirect(base_url('AdminCon/categoryList'));
	}

	public function editCategory()
	{
		$this->checkSession();
		$data['getCategoryId'] = $this->AdminModel->getCategoryId($this->uri->segment(3));
		$data['getParentCategoryId'] = $this->AdminModel->getParentCategoryId();
		$this->load->view('admin/category/editCategory',$data);
	}

	public function submitEditCategory()
	{
		$this->checkSession();
		$this->form_validation->set_rules('category_id', 'category_id', 'trim|required|xss_clean');
		$this->form_validation->set_rules('category_name', 'category_name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('category_parent_id', 'category_parent_id', 'trim|required|xss_clean');
		$this->form_validation->set_rules('category_description', 'category_description', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE)
                {
						$data['getCategoryId'] = $this->AdminModel->getCategoryId($this->input->post('category_id'));
						$data['getParentCategoryId'] = $this->AdminModel->getParentCategoryId();
                        $this->load->view('admin/category/editCategory',$data);
                }
                else
                {
                        $this->AdminModel->updateCategory();
						$this->session->set_flashdata('error_msg','Your Category Add SuccessFully');
						redirect(base_url('AdminCon/categoryList'));
                }
	}


// ------------------------------------category ends-----------------------------------------------------

public function do_upload($fileName,$path)
{
	$this->checkSession();
	$config['upload_path'] = './uploads/'.$path;
	$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|svg';
	$config['max_size']	= '20000000000000000000000000000000000000000';
//	$config['max_width']  = '160';
//	$config['max_height']  = '190';
	$this->load->library('upload', $config);
	
	if ( ! $this->upload->do_upload($fileName))
	{
		return $error = array('error' => $this->upload->display_errors(),'upload_data' => "");
	}
	else
	{
		$uploadedImage=$this->upload->data();
		return $data = array('upload_data' => $uploadedImage,'error' =>"");
	}
}

// -------------------------------------Product---------------------------------------------------
	public function productList()
	{
		$this->checkSession();
		$data['productList'] = $this->AdminModel->getProductList();
		$this->load->view('admin/product/productList',$data);
	}

	public function addProduct()
	{
		$this->checkSession();
		$data['categorylist'] = $this->AdminModel->getCategoryList();
		$this->load->view('admin/product/addProduct',$data);
	}

	public function submitProduct()
	{
		$this->checkSession();

		$this->form_validation->set_rules('product_name','product_name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_mrp','product_mrp', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_price','product_price', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_per_price','product_per_price', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_qty','product_qty', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_per_qty','product_per_qty', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_category','Category', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_stock','product_stock', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_description','product_description', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_sm_desc','product_sm_desc', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_meta_title','product_meta_title Confirmation', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_meta_keyword','product_meta_keyword', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_meta_desc','product_meta_desc', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE)
                {
					$data['categorylist'] = $this->AdminModel->getCategoryList();
                        $this->load->view('admin/product/addProduct',$data);
                }
                else
                {
					$logoData = $this->do_upload('product_image','productImage');
					$imgName = $logoData["upload_data"]["file_name"];

                        $this->AdminModel->insertProduct($imgName);
						$this->session->set_flashdata('error_msg','Your Product Add Successfully');
						redirect(base_url('AdminCon/productList'));
                }
	}

	public function productStatus($id,$status)
	{
		$this->AdminModel->productStatusUpdate($id,$status);
		$this->session->set_flashdata('error_msg','Your status Update Successfully');
		redirect(base_url('AdminCon/productList'));
	}

	public function editProduct()
	{
		$this->checkSession();
		$data['editData'] = $this->AdminModel->getEditDataForProductData($this->uri->segment(3));
		$data['categorylist'] = $this->AdminModel->getCategoryList();
		$this->load->view('admin/product/editProduct',$data);
	}

	public function submitEditProduct()
	{
		$this->checkSession();

		$this->form_validation->set_rules('product_id','product_id', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_name','product_name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_mrp','product_mrp', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_price','product_price', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_per_price','product_per_price', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_qty','product_qty', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_per_qty','product_per_qty', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_category','Category', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_stock','product_stock', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_description','product_description', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_sm_desc','product_sm_desc', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_meta_title','product_meta_title Confirmation', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_meta_keyword','product_meta_keyword', 'trim|required|xss_clean');
		$this->form_validation->set_rules('product_meta_desc','product_meta_desc', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE)
                {
					$data['categorylist'] = $this->AdminModel->getCategoryList();
					$data['editData']=$this->AdminModel->getEditDataForProductData($this->input->post('product_id'));
                    $this->load->view('admin/product/editProduct',$data);
                }
                else
                {
					if(!empty($_FILES['product_image'])){
					$logoData = $this->do_upload('product_image','productImage');
					$imgName = $logoData["upload_data"]["file_name"];
					}else{
						$imgName = null;
					}
                        $this->AdminModel->updateProduct($imgName);
						$this->session->set_flashdata('error_msg','Your Product Update Successfully');
						redirect(base_url('AdminCon/productList'));
                }
	}

// -------------------------------------Product ends---------------------------------------------------

	public function couponList()
	{
		$this->checkSession();
		$data['couponList'] = $this->AdminModel->getcouponList();
		$this->load->view('admin/coupon/couponList',$data);
	}

	public function orderList()
	{
		$this->checkSession();
		$data['orderList'] = $this->AdminModel->getOrderList();
		$this->load->view('admin/order/orderList',$data);
	}

	public function OrderCancel()
	{
		$this->db->set('order_status',2);
		$this->db->where('order_id',$this->uri->segment(3));
		$this->db->update('order');

		redirect(base_url('AdminCon/orderList'));
	}

// ---------------------------------------------blog-----------------------------------------------------

	public function blogList()
	{
		$this->checkSession();
		$data['bloglist'] = $this->AdminModel->getBlogList();
		$this->load->view('admin/blog/blogList',$data);
	}

	public function addBlog()
	{
		$this->checkSession();
		$this->load->view('admin/blog/addBlog');
	}

	public function submitBlog()
	{
		$this->checkSession();
		$this->form_validation->set_rules('blog_title','blog_title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('blog_para','blog_para', 'trim|required|xss_clean');
		$this->form_validation->set_rules('blog_sm_desc','blog_sm_desc', 'trim|required|xss_clean');
		$this->form_validation->set_rules('blog_date','blog_date', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE)
                {
					$this->load->view('admin/blog/addBlog');
                }
                else
                {
					$logoData = $this->do_upload('blog_image','productImage');
					$imgName = $logoData["upload_data"]["file_name"];

                        $this->AdminModel->insertblog($imgName);
						$this->session->set_flashdata('error_msg','Your BLOG Add Successfully');
						redirect(base_url('AdminCon/blogList'));
                }
	}

	public function editBlog()
	{
		$this->checkSession();
		$data['editData'] = $this->AdminModel->getEditId($this->uri->segment(3));
		$this->load->view('admin/blog/editBlog',$data);
	}

	public function editBlogSubmit()
	{
		$this->checkSession();
		$this->form_validation->set_rules('blog_title','blog_title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('blog_para','blog_para', 'trim|required|xss_clean');
		$this->form_validation->set_rules('blog_sm_desc','blog_sm_desc', 'trim|required|xss_clean');
		$this->form_validation->set_rules('blog_date','blog_date', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE)
                {
					$data['editData'] = $this->AdminModel->getEditId($this->uri->segment(3));
					$this->load->view('admin/blog/editBlog',$data);
                }
                else
                {
					if(!empty($_FILES['blog_image'])){
						$logoData = $this->do_upload('blog_image','productImage');
						$imgName = $logoData["upload_data"]["file_name"];
						}else{
							$imgName = null;
						}
							$this->AdminModel->updateBlog($imgName);
							$this->session->set_flashdata('error_msg','Your BLOG Update Successfully');
							redirect(base_url('AdminCon/blogList'));
				}
	}

	public function deleteblog($id)
	{
		$this->AdminModel->deleteBlog($id);
		redirect(base_url('AdminCon/blogList'));
	}




	
}
