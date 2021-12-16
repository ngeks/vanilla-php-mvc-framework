<?php

class Posts extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        // Get posts
        $posts = $this->postModel->getPosts();

        $data = [
            'posts' => $posts
        ];

        $this->view('posts/index', $data);
    }

    public function add()
    {
        // Check for POST request
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_error' => '',
                'body_error' => ''
            ];
            // Validate title
            if (empty($data['title'])) {
                $data['title_error'] = 'Please enter title';
            }

            // Validate body
            if (empty($data['body'])) {
                $data['body_error'] = 'Please enter body text';
            }

            // Proceed if there are no errors
            if (empty($data['title_error']) && empty($data['body_error'])) {
                if ($this->postModel->addPost($data)) {
                    flash('post_message', 'Post has been added.');
                    redirect('posts');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('posts/add', $data);
            }
        } else {
            $data = [
                'title' => '',
                'body' => '',
            ];
            
            // Load view with empty data
            $this->view('posts/add', $data);
        }
    }

    public function edit($id)
    {
        // Check for POST request
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_error' => '',
                'body_error' => ''
            ];
            // Validate title
            if (empty($data['title'])) {
                $data['title_error'] = 'Please enter title';
            }

            // Validate body
            if (empty($data['body'])) {
                $data['body_error'] = 'Please enter body text';
            }

            // Proceed if there are no errors
            if (empty($data['title_error']) && empty($data['body_error'])) {
                if ($this->postModel->updatePost($data)) {
                    flash('post_message', 'Post has been updated.');
                    redirect('posts');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('posts/edit', $data);
            }
        } else {
            // Get post
            $post = $this->postModel->getPostById($id);
            // Check for post author
            if ($post->user_id != $_SESSION['user_id']) {
                redirect('posts');
            }

            $data = [
                'id' => $id,
                'title' => $post->title,
                'body' => $post->body,
            ];
            
            // Load view with empty data
            $this->view('posts/edit', $data);
        }
    }

    public function id($id)
    {
        $post = $this->postModel->getPostById($id);
        $user = $this->userModel->getUserById($post->user_id);

        $data = [
            'post' => $post,
            'user' => $user
        ];

        $this->view('posts/id', $data);
    }

    public function delete($id)
    {
        // Get post
        $post = $this->postModel->getPostById($id);
        // Check for post author
        if ($post->user_id != $_SESSION['user_id']) {
            redirect('posts');
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->postModel->deletePost($id)) {
                flash('post_message', 'Post has been deleted.', 'alert alert-danger');
                redirect('posts');
            } else {
                die('Something went wrong');
            }
        } else {
            redirect('posts');
        }
    }
}