<?php
  $page = 'services';
  include ('include/header.php');
?>
    <!-- Page Content -->
    <div class="page-heading header-text service">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Our Services</h1>
            <span>Titan is an integrated risk management and insurance solution provider founded with a vision of professional excellence built on empathy.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services">
      <div class="container">
        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'>Product Packaging <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'>Risk Mangement Services <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-3'>Policy Interpretation <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-4'>Cost Audit <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-5'>Claims Processing/ Settlement <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/product-packaging-services.jpg" alt="Product Packaging">
                <h4>Product Packaging</h4>
                <p>Titan Insurance Brokers Limited designs and recommends adequate Risk Management Techniques. We are in the forefront of innovative insurance product design, packaging and branding to meet our clients’ specific needs.</p>
              </article>
              <article id='tabs-2'>
                <img src="assets/images/risk-management-services.jpg" alt="Risk Management Services">
                <h4>Risk Management Services</h4>
                <p>We design and recommend adequate risk management techniques capable of eliminating or reducing the impact of loss occurrence on the business activities of our existing and potential valued customers by special means of identification and analysis of the various risks to which their business and/ or assets are exposed.</p>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/insurance-policy-services.jpg" alt="Policy Interpretation">
                <h4>Policy Interpretation</h4>
                <p>We ensure that policy documents issued by insurance companies to our valued clients are consistent with the objective(s) of the insurance cover. All policies are therefore scrutinized to make sure loopholes are blocked. We also seek to improve the scope, terms, conditions and rates leading to competitive premium for our clients.</p>
              </article>
              <article id='tabs-4'>
                <img src="assets/images/cost-audit-services.jpg" alt="Cost Audit">
                <h4>Cost Audit</h4>
                <p>It is one of our policies to ensure that adequate cost/ benefit analysis is carried out for our valued clients to ensure that premium/ cost is consistent with the risk/ cover provided. We also recommend, where necessary, appropriate restructuring of our client’s existing insurance portfolio to achieve minimal cost while at the same time guaranteeing maximum cover.</p>
              </article>
              <article id='tabs-5'>
                <img src="assets/images/claims-processing-services.jpg" alt="Claims Processing/ Settlement">
                <h4>Claims Processing/ Settlement</h4>
                <p>We engage all means legal and possible to ensure prompt settlement of our valued client’s claims and ensuring that their interests are well protected. These we achieve by deploying our experienced claim personnel to get themselves involved in all negotiations on behalf of our clients.</p>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>


    <div class="team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our <em>Products</em></h2>
              <span>Our products render intermediary and advisory services on life and non life insurances. </span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-item">
              <img src="assets/images/general-insurance.jpg" alt="General Insurance and Risk Management solutions">
              <div class="down-content">
                <h4 style="text-align:center;margin-bottom:30px;">General Insurance and Risk Management solutions?</h4>
                <!--<span>Co-Founder</span>-->
                <!--<p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>-->
                <ul style="font-size:13px;">
                <div class="row">
                  <div class="col-md-6">
                    <li>Oil & Gas</li>
                    <li>Fire and Special Perils</li>
                    <li>General Accident</li>
                    <li>Burglary</li>
                    <li>Public Liability</li>
                    <li>General Third Party</li>
                    <li>Motor Vehicle (Private and Commercial)</li>
                    <li>Workmen’s Compensation</li>
                    <li>Goods-In-Transit [GIT]</li>
                  </div>
                  <div class="col-md-6">
                    <li>Engineering All Risks</li>
                    <li>Bonds</li>
                    <li>Professional Indemnity</li>
                    <li>Travelers Insurance / Health Insurance</li>
                    <li>Group Personal Accident</li>
                    <li>Contractors All Risk </li>
                    <li>Erection All Risk</li>
                    <li>Marine ( Cargo and Hull)</li>
                    <li>Aviation</li>
                  </div>
                </div>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-item">
              <img src="assets/images/individual-group-life-assurance.jpg" alt="Individual and Group Life Assurance solutions">
              <div class="down-content">
              <h4 style="text-align:center;margin-bottom:30px;">Individual and Group Life Assurance solutions?</h4>
                <ul style="font-size:13px;">
                  <li>Investment Policies</li>
                  <li>Annuity</li>
                  <li>Life Assurance</li>
                  <li>Mortgage Protection Plan</li>
                  <li>Befitting Farewell/Burial Expenses</li>
                  <li>Keyman Assurance</li>
                  <li>Term Assurance</li>
                  <li>Group Life</li>
                  <li>Education Endowment</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="callback-form callback-services" style="margin-bottom: 120px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Request a <em>call back</em></h2>
              <span>Please fill out the form for more information and we will give you a call as soon as possible</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Phone Number" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

   <!-- <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
              <div class="partner-item">
                <img src="assets/images/client-01.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->


    <!-- Footer Starts Here -->
<?php
    include ('include/footer.php');
?>