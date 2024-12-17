<?php
class InvoiceApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["invoices"=>Invoice::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["invoices"=>Invoice::pagination($page,$perpage),"total_records"=>Invoice::count()]);
	}
	function find($data){
		echo json_encode(["invoice"=>Invoice::find($data["id"])]);
	}
	function delete($data){
		Invoice::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$invoice=new Invoice();
		$invoice->name=$data["name"];
		$invoice->customer_detail_id=$data["customer_detail_id"];
		$invoice->customer_detail_name=$data["customer_detail_name"];
		$invoice->reservation_id=$data["reservation_id"];
		$invoice->created_at=$data["created_at"];
		$invoice->updated_at=$data["updated_at"];

		$invoice->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$invoice=new Invoice();
		$invoice->id=$data["id"];
		$invoice->name=$data["name"];
		$invoice->customer_detail_id=$data["customer_detail_id"];
		$invoice->customer_detail_name=$data["customer_detail_name"];
		$invoice->reservation_id=$data["reservation_id"];
		$invoice->created_at=$data["created_at"];
		$invoice->updated_at=$data["updated_at"];

		$invoice->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
