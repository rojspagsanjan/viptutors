<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
    }

    public function index()
    {
        $this->load->view('includes/head');
        $this->load->view('products');
        $this->load->view('includes/footer');
    }

    public function getProducts()
    {
        $data = $this->products_model->getproducts();
        echo json_encode($data);
    }

    public function addproduct() {
        $negativeVal = $this->input->post('price');
        if ($negativeVal < 0) {
            echo json_encode(array('status' => false));
        } else if($negativeVal >= 0){
            $data = array(
                'product_name'                         => $this->input->post('product_name'),
                'description'                          => $this->input->post('description'),
                'price'                                => $this->input->post('price'),
                'date_modified'                        => date('Y-m-d H:i:s'),
                'date_created'                         => date('Y-m-d H:i:s')
            );
    
            $insert = $this->products_model->insert('product', $data);
            if ($insert) {
                echo json_encode(array('status' => true));
            }
        }  
    }
    public function delete_products()
    {
        $id = $this->input->post('id');
        $status = 0;
        $data = array(
            'status' => $status
        );
        $datas['delete'] = $this->products_model->update('product', $data, array('id' => $id));
        echo json_encode($datas);
    }

    public function editProduct()
    {
        $id = $this->input->post('id');
        $data_array = array();
        $parameters['select'] = '*';
        $parameters['where'] = array('id' => $id);
        $data = $this->products_model->getrows('product', $parameters, 'row');
        $data_array['products'] = $data;
        echo json_encode($data_array);
    }

    public function updateProduct()
    {
        $id = $this->input->post('id');
        $post = $this->input->post();
        $result = false;
        if (!empty($post)) {
            $data = array(
                'product_name'                         => $this->input->post('product_name'),
                'description'                          => $this->input->post('description'),
                'price'                                => $this->input->post('price'),
                'date_modified'                        => date('Y-m-d H:i:s')
            );

            $update = $this->products_model->update('product', $data, array('id' => $id));

            $response = array('status' => 'ok');
            echo json_encode($response);
        }
    }
}
