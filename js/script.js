function calculate_by_cpp_score(){
	var week_2_score = document.getElementById('week_2_score').value;
	var week_3_score = document.getElementById('week_3_score').value;
	var week_4_score = document.getElementById('week_4_score').value;
	var cpp_mid_term_score = document.getElementById('cpp_mid_term_score').value;
	var week_5_score = document.getElementById('week_5_score').value;
	var week_6_score = document.getElementById('week_6_score').value;
	var week_8_score = document.getElementById('week_8_score').value;
	var week_9_score = document.getElementById('week_9_score').value;
	var week_10_score = document.getElementById('week_10_score').value;
	var cpp_end_term_score = document.getElementById('cpp_end_term_score').value;
	var cpp_final_score = document.getElementById('cpp_final_score').value;
	var first_att_cpp = (week_2_score * 0.15) + (week_3_score * 0.3) + (week_4_score * 0.15) + (0.4 * cpp_mid_term_score);
	var second_att_cpp = (week_5_score * 0.12) + (week_6_score * 0.12) + (week_8_score * 0.12) + 
	(week_9_score * 0.12) + (week_10_score * 0.12) + (cpp_end_term_score * 0.4);
	var total_cpp = (first_att_cpp * 0.3) + (second_att_cpp * 0.3) + (cpp_final_score * 0.4);
	document.getElementById("first_att_cpp").innerHTML = first_att_cpp;
	document.getElementById("second_att_cpp").innerHTML = second_att_cpp;
	document.getElementById("total_cpp").innerHTML = total_cpp;
}

function calculate_by_ict_score(){
	var assignment_1_score = document.getElementById('assignment_1_score').value;
	var assignment_2_score = document.getElementById('assignment_2_score').value;
	var assignment_3_score = document.getElementById('assignment_3_score').value;
	var ict_quiz_score = document.getElementById('ict_quiz_score').value;
	var ict_mid_term_score = document.getElementById('ict_mid_term_score').value;
	var assignment_4_score = document.getElementById('assignment_4_score').value;
	var assignment_5_score = document.getElementById('assignment_5_score').value;
	var assignment_6_score = document.getElementById('assignment_6_score').value;
	var assignment_7_score = document.getElementById('assignment_7_score').value;
	var ict_end_term_score = document.getElementById('ict_end_term_score').value;
	var ict_final_score = document.getElementById('ict_final_score').value;
	var first_att_ict = (0.1 * assignment_1_score) + (0.1 * assignment_2_score) + (0.1 * assignment_3_score) + 
	(0.2 * ict_quiz_score) + (0.5 * ict_mid_term_score); 
	var second_att_ict =  (0.2 * assignment_4_score) + (0.2 * assignment_5_score) + (0.2 * assignment_6_score) + 
	(0.1 * assignment_7_score) + (0.3 * ict_end_term_score); 
	var total_ict = (first_att_ict * 0.3) + (second_att_ict * 0.3) + (ict_final_score * 0.4);
	document.getElementById("first_att_ict").innerHTML = first_att_ict;
	document.getElementById("second_att_ict").innerHTML = second_att_ict;
	document.getElementById("total_ict").innerHTML = total_ict;
}

function display_reg_button(){
	document.getElementById('wrapper_of_form_reg').style.display='block';
}

function display_auth_button(){
	document.getElementById('wrapper_of_form_auth').style.display='block';
}

function close_reg_form(){
	document.getElementById('wrapper_of_form_reg').style.display='none';
}

function close_auth_form(){
	document.getElementById('wrapper_of_form_auth').style.display='none';
}

function calculate_by_total_score(){
	var first_att_total_score = document.getElementById('first_att_total_score').value;
	var second_att_total_score = document.getElementById('second_att_total_score').value;
	var final_total_score = document.getElementById('final_total_score').value;
	var result_by_total = (first_att_total_score * 0.3) + (0.3 *second_att_total_score ) + (0.4 * final_total_score); 
	document.getElementById('total_by').innerHTML = result_by_total;
}


