<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	// GET /blog/index
	public function index()
	{
                // select data
                $query = $this->db->get('blog');
                // var_dump($query);

                // iterate result
                //foreach ($query->result() as $row)
                //{
                //        echo $row->blog_id;
                //        echo $row->blog_title;
                //        echo $row->blog_description;
                //}

		$data = array('query' => $query);
		$this->load->view('blog_index',$data);
	}

	// GET /blog/1/show
	public function show($id)
	{
                // select data
                $this->db->where('blog_id', $id);
                $query = $this->db->get('blog');
                // var_dump($query);

                // iterate result
                //foreach ($query->result() as $row)
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
		$this->load->view('blog_newdata',$query);
	}

	// POST /blog/create
	public function create()
	{
		// insert data
            	$data = array(
                        'blog_title' => 'My title' ,
                        'blog_description' => 'My Name'
                );

                $this->db->insert('blog', $data);
	}

	// GET /blog/1/edit
	public function edit($id)
	{
                // select data
                $this->db->where('blog_id', $id);
                $query = $this->db->get('blog');
                // var_dump($query);

                // iterate result
                //foreach ($query->result() as $row)
                //{
                //        echo $row->blog_title;
                //        echo $row->blog_description;
                //}
		
		$data = array('query' => $query);
		$this->load->view('blog_edit',$data);
	}

	// POST /blog/1/update
	public function update($id)
	{
	        // insert data
                $data = array(
                        'blog_title' => 'My title Updated' ,
                        'blog_description' => 'My Name'
                );

                $this->db->where('blog_id', $id);
                $this->db->update('blog', $data);

	}

	// GET /blog/1/delete
	public function delete($id)
	{
		$this->db->delete('blog', array('blog_id' => $id));
	}
}
