<?php

Class Posts extends CI_Controller
{

    public function index()
    {
        $this->load->model('post_model');
        $data['title'] = 'Latest Posts';
        $data['posts'] = $this->post_model->get_posts();
        $this->load->view('templates/header');
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer');

    }

    public function view($slug = null)
    {
        $this->load->model('post_model');
        $data['post'] = $this->post_model->get_posts($slug);

        if (empty($data['post'])) {
            show_404();
        }
        $data['title'] = $data['post']['title'];

        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->model('post_model');
        $data['title'] = "Create Post";
        $data['categories'] = $this->post_model->get_categories();
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');
        $this->form_validation->set_rules('category_id', 'Category', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header');
            $this->load->view('posts/create', $data);
            $this->load->view('templates/footer');
        } else {
            //Upload Image
            $config['upload_path'] = './public/images/posts';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '500';
            $config['max_height'] = '500';

            $this->load->library('upload',$config);

            if (!$this->upload->do_upload()) {
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.jpg';
            }
            else{
                $data = array('upload_date' => $this->upload->data());
                $post_image = $_FILES['postfile']['name'];
            }


            $this->post_model->create_post($post_image);
            redirect('posts');
        }

    }

    public function delete($id)
    {
        $this->load->model('post_model');
        $this->post_model->delete_post($id);
        redirect('posts');
    }

    public function edit($slug)
    {
        $this->load->model('post_model');
        $data['post'] = $this->post_model->get_posts($slug);

        if (empty($data['post'])) {
            show_404();
        }
        $data['title'] = 'Edit Post '. $data['post']['slug'];

        $this->load->view('templates/header');
        $this->load->view('posts/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->load->model('post_model');
        $this->post_model->update_post();
        redirect('posts');
    }
}