<?php
echo Page::title(["title"=>"Edit Billing"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"billing", "text"=>"Manage Billing"]);
echo Page::context_open();
echo Form::open(["route"=>"billing/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$billing->id"]);
	echo Form::input(["label"=>"Invoice","name"=>"invoice_id","table"=>"invoices","value"=>"$billing->invoice_id"]);
	echo Form::input(["label"=>"Reservation","name"=>"reservation_id","table"=>"reservations","value"=>"$billing->reservation_id"]);
	echo Form::input(["label"=>"User","name"=>"user_id","table"=>"users","value"=>"$billing->user_id"]);
	echo Form::input(["label"=>"Customer Detail Name","type"=>"text","name"=>"customer_detail_name","value"=>"$billing->customer_detail_name"]);
	echo Form::input(["label"=>"Itemized Names","type"=>"textarea","name"=>"itemized_names","value"=>"$billing->itemized_names"]);
	echo Form::input(["label"=>"Itemized Charges","type"=>"text","name"=>"itemized_charges","value"=>"$billing->itemized_charges"]);
	echo Form::input(["label"=>"Discount Amount","type"=>"text","name"=>"discount_amount","value"=>"$billing->discount_amount"]);
	echo Form::input(["label"=>"Tax Amount","type"=>"text","name"=>"tax_amount","value"=>"$billing->tax_amount"]);
	echo Form::input(["label"=>"Total Amount","type"=>"text","name"=>"total_amount","value"=>"$billing->total_amount"]);
	echo Form::input(["label"=>"Payment","name"=>"payment_id","table"=>"payments","value"=>"$billing->payment_id"]);
	echo Form::input(["label"=>"Payment Amount","type"=>"text","name"=>"payment_amount","value"=>"$billing->payment_amount"]);
	echo Form::input(["label"=>"Payment Method","type"=>"text","name"=>"payment_method","value"=>"$billing->payment_method"]);
	echo Form::input(["label"=>"Payment Status","type"=>"text","name"=>"payment_status","value"=>"$billing->payment_status"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
