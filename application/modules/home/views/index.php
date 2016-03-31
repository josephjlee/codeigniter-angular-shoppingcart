<?php $this->load->view('header'); ?>
<!-- Page Content -->
<div class="row">

  <div class="container page-set">

      <div class="stepwizard">
          <div class="stepwizard-row setup-panel">
              <div class="stepwizard-step" id="circle-one">
                  <a href="javascript:void(0)" type="button" class="btn btn-default btn-circle" ng-click="clearStorages()">1</a>
                  <p>Select Package</p>
              </div>
              <div class="stepwizard-step" id="circle-two">
                  <a href="javascript:void(0)" type="button" class="btn btn-default btn-circle" ng-click="clearStorages()">2</a>
                  <p>Select Items</p>
              </div>
              <div class="stepwizard-step" id="circle-three">
                  <a href="javascript:void(0)" type="button" class="btn btn-default btn-circle" ng-click="clearStorages()">3</a>
                  <p>Shipping</p>
              </div>
          </div>
      </div>
   
      <div class="setup-content" id="step_one" ng-show="showHide()">

        <div class="col-sm-4 col-lg-4 col-md-4" ng-repeat="packages in packages_list">
          <div class="thumbnail">
              <img src="" alt="">
              <div class="caption text-center">
                  <h4>{{ packages.name }}</h4>
               </div>
              <ngselect-packages packages-id="{{ packages.id }}" packages-max="{{ packages.package }}"></ngselect-packages>
          </div>
        </div>

      </div>
      <!-- END STEP 1 -->

      <div class="setup-content" id="step_two" ng-hide="showHide()">

        <div class="text-center">
          <h1><ngcart-packagescounter></ngcart-packagescounter> / {{ selectedPackagesMax() }}</h1>
        </div>

        <div class="col-md-3" ng-repeat="products in products_list">
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="http://keenthemes.com/assets/bootsnipp/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
              </div>
              <h3><a href="shop-item.html">{{ products.name }}</a></h3>
              <div class="pi-price">{{ products.price }} บาท</div>
              <ngcart-addtocart id="{{ products.id }}" name="{{ products.name }}" price="{{ products.price }}" quantity="1" quantity-max="5" data="item"></ngcart-addtocart>
              <div class="sticker"></div>
            </div>
        </div>
      
      </div><!-- /.container -->

  </div><!-- /.container -->

</div><!-- /.row -->
<?php $this->load->view('footer'); ?>