<?php
class BillingApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["billings"=>Billing::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["billings"=>Billing::pagination($page,$perpage),"total_records"=>Billing::count()]);
	}
	function find($data){
		echo json_encode(["billing"=>Billing::find($data["id"])]);
	}
	function delete($data){
		Billing::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$billing=new Billing();
		$billing->invoice_id=$data["invoice_id"];
		$billing->reservation_id=$data["reservation_id"];
		$billing->user_id=$data["user_id"];
		$billing->customer_detail_name=$data["customer_detail_name"];
		$billing->itemized_names=$data["itemized_names"];
		$billing->payment_id=$data["payment_id"];
		$billing->payment_method=$data["payment_method"];
		$billing->payment_status=$data["payment_status"];

		$billing->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$billing=new Billing();
		$billing->id=$data["id"];
		$billing->invoice_id=$data["invoice_id"];
		$billing->reservation_id=$data["reservation_id"];
		$billing->user_id=$data["user_id"];
		$billing->customer_detail_name=$data["customer_detail_name"];
		$billing->itemized_names=$data["itemized_names"];
		$billing->payment_id=$data["payment_id"];
		$billing->payment_method=$data["payment_method"];
		$billing->payment_status=$data["payment_status"];

		$billing->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
