
<style>
	/* Custom style */
    .accordion-button::after {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
      transform: scale(.7) !important;
    }
    .accordion-button:not(.collapsed)::after {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
	      background-color: #00e1dd;
		  
    }
</style>
<div class="container my-5 pb-5">
	<div class="d-flex justify-content-between text-secondary text-uppercase my-5">
		<p>03 FAQ</p>
		<p> follow us </p>
	</div>
	<div class="text-center mb-5">
		<h2 id="fontsmall" class=" fw-bold display-4 pb-3 px-5">Frequently Asked Questions</h2>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="20" width="30" color="#00e1dd"
			fill="currentColor">
			<!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
			<path
				d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z" />
		</svg>
	</div>
	<div class="row">
		<div class="col-6">
			<div class="accordion" id="myAccordion">
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingone">
						<button type="button" class="accordion-button collapsed bg-white hover-text-info border border-0 box-shadow-none" data-bs-toggle="collapse" data-bs-target="#collapseone">What are your hours?</button>                     
					</h2>
					<div id="collapseone" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
						<div class="card-body">
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingTwo">
						<button type="button" class="accordion-button collapsed bg-white hover-text-info border border-0  box-shadow-none" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Are there any commitments?</button>                     
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
						<div class="card-body">
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingThree">
						<button type="button" class="accordion-button collapsed bg-white hover-text-info border border-0  box-shadow-none" data-bs-toggle="collapse" data-bs-target="#collapseThree">Do you allow pets?</button>                     
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
						<div class="card-body">
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="accordion" id="myAccordion">
				<div class="accordion-item">
					<h2 class="accordion-header" id="heading1">
						<button type="button" class="accordion-button collapsed bg-white hover-text-info border border-0  box-shadow-none" data-bs-toggle="collapse" data-bs-target="#collapse1">Is internet included?</button>                     
					</h2>
					<div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
						<div class="card-body">
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headin2">
						<button type="button" class="accordion-button collapsed bg-white hover-text-info border border-0 box-shadow-none" data-bs-toggle="collapse" data-bs-target="#collaps2">3. What about your other locations?</button>                     
					</h2>
					<div id="collaps2" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
						<div class="card-body">
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="heading3">
						<button type="button" class="accordion-button collapsed bg-white hover-text-info border border-0 box-shadow-none" data-bs-toggle="collapse" data-bs-target="#collapse3">How do I get started?</button>                     
					</h2>
					<div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
						<div class="card-body">
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>