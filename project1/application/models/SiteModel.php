<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteModel extends CI_Model{

	public function getCategoryList()
	{
		return $this->db->where('status',1)->get('category')->result();
	}

	public function getCategoryByUrl($url)
	{
		return $this->db->where('status',1)->where('category_url',$url)->get('category')->row();
	}

	public function getProductByCatIdCount($catid)
	{
		return $this->db->where('product_status',1)->where('category_id',$catid)->get('product')->num_rows();
	}

	public function getProductByCatId($limit,$page,$catid)
	{
		return $this->db->where('product_status',1)->where('category_id',$catid)->limit($limit,$page)->get('product')->result();
	}

	public function getProductData($url)
	{
		return $this->db->where('product_url',$url)->get('product')->row();
	}
	public function getProductDataByID($id)
	{
		return $this->db->where('product_id',$id)->get('product')->row();
	}

	public function getProductBySearch()
    {
        $this->db->like('product_name', $this->input->get('q'), 'before'); 
        // Produces: WHERE title LIKE '%match' 
        $this->db->like('product_name', $this->input->get('q'), 'after'); 
        // Produces: WHERE title LIKE 'match%' 
        $this->db->like('product_name', $this->input->get('q'), 'both'); 
        // Produces: WHERE title LIKE '%match%'
        return $this->db->get('product')->result();
    }
	public function getRelatedProductById($catid,$productid)
	{
		return $this->db->where('product_status',1)->where('category_id',$catid)->where('product_id !=',$productid)->get('product')->result();
	}

	public function insertUserLogin()
	{
		$loginData = $this->db->where('status',1)->where('mobile_no',$this->input->post('mobile_no'))->get('user')->row();
		if(!empty($loginData)){
			return $loginData;
		}else{
			$this->db->set('status',1);
			$this->db->set('mobile_no',$this->input->post('mobile_no'));
			$this->db->insert('user');
			$userid = $this->db->insert_id();
			return $this->db->where('status',1)->where('id',$userid)->get('user')->row();
		}
	}

	public function insertOTP($otp)
	{
		$this->db->set('otp',$otp)->set('mobile_no',$this->input->post('mobile_no'))->set('status',1)->set('send',date('y-m-d'))->insert('otp');
	}

	public function checkOtpWithMobile()
	{
		return $this->db->where('otp',$this->input->post('otp'))->where('mobile_no',$this->input->post('mobile_no'))->where('status',1)->get('otp')->result();
	}

	public function updateOTP()
	{
		$this->db->set('status',0)->where('otp',$this->input->post('otp'))->where('mobile_no',$this->input->post('mobile_no'))->update('otp');
	}

	public function insertOrder()
	{
		$sessionData = $this->session->userdata('user_logged-in');
		// print_r($sessionData); die;
		
		$this->db->set('order_amount',$this->input->post('total'));
		$this->db->set('order_name',$this->input->post('order_name'));
		$this->db->set('order_address',$this->input->post('order_address'));
		$this->db->set('order_phone',$this->input->post('order_phone'));
		$this->db->set('order_email',$this->input->post('order_email'));
		$this->db->set('order_payment_status',0); // 0 Not Paid | 1 Paid
		$this->db->set('payment_type',$this->input->post('payment_type'));  // 0 COD | 1 Online
		$this->db->set('order_status',0);
		$this->db->set('user_id',$sessionData['id']);
		$this->db->insert('order');
		$orderid = $this->db->insert_id();

		$unique_id = "ORD00".$orderid;

		$this->db->set('order_unique_id',$unique_id);
		$this->db->where('order_id',$orderid);
		$this->db->update('order');


		foreach($this->cart->contents() as $items){
		$this->db->set('product_name', $items['name']);
		$this->db->set('product_one_price',$items['price']);
		$this->db->set('product_qty',$items['qty']);
		$this->db->set('product_price',$items['subtotal']);
		$this->db->set('product_id',$items['id']);
		$this->db->set('order_id',$orderid);
		$this->db->insert('order_item');
		}

		return $orderid;

	}

	public function getOrderData($orderid)
	{
		$this->db->where('order_id',$orderid);
		return $this->db->get('order')->row();
	}

	public function insertPayment()
	{
		$data= array(
            'order_id' => $_POST['merchant_order_id'],
            'trans_id' => $_POST['merchant_trans_id'],
            'product_info_id' => $_POST['merchant_product_info_id'],
            'card_holder_name_id' => $_POST['card_holder_name_id'],
            'merchant_amount' => $_POST['merchant_amount'],
            'payment_status' => 1
        );
        $this->db->insert('payment',$data);
	}

	public function getOrderByUser()
	{
		$sessionData = $this->session->userdata('user_logged-in');
		$this->db->where('user_id',$sessionData['id']);
		return $this->db->get('order')->result();
	}

	public function getOrderProduct($orderid)
	{
		$this->db->where('order_id',$orderid);
		return $this->db->get('order_item')->result();
	}

	public function getBlogList()
	{
		return $this->db->get('blog')->result();
	}
	// ------------------------------------------pagination-----------------------------------------------------

	
	
}
