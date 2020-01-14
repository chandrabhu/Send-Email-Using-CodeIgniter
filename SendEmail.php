<?php

$this->load->library('email');
$fromemail="ad@c.com";
$toemail = "user@email.id";
$subject = "Mail Subject is here";
$data=array();
// $mesg = $this->load->view('template/email',$data,true);
// or
$mesg = $this->load->view('template/email','',true);


$config=array(
'charset'=>'utf-8',
'wordwrap'=> TRUE,
'mailtype' => 'html'
);

$this->email->initialize($config);

$this->email->to($toemail);
$this->email->from($fromemail, "Title");
$this->email->subject($subject);
$this->email->message($mesg);
$mail = $this->email->send();

?>
