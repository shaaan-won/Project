<?php
class PaymentApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["payments"=>Payment::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["payments"=>Payment::pagination($page,$perpage),"total_records"=>Payment::count()]);
	}
	function find($data){
		echo json_encode(["payment"=>Payment::find($data["id"])]);
	}
	function delete($data){
		Payment::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$payment=new Payment();
		$payment->reservation_id=$data["reservation_id"];
		$payment->payment_method_id=$data["payment_method_id"];

		$payment->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$payment=new Payment();
		$payment->id=$data["id"];
		$payment->reservation_id=$data["reservation_id"];
		$payment->payment_method_id=$data["payment_method_id"];

		$payment->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
