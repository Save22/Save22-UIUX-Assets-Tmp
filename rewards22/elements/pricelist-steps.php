
<div class="content-box">
  <div class="group">
    <div id="pricelist-info" class="group sub-box">
      <h2>Retailer Name</h2>
      <h3>Branch Address/Name</h3>
    </div>
    <div id="completed-tasks" class="group">
      <?php require_once('pricelist-table-tasks.php'); ?>
    </div>
  </div>


  <div id="pricesheet-processing-steps" class="content-group group">

  <form class="custom">

   <div class="step search active">
      <h3>1. Find existing SKU</h3>
      <p>Search by brand and/or model number ex., iPhone 4S, IXUS II5 HS. <strong>Do not create a new product unless you are sure that it does not exist in the database.</p>

      <div class="group find-existing">
          <input type="text" class="search" placeholder="Search Product">
      </div>

  <div id="preview" class="content-group group">
    <?php require_once('loader.php'); ?>
    <?php require_once('pricelist-processing-preview.php'); ?>
  </div>


   </div>
   <div class="step">
    <h3>SKU Search Result</h3>
    <p>select an existing SKU below if you can find an exact match for the product you're looking at. If not, create a new SKU.</p>

      <div class="group search-results">

        <label for="radio4"><input name="radio2" type="radio" id="radio4"> Product Title 1<br>
          <span class="scraped-url">http://scrapedurl.com</span>
        </label>
        <label for="radio5"><input name="radio2" CHECKED type="radio" id="radio5"> Product Title 2<br>
          <span class="scraped-url">http://scrapedurl.com</span>
        </label>
        <label for="radio6"><input name="radio2" type="radio" id="radio6"> Product Title 3<br>
          <span class="scraped-url">http://scrapedurl.com</span>
        </label>

      </div>

      <div class="group buttons">
        <a class="button radius left">Select SKU<br>&nbsp;</a>
        <span class="left choice-or">or</span>
        <a class="button radius left">Create New SKU <br>
          (if you can't find an exact match)</a>
      </div>

   </div>

  <div class="step">
    <!-- if SKU not found -->
    <div class="alert-box">
      Your SKU is new.
      <a href="" class="close">&times;</a>
    </div>

    <h3>2. You found a new SKU. Add it: </h3>

    <div class="row">
      <div class="six columns">

        <div class="row">
          <div class="three mobile-one columns">
            <label class="left inline">Brand</label>
          </div>
          <div class="nine mobile-three columns">
            <input type="text" name="sku_brand" placeholder="Brand" />
          </div>
        </div>

        <div class="row">
          <div class="three mobile-one columns">
            <label class="left inline">Model #</label>
          </div>
          <div class="nine mobile-three columns">
            <input type="text" name="sku_model" placeholder="Model Number" />
          </div>
        </div>

        <div class="row">
          <div class="three mobile-one columns">
            <label class="left inline">Product Type</label>
          </div>
          <div class="nine mobile-three columns">
            <input type="text" name="sku_prodtype" placeholder="Product Type" />
          </div>
        </div>

        <div class="row">
          <div class="three mobile-one columns">
            <label class="left inline">Size</label>
          </div>
          <div class="nine mobile-three columns">
            <input type="text" name="sku_size" placeholder="Size" />
          </div>
        </div>

        <div class="row">
          <div class="three mobile-one columns">
            <label class="left inline">Quantity</label>
          </div>
          <div class="nine mobile-three columns">
            <input type="text" name="sku_quantity" placeholder="Quantity" />
          </div>
        </div>

        <div class="row">
          <div class="three mobile-one columns">
            <label class="left inline">Unit</label>
          </div>
          <div class="nine mobile-three columns">
            <input type="text" name="sku_unit" placeholder="Unit" />
          </div>
        </div>

        <div class="row">
          <div class="three mobile-one columns">
            <label class="left inline">Color</label>
          </div>
          <div class="nine mobile-three columns">
            <input type="text" name="sku_color" placeholder="Color" />
          </div>
        </div>
        
        <hr>

        <div class="row">
          <div class="three mobile-one columns">
            <label class="left inline">Title</label>
          </div>
          <div class="nine mobile-three columns">
            <input type="text" name="sku_title" placeholder="Brand + Model Number + Type/size/color" />
          </div>
        </div>

        <hr>

      </div>
      <div class="six columns">

        <div class="row">
          <div class="twelve mobile-four columns">

            <label>Description</label>
            <!-- TINYMCE FOR WIYIWYG EDITOR -->
            <script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
            <script type="text/javascript">
               tinyMCE.init({
                  mode : "textareas",
                  theme : "simple",
                  height : "300",
                  keep_styles : false,
                  editor_selector : "mceEditor",
                  plugins: 'paste',
                  paste_auto_cleanup_on_paste : true,
                  paste_remove_styles: true,
                  paste_remove_styles_if_webkit: true,
                  paste_strip_class_attributes: true
               });
            </script>

            <textarea name="sku_desc" class="mceEditor"></textarea>
          </div>
        </div>

        <div class="row category">
          <div class="three mobile-one columns">
            <label class="left inline">Category</label>
          </div>
          <div class="nine mobile-three columns">
            <input type="text" name="sku_category" placeholder="Category" />
            <br><br>
          </div>
        </div>

        <div class="row">
          <div class="three mobile-one columns">
            <label class="left inline">Image Link</label>
          </div>
          <div class="nine mobile-three columns">
            <input type="text" name="sku_image" placeholder="http://" />
          </div>
        </div>

        <div class="row">
          <div class="three mobile-one columns">
            <label class="left inline">URL</label>
          </div>
          <div class="nine mobile-three columns">
            <input type="text" name="sku_url" placeholder="Manufacturer Website" />
          </div>
        </div>

      </div>
    </div>

      <div class="group buttons">
        <a class="button radius left">Add </a>
        <span class="left choice-or">or</span>
        <a class="button radius left">Cancel</a>
      </div>

  </div>

  <div class="step">
    <div class="alert-box success">
    <!-- if SKU found -->
      <h3>Model: A1428</h3>
      <a href="" class="close">&times;</a>
    </div>
    
    <h3>2/3. Add Buying Option</h3>
    <!-- Right aligned and inline labels -->
      <div class="row">
        <div class="three mobile-one columns">
          <label class="left inline">Price</label>
        </div>
        <div class="nine mobile-three columns">
          <input type="text" placeholder="Price" class="eight" />
        </div>
      </div>
      <div class="row">
        <div class="three mobile-one columns">
          <label class="left inline">Price List Name</label>
        </div>
        <div class="nine mobile-three columns">
          <select id="priceListName">
              <option SELECTED>Choose price list name</option>
              <option>a price list</option>
              <option>b price list</option>
              <option>c price list</option>
              <option>d price list</option>
              <option>e price list</option>
              <option>f price list</option>
              <option>g price list</option>
              <option>h price list</option>
              <option>i price list</option>
          </select>

        </div>
      </div>
      <div class="row">
        <div class="three mobile-one columns">
          <label class="left inline">Store</label>
        </div>
        <div class="nine mobile-three columns">
          <select id="priceListName">
              <option SELECTED>Choose a store</option>
              <option>a store </option>
              <option>b store </option>
              <option>c store </option>
              <option>d store </option>
              <option>e store </option>
          </select>
        </div>
      </div>

    <h3>3/4. Need help here?</h3>

      <div class="row">
        <div class="three mobile-one columns">
          <label class="left inline">Should this entry be rechecked?</label>
        </div>
        <div class="nine mobile-three columns checklist-radio">
          <label for="recheck"><input name="recheck" type="radio" id="recheck"> 
            <strong>Yes</strong>, please recheck this</label>
          <label for="norecheck"><input name="recheck" CHECKED type="radio" id="norecheck"> 
            <strong>No need</strong> to recheck this</label>
        </div>
      </div>

      <div class="group buttons">
        <a class="button radius left">Add </a>
        <span class="left choice-or">or</span>
        <a class="button radius left">Cancel</a>
      </div>

   </div>
  </div><!-- pricesheet-processing-steps -->

  </form>
</div><!-- content box -->