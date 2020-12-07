<?php
defined('BASEPATH') or exit('No direct script access allowed');

class file extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("video_model");
  }

  public function pdfshow($id)
  {
    $pdf = $this->video_model->first($id);
    $filepath = "./assets/video/" . $pdf->file;
    // EDIT: I added some permission/file checking.
    if (!file_exists($filepath)) {
      throw new Exception("File $filepath does not exist");
    }
    if (!is_readable($filepath)) {
      throw new Exception("File $filepath is not readable");
    }
    http_response_code(200);
    header('Content-Length: ' . filesize($filepath));
    header("Content-Type: application/pdf");
    // header('Content-Disposition: attachment; filename="downloaded.pdf"'); // feel free to change the suggested filename
    $contents =   readfile($filepath);

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/pdf')
      ->set_output($contents)
      ->_display();

    exit;
  }
}
