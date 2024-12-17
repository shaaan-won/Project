<?php
class BillingController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("AccountManage");
	}
	public function create(){
		view("AccountManage");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data["invoice_id"])){
		$errors["invoice_id"]="Invalid invoice_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["reservation_id"])){
		$errors["reservation_id"]="Invalid reservation_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["user_id"])){
		$errors["user_id"]="Invalid user_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCustomerDetailName"])){
		$errors["customer_detail_name"]="Invalid customer_detail_name";
	}
	if(!preg_match("/^[\s\S]+$/",$data["itemized_names"])){
		$errors["itemized_names"]="Invalid itemized_names";
	}
	if(!preg_match("/^[\s\S]+$/",$data["itemized_charges"])){
		$errors["itemized_charges"]="Invalid itemized_charges";
	}
	if(!preg_match("/^[\s\S]+$/",$data["discount_amount"])){
		$errors["discount_amount"]="Invalid discount_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["tax_amount"])){
		$errors["tax_amount"]="Invalid tax_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["total_amount"])){
		$errors["total_amount"]="Invalid total_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["payment_id"])){
		$errors["payment_id"]="Invalid payment_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["payment_amount"])){
		$errors["payment_amount"]="Invalid payment_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtPaymentMethod"])){
		$errors["payment_method"]="Invalid payment_method";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtPaymentStatus"])){
		$errors["payment_status"]="Invalid payment_status";
	}

*/		global $now;
		if(count($errors)==0){
			$billing=new Billing();
		$billing->invoice_id=$data["invoice_id"];
		$billing->reservation_id=$data["reservation_id"];
		$billing->user_id=$data["user_id"];
		$billing->customer_detail_name=$data["customer_detail_name"];
		$billing->itemized_names=$data["itemized_names"];
		$billing->itemized_charges=$data["itemized_charges"];
		$billing->discount_amount=$data["discount_amount"];
		$billing->tax_amount=$data["tax_amount"];
		$billing->total_amount=$data["total_amount"];
		$billing->payment_id=$data["payment_id"];
		$billing->payment_amount=$data["payment_amount"];
		$billing->payment_method=$data["payment_method"];
		$billing->payment_status=$data["payment_status"];
		$billing->payment_date=$now;
		$billing->created_at=$now;

			$billing->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("AccountManage",Billing::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data["invoice_id"])){
		$errors["invoice_id"]="Invalid invoice_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["reservation_id"])){
		$errors["reservation_id"]="Invalid reservation_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["user_id"])){
		$errors["user_id"]="Invalid user_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCustomerDetailName"])){
		$errors["customer_detail_name"]="Invalid customer_detail_name";
	}
	if(!preg_match("/^[\s\S]+$/",$data["itemized_names"])){
		$errors["itemized_names"]="Invalid itemized_names";
	}
	if(!preg_match("/^[\s\S]+$/",$data["itemized_charges"])){
		$errors["itemized_charges"]="Invalid itemized_charges";
	}
	if(!preg_match("/^[\s\S]+$/",$data["discount_amount"])){
		$errors["discount_amount"]="Invalid discount_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["tax_amount"])){
		$errors["tax_amount"]="Invalid tax_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["total_amount"])){
		$errors["total_amount"]="Invalid total_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["payment_id"])){
		$errors["payment_id"]="Invalid payment_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["payment_amount"])){
		$errors["payment_amount"]="Invalid payment_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtPaymentMethod"])){
		$errors["payment_method"]="Invalid payment_method";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtPaymentStatus"])){
		$errors["payment_status"]="Invalid payment_status";
	}

*/		global $now;
		if(count($errors)==0){
			$billing=new Billing();
			$billing->id=$data["id"];
		$billing->invoice_id=$data["invoice_id"];
		$billing->reservation_id=$data["reservation_id"];
		$billing->user_id=$data["user_id"];
		$billing->customer_detail_name=$data["customer_detail_name"];
		$billing->itemized_names=$data["itemized_names"];
		$billing->itemized_charges=$data["itemized_charges"];
		$billing->discount_amount=$data["discount_amount"];
		$billing->tax_amount=$data["tax_amount"];
		$billing->total_amount=$data["total_amount"];
		$billing->payment_id=$data["payment_id"];
		$billing->payment_amount=$data["payment_amount"];
		$billing->payment_method=$data["payment_method"];
		$billing->payment_status=$data["payment_status"];
		$billing->payment_date=$now;
		$billing->created_at=$now;

		$billing->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("AccountManage");
	}
	public function delete($id){
		Billing::delete($id);
		redirect();
	}
	public function show($id){
		view("AccountManage",Billing::find($id));
	}
}
?>
