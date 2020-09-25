<!-- Josh Channin -->
<html>
<head>
<link href="<?php echo base_url(); ?>Client_Assets/css/wallet.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    <div class="wallet">
      <aside class="left-wallet">
        <div class="wallet-head">
          <h1> My Wallets </h1>
          <div class="modal-open">+
          </div>
        </div>
        <div class="cc-select">          
        </div>
      </aside>
      <content class="right-trans">
        <h1> Current Balance </h1>
        <h4 id="balance"></h4>
        <div class="trans-list">          
        </div>
      </content>
    </div>
  </div>

  <div class="modal">
    <div class="modal-body">
      <h3>Add a New Card</h3>
      <h5>Select a card on the left and enter the information</h5>
      <div class="modal-close">x</div>      
      <div class="modal-cards">
        <div class="md-cc visa">
          <div class="cc-img visa"></div>
        </div>      
       <div class="md-cc amex">
          <div class="cc-img amex"></div>
        </div>      
       <div class="md-cc mc">
          <div class="cc-img mc"></div>
        </div>    
      </div>      
        <form>
          <input type="text" id="ccnum" disabled> 
          <select name="month" id="month" required disabled>
             <option value="">Month</option>
              <option value="01">Janaury</option>
              <option value="02">February</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
          </select>
          <select name="year" id="year" required disabled>
            <option value="">Year</option>
            <option value="16">2016</option>
            <option value="17">2017</option>
            <option value="18">2018</option>
            <option value="19">2019</option>
            <option value="20">2020</option>
            <option value="21">2021</option>
            <option value="22">2022</option>
            <option value="23">2023</option>
            <option value="24">2024</option>
          </select>
        </form>      
      <button class="modal-add-cc"> Add </button>      
  </div>
  <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/wallet.js"></script>
</body>
</html>