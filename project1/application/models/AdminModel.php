<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	public function urlMaker($string)
	{
	    $string = utf8_encode($string);
		//$string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);   
		$string = preg_replace('/[^a-z0-9- ]/i', '', $string);
		$string = str_replace(' ', '-', $string);
		$string = trim($string, '-');
		$string = strtolower($string);
		if (empty($string)) {
		    return 'n-a';
		}
		return $string.".html";
	}
	
	public function checkAdminLogin()
	{
		$this->db->select('*');
        $this->db->where('email_id',$this->input->post('email_id'));
        return $this->db->get('admin')->row();
	}

	// public function updateNewPass()
	// {
	// 	$this->db->select('*');
	// 	// $this->db->where('email_id',$this->input->post('email_id'));
	// 	$this->db->set('password',md5($this->input->post('new_pass')));
	//  	$this->db->update('admin');
	// }

	public function updatePassword($password)
	{
		$this->db->set('password',$password)->set('email_id',$this->input->post('email_id'))->set('status',1)->update('admin');
	}

// -------------------------------------User---------------------------------------------------
	public function getUserList()
	{
		return $this->db->get('user')->result();
	}
// -------------------------------------User---------------------------------------------------

// -------------------------------------category start---------------------------------------------------

	public function getCategoryList()
	{
		return $this->db->get('category')->result();
	}

	public function getparentCategoryList()
	{
		$this->db->select('*');
		$this->db->where('category_parent_id',$this->input->post('category_parent_id'));
		return $this->db->get('category')->row();
	}

	public function insertCategoory()
	{
		$this->db->set('category_name',$this->input->post('category_name'));
		$this->db->set('category_url',$this->urlMaker($this->input->post('category_name')));
		$this->db->set('category_parent_id',$this->input->post('category_parent_id'));
		$this->db->set('category_description',$this->input->post('category_description'));
		$this->db->insert('category');
	}

	public function categoryStatusUpdate($id,$status)
	{
		$this->db->set('status',$status);
		$this->db->where('category_id',$id);
		$this->db->update('category');
	}

	public function updateCategory()
	{
		$this->db->set('category_name',$this->input->post('category_name'));
		$this->db->set('category_url',$this->urlMaker($this->input->post('category_name')));
		$this->db->set('category_parent_id',$this->input->post('category_parent_id'));
		$this->db->set('category_description',$this->input->post('category_description'));
		$this->db->where('category_id',$this->input->post('category_id'));
		$this->db->update('category');
	}

	public function getCategoryId($id)
	{
		$this->db->where('category_id',$id);
		return $this->db->get('category')->row();
	}

	public function getParentCategoryId()
	{
		$this->db->where('category_parent_id',0);
		return $this->db->get('category')->result();
	}

// -------------------------------------category ends---------------------------------------------------

// -------------------------------------Product---------------------------------------------------

	public function getProductList()
	{
		return $this->db->get('product')->result();
	}

	public function insertProduct($img)
	{
		$this->db->set('product_name',$this->input->post('product_name'));
		if(!empty($img)){
			$this->db->set('product_image',$img);
		}
		
		$this->db->set('product_url', $this->urlMaker($this->input->post('product_name')));
		$this->db->set('product_mrp',$this->input->post('product_mrp'));
		$this->db->set('product_price',$this->input->post('product_price'));
		$this->db->set('product_per_price',$this->input->post('product_per_price'));
		$this->db->set('product_qty',$this->input->post('product_qty'));
		$this->db->set('product_per_qty',$this->input->post('product_per_qty'));
		$this->db->set('category_id',$this->input->post('product_category'));
		$this->db->set('product_stock',$this->input->post('product_stock'));
		$this->db->set('product_description',$this->input->post('product_description'));
		$this->db->set('product_sm_desc',$this->input->post('product_sm_desc'));
		$this->db->set('product_meta_title',$this->input->post('product_meta_title'));
		$this->db->set('product_meta_keyword',$this->input->post('product_meta_keyword'));
		$this->db->set('product_meta_desc',$this->input->post('product_meta_desc'));
		$this->db->insert('product');
	}

	public function productStatusUpdate($id,$status)
	{
		$this->db->set('product_status', $status);
		$this->db->where('product_id', $id);
		$this->db->update('product');
	}

	public function getEditDataForProductData($id)
	{
		$this->db->where('product_id',$id);
		return $this->db->get('product')->row();
	}

	public function updateProduct($img)
	{
		$this->db->set('product_name',$this->input->post('product_name'));
		if(!empty($img)){
			$this->db->set('product_image',$img);
		}
		
		$this->db->set('product_url', $this->urlMaker($this->input->post('product_name')));
		$this->db->set('product_mrp',$this->input->post('product_mrp'));
		$this->db->set('product_price',$this->input->post('product_price'));
		$this->db->set('product_per_price',$this->input->post('product_per_price'));
		$this->db->set('product_qty',$this->input->post('product_qty'));
		$this->db->set('product_per_qty',$this->input->post('product_per_qty'));
		$this->db->set('category_id',$this->input->post('product_category'));
		$this->db->set('product_stock',$this->input->post('product_stock'));
		$this->db->set('product_description',$this->input->post('product_description'));
		$this->db->set('product_sm_desc',$this->input->post('product_sm_desc'));
		$this->db->set('product_meta_title',$this->input->post('product_meta_title'));
		$this->db->set('product_meta_keyword',$this->input->post('product_meta_keyword'));
		$this->db->set('product_meta_desc',$this->input->post('product_meta_desc'));
		$this->db->where('product_id',$this->input->post('product_id'));
		$this->db->update('product');
	}

// -------------------------------------Product ends---------------------------------------------------

	public function getcouponList()
	{
		return $this->db->get('coupon')->result();
	}

	public function getOrderList()
	{
		return $this->db->get('order')->result();
	}

	public function getOrderProduct($orderid)
	{
		$this->db->where('order_id',$orderid);
		return $this->db->get('order_item')->result();
	}

// ---------------------------------------blog--------------------------------------------------

	public function getBlogList()
	{
		return $this->db->get('blog')->result();
	}

	public function insertblog($img)
	{
		$this->db->set('blog_title',$this->input->post('blog_title'));
		if(!empty($img)){
			$this->db->set('blog_image',$img);
		}
		$this->db->set('blog_para',$this->input->post('blog_para'));
		$this->db->set('blog_sm_desc',$this->input->post('blog_sm_desc'));
		$this->db->set('blog_date',$this->input->post('blog_date'));
		$this->db->insert('blog');
	}

	public function getEditId($id)
	{
		$this->db->where('blog_id',$id);
		return $this->db->get('blog')->row();
	}

	public function updateBlog()
	{
		$this->db->set('blog_title',$this->input->post('blog_title'));
		if(!empty($img)){
			$this->db->set('blog_image',$img);
		}
		$this->db->set('blog_para',$this->input->post('blog_para'));
		$this->db->set('blog_sm_desc',$this->input->post('blog_sm_desc'));
		$this->db->set('blog_date',$this->input->post('blog_date'));
		$this->db->where('blog_id',$this->input->post('blog_id'));
		$this->db->update('blog');
	}

	public function deleteBlog($id)
	{
		$this->db->where('blog_id',$id);
		$this->db->delete('blog');
	}

}
