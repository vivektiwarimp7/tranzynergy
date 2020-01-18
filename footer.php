<footer class="footerc" style="background-image:url(image/footerbg.jpg)">
	  <div class="container">
	    <div class="row">
		  <div class="col-md-12">
		   <div class="foot-logo wow fadeInUpBig" data-wow-delay="0.0s">
		    <img src="image/tranzynergy-transparent.png" alt=""> 
		   </div>
		  </div>
		</div>
		
		<div class="row">
		  <div class="col-md-12">
		    <div class="footer-nav-link">
			<ul class="list-inline wow fadeInUpBig" data-wow-delay="0.1s">
			 <li> <a href="index.php"> Home </a> </li>
			 <li> <a href="solutions.php"> Solutions </a> </li>
			 <li> <a href="main_calculator.php"> Advantage Calculator </a> </li>
			 <li> <a href="our_story.php"> Our Story </a> </li>
			 <li> <a href="register.php"> Get Started </a> </li>
			 <li> <a href="pricing_table.php"> Pricing </a> </li>
			 <li> <a href="contact._us.php"> Contact Us </a> </li>
			<!-- <li> <a href="resources.php"> Resources </a> </li>-->
			 </ul>
			</div>
			
			<div class="footer-nav-link-1">
			<ul class="list-inline wow fadeInUpBig" data-wow-delay="0.2s">
			 <li> <a href="privacy.php"> Privacy Policy </a> </li>
			 <li> <a href="terms.php"> Terms & Condition </a> </li>
			 </ul>
			</div>
		  </div>
		</div>
		
		<div class="row border-fot">
		 <div class="col-md-8 offset-md-2">
		  <div class="copyright-text">
		    <p> Copyright. All Rights Reserved. </p>
			<ul class="list-inline">
			  <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
			  <li> <a href="#"> <i class="fab fa-instagram"></i> </a></li>
			  <li> <a href="#"> <i class="far fa-envelope"></i> </a></li>
			</ul>
		   </div>
		 </div>
		</div>
		
		
	  </div>
	</footer>
	
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/nav.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/scrollax.min.js"></script>
      <script src="js/video.popup.js"></script>
      <script src="js/jquery.bootstrap.js" type="text/javascript"></script>
	  <script src="js/material-bootstrap-wizard.js"></script>
	  <script src="js/jquery.validate.min.js"></script>
      <script src="js/custom.js"></script>
	  <script>
	  
		function fieldChange() {
			var citizen_us = $('input[name="citizen_us"]:checked').val();
			var business_form = $("#business_form").val();
			var annual_income = $("#annual_income").val();
			var estimted_time = $("#estimted_time").val();
			var avg_monthly_job = $("#avg_monthly_job").val();
			var per_week_spent_hour = $("#per_week_spent_hour").val();
			var val_time_per_hour = $("#val_time_per_hour").val();
			var allvalues = {'citizen_us': citizen_us, 
							 'business_form': business_form, 
							 'annual_income': annual_income, 
							 'estimted_time': estimted_time, 
							 'avg_monthly_job': avg_monthly_job, 
							 'per_week_spent_hour': per_week_spent_hour,
							 'val_time_per_hour': val_time_per_hour
							}							
			if(citizen_us == "" || business_form == "" || annual_income == "" || estimted_time == "" || avg_monthly_job == "" || per_week_spent_hour == "" || val_time_per_hour == "" ) {
				//$('body,html').animate({ scrollTop: $('#assignment').offset().top-200 },2000);
				$(".blck").css('display','block');
				$(".blck").html("Please insert all required field"); 
			} else {
				$(".blck").css('display','none');
				var Q2_recommend_member_type_val = Q2_recommend_member_type(allvalues); 
				
				var J2_lost_income_recov_downtime_val = J2_lost_income_recov_downtime(allvalues, Q2_recommend_member_type_val);
				
				var k2_lost_income_recovered_refuese_work_val = k2_lost_income_recovered_refuese_work(allvalues);
				
				var L2_lost_income_time_spent_administrative_tasks_val = L2_lost_income_time_spent_administrative_tasks(allvalues, Q2_recommend_member_type_val);
				
				var M2_lost_monthely_income_efficiency_val = M2_lost_monthely_income_efficiency(allvalues,Q2_recommend_member_type_val);
				
				var O2_tranzynergy_fees_val = tranzynergy_fees(allvalues,Q2_recommend_member_type_val, J2_lost_income_recov_downtime_val, k2_lost_income_recovered_refuese_work_val, L2_lost_income_time_spent_administrative_tasks_val, M2_lost_monthely_income_efficiency_val);
				
				/* First Final calculation */
				var I2_final_estimate_taxes_saved_each_month_val = Math.round(I2_final_estimate_taxes_saved_each_month(allvalues,Q2_recommend_member_type_val, J2_lost_income_recov_downtime_val, k2_lost_income_recovered_refuese_work_val, L2_lost_income_time_spent_administrative_tasks_val, M2_lost_monthely_income_efficiency_val,O2_tranzynergy_fees_val));
				console.log("Estimate of taxes that can be saved each month: "+ I2_final_estimate_taxes_saved_each_month_val);
				/* First Final calculation */
				
				/* Second Final calculation */
				var N2_increased_income_enhanced_production_val = increased_income_enhanced_production(J2_lost_income_recov_downtime_val,k2_lost_income_recovered_refuese_work_val,L2_lost_income_time_spent_administrative_tasks_val,M2_lost_monthely_income_efficiency_val); 
				N2_increased_income_enhanced_production_val = Math.round(N2_increased_income_enhanced_production_val);
				console.log("Increased income from enhanced production: "+ N2_increased_income_enhanced_production_val);
				/* Second Final calculation end */
				
				/* third Final calculation */
				var P2_potential_net_income_increase_val = potential_net_income_increase(I2_final_estimate_taxes_saved_each_month_val,J2_lost_income_recov_downtime_val,k2_lost_income_recovered_refuese_work_val,L2_lost_income_time_spent_administrative_tasks_val,M2_lost_monthely_income_efficiency_val,O2_tranzynergy_fees_val);
				P2_potential_net_income_increase_val = Math.round(P2_potential_net_income_increase_val);
				console.log("Potential net income increase: "+ P2_potential_net_income_increase_val);
				/* third Final calculation end */
				
				/* Fourth Final calculation */
				var R2_return_on_investment_on_fees_val = return_on_investment_on_fees(P2_potential_net_income_increase_val,O2_tranzynergy_fees_val);
				R2_return_on_investment_on_fees_val_1 =  R2_return_on_investment_on_fees_val.toFixed(2);
				R2_return_on_investment_on_fees_val = R2_return_on_investment_on_fees_val_1*100;
				R2_return_on_investment_on_fees_val =  Math.round(R2_return_on_investment_on_fees_val);
				console.log("Return on investment on fees: "+ Math.round(R2_return_on_investment_on_fees_val));
				/* Fourth Final calculation */
				
				jQuery("#result1").html(I2_final_estimate_taxes_saved_each_month_val);
				jQuery("#result2").html(N2_increased_income_enhanced_production_val);
				jQuery("#result3").html(P2_potential_net_income_increase_val);
				jQuery("#result4").html(R2_return_on_investment_on_fees_val+"%");
				localStorage.setItem("I2_final_estimate_taxes_saved_each_month_val", I2_final_estimate_taxes_saved_each_month_val);
				localStorage.setItem("N2_increased_income_enhanced_production_val", N2_increased_income_enhanced_production_val);
				localStorage.setItem("P2_potential_net_income_increase_val", P2_potential_net_income_increase_val);
				localStorage.setItem("R2_return_on_investment_on_fees_val", R2_return_on_investment_on_fees_val);
				window.location.href = "https://webandappdevelopers.com/tranzynergy/calculator_result.php";
				
				
			}
		}
		/* ****************************  Recommended member type *********************************** */
		Q2_recommend_member_type = function (allvalues){
			citizen_us = allvalues.citizen_us;
			annual_income = allvalues.annual_income;
			if(citizen_us == 'yes' && annual_income > 23999) {
				return 'professional_member';
			} else {
				return 'social_member';
			}
		}
		/* **************************** Recommended member type ****************************************** */
		/* ********************** Lost income recovered from downtime each month ************************* */
		J2_lost_income_recov_downtime = function (allvalues, Q2_recommend_member_type_val){
				E2 = allvalues.estimted_time;
				H2 = allvalues.val_time_per_hour;
			if(Q2_recommend_member_type_val == 'social_member') {
				return ((E2*H2)*4.3*0.25);
			} else {
				return ((E2*H2*4.3)*0.5)
			}
		}
		/* ********************** Lost income recovered from downtime each month **************************** */
		/* ********************** Lost income recovered from refused work each month ************************* */
		function k2_lost_income_recovered_refuese_work(allvalues) {
			F2 = allvalues.avg_monthly_job; 
			return F2*.05;
		}
		/* ********************** Lost income recovered from refused work each month ****************************** */
		/* ********************** Lost income for time spent on administrative tasks each month  ****************** */
		function L2_lost_income_time_spent_administrative_tasks(allvalues,Q2_recommend_member_type_val) {
			G2 = allvalues.per_week_spent_hour;
			H2 = allvalues.val_time_per_hour;
			if(Q2_recommend_member_type_val == 'social_member') {
				return ((G2*H2)*4.3*0.25); 
			} else {
				return ((G2*H2*4.3)*0.5);
			}
		}
		/* ********************** Lost income for time spent on administrative tasks each month  ****************** */
		/* **********************  Lost monthly income for lower efficiency  *************************************** */
		function M2_lost_monthely_income_efficiency(allvalues,Q2_recommend_member_type_val) {
			C2 = allvalues.annual_income;
			if(Q2_recommend_member_type_val == 'social_member') {
				return (C2/12*0.05);
			} else {
				return (C2/12*0.1)
			}
		}
		/* **********************  Lost monthly income for lower efficiency  *************************************** */
		/* ************************************  Tranzynergy fees  ************************************************* */
		function tranzynergy_fees(allvalues,Q2_recommend_member_type_val, J2_lost_income_recov_downtime_val, k2_lost_income_recovered_refuese_work_val, L2_lost_income_time_spent_administrative_tasks_val, M2_lost_monthely_income_efficiency_val) {
			C2 = allvalues.annual_income;
			J2 = J2_lost_income_recov_downtime_val;
			K2 = k2_lost_income_recovered_refuese_work_val;
			L2 = L2_lost_income_time_spent_administrative_tasks_val;
			M2 = M2_lost_monthely_income_efficiency_val;
			if(Q2_recommend_member_type_val == "professional_member") {
				var re_var = ((C2/12+J2+K2+L2+M2)*0.05);
				return re_var;
			} else {
				var re_var = Math.max((J2+K2)*0.05,14.95);
				return re_var;
			}
		}
		/* ************************************  Tranzynergy fees  ************************************************* */
		function I2_final_estimate_taxes_saved_each_month(allvalues,Q2_recommend_member_type_val, J2_lost_income_recov_downtime_val, k2_lost_income_recovered_refuese_work_val, L2_lost_income_time_spent_administrative_tasks_val, M2_lost_monthely_income_efficiency_val, O2_tranzynergy_fees_val) {
			if(Q2_recommend_member_type_val == 'professional_member' && (allvalues.business_form == 'not_incorporated' || allvalues.business_form == 'llc' || allvalues.business_form == 'dont_know')) {
				C2 = allvalues.annual_income;
				J2 = J2_lost_income_recov_downtime_val;
				K2 = k2_lost_income_recovered_refuese_work_val;
				M2 = M2_lost_monthely_income_efficiency_val;
				L2 = L2_lost_income_time_spent_administrative_tasks_val;
				O2 = O2_tranzynergy_fees_val;
				var re_var = Math.min(C2/12+J2+K2+L2+M2-O2,137000/12)*0.075; 
				return re_var;
			} else {
				return 0;
			}
		}
		function increased_income_enhanced_production(J2_lost_income_recov_downtime_val,k2_lost_income_recovered_refuese_work_val,M2_lost_monthely_income_efficiency_val,L2_lost_income_time_spent_administrative_tasks_val) {
			J2 = J2_lost_income_recov_downtime_val;
			K2 = k2_lost_income_recovered_refuese_work_val;
			M2 = M2_lost_monthely_income_efficiency_val;
			L2 = L2_lost_income_time_spent_administrative_tasks_val;
			var re_var = J2+K2+L2+M2;
			return re_var;
			
		}
		function potential_net_income_increase(I2_final_estimate_taxes_saved_each_month_val,J2_lost_income_recov_downtime_val,k2_lost_income_recovered_refuese_work_val,L2_lost_income_time_spent_administrative_tasks_val,M2_lost_monthely_income_efficiency_val,O2_tranzynergy_fees_val) {
			I2 = I2_final_estimate_taxes_saved_each_month_val;
			J2 = J2_lost_income_recov_downtime_val;
			K2 = k2_lost_income_recovered_refuese_work_val;
			L2 = L2_lost_income_time_spent_administrative_tasks_val;
			M2 = M2_lost_monthely_income_efficiency_val;
			O2 = O2_tranzynergy_fees_val;
			var re_var = (I2+J2+K2+L2+M2-O2);
			return re_var;
		}
		function return_on_investment_on_fees(P2_potential_net_income_increase_val,O2_tranzynergy_fees_val) {
			var re_var = P2_potential_net_income_increase_val/O2_tranzynergy_fees_val;
			return re_var;
		}
	</script>
	   <script>
		jQuery(document).ready(function(){
			jQuery("#resultt1").html(localStorage.getItem("I2_final_estimate_taxes_saved_each_month_val"));
			jQuery("#resultt2").html(localStorage.getItem("N2_increased_income_enhanced_production_val"));
			jQuery("#resultt3").html(localStorage.getItem("P2_potential_net_income_increase_val"));
			jQuery("#resultt4").html(localStorage.getItem("R2_return_on_investment_on_fees_val")+"%");
		});
 
  </script>
   </body>
</html>