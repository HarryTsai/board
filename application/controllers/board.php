<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Board extends CI_Controller {

	// GET /blog/index
	public function index()
	{
                // select data
                $query = $this->db->get('pub');
                // var_dump($query);

                // iterate result
                //foreach ($query->result() as $row)
                //{
                //        echo $row->blog_id;
                //        echo $row->blog_title;
                //        echo $row->blog_description;
                //}

		$data = array('query' => $query);
		$this->load->view('board_index',$data);
	}

	// GET /blog/1/show
	public function show($id)
	{
                // select data
                $this->db->where('blog_id', $id);
                $query = $this->db->get('blog');
                // var_dump($query);

                // iterate result
                //foreach ($query->result() as )
                //{
                //        echo $row->blog_title;
                //        echo $row->blog_description;
                //}
		
		$data = array('query' => $query);
		$this->load->view('blog_show',$data);

	}

	// GET /blog/new
	public function newdata()
	{
		$this->load->view('board_newdata');
	}
		
	// POST /blog/create
	public function create()
	{
		// insert data
		
            	$data = array(
                        'name' => $_POST["name"] ,
			'email' => $_POST["email"] ,
			'subject' => $_POST["subject"] ,
			'content' => $_POST["content"] ,
                        'putdate' => date("Y-m-d H:i:s")
                );

                $this->db->insert('pub', $data);
		$this->index();
		header("Location:../board/index");
	}

	// GET /blog/1/edit
	public function edit($id)
	{
                // select data
                $this->db->where('id', $id);
                $query = $this->db->get('pub');
                // var_dump($query);

                // iterate result
                //foreach ($query->result() as $row)
                //{
                //        echo $row->blog_title;
                //        echo $row->blog_description;
                //}
		
		$data = array('query' => $query);
		$this->load->view('board_edit',$data);
	}

	// POST /blog/1/update
	public function update($id)
	{
	        // insert data
		$data = array(
                        'name' => $_POST["name"] ,
                        'email' => $_POST["email"] ,
                        'subject' => $_POST["subject"] ,
                        'content' => $_POST["content"] ,
                        'putdate' => date("Y-m-d H:i:s")
                );

                $this->db->where('id', $id);
                $this->db->update('pub', $data);
		header("Location:../index");

	}

	// GET /blog/1/delete
	public function delete($id)
	{
		$this->db->delete('pub', array('id' => $id));
		header("Location:../index");
	}
}
