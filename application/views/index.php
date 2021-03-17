<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

$this->load->view('header');

?>

<header class="lead-header">
	<div class="container-fluid">
		<div class="row">
			<img src="<?php echo base_url(); ?>assets/images/xlogo.png" />
		</div>
	</div>
</header>

<!-- page wapper-->

<main class="page-content">

	<section class="ld-magnet-bg">
		<div class="container-fluid">
			<!-- row -->
			<div class="row sh-grid-wrapper">
				<div class="col col-wrap">
					<!-- Brainstorming Illustration -->
					<div class="col-sm-4 img-col">
						<img src="<?php echo base_url(); ?>assets/images/brainstorming.png" />
					</div>

					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-12 text-parent-col">
								<!-- Title -->
								<div class="title-text text-uppercase">
									<span class="ttext1"><strong>When Entrepreneur Needs To</strong></span> <br>
									<span class="isrvpf"><strong>Increase Their Revenue And Profit,</strong></span> <br>
									<span class="ttext3"><strong>There Is What To Do...</strong></span>
								</div>
								<div class="sub-text text-uppercase">
									<span class="bkfrcndg"><strong>Book A Free One-On-One  </strong></span> <br>
									<span class="bkfrcndg"><strong>Consultation For Your </strong></span> <br>
									<span class="bkfrcndg"><strong>Digital Business Transformation Agenda</strong></span> <br>
								</div>
								<div class="tsoybdnm">
									<span><strong>The size of your business or industry does not matter!!!</strong></span> <br>
								</div>
							</div>

							<!-- Button -->
							<div class="col-sm-12 btn-parent-col">
								<!--  -->
								<a href="#full_name" id="bk-action-btn" class="bbtn text-uppercase"><strong>Book A Free Consultation</strong></a>
							</div>
						</div>
				</div>
				</div>
			</div>
			<!-- ./row-->
		</div>
	</section>

	<!-- Form -->
	<section id="contact" class="section-1 form" wfd-id="34">
		<input type="hidden" name="base_url" id="base_url" value="<?php echo site_url(); ?>">
        <div class="container" wfd-id="35">
            <form name="lead-application" id="lead-application" method="post" action="<?php echo site_url('Leads/test'); ?>">
			<!-- onsubmit="event.preventDefault(); postLeadsData();" -->
                <div class="row" wfd-id="37">
                    <div class="col-12 col-md-12 align-self-start text-center text-md-left">
                        
						<!-- Message -->
                        <div id="response-message-panel" class="row success message" wfd-id="62">
                            <div class="col-12 p-0">

								<!-- Success Message Bar -->
                                <div class="ms-MessageBar ms-MessageBar--success">
									<div class="ms-MessageBar-content">
										<div class="ms-MessageBar-icon">
											<i class="ms-Icon ms-Icon--Completed"></i>
										</div>
										<div class="ms-MessageBar-text">
											You have successfully registered for a free consultation, 
											and you wil be contacted based on the information 
											you provided.
											<br />
											<a href="https://xownsolutions.com" class="ms-Link">Go to Xown Solutions website</a> 
										</div>
									</div>
								</div>

								<!-- Error Message bar -->
                                <div class="ms-MessageBar ms-MessageBar--error">
									<div class="ms-MessageBar-content">
										<div class="ms-MessageBar-icon">
											<i class="ms-Icon ms-Icon--ErrorBadge"></i>
										</div>
										<div class="ms-MessageBar-text">
											An error occurred while sending your information. Please try again
											<br />
											<a href="<?php echo site_url(); ?>" class="ms-Link">Let's Retry</a>
										</div>
									</div>
								</div>
                            </div>
                        </div>

						<!-- The toast notification element -->
						<div id="errorPopup"></div>

                        <!-- Steps Message -->
                        <div id="lead-form-title" class="row intro form-content" wfd-id="59">
                            <div class="col-12 p-0" wfd-id="60">
                                <!-- Step Title -->
                                <div class="step-title" id="step-title-1" wfd-id="61">
                                    <h2 class="featured alt min-tit">Get a Free Consultation</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Steps Group -->
                        <div id="lead-form-row" class="row text-center form-content" wfd-id="42" style="display: flex; flex-direction: row;">
							<div class="col-md-6 col-sm-12 p-0" wfd-id="43">

                                <!-- Group 1 -->
                                <fieldset class="step-group" id="step-group-1">
									<!-- Full Name -->
                                    <div class="row" wfd-id="56">
                                        <div class="col-12 input-group p-0" wfd-id="57">
                                            <input id="full_name" type="text" name="full_name" data-minlength="3" class="form-control field-name" placeholder="Full Name" wfd-id="97">
                                        </div>
                                    </div>
									<!-- Email Address -->
                                    <div class="row" wfd-id="52">
										<div class="col-12 input-group p-0" wfd-id="53">
											<input id="email" type="email" name="email" data-minlength="3" class="form-control field-email" placeholder="Email" wfd-id="95">
                                        </div>
                                    </div>
									<!-- Phone Number -->
                                    <div class="row" wfd-id="50">
										<div class="col-12 input-group p-0" wfd-id="51">
											<input id="phone" type="tel" name="phone" data-minlength="3" class="form-control field-phone" placeholder="Phone Number (Whatsapp)" wfd-id="94">
                                        </div>
                                    </div>
									<!-- Company Name -->
                                    <div class="row" wfd-id="48">
										<div class="col-12 input-group p-0" wfd-id="49">
											<input id="company_name" type="text" name="company_name" data-minlength="3" class="form-control field-name" placeholder="Company's Name" wfd-id="93">
                                        </div>
                                    </div>                                    
									<!-- Website -->
									<div class="row" wfd-id="54">
										<div class="col-12 input-group p-0" wfd-id="55">
											<input id="website" type="text" name="website" data-minlength="3" class="form-control field-name" placeholder="Website (Not Required)" wfd-id="96">
										</div>
									</div>
                                </fieldset>
                            </div>

							<!-- Date / Time Selection -->
							<div class="col-md-6 col-sm-12" wfd-id="38">
								
								<!-- Appointment Selection -->
								<div class="row">

									<!-- Date selection column - Select a date... -->
									<div class="col-sm-12">
										<div id="container">
											<div class="col-12 input-group p-0">
												<input 
													id="date_picker_element" 
													name="date_picker_element" 
													class="form-control" 
													type="text">
											</div>
										</div>
									</div>

									<div class="clear-fix" style="margin: 24px 1px;"></div>

									<!-- Time selection column -->
									<div class="col-sm-12 col-md-12 col-lg-12 slot_selection" id="time_slot_cards">

										<div class="ms-ChoiceFieldGroup" id="choicefieldgroup" role="radiogroup">
											<div class="ms-ChoiceFieldGroup-title">
												<label class="ms-Label is-required" style="font-size: medium;">Choose a time</label>
											</div>
											<div class="time-selection-grid">
												<ul class="ms-ChoiceFieldGroup-list">
													<li class="ms-RadioButton">
														<input type="hidden" name="specified_time_slot" id="specified_time_slot" />
														<input tabindex="-1" type="radio" name="time_selection_element" class="ms-RadioButton-input" value="" />
														<label role="radio" 
															class="ms-RadioButton-field custom-radio" 
															tabindex="0" 
															slot-index="0" 
															slot="0"
															aria-checked="false" 
															name="choicefieldgroup" 
															id="time_slot_index0" 
															aria-disabled="false">
															<span class="ms-Label">11:00am &#8212; 11:45am</span>
														</label>
													</li>
													<li class="ms-RadioButton">
														<input tabindex="-1" type="radio" name="time_selection_element" class="ms-RadioButton-input" value="" />
														<label role="radio" 
															class="ms-RadioButton-field custom-radio" 
															tabindex="0" 
															slot-index="1"
															slot="1"
															aria-checked="false" 
															name="choicefieldgroup"
															aria-disabled="false">
															<span class="ms-Label">12:00pm &#8212; 12:45pm</span>
														</label>
													</li>
													<li class="ms-RadioButton">
														<input tabindex="-1" type="radio" name="time_selection_element" class="ms-RadioButton-input" value="" />
														<label role="radio" 
															class="ms-RadioButton-field custom-radio" 
															tabindex="0" 
															slot-index="2"
															slot="2"
															aria-checked="false" 
															name="choicefieldgroup" 
															aria-disabled="false">
															<span class="ms-Label">01:00pm &#8212; 01:45pm</span>
														</label>
													</li>
												</ul>
												<ul class="ms-ChoiceFieldGroup-list">
													<li class="ms-RadioButton">
														<input tabindex="-1" type="radio" name="time_selection_element" class="ms-RadioButton-input" value="" />
														<label role="radio" 
															class="ms-RadioButton-field custom-radio" 
															tabindex="0" 
															slot-index="3"
															slot="3"
															aria-checked="false" 
															name="choicefieldgroup"
															aria-disabled="false">
															<span class="ms-Label">02:00am &#8212; 02:45am</span>
														</label>
													</li>
													<li class="ms-RadioButton">
														<input tabindex="-1" type="radio" name="time_selection_element" class="ms-RadioButton-input" value="" />
														<label role="radio" 
															class="ms-RadioButton-field custom-radio" 
															tabindex="0" 
															slot-index="4"
															slot="4"
															aria-checked="false" 
															name="choicefieldgroup"
															aria-disabled="false">
															<span class="ms-Label">03:00pm &#8212; 03:45pm</span>
														</label>
													</li>
													<li class="ms-RadioButton">
														<input tabindex="-1" type="radio" name="time_selection_element" class="ms-RadioButton-input" value="" />
														<label role="radio" 
															class="ms-RadioButton-field custom-radio" 
															tabindex="0" 
															slot-index="5"
															slot="5"
															aria-checked="false" name="choicefieldgroup" 
															aria-disabled="true">
															<span class="ms-Label">04:00pm &#8212; 04:45pm</span>
														</label>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="clear-fix" style="margin: 8px 1px;"></div>

							<div class="col-12 p-0" wfd-id="44">
								<div class="submit-wrapper spinner-btn-wrapper">
									<button id="lead-submit-btn" class="btn primary-button">
										<div id="lead-submit-btn-text" class="btn-text">SUBMIT</div>
										<div id="lead-spinner" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
									</button>
								</div>
							</div>
                        </div>
                    </div>

					<!-- Column -->
                </div>
            </form>
        </div>
    </section>
</main>

<?php $this->load->view('footer'); ?>
